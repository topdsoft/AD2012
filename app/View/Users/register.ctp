<div class="users form">
<?php echo $this->Form->create('User');?>
	<fieldset>
		<legend><?php echo __('Register for AD2012'); ?></legend>
		To sign up for a free account just fill out the form below:
	<?php
		echo $this->Form->input('firstName',array('id'=>'sc'));
		echo $this->Form->input('lastName');
		echo $this->Form->input('username',array('label'=>'Desired Username'));
		echo $this->Form->input('email');
	?>
		<Strong>Terms and Conditions</strong>
		<textarea readonly rows="5">
comming soon</textarea>
	<?php
		echo $this->Form->input('terms',array('type'=>'checkbox','label'=>'I Agree To the Terms and Conditions'));
	?>
	</fieldset>
We will send you an email with a confirmation code to activate your account.  <strong>Be sure to check your spam folder if you don't get the email within a few minutes.</strong>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<script type='text/javascript'>document.getElementById('sc').focus();</script>
<?php //echo $this->element('menu');?>