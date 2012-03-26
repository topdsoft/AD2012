<div class="bodies view">
<h2><?php  echo __('Body');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($body['Body']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($body['Body']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MaxWeight'); ?></dt>
		<dd>
			<?php echo h($body['Body']['maxWeight']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MaxSpace'); ?></dt>
		<dd>
			<?php echo h($body['Body']['maxSpace']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MaxCargoSpace'); ?></dt>
		<dd>
			<?php echo h($body['Body']['maxCargoSpace']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ArmorCost'); ?></dt>
		<dd>
			<?php echo h($body['Body']['armorCost']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ArmorWeight'); ?></dt>
		<dd>
			<?php echo h($body['Body']['armorWeight']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cost'); ?></dt>
		<dd>
			<?php echo h($body['Body']['cost']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Body'), array('action' => 'edit', $body['Body']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Body'), array('action' => 'delete', $body['Body']['id']), null, __('Are you sure you want to delete # %s?', $body['Body']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Bodies'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Body'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vehicles'), array('controller' => 'vehicles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehicle'), array('controller' => 'vehicles', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Vehicles');?></h3>
	<?php if (!empty($body['Vehicle'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Body Id'); ?></th>
		<th><?php echo __('Crew'); ?></th>
		<th><?php echo __('Powerplant Id'); ?></th>
		<th><?php echo __('Chassis'); ?></th>
		<th><?php echo __('Suspension'); ?></th>
		<th><?php echo __('Tire Id'); ?></th>
		<th><?php echo __('TireLFhp'); ?></th>
		<th><?php echo __('TireRFhp'); ?></th>
		<th><?php echo __('TireLBhp'); ?></th>
		<th><?php echo __('TireRBhp'); ?></th>
		<th><?php echo __('ArmorF'); ?></th>
		<th><?php echo __('ArmorR'); ?></th>
		<th><?php echo __('ArmorB'); ?></th>
		<th><?php echo __('ArmorL'); ?></th>
		<th><?php echo __('ArmorT'); ?></th>
		<th><?php echo __('ArmorU'); ?></th>
		<th><?php echo __('Cost'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($body['Vehicle'] as $vehicle): ?>
		<tr>
			<td><?php echo $vehicle['id'];?></td>
			<td><?php echo $vehicle['name'];?></td>
			<td><?php echo $vehicle['user_id'];?></td>
			<td><?php echo $vehicle['body_id'];?></td>
			<td><?php echo $vehicle['crew'];?></td>
			<td><?php echo $vehicle['powerplant_id'];?></td>
			<td><?php echo $vehicle['chassis'];?></td>
			<td><?php echo $vehicle['suspension'];?></td>
			<td><?php echo $vehicle['tire_id'];?></td>
			<td><?php echo $vehicle['tireLFhp'];?></td>
			<td><?php echo $vehicle['tireRFhp'];?></td>
			<td><?php echo $vehicle['tireLBhp'];?></td>
			<td><?php echo $vehicle['tireRBhp'];?></td>
			<td><?php echo $vehicle['armorF'];?></td>
			<td><?php echo $vehicle['armorR'];?></td>
			<td><?php echo $vehicle['armorB'];?></td>
			<td><?php echo $vehicle['armorL'];?></td>
			<td><?php echo $vehicle['armorT'];?></td>
			<td><?php echo $vehicle['armorU'];?></td>
			<td><?php echo $vehicle['cost'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'vehicles', 'action' => 'view', $vehicle['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'vehicles', 'action' => 'edit', $vehicle['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'vehicles', 'action' => 'delete', $vehicle['id']), null, __('Are you sure you want to delete # %s?', $vehicle['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Vehicle'), array('controller' => 'vehicles', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
