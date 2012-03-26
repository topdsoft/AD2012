<?php
App::uses('AppController', 'Controller');
/**
 * Vehicles Controller
 *
 * @property Vehicle $Vehicle
 */
class VehiclesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Vehicle->recursive = 0;
		$this->set('vehicles', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Vehicle->id = $id;
		if (!$this->Vehicle->exists()) {
			throw new NotFoundException(__('Invalid vehicle'));
		}
		$this->set('vehicle', $this->Vehicle->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Vehicle->create();
			if ($this->Vehicle->save($this->request->data)) {
				$this->Session->setFlash(__('The vehicle has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vehicle could not be saved. Please, try again.'));
			}
		}
		$users = $this->Vehicle->User->find('list');
		$bodies = $this->Vehicle->Body->find('list');
		$powerplants = $this->Vehicle->Powerplant->find('list');
		$tires = $this->Vehicle->Tire->find('list');
		$accessories = $this->Vehicle->Accessory->find('list');
		$weapons = $this->Vehicle->Weapon->find('list');
		$this->set(compact('users', 'bodies', 'powerplants', 'tires', 'accessories', 'weapons'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Vehicle->id = $id;
		if (!$this->Vehicle->exists()) {
			throw new NotFoundException(__('Invalid vehicle'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Vehicle->save($this->request->data)) {
				$this->Session->setFlash(__('The vehicle has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vehicle could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Vehicle->read(null, $id);
		}
		$users = $this->Vehicle->User->find('list');
		$bodies = $this->Vehicle->Body->find('list');
		$powerplants = $this->Vehicle->Powerplant->find('list');
		$tires = $this->Vehicle->Tire->find('list');
		$accessories = $this->Vehicle->Accessory->find('list');
		$weapons = $this->Vehicle->Weapon->find('list');
		$this->set(compact('users', 'bodies', 'powerplants', 'tires', 'accessories', 'weapons'));
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
		$this->Vehicle->id = $id;
		if (!$this->Vehicle->exists()) {
			throw new NotFoundException(__('Invalid vehicle'));
		}
		if ($this->Vehicle->delete()) {
			$this->Session->setFlash(__('Vehicle deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Vehicle was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
