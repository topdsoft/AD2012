<?php
App::uses('AppController', 'Controller');
/**
 * Accessories Controller
 *
 * @property Accessory $Accessory
 */
class AccessoriesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Accessory->recursive = 0;
		$this->set('accessories', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Accessory->id = $id;
		if (!$this->Accessory->exists()) {
			throw new NotFoundException(__('Invalid accessory'));
		}
		$this->set('accessory', $this->Accessory->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Accessory->create();
			if ($this->Accessory->save($this->request->data)) {
				$this->Session->setFlash(__('The accessory has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The accessory could not be saved. Please, try again.'));
			}
		}
		$vehicles = $this->Accessory->Vehicle->find('list');
		$this->set(compact('vehicles'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Accessory->id = $id;
		if (!$this->Accessory->exists()) {
			throw new NotFoundException(__('Invalid accessory'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Accessory->save($this->request->data)) {
				$this->Session->setFlash(__('The accessory has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The accessory could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Accessory->read(null, $id);
		}
		$vehicles = $this->Accessory->Vehicle->find('list');
		$this->set(compact('vehicles'));
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
		$this->Accessory->id = $id;
		if (!$this->Accessory->exists()) {
			throw new NotFoundException(__('Invalid accessory'));
		}
		if ($this->Accessory->delete()) {
			$this->Session->setFlash(__('Accessory deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Accessory was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
