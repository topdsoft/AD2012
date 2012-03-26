<div class="accessories index">
	<h2><?php echo __('Accessories');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('space');?></th>
			<th><?php echo $this->Paginator->sort('weight');?></th>
			<th><?php echo $this->Paginator->sort('cost');?></th>
			<th><?php echo $this->Paginator->sort('hp');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($accessories as $accessory): ?>
	<tr>
		<td><?php echo h($accessory['Accessory']['id']); ?>&nbsp;</td>
		<td><?php echo h($accessory['Accessory']['name']); ?>&nbsp;</td>
		<td><?php echo h($accessory['Accessory']['space']); ?>&nbsp;</td>
		<td><?php echo h($accessory['Accessory']['weight']); ?>&nbsp;</td>
		<td><?php echo h($accessory['Accessory']['cost']); ?>&nbsp;</td>
		<td><?php echo h($accessory['Accessory']['hp']); ?>&nbsp;</td>
		<td><?php echo h($accessory['Accessory']['description']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $accessory['Accessory']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $accessory['Accessory']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $accessory['Accessory']['id']), null, __('Are you sure you want to delete # %s?', $accessory['Accessory']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Accessory'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Vehicles'), array('controller' => 'vehicles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehicle'), array('controller' => 'vehicles', 'action' => 'add')); ?> </li>
	</ul>
</div>
