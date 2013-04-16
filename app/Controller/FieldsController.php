<?php

App::uses('AppController', 'Controller');

/**
 * Fields Controller
 *
 * @property Field $Field
 */
class FieldsController extends AppController {

        /**
         * admin_index method
         *
         * @return void
         */
        public function admin_index() {
                $this->Field->recursive = 0;
                $this->set('fields', $this->paginate());
        }

        /**
         * admin_view method
         *
         * @param string $id
         * @return void
         */
        public function admin_view($id = null) {
                $this->Field->id = $id;
                if (!$this->Field->exists()) {
                        throw new NotFoundException(__('Invalid field'));
                }
                $this->set('field', $this->Field->read(null, $id));
        }

        /**
         * admin_add method
         *
         * @return void
         */
        public function admin_add() {
                if ($this->request->is('post')) {
                        $this->Field->create();

                        if ($this->request->data['Field']['type'] == 'multiple') {
                                $this->request->data['Field']['multiple'] = 'checkbox';
                        }

                        if ($this->request->data['Field']['require'] == 1) {
                                $this->request->data['Field']['class'] = 'required';
                        }


                        if ($this->Field->save($this->request->data)) {
                                $this->Session->setFlash(__('The field has been saved'));
                                $this->redirect(array('action' => 'index'));
                        } else {
                                $this->Session->setFlash(__('The field could not be saved. Please, try again.'));
                        }
                }
                $forms = $this->Field->Form->find('list');
                $this->set(compact('forms'));
        }

        /**
         * admin_add method
         *
         * @return void
         */
        public function admin_add_form_field($form_id) {
                if ($this->request->is('post')) {
                        $this->Field->create();
                        $this->request->data['Field']['form_id'] = $form_id;

                        if ($this->request->data['Field']['type'] == 'multiple') {
                                $this->request->data['Field']['type'] = 'select';
                                $this->request->data['Field']['multiple'] = 'checkbox';
                        }

                        if ($this->request->data['Field']['require'] == 1) {
                                $this->request->data['Field']['class'] = 'required';
                        }

                        $params = array(
                            'conditions' => array('Field.form_id' => $form_id), //tableau de conditions
                            'recursive' => 1, //int
                            'fields' => array('Field.order'), //tableau de champs nommés
                            'order' => array('Field.order DESC'), //chaîne de caractère ou tableau définissant order

                            'limit' => 1, //int
                        );
                        $order = $this->Field->find('first', $params);
                        $this->request->data['Field']['order'] = $order['Field']['order'] + 1;

                        if ($this->Field->save($this->request->data)) {
                                $this->Session->setFlash(__('The field has been saved'));
                                if (!empty($this->request->data['Field']['options'])) {
                                        $options = explode(',', $this->request->data['Field']['options']);
                                        foreach ($options as $option) {
                                                $this->Field->Option->create();
                                                $this->Field->Option->save(array('value' => $option, 'field_id' => $this->Field->getLastInsertId()));
                                        }
                                }
                                $this->redirect(array('controller' => 'forms', 'action' => 'finish', $form_id));
                        } else {
                                $this->Session->setFlash(__('The field could not be saved. Please, try again.'));
                        }
                }
        }

        /**
         * admin_edit method
         *
         * @param string $id
         * @return void
         */
        public function admin_edit($id = null) {
                $this->Field->id = $id;
                if (!$this->Field->exists()) {
                        throw new NotFoundException(__('Invalid field'));
                }


                if ($this->request->is('post') || $this->request->is('put')) {

                        if ($this->request->data['Field']['require'] == 1) {
                                $this->request->data['Field']['class'] = 'required';
                        }

                        if ($this->request->data['Field']['type'] == 'multiple') {
                                $this->request->data['Field']['type'] = 'select';
                                $this->request->data['Field']['multiple'] = 'checkbox';
                        }

                        if ($this->Field->save($this->request->data)) {
                                $this->Session->setFlash(__('The field has been saved'));
                                $this->redirect($this->referer());
                        } else {
                                $this->Session->setFlash(__('The field could not be saved. Please, try again.'));
                        }
                } else {
                        $this->request->data = $this->Field->read(null, $id);
                }
                $forms = $this->Field->Form->find('list');
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
                $this->Field->id = $id;
                if (!$this->Field->exists()) {
                        throw new NotFoundException(__('Invalid field'));
                }
                if ($this->Field->delete()) {
                        $this->Session->setFlash(__('Field deleted'));
                        $this->redirect($this->referer());
                }
                $this->Session->setFlash(__('Field was not deleted'));
                $this->redirect(array('action' => 'index'));
        }

        public function admin_moveUp($id) {
                $field = $this->Field->findById($id);
                $previous = $this->Field->find('first', array('conditions' => array('Field.form_id' => $field['Form']['id'], 'Field.order' => $field['Field']['order'] - 1)));
                if (!empty($previous)) {

                        $previous = $this->Field->read(null, $previous['Field']['id']);
                        $prev_new_order = $previous['Field']['order'] + 1;
                        $this->Field->saveField('order', $prev_new_order);
                        $this->Field->read(null, $id);
                        $this->Field->saveField('order', $prev_new_order - 1);
                }
                $this->redirect($this->referer());
        }

        public function admin_moveDown($id) {
                $field = $this->Field->findById($id);
                $next = $this->Field->find('first', array('conditions' => array('Field.form_id' => $field['Form']['id'], 'Field.order' => $field['Field']['order'] + 1)));

                if (!empty($next)) {
                        $next = $this->Field->read(null, $next['Field']['id']);
                        $next_new_order = $next['Field']['order'] - 1;
                        $this->Field->saveField('order', $next_new_order);
                        $this->Field->read(null, $id);
                        $this->Field->saveField('order', $next_new_order + 1);
                }

                $this->redirect($this->referer());
        }

}
