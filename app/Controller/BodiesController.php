<?php
App::uses('AppController', 'Controller');
/**
 * Bodies Controller
 *
 * @property Body $Body
 */
class BodiesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Body->recursive = 0;
		$this->set('bodies', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Body->id = $id;
		if (!$this->Body->exists()) {
			throw new NotFoundException(__('Invalid body'));
		}
		$this->set('body', $this->Body->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Body->create();
			if ($this->Body->save($this->request->data)) {
				$this->Session->setFlash(__('The body has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The body could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Body->id = $id;
		if (!$this->Body->exists()) {
			throw new NotFoundException(__('Invalid body'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Body->save($this->request->data)) {
				$this->Session->setFlash(__('The body has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The body could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Body->read(null, $id);
		}
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Body->id = $id;
		if (!$this->Body->exists()) {
			throw new NotFoundException(__('Invalid body'));
		}
		if ($this->Body->delete()) {
			$this->Session->setFlash(__('Body deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Body was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
