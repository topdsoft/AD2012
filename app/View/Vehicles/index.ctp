<div class="vehicles index">
	<h2><?php echo __('Vehicles');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('body_id');?></th>
			<th><?php echo $this->Paginator->sort('crew');?></th>
			<th><?php echo $this->Paginator->sort('powerplant_id');?></th>
			<th><?php echo $this->Paginator->sort('chassis');?></th>
			<th><?php echo $this->Paginator->sort('suspension');?></th>
			<th><?php echo $this->Paginator->sort('tire_id');?></th>
			<th><?php echo $this->Paginator->sort('tireLFhp');?></th>
			<th><?php echo $this->Paginator->sort('tireRFhp');?></th>
			<th><?php echo $this->Paginator->sort('tireLBhp');?></th>
			<th><?php echo $this->Paginator->sort('tireRBhp');?></th>
			<th><?php echo $this->Paginator->sort('armorF');?></th>
			<th><?php echo $this->Paginator->sort('armorR');?></th>
			<th><?php echo $this->Paginator->sort('armorB');?></th>
			<th><?php echo $this->Paginator->sort('armorL');?></th>
			<th><?php echo $this->Paginator->sort('armorT');?></th>
			<th><?php echo $this->Paginator->sort('armorU');?></th>
			<th><?php echo $this->Paginator->sort('cost');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($vehicles as $vehicle): ?>
	<tr>
		<td><?php echo h($vehicle['Vehicle']['id']); ?>&nbsp;</td>
		<td><?php echo h($vehicle['Vehicle']['name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($vehicle['User']['username'], array('controller' => 'users', 'action' => 'view', $vehicle['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($vehicle['Body']['name'], array('controller' => 'bodies', 'action' => 'view', $vehicle['Body']['id'])); ?>
		</td>
		<td><?php echo h($vehicle['Vehicle']['crew']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($vehicle['Powerplant']['name'], array('controller' => 'powerplants', 'action' => 'view', $vehicle['Powerplant']['id'])); ?>
		</td>
		<td><?php echo h($vehicle['Vehicle']['chassis']); ?>&nbsp;</td>
		<td><?php echo h($vehicle['Vehicle']['suspension']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($vehicle['Tire']['name'], array('controller' => 'tires', 'action' => 'view', $vehicle['Tire']['id'])); ?>
		</td>
		<td><?php echo h($vehicle['Vehicle']['tireLFhp']); ?>&nbsp;</td>
		<td><?php echo h($vehicle['Vehicle']['tireRFhp']); ?>&nbsp;</td>
		<td><?php echo h($vehicle['Vehicle']['tireLBhp']); ?>&nbsp;</td>
		<td><?php echo h($vehicle['Vehicle']['tireRBhp']); ?>&nbsp;</td>
		<td><?php echo h($vehicle['Vehicle']['armorF']); ?>&nbsp;</td>
		<td><?php echo h($vehicle['Vehicle']['armorR']); ?>&nbsp;</td>
		<td><?php echo h($vehicle['Vehicle']['armorB']); ?>&nbsp;</td>
		<td><?php echo h($vehicle['Vehicle']['armorL']); ?>&nbsp;</td>
		<td><?php echo h($vehicle['Vehicle']['armorT']); ?>&nbsp;</td>
		<td><?php echo h($vehicle['Vehicle']['armorU']); ?>&nbsp;</td>
		<td><?php echo h($vehicle['Vehicle']['cost']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $vehicle['Vehicle']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $vehicle['Vehicle']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $vehicle['Vehicle']['id']), null, __('Are you sure you want to delete # %s?', $vehicle['Vehicle']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Vehicle'), array('action' => 'add')); ?></li>
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
