<div class="vehicles form">
<?php echo $this->Form->create('Vehicle');?>
	<fieldset>
		<legend><?php echo __('Edit Vehicle'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('user_id');
		echo $this->Form->input('body_id');
		echo $this->Form->input('crew');
		echo $this->Form->input('powerplant_id');
		echo $this->Form->input('chassis');
		echo $this->Form->input('suspension');
		echo $this->Form->input('tire_id');
		echo $this->Form->input('tireLFhp');
		echo $this->Form->input('tireRFhp');
		echo $this->Form->input('tireLBhp');
		echo $this->Form->input('tireRBhp');
		echo $this->Form->input('armorF');
		echo $this->Form->input('armorR');
		echo $this->Form->input('armorB');
		echo $this->Form->input('armorL');
		echo $this->Form->input('armorT');
		echo $this->Form->input('armorU');
		echo $this->Form->input('cost');
		echo $this->Form->input('Accessory');
		echo $this->Form->input('Weapon');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Vehicle.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Vehicle.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Vehicles'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bodies'), array('controller' => 'bodies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Body'), array('controller' => 'bodies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Powerplants'), array('controller' => 'powerplants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Powerplant'), array('controller' => 'powerplants', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tires'), array('controller' => 'tires', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tire'), array('controller' => 'tires', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Accessories'), array('controller' => 'accessories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Accessory'), array('controller' => 'accessories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Weapons'), array('controller' => 'weapons', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Weapon'), array('controller' => 'weapons', 'action' => 'add')); ?> </li>
	</ul>
</div>
