<?php
App::uses('AppController', 'Controller');
/**
 * Weapons Controller
 *
 * @property Weapon $Weapon
 */
class WeaponsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Weapon->recursive = 0;
		$this->set('weapons', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Weapon->id = $id;
		if (!$this->Weapon->exists()) {
			throw new NotFoundException(__('Invalid weapon'));
		}
		$this->set('weapon', $this->Weapon->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Weapon->create();
			if ($this->Weapon->save($this->request->data)) {
				$this->Session->setFlash(__('The weapon has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The weapon could not be saved. Please, try again.'));
			}
		}
		$vehicles = $this->Weapon->Vehicle->find('list');
		$this->set(compact('vehicles'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Weapon->id = $id;
		if (!$this->Weapon->exists()) {
			throw new NotFoundException(__('Invalid weapon'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Weapon->save($this->request->data)) {
				$this->Session->setFlash(__('The weapon has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The weapon could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Weapon->read(null, $id);
		}
		$vehicles = $this->Weapon->Vehicle->find('list');
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
		$this->Weapon->id = $id;
		if (!$this->Weapon->exists()) {
			throw new NotFoundException(__('Invalid weapon'));
		}
		if ($this->Weapon->delete()) {
			$this->Session->setFlash(__('Weapon deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Weapon was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
