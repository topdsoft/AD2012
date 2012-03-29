<?php
	echo $this->Form->create('User');
	echo $this->Form->input('username',array('id'=>'sc'));    
	echo $this->Form->input('password');    
	echo $this->Form->end('Login');
	echo $this->Html->link('Register', array('controller'=>'users','action'=>'register'));
?>
<script type='text/javascript'>document.getElementById('sc').focus();</script>