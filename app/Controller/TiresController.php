<?php
App::uses('AppController', 'Controller');
/**
 * Tires Controller
 *
 * @property Tire $Tire
 */
class TiresController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Tire->recursive = 0;
		$this->set('tires', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Tire->id = $id;
		if (!$this->Tire->exists()) {
			throw new NotFoundException(__('Invalid tire'));
		}
		$this->set('tire', $this->Tire->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Tire->create();
			if ($this->Tire->save($this->request->data)) {
				$this->Session->setFlash(__('The tire has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tire could not be saved. Please, try again.'));
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
		$this->Tire->id = $id;
		if (!$this->Tire->exists()) {
			throw new NotFoundException(__('Invalid tire'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Tire->save($this->request->data)) {
				$this->Session->setFlash(__('The tire has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tire could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Tire->read(null, $id);
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
		$this->Tire->id = $id;
		if (!$this->Tire->exists()) {
			throw new NotFoundException(__('Invalid tire'));
		}
		if ($this->Tire->delete()) {
			$this->Session->setFlash(__('Tire deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Tire was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
