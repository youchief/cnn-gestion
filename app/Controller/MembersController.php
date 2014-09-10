<?php

App::uses('AppController', 'Controller');

/**
 * Members Controller
 *
 * @property Member $Member
 */
class MembersController extends AppController {

        var $components = array('Email');
        var $uses = array('Member', 'User');
        var $helpers = array('Time');

        public function admin_export() {
                $this->layout = false;
                $this->autoRender = false;
                ini_set('max_execution_time', 1600); //increase max_execution_time to 10 min if data set is very large
                $results = $this->Member->find('all', array()); // set the query function
                //debug($results);
                App::import('Vendor', 'PhpExcel', array('file' => 'PhpExcel.php'));
                $workbook = new PHPExcel;
                $sheet = $workbook->getActiveSheet();
                $styleArray = array(
                    'font' => array(
                        'bold' => true,
                    )
                );
                $workbook->getActiveSheet()->getStyle('A1:AN1')->applyFromArray($styleArray);

                $sheet->setCellValue('A1', 'TITRE');
                $sheet->setCellValue('B1', 'NOM');
                $sheet->setCellValue('C1', 'PRENOM');
                $sheet->setCellValue('D1', 'ADRESSE');
                $sheet->setCellValue('E1', 'NPA');
                $sheet->setCellValue('F1', 'VILLE');
                $sheet->setCellValue('G1', 'DATE DE NAISSANCE');
                $sheet->setCellValue('H1', 'TELEPHONE');
                $sheet->setCellValue('I1', 'TEL. PRO');
                $sheet->setCellValue('J1', 'NATEL');
                $sheet->setCellValue('K1', 'EMAIL');
                $sheet->setCellValue('L1', 'EMAIL 2');
                $sheet->setCellValue('M1', 'EMAIL 3');
                $sheet->setCellValue('N1', 'SEXE');
                $sheet->setCellValue('O1', 'ENTRE AU CLUB');
                $sheet->setCellValue('P1', 'SECTION');
                $sheet->setCellValue('Q1', 'Groupe');
                $sheet->setCellValue('R1', 'Niveau natation');
                $sheet->setCellValue('S1', 'CT');
                $sheet->setCellValue('T1', 'Adm/Demission');
                $sheet->setCellValue('U1', 'ARBITRE');
                $sheet->setCellValue('V1', 'LICENCE');
                $sheet->setCellValue('W1', 'STATUS');
                $sheet->setCellValue('X1', 'COMITE');
                $sheet->setCellValue('Y1', 'ANCIEN DU COMITE');
                $sheet->setCellValue('Z1', 'EN CONGE');
                $sheet->setCellValue('AA1', 'MONITEUR');
                $sheet->setCellValue('AB1', 'ENTRAINEUR');
                $sheet->setCellValue('AC1', 'EN TEST');
                $sheet->setCellValue('AD1', 'SANS COTISATION');
                $sheet->setCellValue('AE1', 'DELAI');
                $sheet->setCellValue('AF1', 'AVS');
                $sheet->setCellValue('AG1', 'SSS');
                $sheet->setCellValue('AH1', 'VALIDITE SSS');
                $sheet->setCellValue('AI1', 'JS');
                $sheet->setCellValue('AJ1', 'VALIDITE JS');
                $sheet->setCellValue('AK1', 'PROFESSION');
                $sheet->setCellValue('AL1', 'CREE');
                $sheet->setCellValue('AM1', 'MODIFIE');
                $sheet->setCellValue('AN1', 'REMARQUE');
                //debug(count($results));
                $y = 1;
                for ($i = 0; $i < count($results); $i++) {
                        $y++;
                        $sheet->setCellValue('A' . $y, $results[$i]['Member']['titre']);
                        $sheet->setCellValue('B' . $y, $results[$i]['Member']['nom']);
                        $sheet->setCellValue('C' . $y, $results[$i]['Member']['prenom']);
                        $sheet->setCellValue('D' . $y, $results[$i]['Member']['adresse']);
                        $sheet->setCellValue('E' . $y, $results[$i]['Member']['npa']);
                        $sheet->setCellValue('F' . $y, $results[$i]['Member']['ville']);
                        $sheet->setCellValue('G' . $y, date('d-m-Y', strtotime($results[$i]['Member']['date_de_naissance'])));
                        $sheet->setCellValue('H' . $y, $results[$i]['Member']['private_phone']);
                        $sheet->setCellValue('I' . $y, $results[$i]['Member']['pro_phone']);
                        $sheet->setCellValue('J' . $y, $results[$i]['Member']['mobile_phone']);
                        $sheet->setCellValue('K' . $y, $results[$i]['Member']['email']);
                        $sheet->setCellValue('L' . $y, $results[$i]['Member']['email_2']);
                        $sheet->setCellValue('M' . $y, $results[$i]['Member']['email_3']);
                        $sheet->setCellValue('N' . $y, $results[$i]['Member']['sexe']);
                        $sheet->setCellValue('O' . $y, date('d-m-Y', strtotime($results[$i]['Member']['entree_club'])));
                        $sheet->setCellValue('P' . $y, $results[$i]['Section']['nom']);
                        $sheet->setCellValue('Q' . $y, $results[$i]['Member']['groupe']);
                        $sheet->setCellValue('R' . $y, $results[$i]['Member']['niveau_natation']);
                        $sheet->setCellValue('S' . $y, $results[$i]['Member']['ct']);
                        $sheet->setCellValue('T' . $y, $results[$i]['Member']['adm_demission']);
                        $sheet->setCellValue('U' . $y, $results[$i]['Member']['arbitre']);
                        $sheet->setCellValue('V' . $y, $results[$i]['Member']['licence']);
                        $sheet->setCellValue('W' . $y, $results[$i]['Member']['status']);
                        $sheet->setCellValue('X' . $y, $results[$i]['Member']['comite']);
                        $sheet->setCellValue('Y' . $y, $results[$i]['Member']['ancien_comite']);
                        $sheet->setCellValue('Z' . $y, $results[$i]['Member']['en_conge']);
                        $sheet->setCellValue('AA' . $y, $results[$i]['Member']['moniteur']);
                        $sheet->setCellValue('AB' . $y, $results[$i]['Member']['entraineur']);
                        $sheet->setCellValue('AC' . $y, $results[$i]['Member']['en_test']);
                        $sheet->setCellValue('AD' . $y, $results[$i]['Member']['sans_cotisation']);
                        $sheet->setCellValue('AE' . $y, date('d-m-Y', strtotime($results[$i]['Member']['delai'])));
                        $sheet->setCellValue('AF' . $y, $results[$i]['Member']['avs']);
                        $sheet->setCellValue('AG' . $y, $results[$i]['Member']['sss']);
                        $sheet->setCellValue('AH' . $y, $results[$i]['Member']['validite_sss']);
                        $sheet->setCellValue('AI' . $y, $results[$i]['Member']['js']);
                        $sheet->setCellValue('AJ' . $y, $results[$i]['Member']['validite_js']);
                        $sheet->setCellValue('AK' . $y, $results[$i]['Member']['profession']);
                        $sheet->setCellValue('AL' . $y, date('d-m-y h:i', strtotime($results[$i]['Member']['created'])));
                        $sheet->setCellValue('AM' . $y, date('d-m-y h:i', strtotime($results[$i]['Member']['modified'])));
                        $sheet->setCellValue('AN' . $y, $results[$i]['Member']['comment']);
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

        public function admin_admission() {
                $this->Member->recursive = 0;
                $this->set('members', $this->paginate(array('Member.adm_demission' => 'Y')));
        }

        public function admin_jtoa() {
                $this->Member->recursive = 0;
                $members = $this->Member->find('all', array('conditions' => array('Member.status' => 'J', 'Member.date_de_naissance  <= ' => date('Y-m-d', strtotime('-16 years')))));
                $new_adult = array();
                foreach ($members as $member) {
                        if ($this->_birthday($member['Member']['date_de_naissance']) >= 16) {
                                $new_adult[] = $member;
                        }
                }
                $this->set('members', $members);
        }

        public function admin_validateJtoA() {
                $this->Member->recursive = 0;
                $members = $this->Member->find('all', array('conditions' => array('Member.status' => 'J', 'Member.date_de_naissance  <= ' => date('Y-m-d', strtotime('-16 years')))));
                foreach ($members as $member) {

                        $this->Member->read(null, $member['Member']['id']);
                        $this->Member->saveField('status', 'A');
                }
                $this->_notify_group_action($members, 'Junior vers Adulte');
                $this->Session->setFlash(__('Vous avez passer les juniors en adulte'), 'default', array('class' => 'alert alert-success'));
                $this->redirect(array('action' => 'index'));
        }

        public function _birthday($birthday) {
                list($year, $month, $day) = explode("-", $birthday);
                $year_diff = date("Y") - $year;
                $month_diff = date("m") - $month;
                $day_diff = date("d") - $day;
                if ($month_diff < 0)
                        $year_diff--;
                elseif (($month_diff == 0) && ($day_diff < 0))
                        $year_diff--;
                return $year_diff;
        }

        public function admin_validateAdmission() {
                $members = $this->Member->find('all', array('conditions' => array('Member.adm_demission' => 'Y')));

                foreach ($members as $member) {
                        $this->Member->read(null, $member['Member']['id']);
                        $this->Member->saveField('adm_demission', '');
                }
                $this->_notify_group_action($members, 'Admissions validées');
                $this->Session->setFlash(__('Vous avez validé les admissions'), 'default', array('class' => 'alert alert-success'));
                $this->redirect(array('action' => 'index'));
        }

        public function admin_validateDemission() {
                $members = $this->Member->find('all', array('conditions' => array('Member.adm_demission' => 'Z')));
                foreach ($members as $member) {
                        $this->Member->read(null, $member['Member']['id']);
                        $this->Member->delete();
                }
                $this->_notify_group_action($members, 'Membres supprimés');
                $this->Session->setFlash(__('Vous avez effacer les démissions'), 'default', array('class' => 'alert alert-success'));
                $this->redirect(array('action' => 'index'));
        }

        public function admin_demission() {
                $this->Member->recursive = 0;
                $this->set('members', $this->paginate(array('Member.adm_demission' => 'Z')));
        }

        public function admin_search() {
                if ($this->request->is('post')) {
                        //$members = $this->Member->find('all', array('conditions'=> array('Member.nom LIKE '=> "%".$this->request->data['Member']['nom']."%")));
                        if (empty($this->request->data['Member']['nom']) && empty($this->request->data['Member']['prenom'])) {
                                $this->Session->setFlash(__('Vous devez séléctionner au moins un critère'), 'default', array('class' => 'alert alert-error'));
                                $this->redirect($this->referer());
                        }
                        if (!empty($this->request->data['Member']['nom'])) {
                                $members = $this->paginate(array('Member.nom LIKE ' => "%" . $this->request->data['Member']['nom'] . "%"));
                        } else if (!empty($this->request->data['Member']['prenom'])) {
                                $members = $this->paginate(array('Member.prenom LIKE ' => "%" . $this->request->data['Member']['prenom'] . "%"));
                        }

                        if (empty($members)) {
                                $this->Session->setFlash(__('Pas de résultat'), 'default', array('class' => 'alert alert-info'));
                                $this->redirect($this->referer());
                        }

                        $this->set('members', $members);
                        $this->render('admin_index');
                }
        }

        /**
         * admin_index method
         *
         * @return void
         */
        public function admin_index() {
                $this->Member->recursive = 0;
                $this->set('members', $this->paginate());
        }

        /**
         * admin_view method
         *
         * @param string $id
         * @return void
         */
        public function admin_view($id = null) {
                $this->Member->id = $id;
                if (!$this->Member->exists()) {
                        throw new NotFoundException(__('Invalid member'));
                }
                $this->set('member', $this->Member->read(null, $id));
        }

        /**
         * admin_add method
         *
         * @return void
         */
        public function admin_add() {
                if ($this->request->is('post')) {
                        $this->Member->create();
                        $this->request->data['Member']['adm_demission'] = 'Y';
                        if ($this->Member->save($this->request->data)) {
                                $this->Session->setFlash(__('The member has been saved'), 'default', array('class' => 'alert alert-success'));
                                $this->_notify($this->request->data['Member']['section_id'], $this->Member->getLastInsertId(), $this->Auth->user('id'), 'default', 'Un membre a été ajouté');
                                $this->redirect(array('action' => 'index'));
                        } else {
                                $this->Session->setFlash(__('The member could not be saved. Please, try again.'));
                        }
                }
                $sections = $this->Member->Section->find('list', array('conditions' => array('Section.comprend_des_membres' => 1)));
                $this->set(compact('sections'));
        }

        public function _notify($section_id, $member_id, $user_id, $template, $subject) {
                $this->Member->Section->Notification->recursive = -1;
                $emails = $this->Member->Section->Notification->find('list', array('conditions' => array('Notification.section_id' => $section_id)));
                $membre = $this->Member->findById($member_id);
                $user = $this->User->findById($user_id);
                $email = new CakeEmail();
                $email->from(array('admin@cnn-nyon.ch' => 'Gestion des membres CNN'));
                $email->template($template, 'default');
                $email->emailFormat('html');
                //$email->to('cyril@3xw.ch');
                $email->to($emails);
                $email->subject($subject);
                $email->viewVars(array('member' => $membre,
                    'user' => $user,
                    'subject' => $subject));
                $email->send();
        }

        public function _notify_modif($section_id, $member_id, $old_value, $user_id, $template, $subject) {
                $this->Member->Section->Notification->recursive = -1;
                $emails = $this->Member->Section->Notification->find('list', array('conditions' => array('Notification.section_id' => $section_id)));
                $membre = $this->Member->findById($member_id);

                $diff = array();
                foreach ($membre['Member'] as $key => $value) {
                        if ($old_value['Member'][$key] != $membre['Member'][$key]) {
                                if ($key == 'section_id') {
                                        $diff['section'] = $old_value['Section']['nom'];
                                        $membre['Member']['section'] = $membre['Section']['nom'];
                                } else {
                                        $diff[$key] = $old_value['Member'][$key];
                                }
                        }
                }


                $user = $this->User->findById($user_id);
                $email = new CakeEmail();
                $email->from(array('admin@cnn-nyon.ch' => 'Gestion des membres CNN'));
                $email->template($template, 'default');
                $email->emailFormat('html');
                $email->to($emails);
                //$email->to('cyril@3xw.ch');
                $email->subject($subject); 
                //debug($diff);

                $email->viewVars(array('member' => $diff,
                    'user' => $user,
                    'section' => $membre['Section']['nom'],
                    'old_value' => $membre['Member']));
                // $email->transport();
                $email->send();
        }

        public function _notify_group_action($membres, $action) {
                $email = new CakeEmail();
                $email->from(array('admin@cnn-nyon.ch' => 'Gestion des membres CNN'));
                $email->template('group_action', 'default');
                $email->emailFormat('html');
                $email->to('admin@cnn-nyon.ch');
                $email->subject($action);
                //debug($diff);

                $email->viewVars(array('title' => $action,
                    'membres' => $membres
                ));
                // $email->transport();
                $email->send();
        }

        /**
         * admin_edit method
         *
         * @param string $id
         * @return void
         */
        public function admin_edit($id = null) {
                $this->Member->id = $id;
                if (!$this->Member->exists()) {
                        throw new NotFoundException(__('Invalid member'));
                }
                if ($this->request->is('post') || $this->request->is('put')) {
                        $member = $this->Member->read(null, $id);
                        $this->request->data['Member']['modified'] = date('Y-m-d h:i:s', time());
                        if ($this->Member->save($this->request->data)) {
                                $this->Session->setFlash(__('The member has been saved'), 'default', array('class' => 'alert alert-success'));
                                $this->_notify_modif($this->request->data['Member']['section_id'], $id, $member, $this->Auth->user('id'), 'modification', 'Un membre a été modifié');
                                //$this->redirect(array('action' => 'index'));
                        } else {
                                $this->Session->setFlash(__('The member could not be saved. Please, try again.'));
                        }
                } else {
                        $this->request->data = $this->Member->read(null, $id);
                }
                $sections = $this->Member->Section->find('list', array('conditions' => array('Section.comprend_des_membres' => 1)));
                $this->set(compact('sections'));
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
                $this->Member->id = $id;
                if (!$this->Member->exists()) {
                        throw new NotFoundException(__('Invalid member'));
                }
                $member = $this->Member->findById($id);
                $this->_notify($member['Member']['section_id'], $member['Member']['id'], $this->Auth->user('id'), 'default', 'Un membre a été effacé');


                if ($this->Member->delete()) {
                        $this->Session->setFlash(__('Member deleted'), 'default', array('class' => 'alert alert-success'));
                        $this->redirect(array('action' => 'index'));
                }
                $this->Session->setFlash(__('Member was not deleted'));
                $this->redirect(array('action' => 'index'));
        }

}
