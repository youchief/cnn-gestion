<?php

App::uses('AppController', 'Controller');

/**
 * Sections Controller
 *
 * @property Section $Section
 */
class SectionsController extends AppController {

        /**
         * admin_index method
         *
         * @return void
         */
        public function admin_index() {
                $this->Section->recursive = 0;
                $this->set('sections', $this->paginate());
        }

        public function admin_export($section_id) {
                $this->layout = false;
                $this->autoRender = false;
                ini_set('max_execution_time', 1600); //increase max_execution_time to 10 min if data set is very large
                $results = $this->Section->Member->find('all', array('conditions'=>array('Member.section_id'=>$section_id))); // set the query function


                App::import('Vendor', 'PhpExcel', array('file' => 'PhpExcel.php'));
                $workbook = new PHPExcel;
                $sheet = $workbook->getActiveSheet();
                $styleArray = array(
                    'font' => array(
                        'bold' => true,
                    )
                );
                $workbook->getActiveSheet()->getStyle('A1:AK1')->applyFromArray($styleArray);

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
                $sheet->setCellValue('AH1', 'JS');
                $sheet->setCellValue('AI1', 'PROFESSION');
                $sheet->setCellValue('AJ1', 'CREE');
                $sheet->setCellValue('AK1', 'MODIFIE');
                for ($i = 2; $i < count($results); $i++) {
                        $sheet->setCellValue('A' . $i, $results[$i]['Member']['titre']);
                        $sheet->setCellValue('B' . $i, $results[$i]['Member']['nom']);
                        $sheet->setCellValue('C' . $i, $results[$i]['Member']['prenom']);
                        $sheet->setCellValue('D' . $i, $results[$i]['Member']['adresse']);
                        $sheet->setCellValue('E' . $i, $results[$i]['Member']['npa']);
                        $sheet->setCellValue('F' . $i, $results[$i]['Member']['ville']);
                        $sheet->setCellValue('G' . $i, date('d-m-Y', strtotime($results[$i]['Member']['date_de_naissance'])));
                        $sheet->setCellValue('H' . $i, $results[$i]['Member']['private_phone']);
                        $sheet->setCellValue('I' . $i, $results[$i]['Member']['pro_phone']);
                        $sheet->setCellValue('J' . $i, $results[$i]['Member']['mobile_phone']);
                        $sheet->setCellValue('K' . $i, $results[$i]['Member']['email']);
                        $sheet->setCellValue('L' . $i, $results[$i]['Member']['email_2']);
                        $sheet->setCellValue('M' . $i, $results[$i]['Member']['email_3']);
                        $sheet->setCellValue('N' . $i, $results[$i]['Member']['sexe']);
                        $sheet->setCellValue('O' . $i, date('d-m-Y', strtotime($results[$i]['Member']['entree_club'])));
                        $sheet->setCellValue('P' . $i, $results[$i]['Section']['nom']);
                        $sheet->setCellValue('Q' . $i, $results[$i]['Member']['groupe']);
                        $sheet->setCellValue('R' . $i, $results[$i]['Member']['niveau_natation']);
                        $sheet->setCellValue('S' . $i, $results[$i]['Member']['ct']);
                        $sheet->setCellValue('T' . $i, $results[$i]['Member']['adm_demission']);
                        $sheet->setCellValue('U' . $i, $results[$i]['Member']['arbitre']);
                        $sheet->setCellValue('V' . $i, $results[$i]['Member']['licence']);
                        $sheet->setCellValue('W' . $i, $results[$i]['Member']['status']);
                        $sheet->setCellValue('X' . $i, $results[$i]['Member']['comite']);
                        $sheet->setCellValue('Y' . $i, $results[$i]['Member']['ancien_comite']);
                        $sheet->setCellValue('Z' . $i, $results[$i]['Member']['en_conge']);
                        $sheet->setCellValue('AA' . $i, $results[$i]['Member']['moniteur']);
                        $sheet->setCellValue('AB' . $i, $results[$i]['Member']['entraineur']);
                        $sheet->setCellValue('AC' . $i, $results[$i]['Member']['en_test']);
                        $sheet->setCellValue('AD' . $i, $results[$i]['Member']['sans_cotisation']);
                        $sheet->setCellValue('AE' . $i, date('d-m-Y', strtotime($results[$i]['Member']['delai'])));
                        $sheet->setCellValue('AF' . $i, $results[$i]['Member']['avs']);
                        $sheet->setCellValue('AG' . $i, $results[$i]['Member']['sss']);
                        $sheet->setCellValue('AH' . $i, $results[$i]['Member']['js']);
                        $sheet->setCellValue('AI' . $i, $results[$i]['Member']['profession']);
                        $sheet->setCellValue('AJ' . $i, date('d-m-y h:i', strtotime($results[$i]['Member']['created'])));
                        $sheet->setCellValue('AK' . $i, date('d-m-y h:i', strtotime($results[$i]['Member']['modified'])));
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

        /**
         * admin_view method
         *
         * @param string $id
         * @return void
         */
        public function admin_view($id = null) {
                $this->Section->id = $id;
                if (!$this->Section->exists()) {
                        throw new NotFoundException(__('Invalid section'));
                }
                $this->set('section', $this->Section->read(null, $id));
        }

        /**
         * admin_add method
         *
         * @return void
         */
        public function admin_add() {
                if ($this->request->is('post')) {
                        $this->Section->create();
                        if ($this->Section->save($this->request->data)) {
                                $this->Session->setFlash(__('The section has been saved'));
                                $this->redirect(array('action' => 'index'));
                        } else {
                                $this->Session->setFlash(__('The section could not be saved. Please, try again.'));
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
                $this->Section->id = $id;
                if (!$this->Section->exists()) {
                        throw new NotFoundException(__('Invalid section'));
                }
                if ($this->request->is('post') || $this->request->is('put')) {
                        if ($this->Section->save($this->request->data)) {
                                $this->Session->setFlash(__('The section has been saved'));
                                $this->redirect(array('action' => 'index'));
                        } else {
                                $this->Session->setFlash(__('The section could not be saved. Please, try again.'));
                        }
                } else {
                        $this->request->data = $this->Section->read(null, $id);
                }
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
                $this->Section->id = $id;
                if (!$this->Section->exists()) {
                        throw new NotFoundException(__('Invalid section'));
                }
                if ($this->Section->delete()) {
                        $this->Session->setFlash(__('Section deleted'));
                        $this->redirect(array('action' => 'index'));
                }
                $this->Session->setFlash(__('Section was not deleted'));
                $this->redirect(array('action' => 'index'));
        }

}
