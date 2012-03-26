<?php
App::uses('AppController', 'Controller');
/**
 * Characters Controller
 *
 * @property Character $Character
 */
class CharactersController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Character->recursive = 0;
		$this->set('characters', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Character->id = $id;
		if (!$this->Character->exists()) {
			throw new NotFoundException(__('Invalid character'));
		}
		$this->set('character', $this->Character->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Character->create();
			if ($this->Character->save($this->request->data)) {
				$this->Session->setFlash(__('The character has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The character could not be saved. Please, try again.'));
			}
		}
		$users = $this->Character->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Character->id = $id;
		if (!$this->Character->exists()) {
			throw new NotFoundException(__('Invalid character'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Character->save($this->request->data)) {
				$this->Session->setFlash(__('The character has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The character could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Character->read(null, $id);
		}
		$users = $this->Character->User->find('list');
		$this->set(compact('users'));
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
		$this->Character->id = $id;
		if (!$this->Character->exists()) {
			throw new NotFoundException(__('Invalid character'));
		}
		if ($this->Character->delete()) {
			$this->Session->setFlash(__('Character deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Character was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
