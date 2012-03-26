<div class="tires form">
<?php echo $this->Form->create('Tire');?>
	<fieldset>
		<legend><?php echo __('Edit Tire'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('weight');
		echo $this->Form->input('cost');
		echo $this->Form->input('hp');
		echo $this->Form->input('handlingMod');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Tire.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Tire.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Tires'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Vehicles'), array('controller' => 'vehicles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehicle'), array('controller' => 'vehicles', 'action' => 'add')); ?> </li>
	</ul>
</div>
