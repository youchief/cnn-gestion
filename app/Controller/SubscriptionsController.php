<?php

App::uses('AppController', 'Controller');
CakePlugin::load('Recaptcha');

/**
 * Subscriptions Controller
 *
 * @property Subscription $Subscription
 */
class SubscriptionsController extends AppController {

        var $components = array('Email', 'Recaptcha.Recaptcha');
        var $helpers = array('Recaptcha.Recaptcha');

        public function admin_export($form_id) {


                $this->layout = false;
                $this->autoRender = false;
                ini_set('max_execution_time', 1600);
                ini_set("memory_limit", "100M"); //increase max_execution_time to 10 min if data set is very large
                $results = $this->Subscription->find('all', array('conditions' => array('Subscription.form_id' => $form_id)));


                App::import('Vendor', 'PhpExcel', array('file' => 'PhpExcel.php'));
                $workbook = new PHPExcel;
                $sheet = $workbook->getActiveSheet();

                for ($row = 0; $row <= count($results); $row++) {
                        for ($col = 0; $col <= count($results[$row]['Entry']); $col++) {
                                //debug($results[$row]['Entry']);
                                //debug($result['Entry'][$i]);
                                //$sheet->setCellValueByColumnAndRow($row, $col, $result['Entry'][$i]['key']);
                                $sheet->setCellValueByColumnAndRow(0, 0, 'NOM');
                                $sheet->setCellValue('A1', $results[0]['Entry'][0]['key']);
                                $sheet->setCellValueByColumnAndRow($col, 1, $results[$row]['Entry'][$col]['key']);
                                $sheet->setCellValueByColumnAndRow($col, $row + 2, $results[$row]['Entry'][$col]['value']);
                                /*
                                  $sheet->setCellValue('A' . $i, $result['Entry'][$i]['key']);
                                  $sheet->setCellValue('B' . $i, $result['Entry'][$i]['value']);
                                  debug($results[$row]['Entry'][$col]['key']);
                                  debug($results[$row]['Entry'][$col]['value']);
                                 * 
                                 */
                        };
                }

                $writer = new PHPExcel_Writer_Excel2007($workbook);
                header('Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
                header('Content-Disposition:inline;filename=export_membres.xlsx ');
                if ($writer->save('php://output')) {
                        $this->Session->setFlash(__('Export télécharger sur votre ordinateur'), 'default', array('class' => 'alert alert-success'));
                }
                $workbook->disconnectWorksheets();
                unset($workbook);
        }

        public function admin_index_by_form($form_id) {
                $subscriptions = $this->paginate(array('Subscription.form_id' => $form_id));
                if (empty($subscriptions)) {
                        $this->Session->setFlash(__('No subscription for the moment'), 'default', array('class' => 'alert alert-error'));
                        $this->redirect($this->referer());
                }
                $this->set('subscriptions', $this->paginate(array('Subscription.form_id' => $form_id)));
        }

        public function select() {
                if ($this->request->is('post')) {
                        $this->redirect(array('action' => 'subscription', $this->request->data['Subscription']['form_id']));
                }
                $forms = $this->Subscription->Form->find('list');
                $this->set(compact('forms'));
        }

        public function subscription($form_id) {
                Configure::load('Recaptcha.key');
                if ($this->request->is('post')) {
                        //debug($this->request->data);		
                        $this->Subscription->create();
                        $this->request->data['Subscription']['form_id'] = $form_id;
                        if ($this->Subscription->save($this->request->data)) {
                                $sub_id = $this->Subscription->getLastInsertId();
                                unset($this->request->data['Subscription']['form_id']);
                                unset($this->request->data['Subscription']['recaptcha_challenge_field']);
                                unset($this->request->data['Subscription']['recaptcha_response_field']);
                                $string = array();
                                foreach ($this->request->data['Subscription'] as $key => $val) {
                                        if (is_array($val))
                                                $val = implode('-', $val);
                                        $string[] = array($key, $val);
                                }
                                $entry = array();
                                foreach ($string as $value) {
                                        $entry['key'] = $value[0];
                                        if (empty($value[1])) {
                                                $value[1] = "-";
                                        }
                                        $entry['value'] = $value[1];
                                        $entry['subscription_id'] = $sub_id;
                                        $this->Subscription->Entry->create();
                                        $this->Subscription->Entry->save($entry);
                                }
                                $form = $this->Subscription->Form->findById($form_id);
                                if ($form['Form']['notify']) {
                                        $this->_notify($sub_id);
                                }

                                $this->Session->setFlash(__('The form subscription has been saved'));
                                $this->redirect(array('action' => 'thanks'));
                        } else {
                                $this->Session->setFlash(__('The form subscription could not be saved. Please, try again.'));
                        }
                }
                $fields = $this->Subscription->Form->Field->find('all', array('conditions' => array('Field.form_id' => $form_id)));
                $form = $this->Subscription->Form->findById($form_id);
                $this->set('form', $form);
                $this->set('fields', $fields);
        }

        public function thanks() {
                
        }

        public function _notify($sub_id) {
                $this->Subscription->recursive = 2;
                $sub = $this->Subscription->find('first', array('conditions' => array('Subscription.id' => $sub_id)));
                $email = new CakeEmail();
                $email->from(array('admin@cnn-nyon.ch' => 'CNN - Inscription'));
                $email->to($sub['Form']['contact_email']);
                $email->subject('Nouvelle inscription');
                $email->viewVars(array('entries' => $sub['Entry'], 'form' => $sub['Form']['name']));
                $email->emailFormat('html');
                $email->template('notify');
                $email->send();
        }

        /**
         * admin_index method
         *
         * @return void
         */
        public function admin_index() {
                $this->Subscription->recursive = 0;
                $this->set('subscriptions', $this->paginate());
        }

        /**
         * admin_view method
         *
         * @param string $id
         * @return void
         */
        public function admin_view($id = null) {
                $this->Subscription->id = $id;
                if (!$this->Subscription->exists()) {
                        throw new NotFoundException(__('Invalid subscription'));
                }
                $this->set('subscription', $this->Subscription->read(null, $id));
        }

        /**
         * admin_add method
         *
         * @return void
         */
        public function admin_add() {
                if ($this->request->is('post')) {
                        $this->Subscription->create();
                        if ($this->Subscription->save($this->request->data)) {
                                $this->Session->setFlash(__('The subscription has been saved'));
                                $this->redirect(array('action' => 'index'));
                        } else {
                                $this->Session->setFlash(__('The subscription could not be saved. Please, try again.'));
                        }
                }
                $forms = $this->Subscription->Form->find('list');
                $this->set(compact('forms'));
        }

        /**
         * admin_edit method
         *
         * @param string $id
         * @return void
         */
        public function admin_edit($id = null) {
                $this->Subscription->id = $id;
                if (!$this->Subscription->exists()) {
                        throw new NotFoundException(__('Invalid subscription'));
                }
                if ($this->request->is('post') || $this->request->is('put')) {
                        if ($this->Subscription->save($this->request->data)) {
                                $this->Session->setFlash(__('The subscription has been saved'));
                                $this->redirect(array('action' => 'index'));
                        } else {
                                $this->Session->setFlash(__('The subscription could not be saved. Please, try again.'));
                        }
                } else {
                        $this->request->data = $this->Subscription->read(null, $id);
                }
                $forms = $this->Subscription->Form->find('list');
                $this->set(compact('forms'));
        }

        /**
         * admin_delete method
         *
         * @param string $id
         * @return void
         */
        public function admin_delete($id = null) {
                if (!$this->request->is('post')) {
                        throw new MethodNotAllowedException();
                }
                $this->Subscription->id = $id;
                if (!$this->Subscription->exists()) {
                        throw new NotFoundException(__('Invalid subscription'));
                }
                if ($this->Subscription->delete()) {
                        $this->Session->setFlash(__('Subscription deleted'));
                        $this->redirect($this->referer());
                }
                $this->Session->setFlash(__('Subscription was not deleted'));
                $this->redirect(array('action' => 'index_by_form', $form_id));
        }

        /**
         * admin_delete method
         *
         * @param string $id
         * @return void
         */
        public function admin_delete_all($form_id) {

                if ($this->Subscription->deleteAll(array('Subscription.form_id' => $form_id), true)) {
                        $this->Session->setFlash('Toutes les inscriptions de ce formulaire ont été effacé', 'default', array('class' => 'alert alert-success'));
                        $this->redirect(array('controller' => 'forms', 'action' => 'view', $form_id));
                }
                $this->Session->setFlash('Les inscriptions ne sont pas effacer', 'default', array('class' => 'alert alert-error'));
                $this->redirect(array('action' => 'index_by_form', $form_id));
        }

}
