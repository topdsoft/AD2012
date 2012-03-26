<div class="powerplants view">
<h2><?php  echo __('Powerplant');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($powerplant['Powerplant']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($powerplant['Powerplant']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Space'); ?></dt>
		<dd>
			<?php echo h($powerplant['Powerplant']['space']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Weight'); ?></dt>
		<dd>
			<?php echo h($powerplant['Powerplant']['weight']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Power'); ?></dt>
		<dd>
			<?php echo h($powerplant['Powerplant']['power']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cost'); ?></dt>
		<dd>
			<?php echo h($powerplant['Powerplant']['cost']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hp'); ?></dt>
		<dd>
			<?php echo h($powerplant['Powerplant']['hp']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Powerplant'), array('action' => 'edit', $powerplant['Powerplant']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Powerplant'), array('action' => 'delete', $powerplant['Powerplant']['id']), null, __('Are you sure you want to delete # %s?', $powerplant['Powerplant']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Powerplants'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Powerplant'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vehicles'), array('controller' => 'vehicles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehicle'), array('controller' => 'vehicles', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Vehicles');?></h3>
	<?php if (!empty($powerplant['Vehicle'])):?>
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
		foreach ($powerplant['Vehicle'] as $vehicle): ?>
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
