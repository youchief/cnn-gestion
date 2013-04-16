<?php

App::uses('AppController', 'Controller');

/**
 * Notifications Controller
 *
 * @property Notification $Notification
 */
class NotificationsController extends AppController {

        /**
         * admin_index method
         *
         * @return void
         */
        public function admin_index() {
                $this->Notification->recursive = 0;
                $this->set('notifications', $this->paginate());
        }

        /**
         * admin_view method
         *
         * @param string $id
         * @return void
         */
        public function admin_view($id = null) {
                $this->Notification->id = $id;
                if (!$this->Notification->exists()) {
                        throw new NotFoundException(__('Invalid notification'));
                }
                $this->set('notification', $this->Notification->read(null, $id));
        }

        /**
         * admin_add method
         *
         * @return void
         */
        public function admin_add() {
                if ($this->request->is('post')) {
                        $this->Notification->create();
                        if ($this->Notification->save($this->request->data)) {
                                $this->Session->setFlash(__('The notification has been saved'));
                                $this->redirect(array('action' => 'index'));
                        } else {
                                $this->Session->setFlash(__('The notification could not be saved. Please, try again.'));
                        }
                }
                $sections = $this->Notification->Section->find('list');
                $this->set(compact('sections'));
        }

        /**
         * admin_edit method
         *
         * @param string $id
         * @return void
         */
        public function admin_edit($id = null) {
                $this->Notification->id = $id;
                if (!$this->Notification->exists()) {
                        throw new NotFoundException(__('Invalid notification'));
                }
                if ($this->request->is('post') || $this->request->is('put')) {
                        if ($this->Notification->save($this->request->data)) {
                                $this->Session->setFlash(__('The notification has been saved'));
                                $this->redirect(array('action' => 'index'));
                        } else {
                                $this->Session->setFlash(__('The notification could not be saved. Please, try again.'));
                        }
                } else {
                        $this->request->data = $this->Notification->read(null, $id);
                }
                $sections = $this->Notification->Section->find('list');
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
                $this->Notification->id = $id;
                if (!$this->Notification->exists()) {
                        throw new NotFoundException(__('Invalid notification'));
                }
                if ($this->Notification->delete()) {
                        $this->Session->setFlash(__('Notification deleted'));
                        $this->redirect(array('action' => 'index'));
                }
                $this->Session->setFlash(__('Notification was not deleted'));
                $this->redirect(array('action' => 'index'));
        }

}
