<div class="powerplants form">
<?php echo $this->Form->create('Powerplant');?>
	<fieldset>
		<legend><?php echo __('Add Powerplant'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('space');
		echo $this->Form->input('weight');
		echo $this->Form->input('power');
		echo $this->Form->input('cost');
		echo $this->Form->input('hp');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Powerplants'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Vehicles'), array('controller' => 'vehicles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehicle'), array('controller' => 'vehicles', 'action' => 'add')); ?> </li>
	</ul>
</div>
