<div class="characters view">
<h2><?php  echo __('Character');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($character['Character']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($character['Character']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($character['Character']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($character['User']['username'], array('controller' => 'users', 'action' => 'view', $character['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cash'); ?></dt>
		<dd>
			<?php echo h($character['Character']['cash']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Health'); ?></dt>
		<dd>
			<?php echo h($character['Character']['health']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Experience'); ?></dt>
		<dd>
			<?php echo h($character['Character']['experience']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Prestige'); ?></dt>
		<dd>
			<?php echo h($character['Character']['prestige']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DrivingSkill'); ?></dt>
		<dd>
			<?php echo h($character['Character']['drivingSkill']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MechanicSkill'); ?></dt>
		<dd>
			<?php echo h($character['Character']['mechanicSkill']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('GunnerSkill'); ?></dt>
		<dd>
			<?php echo h($character['Character']['gunnerSkill']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Character'), array('action' => 'edit', $character['Character']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Character'), array('action' => 'delete', $character['Character']['id']), null, __('Are you sure you want to delete # %s?', $character['Character']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Characters'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Character'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
