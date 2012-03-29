<div class="users form">
<?php echo $this->Form->create('User');?>
	<fieldset>
		<legend><?php
			if(!$this->Form->value('in.emptypw')) echo __('Change Password'); 
			else echo __('Please set a Password');
		?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('username',array('type'=>'hidden'));
		echo $this->Form->input('in.emptypw',array('type'=>'hidden'));
		if(!$this->Form->value('in.emptypw')) echo $this->Form->input('password',array('label'=>'Enter your old password:','id'=>'sc'));
		else echo $this->Form->input('password',array('type'=>'hidden'));
		echo $this->Form->input('pw1',array('label'=>'Enter your new password:','type'=>'password','id'=>'sc'));
		echo $this->Form->input('pw2',array('label'=>'Repeat your new password:','type'=>'password'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<script type='text/javascript'>document.getElementById('sc').focus();</script>