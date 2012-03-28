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
		$vehicleData=$this->Vehicle->read(null, $id);
		$this->set('vehicle', $vehicleData);
		//chassis data
		$chassisData=ClassRegistry::init('Chassis')->read();
		$this->set('chassisData',$chassisData[$vehicleData['Vehicle']['chassis_id']]);
		//suspension data
		$susData=ClassRegistry::init('Suspension')->read();
		$this->set('susData',$susData[$vehicleData['Vehicle']['suspension_id']]);
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			//drop default weapon row
			unset($this->request->data['Vehicle']['weaponPosition'][0]);
			unset($this->request->data['Vehicle']['weapon_id'][0]);
			unset($this->request->data['Vehicle']['acc_id'][0]);
			//get tire data
			$tire=$this->Vehicle->Tire->find('first',array('recursive'=>-1,'conditions'=>array('Tire.id'=>$this->request->data['Vehicle']['tire_id'])));
			$this->request->data['Vehicle']['tireLFhp']=$this->request->data['Vehicle']['tireRFhp']=$this->request->data['Vehicle']['tireLBhp']=
				$this->request->data['Vehicle']['tireRBhp']=$tire['Tire']['hp'];
			//fill armor hp
			$this->request->data['Vehicle']['hpF']=$this->request->data['Vehicle']['armorF'];
			$this->request->data['Vehicle']['hpB']=$this->request->data['Vehicle']['armorB'];
			$this->request->data['Vehicle']['hpR']=$this->request->data['Vehicle']['armorR'];
			$this->request->data['Vehicle']['hpL']=$this->request->data['Vehicle']['armorL'];
			$this->request->data['Vehicle']['hpT']=$this->request->data['Vehicle']['armorT'];
			$this->request->data['Vehicle']['hpU']=$this->request->data['Vehicle']['armorU'];
			//setup powerplant data
			$this->request->data['Vehicle']['plantCharge']=100;
//debug($this->request->data);debug($tire);exit;
			$this->Vehicle->create();
			if ($this->Vehicle->save($this->request->data)) {
				//save ok
				$vid=$this->Vehicle->getLastInsertId();
				//add weapons
				foreach($this->request->data['Vehicle']['weapon_id'] as $i=>$weapon_id){
					//add weapon
					$weaponData=$this->Vehicle->Weapon->find('first',array('conditions'=>array('Weapon.id'=>$weapon_id),'recursive'=>-1));//debug($weapon_id);
					if($weaponData){
						//save weapon
						$this->Vehicle->VehiclesWeapon->create();//debug($weaponData);
						$this->Vehicle->VehiclesWeapon->save(array(
							'vehicle_id'=>$vid,
							'weapon_id'=>$weapon_id,
							'position'=>$this->request->data['Vehicle']['weaponPosition'][$i],
							'ammo'=>$weaponData['Weapon']['ammo'],
							'hp'=>$weaponData['Weapon']['hp']
						));
					}
				}//end foreach weapon
				//add accessories
				foreach($this->request->data['Vehicle']['acc_id'] as $i=>$acc_id){
					//add acc
					$accData=$this->Vehicle->Accessory->find('first',array('conditions'=>array('Accessory.id'=>$acc_id),'recursive'=>-1));
					if($weaponData){
						//save accessory
						$this->Vehicle->AccessoriesVehicle->create();
						$this->Vehicle->AccessoriesVehicle->save(array(
							'vehicle_id'=>$vid,
							'accessory_id'=>$acc_id,
							'hp'=>$accData['Accessory']['hp']
						));
					}
				}//end foreach accessory
				$this->Session->setFlash(__('The vehicle has been saved'));//exit;
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vehicle could not be saved. Please, try again.'));
			}
		}
		$users = $this->Vehicle->User->find('list');
		$bodies = $this->Vehicle->Body->find('list');
		$bodies[0]='(none)';
		$this->request->data['Vehicle']['body_id']=0;
		//get all body data
		$bd=$this->Vehicle->Body->find('all',array('recursive'=>-1));
		$bd2=array();
		foreach($bd as $b) $bd2[$b['Body']['id']]=$b['Body'];
		$this->set('bodyData',$bd2);
		//chassis data
		$chassisData=ClassRegistry::init('Chassis')->read();
		$this->set('chassisData',$chassisData);
		$chassis=ClassRegistry::init('Chassis')->readL();
		$this->request->data['Vehicle']['chassis_id']=2;
		//suspension data
		$susData=ClassRegistry::init('Suspension')->read();
		$this->set('susData',$susData);
		$suspensions=ClassRegistry::init('Suspension')->readL();
//		$this->request->data['Vehicle']['chassis']='S';
		//plant data
		$powerplants = $this->Vehicle->Powerplant->find('list');
		$pp=$this->Vehicle->Powerplant->find('all',array('recursive'=>-1));
		$pp2=array();
		foreach($pp as $i=>$p) $pp2[$p['Powerplant']['id']]=$p['Powerplant'];
		$this->set('ppData',$pp2);
		//tire data
		$tires = $this->Vehicle->Tire->find('list');
		$tt=$this->Vehicle->Tire->find('all',array('recursive'=>-1));
		$tt2=array();
		foreach($tt as $t) $tt2[$t['Tire']['id']]=$t['Tire'];
		$this->set('tireData',$tt2);
		$this->request->data['Vehicle']['crew']=0;
		$this->request->data['Vehicle']['armorF']=0;
		$this->request->data['Vehicle']['armorR']=0;
		$this->request->data['Vehicle']['armorL']=0;
		$this->request->data['Vehicle']['armorB']=0;
		$this->request->data['Vehicle']['armorT']=0;
		$this->request->data['Vehicle']['armorU']=0;
		//accessories data
		$accessories = $this->Vehicle->Accessory->find('list');
		$aa=$this->Vehicle->Accessory->find('all',array('recursive'=>-1));
		$aa2=array();
		foreach($aa as $a) {unset($a['Accessory']['description']);$aa2[$a['Accessory']['id']]=$a['Accessory'];}
		$this->set('accData',$aa2);
		//weapon data
		$weapons = $this->Vehicle->Weapon->find('list');
		$this->set('positions',array('F'=>'Front','B'=>'Back','R'=>'Right','L'=>'Left','T'=>'Top'));
		$ww=$this->Vehicle->Weapon->find('all',array('recursive'=>-1));
		$ww2=array();
		foreach($ww as $w) {unset($w['Weapon']['description']);$ww2[$w['Weapon']['id']]=$w['Weapon'];}
		$this->set('weaponData',$ww2);
		
		$this->set(compact('users', 'bodies', 'powerplants', 'tires', 'accessories', 'weapons','chassis','suspensions'));
		$this->set('money',20000);
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
