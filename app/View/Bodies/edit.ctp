<div class="bodies form">
<?php echo $this->Form->create('Body');?>
	<fieldset>
		<legend><?php echo __('Edit Body'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('maxWeight');
		echo $this->Form->input('maxSpace');
		echo $this->Form->input('maxCargoSpace');
		echo $this->Form->input('armorCost');
		echo $this->Form->input('armorWeight');
		echo $this->Form->input('cost');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Body.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Body.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Bodies'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Vehicles'), array('controller' => 'vehicles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehicle'), array('controller' => 'vehicles', 'action' => 'add')); ?> </li>
	</ul>
</div>
