<div class="characters form">
<?php echo $this->Form->create('Character');?>
	<fieldset>
		<legend><?php echo __('Edit Character'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('user_id');
		echo $this->Form->input('cash');
		echo $this->Form->input('health');
		echo $this->Form->input('drivingSkill');
		echo $this->Form->input('mechanicSkill');
		echo $this->Form->input('gunnerSkill');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Character.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Character.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Characters'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
