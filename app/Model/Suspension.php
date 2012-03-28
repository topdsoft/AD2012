<?php
App::uses('AppModel', 'Model');
/**
 * Suspension Model
 *
 */
class Suspension extends AppModel {
	public function read() {
		$ch=array();
		$ch[1]=array('name'=>'Light','mod'=>0,'cost'=>0);
		$ch[2]=array('name'=>'Standard','mod'=>1,'cost'=>0.5);
		$ch[3]=array('name'=>'Heavy','mod'=>2,'cost'=>1);
		return $ch;
	}
	
	public function readL() {
		$ch=array();
		$ch[1]='Light (No Change)';
		$ch[2]='Standard (+50% cost)';
		$ch[3]='Heavy (+100% Cost)';
		return $ch;
	}
}
