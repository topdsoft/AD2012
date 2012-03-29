<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 */
class UsersController extends AppController {

	public function beforeFilter() {
		$this->Auth->allow('register','confirm');
		parent::beforeFilter();
	}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		if($this->Auth->user('id')!=1) $this->redirect(array('controller'=>'pages'));
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		//only root user can view any profile for now
		if(!$id) $id=$this->Auth->user('id');
		if($this->Auth->user('id')!=$id && $this->Auth->user('id')!=1) $this->redirect(array('controller'=>'pages'));
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->set('user', $this->User->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
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
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->User->read(null, $id);
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
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->User->delete()) {
			$this->Session->setFlash(__('User deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('User was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

	public function login() {
		if ($this->request->is('post')) {
			if ($this->Auth->login()) {
				return $this->redirect($this->Auth->redirect());
			} else {
				$this->Session->setFlash(__('Username or password is incorrect'), 'default', array(), 'auth');
			}
		}
	}
	
	public function logout() {
		$this->Cookie->delete('Auth.Username');
		$this->redirect($this->Auth->logout());
	}

	public function register(){
		if ($this->request->is('post')) {
			$this->User->create();
			//set confirmation code
			$this->request->data['User']['hash']=md5(uniqid(rand(),true));
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('An email has been sent with a link to confirm your account.', true));
				//send email
				$this->_sendNewUserMail($this->User->getInsertId());
				$this->redirect(array('controller'=>'pages','action' => 'home'));
			} else {
				$this->Session->setFlash(__('Your registration could not be completed. Please, try again.', true));
				$this->request->data['User']['terms']=false;
			}
		}
	}

	function _sendNewUserMail($id) {
		//sends email for a new user
		App::uses('CakeEmail', 'Network/Email');
		$user=$this->User->read(null,$id);//debug($id);debug($user);
		if ($user) {
			//found ok
			$mail=new CakeEmail('smtp');
			$mail->to($user['User']['email']);
			$mail->subject('Registration for AD2012');
			$mail->replyTo($this->User->supportEmail);
			$mail->from(array($this->User->supportEmail=>'AD2012 Registration'));
//			$mail->from(array('kurtlakin@gmail.com'=>'My Site'));
			$mail->template('confirm_message');
			$mail->emailFormat('both');
			$mail->viewVars(array('user'=>$user));
			//mail options
/*			$mail->smtpOptions(array(
			    'port'=>'25',
			    'timeout'=>'30',
			    'host'=>'smtp.emailsrvr.com'
			));//*/
			$x=$mail->send();
//debug($x);exit;
		}
	}

	function confirm($code=null) {
		//find user id by confirmation code
		if($code) {
			//must have code
			$user=$this->User->find('first',array('conditions'=>array('User.hash'=>$code,'User.password'=>null)));
//debug($user);
			if ($user) {
				//ok for new user
				$this->User->create();
				//clear conf code and set password to changeMe
				$user['User']['hash']=null;
				unset($user['User']['password']);
				if ($this->User->save($user)) {
					//log user in
					$user['User']['password']='';
//debug($user);
					if($this->Auth->login($user['User'])){
//					$this->Cookie->write('Auth.Username',$this->Auth->User('username'),false,'+1 day');
						$this->Session->setFlash(__('Welcome to AD2012', true));
//debug($this->Auth->user('id'));exit;
						$this->redirect(array('action'=>'PWchange'));
					}//endif
//debug($user);exit;
				}
			} //endif code not found
		} //endif no code
		$this->Session->setFlash(__('Invalid activation code.', true));
		$this->redirect(array('controller'=>'pages','action' => 'home'));
	}

	function pwChange() {
		$id=$this->Auth->user('id');
		//check for no existing pw (first time)
//		if(!empty($this->data) && !isset($this->data['User']['password'])) $this->data['User']['password']='02283fc925db0781c4208b3787e1423b1d075ae3';
		if ($this->request->is('post') || $this->request->is('put')) {
//debug($id);debug($this->Auth->user());debug($this->request->data);exit;
			//check existing PW is good
			$oldpw=$this->User->field('password',"id=$id");
			if(!$oldpw) $oldpw=AuthComponent::password('');
			if (AuthComponent::password($this->request->data['User']['password'])==$oldpw) {
				//existing pw is a match.  now check that new pws match each other
				if ($this->request->data['User']['pw1']==$this->request->data['User']['pw2']) {
					//new pws match
					$this->request->data['User']['password']=$this->request->data['User']['pw1'];
					if ($this->User->save($this->request->data)) {
						$this->Session->setFlash(__('Your password has been changed.', true));
						$this->redirect(array('action' => 'setup',false));
					} else {
						$this->Session->setFlash(__('Your password could not be changed. Please, try again.', true));
					}//endif
				} else {
					//new pws no not match
					$this->Session->setFlash(__('Your new passwords do not match. Please, try again.', true));
				}//endif for new pws matching
			} else {
				//existing pw is not a match
				$this->Session->setFlash(__('Your old password is not correct. Please, try again.', true));
			}//endif for password match
		} else {
			$this->request->data = $this->User->read(null, $id);
			$this->request->data['in']['emptypw']=(is_null($this->request->data['User']['password']));
		}//endif
		//blank pw fields for re-trys
		$this->request->data['User']['password']='';
		$this->request->data['User']['pw1']=$this->request->data['User']['pw2']='';
	}
	
}
