<div class="vehicles view">
<?php echo $this->Html->script(array('jquery-1.6.4.min'));?>
<h2><?php  echo h($vehicle['Vehicle']['name']);?></h2>
	<dl>
		<dt><?php echo __('Owner'); ?></dt>
		<dd>
			<?php echo $this->Html->link($vehicle['User']['username'], array('controller' => 'users', 'action' => 'view', $vehicle['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
	<fieldset>
		<table>
		<tr><th></th><th>Capacity</th><th>Total</th><th>Remaining</th></tr>
		<tr><td>Space</td><td id='capSpace'><?php echo $vehicle['Body']['maxSpace'].'('.$vehicle['Body']['maxCargoSpace'].')'; ?></td> 
			<td id='totalSpace'></td> <td id='remainSpace'></td> </tr>
		<tr><td>Weight</td> <td id='capWeight'><?php echo $vehicle['Body']['maxWeight']*$chassisData['load']; ?></td> 
			<td id='totalWeight'></td> <td id='remainWeight'></td> </tr>
		</table>
	</fieldset>
	<table>
		<tr><th></th><th></th><th></th><th>Space</th><th>Weight</th><th>Cost</th></tr>
		<tr><td></td><td>Body</td><td><?php echo $vehicle['Body']['name']; ?></td><td></td><td></td><td class="cost"><?php echo $vehicle['Body']['cost']; ?></td></tr>
		<tr><td></td><td>Chassis</td><td><?php echo $chassisData['name']; ?></td><td></td><td></td>
			<td class="cost"><?php echo ($chassisData['cost']*$vehicle['Body']['cost'])-$vehicle['Body']['cost']; ?></td></tr>
		<tr><td></td><td>Suspension</td><td><?php echo $susData['name']; ?></td><td></td><td></td>
			<td class="cost"><?php echo $susData['cost']*$vehicle['Body']['cost']; ?></td></tr>
		<tr><td></td>
			<td>Power Plant<br>HP:<?php echo $vehicle['Vehicle']['plantHp'].'/'.$vehicle['Powerplant']['hp']; ?><br>
				Charge:<?php echo $vehicle['Vehicle']['plantCharge']; ?>/100</td>
			<td><?php echo $vehicle['Powerplant']['name']; ?></td>
			<td class="space"><?php echo $vehicle['Powerplant']['space']; ?></td>
			<td class="weight"><?php echo $vehicle['Powerplant']['weight']; ?></td>
			<td class="cost"><?php echo $vehicle['Powerplant']['cost']; ?></td>
			</tr>
		<tr><td></td><td>Tires</td><td><?php echo $vehicle['Tire']['name']; ?></td><td></td><td></td><td></td></tr>
		<tr><td></td><td>Front Left<br>HP:<?php echo $vehicle['Vehicle']['tireLFhp'].'/'.$vehicle['Tire']['hp']; ?></td>
			<td></td><td></td><td class="weight"><?php echo $vehicle['Tire']['weight']; ?></td>
			<td class="cost"><?php echo $vehicle['Tire']['cost']; ?></td></tr>
		<tr><td></td><td>Front Right<br>HP:<?php echo $vehicle['Vehicle']['tireRFhp'].'/'.$vehicle['Tire']['hp']; ?></td>
			<td></td><td></td><td class="weight"><?php echo $vehicle['Tire']['weight']; ?></td>
			<td class="cost"><?php echo $vehicle['Tire']['cost']; ?></td></tr>
		<tr><td></td><td>Back Left<br>HP:<?php echo $vehicle['Vehicle']['tireLBhp'].'/'.$vehicle['Tire']['hp']; ?></td>
			<td></td><td></td><td class="weight"><?php echo $vehicle['Tire']['weight']; ?></td>
			<td class="cost"><?php echo $vehicle['Tire']['cost']; ?></td></tr>
		<tr><td></td><td>Back Right<br>HP:<?php echo $vehicle['Vehicle']['tireRBhp'].'/'.$vehicle['Tire']['hp']; ?></td>
			<td></td><td></td><td class="weight"><?php echo $vehicle['Tire']['weight']; ?></td>
			<td class="cost"><?php echo $vehicle['Tire']['cost']; ?></td></tr>
		<tr><td></td><td>Driver</td><td></td><td class="space">2</td><td class="weight">150</td><td class="cost">200</td></tr>
		<tr><td></td><td>Crew Positions</td><td><?php echo $vehicle['Vehicle']['crew']; ?></td>
			<td class="space"><?php echo $vehicle['Vehicle']['crew']*2; ?></td>
			<td class="weight"><?php echo $vehicle['Vehicle']['crew']*150; ?></td>
			<td class="cost"><?php echo $vehicle['Vehicle']['crew']*200; ?></td></tr>
		<tr><td></td><td>Front Armor</td><td><?php echo $vehicle['Vehicle']['hpF'].'/'.$vehicle['Vehicle']['armorF']; ?></td><td></td>
			<td class="weight"><?php echo $vehicle['Vehicle']['hpF']*$vehicle['Body']['armorWeight']; ?></td>
			<td class="cost"><?php echo $vehicle['Vehicle']['hpF']*$vehicle['Body']['armorCost']; ?></td></tr>
		<tr><td></td><td>Back Armor</td><td><?php echo $vehicle['Vehicle']['hpB'].'/'.$vehicle['Vehicle']['armorB']; ?></td><td></td>
			<td class="weight"><?php echo $vehicle['Vehicle']['hpB']*$vehicle['Body']['armorWeight']; ?></td>
			<td class="cost"><?php echo $vehicle['Vehicle']['hpB']*$vehicle['Body']['armorCost']; ?></td></tr>
		<tr><td></td><td>Right Armor</td><td><?php echo $vehicle['Vehicle']['hpR'].'/'.$vehicle['Vehicle']['armorR']; ?></td><td></td>
			<td class="weight"><?php echo $vehicle['Vehicle']['hpR']*$vehicle['Body']['armorWeight']; ?></td>
			<td class="cost"><?php echo $vehicle['Vehicle']['hpR']*$vehicle['Body']['armorCost']; ?></td></tr>
		<tr><td></td><td>Left Armor</td><td><?php echo $vehicle['Vehicle']['hpL'].'/'.$vehicle['Vehicle']['armorL']; ?></td><td></td>
			<td class="weight"><?php echo $vehicle['Vehicle']['hpL']*$vehicle['Body']['armorWeight']; ?></td>
			<td class="cost"><?php echo $vehicle['Vehicle']['hpL']*$vehicle['Body']['armorCost']; ?></td></tr>
		<tr><td></td><td>Top Armor</td><td><?php echo $vehicle['Vehicle']['hpT'].'/'.$vehicle['Vehicle']['armorT']; ?></td><td></td>
			<td class="weight"><?php echo $vehicle['Vehicle']['hpT']*$vehicle['Body']['armorWeight']; ?></td>
			<td class="cost"><?php echo $vehicle['Vehicle']['hpT']*$vehicle['Body']['armorCost']; ?></td></tr>
		<tr><td></td><td>Under Armor</td><td><?php echo $vehicle['Vehicle']['hpU'].'/'.$vehicle['Vehicle']['armorU']; ?></td><td></td>
			<td class="weight"><?php echo $vehicle['Vehicle']['hpU']*$vehicle['Body']['armorWeight']; ?></td>
			<td class="cost"><?php echo $vehicle['Vehicle']['hpU']*$vehicle['Body']['armorCost']; ?></td></tr>
		<?php
			foreach ($vehicle['Weapon'] as $weapon) {
				//output each weapon data
				echo '<tr><td></td>';
				echo '<td>'.$weapon['VehiclesWeapon']['position'].' '.$weapon['name'].'<br>';
				echo 'HP:'.$weapon['VehiclesWeapon']['hp'].'/'.$weapon['hp'].'<br>';
				echo 'Ammo:'.$weapon['VehiclesWeapon']['ammo'].'/'.$weapon['ammo'].'<br>';
				echo '</td><td></td>';
				echo '<td class="space">'.$weapon['space'].'</td>';
				echo '<td class="weight">'.$weapon['weight'].'</td>';
				echo '<td class="cost">'.$weapon['cost'].'</td>';
				echo '</tr>';
			}
			foreach ($vehicle['Accessory'] as $accessory) {
				//output each accessory data
				echo '<tr><td></td>';
				echo '<td>'.$accessory['name'].'<br>';
				echo 'HP:'.$accessory['AccessoriesVehicle']['hp'].'/'.$accessory['hp'].'<br>';
				echo '</td><td></td>';
				echo '<td class="space">'.$accessory['space'].'</td>';
				echo '<td class="weight">'.$accessory['weight'].'</td>';
				echo '<td class="cost">'.$accessory['cost'].'</td>';
				echo '</tr>';
			}
		?>
	</table>
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
	<?php if (!empty($vehicle['Accessory'])):?>
	<h3><?php echo __('Related Accessories');//debug($vehicle);debug($chassisData);?></h3>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Space'); ?></th>
		<th><?php echo __('Weight'); ?></th>
		<th><?php echo __('Cost'); ?></th>
		<th><?php echo __('Hp'); ?></th>
		<th><?php echo __('Description'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($vehicle['Accessory'] as $accessory): ?>
		<tr>
			<td><?php echo $accessory['name'];?></td>
			<td><?php echo $accessory['space'];?></td>
			<td><?php echo $accessory['weight'];?></td>
			<td><?php echo $accessory['cost'];?></td>
			<td><?php echo $accessory['hp'];?></td>
			<td><?php echo $accessory['description'];?></td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>
<div class="related">
	<?php if (!empty($vehicle['Weapon'])):?>
	<h3><?php echo __('Related Weapons');?></h3>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Space'); ?></th>
		<th><?php echo __('Weight'); ?></th>
		<th><?php echo __('Ammo'); ?></th>
		<th><?php echo __('Damage'); ?></th>
		<th><?php echo __('Type'); ?></th>
		<th><?php echo __('Hp'); ?></th>
		<th><?php echo __('ChanceToHit'); ?></th>
		<th><?php echo __('FailureRate'); ?></th>
		<th><?php echo __('Range'); ?></th>
		<th><?php echo __('Cost'); ?></th>
		<th><?php echo __('AmmoCost'); ?></th>
		<th><?php echo __('Description'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($vehicle['Weapon'] as $weapon): ?>
		<tr>
			<td><?php echo $weapon['name'];?></td>
			<td><?php echo $weapon['space'];?></td>
			<td><?php echo $weapon['weight'];?></td>
			<td><?php echo $weapon['ammo'];?></td>
			<td><?php echo $weapon['damageL'].'-'.$weapon['damageH'];?></td>
			<td><?php echo $weapon['type'];?></td>
			<td><?php echo $weapon['hp'];?></td>
			<td><?php echo $weapon['chanceToHit'];?></td>
			<td><?php echo $weapon['failureRate'];?></td>
			<td><?php echo $weapon['range'];?></td>
			<td><?php echo $weapon['cost'];?></td>
			<td><?php echo $weapon['ammoCost'];?></td>
			<td><?php echo $weapon['description'];?></td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>
<script type='text/javascript'>
	//calculate the total weight and remaining
	var total=0;
	$(".weight").each(function(){total+=(parseInt($(this).text())||0)});
	
	var cap=$("#capWeight").text();
	var remain=cap-total;
	$("#totalWeight").text(total);
	$("#remainWeight").text(remain);
	
	//calculate the space remaining and total
	var total=0;
	$(".space").each(function(){total+=(parseInt($(this).text())||0)});

	var cap=<?php echo $vehicle['Body']['maxSpace']; ?>;
	var remain=cap-total;
	$("#totalSpace").text(total);
	$("#remainSpace").text(remain);
</script>