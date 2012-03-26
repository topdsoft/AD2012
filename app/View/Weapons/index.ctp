<div class="weapons index">
	<h2><?php echo __('Weapons');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('space');?></th>
			<th><?php echo $this->Paginator->sort('weight');?></th>
			<th><?php echo $this->Paginator->sort('ammo');?></th>
			<th><?php echo $this->Paginator->sort('damageL');?></th>
			<th><?php echo $this->Paginator->sort('damageH');?></th>
			<th><?php echo $this->Paginator->sort('type');?></th>
			<th><?php echo $this->Paginator->sort('hp');?></th>
			<th><?php echo $this->Paginator->sort('chanceToHit');?></th>
			<th><?php echo $this->Paginator->sort('failureRate');?></th>
			<th><?php echo $this->Paginator->sort('range');?></th>
			<th><?php echo $this->Paginator->sort('cost');?></th>
			<th><?php echo $this->Paginator->sort('ammoCost');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($weapons as $weapon): ?>
	<tr>
		<td><?php echo h($weapon['Weapon']['id']); ?>&nbsp;</td>
		<td><?php echo h($weapon['Weapon']['name']); ?>&nbsp;</td>
		<td><?php echo h($weapon['Weapon']['space']); ?>&nbsp;</td>
		<td><?php echo h($weapon['Weapon']['weight']); ?>&nbsp;</td>
		<td><?php echo h($weapon['Weapon']['ammo']); ?>&nbsp;</td>
		<td><?php echo h($weapon['Weapon']['damageL']); ?>&nbsp;</td>
		<td><?php echo h($weapon['Weapon']['damageH']); ?>&nbsp;</td>
		<td><?php echo h($weapon['Weapon']['type']); ?>&nbsp;</td>
		<td><?php echo h($weapon['Weapon']['hp']); ?>&nbsp;</td>
		<td><?php echo h($weapon['Weapon']['chanceToHit']); ?>&nbsp;</td>
		<td><?php echo h($weapon['Weapon']['failureRate']); ?>&nbsp;</td>
		<td><?php echo h($weapon['Weapon']['range']); ?>&nbsp;</td>
		<td><?php echo h($weapon['Weapon']['cost']); ?>&nbsp;</td>
		<td><?php echo h($weapon['Weapon']['ammoCost']); ?>&nbsp;</td>
		<td><?php echo h($weapon['Weapon']['description']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $weapon['Weapon']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $weapon['Weapon']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $weapon['Weapon']['id']), null, __('Are you sure you want to delete # %s?', $weapon['Weapon']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Weapon'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Vehicles'), array('controller' => 'vehicles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehicle'), array('controller' => 'vehicles', 'action' => 'add')); ?> </li>
	</ul>
</div>
