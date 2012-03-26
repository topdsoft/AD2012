<div class="tires index">
	<h2><?php echo __('Tires');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('weight');?></th>
			<th><?php echo $this->Paginator->sort('cost');?></th>
			<th><?php echo $this->Paginator->sort('hp');?></th>
			<th><?php echo $this->Paginator->sort('handlingMod');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($tires as $tire): ?>
	<tr>
		<td><?php echo h($tire['Tire']['id']); ?>&nbsp;</td>
		<td><?php echo h($tire['Tire']['name']); ?>&nbsp;</td>
		<td><?php echo h($tire['Tire']['weight']); ?>&nbsp;</td>
		<td><?php echo h($tire['Tire']['cost']); ?>&nbsp;</td>
		<td><?php echo h($tire['Tire']['hp']); ?>&nbsp;</td>
		<td><?php echo h($tire['Tire']['handlingMod']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $tire['Tire']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $tire['Tire']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $tire['Tire']['id']), null, __('Are you sure you want to delete # %s?', $tire['Tire']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Tire'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Vehicles'), array('controller' => 'vehicles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehicle'), array('controller' => 'vehicles', 'action' => 'add')); ?> </li>
	</ul>
</div>
