<?php
App::uses('AppController', 'Controller');
/**
 * Powerplants Controller
 *
 * @property Powerplant $Powerplant
 */
class PowerplantsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Powerplant->recursive = 0;
		$this->set('powerplants', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Powerplant->id = $id;
		if (!$this->Powerplant->exists()) {
			throw new NotFoundException(__('Invalid powerplant'));
		}
		$this->set('powerplant', $this->Powerplant->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Powerplant->create();
			if ($this->Powerplant->save($this->request->data)) {
				$this->Session->setFlash(__('The powerplant has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The powerplant could not be saved. Please, try again.'));
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
		$this->Powerplant->id = $id;
		if (!$this->Powerplant->exists()) {
			throw new NotFoundException(__('Invalid powerplant'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Powerplant->save($this->request->data)) {
				$this->Session->setFlash(__('The powerplant has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The powerplant could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Powerplant->read(null, $id);
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
		$this->Powerplant->id = $id;
		if (!$this->Powerplant->exists()) {
			throw new NotFoundException(__('Invalid powerplant'));
		}
		if ($this->Powerplant->delete()) {
			$this->Session->setFlash(__('Powerplant deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Powerplant was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
