<div class="bodies index">
	<h2><?php echo __('Bodies');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('maxWeight');?></th>
			<th><?php echo $this->Paginator->sort('maxSpace');?></th>
			<th><?php echo $this->Paginator->sort('maxCargoSpace');?></th>
			<th><?php echo $this->Paginator->sort('armorCost');?></th>
			<th><?php echo $this->Paginator->sort('armorWeight');?></th>
			<th><?php echo $this->Paginator->sort('cost');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($bodies as $body): ?>
	<tr>
		<td><?php echo h($body['Body']['id']); ?>&nbsp;</td>
		<td><?php echo h($body['Body']['name']); ?>&nbsp;</td>
		<td><?php echo h($body['Body']['maxWeight']); ?>&nbsp;</td>
		<td><?php echo h($body['Body']['maxSpace']); ?>&nbsp;</td>
		<td><?php echo h($body['Body']['maxCargoSpace']); ?>&nbsp;</td>
		<td><?php echo h($body['Body']['armorCost']); ?>&nbsp;</td>
		<td><?php echo h($body['Body']['armorWeight']); ?>&nbsp;</td>
		<td><?php echo h($body['Body']['cost']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $body['Body']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $body['Body']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $body['Body']['id']), null, __('Are you sure you want to delete # %s?', $body['Body']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Body'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Vehicles'), array('controller' => 'vehicles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehicle'), array('controller' => 'vehicles', 'action' => 'add')); ?> </li>
	</ul>
</div>
