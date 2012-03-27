<?php
App::uses('AppModel', 'Model');
/**
 * Chassis Model
 *
 */
class Chassis extends AppModel {
	public function read() {
		$ch=array();
		$ch[1]=array('name'=>'Light','load'=>.9,'cost'=>.8);
		$ch[2]=array('name'=>'Standard','load'=>1,'cost'=>1);
		$ch[3]=array('name'=>'Heavy','load'=>1.1,'cost'=>1.5);
		$ch[4]=array('name'=>'Extra Heavy','load'=>1.2,'cost'=>2);
		return $ch;
	}
	
	public function readL() {
		$ch=array();
		$ch[1]='Light (-10% Weight Capacity, -20% Cost)';
		$ch[2]='Standard (No Change)';
		$ch[3]='Heavy (+10% Weight Capacity, +50% Cost)';
		$ch[4]='Extra Heavy (+200% Weight Capacity, +100% Cost)';
		return $ch;
	}
}
