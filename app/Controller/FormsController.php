<?php
App::uses('AppController', 'Controller');

/**
 * Forms Controller
 *
 * @property Form $Form
 */
class FormsController extends AppController {


/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Form->recursive = 0;
		$this->set('forms', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Form->id = $id;
		if (!$this->Form->exists()) {
			throw new NotFoundException(__('Invalid form'));
		}
		$this->set('form', $this->Form->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Form->create();
			if ($this->Form->save($this->request->data)) {
				$this->Session->setFlash(__('The form has been saved'));
				$this->redirect(array('controller'=>'fields', 'action' => 'admin_add_form_field', $this->Form->getLastinsertId()));
			} else {
				$this->Session->setFlash(__('The form could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_finish($form_id) {
		$this->set('form_id', $form_id);
	}
	
/**
 * admin_add method
 *
 * @return void
 */
	public function admin_get_public_link($form_id) {
		$this->set('form', $this->Form->read(null, $form_id));
	}



	
/**
 * admin_edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Form->id = $id;
		if (!$this->Form->exists()) {
			throw new NotFoundException(__('Invalid form'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Form->save($this->request->data)) {
				$this->Session->setFlash(__('The form has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The form could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Form->read(null, $id);
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
		$this->Form->id = $id;
		if (!$this->Form->exists()) {
			throw new NotFoundException(__('Invalid form'));
		}
		if ($this->Form->delete()) {
			$this->Session->setFlash(__('Form deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Form was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
