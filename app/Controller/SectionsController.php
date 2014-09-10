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
                                $workbook->getActiveSheet()->getStyle('A1:AM1')->applyFromArray($styleArray);

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
                //debug(count($results));
                $y = 1;
                for ($i = 0; $i <  count($results); $i++) {
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
