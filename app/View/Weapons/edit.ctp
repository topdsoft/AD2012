<div class="weapons form">
<?php echo $this->Form->create('Weapon');?>
	<fieldset>
		<legend><?php echo __('Edit Weapon'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('space');
		echo $this->Form->input('weight');
		echo $this->Form->input('ammo');
		echo $this->Form->input('damageL');
		echo $this->Form->input('damageH');
		echo $this->Form->input('type');
		echo $this->Form->input('hp');
		echo $this->Form->input('chanceToHit');
		echo $this->Form->input('failureRate');
		echo $this->Form->input('range');
		echo $this->Form->input('cost');
		echo $this->Form->input('ammoCost');
		echo $this->Form->input('description');
		echo $this->Form->input('Vehicle');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Weapon.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Weapon.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Weapons'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Vehicles'), array('controller' => 'vehicles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehicle'), array('controller' => 'vehicles', 'action' => 'add')); ?> </li>
	</ul>
</div>
