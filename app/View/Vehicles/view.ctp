<div class="vehicles view">
<h2><?php  echo __('Vehicle');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($vehicle['Vehicle']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($vehicle['Vehicle']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($vehicle['User']['username'], array('controller' => 'users', 'action' => 'view', $vehicle['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Body'); ?></dt>
		<dd>
			<?php echo $this->Html->link($vehicle['Body']['name'], array('controller' => 'bodies', 'action' => 'view', $vehicle['Body']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Crew'); ?></dt>
		<dd>
			<?php echo h($vehicle['Vehicle']['crew']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Powerplant'); ?></dt>
		<dd>
			<?php echo $this->Html->link($vehicle['Powerplant']['name'], array('controller' => 'powerplants', 'action' => 'view', $vehicle['Powerplant']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Chassis'); ?></dt>
		<dd>
			<?php echo h($vehicle['Vehicle']['chassis']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Suspension'); ?></dt>
		<dd>
			<?php echo h($vehicle['Vehicle']['suspension']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tire'); ?></dt>
		<dd>
			<?php echo $this->Html->link($vehicle['Tire']['name'], array('controller' => 'tires', 'action' => 'view', $vehicle['Tire']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TireLFhp'); ?></dt>
		<dd>
			<?php echo h($vehicle['Vehicle']['tireLFhp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TireRFhp'); ?></dt>
		<dd>
			<?php echo h($vehicle['Vehicle']['tireRFhp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TireLBhp'); ?></dt>
		<dd>
			<?php echo h($vehicle['Vehicle']['tireLBhp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TireRBhp'); ?></dt>
		<dd>
			<?php echo h($vehicle['Vehicle']['tireRBhp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ArmorF'); ?></dt>
		<dd>
			<?php echo h($vehicle['Vehicle']['armorF']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ArmorR'); ?></dt>
		<dd>
			<?php echo h($vehicle['Vehicle']['armorR']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ArmorB'); ?></dt>
		<dd>
			<?php echo h($vehicle['Vehicle']['armorB']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ArmorL'); ?></dt>
		<dd>
			<?php echo h($vehicle['Vehicle']['armorL']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ArmorT'); ?></dt>
		<dd>
			<?php echo h($vehicle['Vehicle']['armorT']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ArmorU'); ?></dt>
		<dd>
			<?php echo h($vehicle['Vehicle']['armorU']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cost'); ?></dt>
		<dd>
			<?php echo h($vehicle['Vehicle']['cost']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Vehicle'), array('action' => 'edit', $vehicle['Vehicle']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Vehicle'), array('action' => 'delete', $vehicle['Vehicle']['id']), null, __('Are you sure you want to delete # %s?', $vehicle['Vehicle']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Vehicles'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehicle'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Accessories');?></h3>
	<?php if (!empty($vehicle['Accessory'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Space'); ?></th>
		<th><?php echo __('Weight'); ?></th>
		<th><?php echo __('Cost'); ?></th>
		<th><?php echo __('Hp'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($vehicle['Accessory'] as $accessory): ?>
		<tr>
			<td><?php echo $accessory['id'];?></td>
			<td><?php echo $accessory['name'];?></td>
			<td><?php echo $accessory['space'];?></td>
			<td><?php echo $accessory['weight'];?></td>
			<td><?php echo $accessory['cost'];?></td>
			<td><?php echo $accessory['hp'];?></td>
			<td><?php echo $accessory['description'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'accessories', 'action' => 'view', $accessory['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'accessories', 'action' => 'edit', $accessory['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'accessories', 'action' => 'delete', $accessory['id']), null, __('Are you sure you want to delete # %s?', $accessory['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Accessory'), array('controller' => 'accessories', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Weapons');?></h3>
	<?php if (!empty($vehicle['Weapon'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Space'); ?></th>
		<th><?php echo __('Weight'); ?></th>
		<th><?php echo __('Ammo'); ?></th>
		<th><?php echo __('DamageL'); ?></th>
		<th><?php echo __('DamageH'); ?></th>
		<th><?php echo __('Type'); ?></th>
		<th><?php echo __('Hp'); ?></th>
		<th><?php echo __('ChanceToHit'); ?></th>
		<th><?php echo __('FailureRate'); ?></th>
		<th><?php echo __('Range'); ?></th>
		<th><?php echo __('Cost'); ?></th>
		<th><?php echo __('AmmoCost'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($vehicle['Weapon'] as $weapon): ?>
		<tr>
			<td><?php echo $weapon['id'];?></td>
			<td><?php echo $weapon['name'];?></td>
			<td><?php echo $weapon['space'];?></td>
			<td><?php echo $weapon['weight'];?></td>
			<td><?php echo $weapon['ammo'];?></td>
			<td><?php echo $weapon['damageL'];?></td>
			<td><?php echo $weapon['damageH'];?></td>
			<td><?php echo $weapon['type'];?></td>
			<td><?php echo $weapon['hp'];?></td>
			<td><?php echo $weapon['chanceToHit'];?></td>
			<td><?php echo $weapon['failureRate'];?></td>
			<td><?php echo $weapon['range'];?></td>
			<td><?php echo $weapon['cost'];?></td>
			<td><?php echo $weapon['ammoCost'];?></td>
			<td><?php echo $weapon['description'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'weapons', 'action' => 'view', $weapon['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'weapons', 'action' => 'edit', $weapon['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'weapons', 'action' => 'delete', $weapon['id']), null, __('Are you sure you want to delete # %s?', $weapon['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Weapon'), array('controller' => 'weapons', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
