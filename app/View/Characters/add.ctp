<div class="characters form">
<?php echo $this->Html->script(array('jquery-1.6.4.min'));?>
<?php echo $this->Form->create('Character');?>
	<fieldset>
		<legend><?php echo __('Create new  Character'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo '<div style="color: #ddd; font-size:150%;">You have <strong><span id="sp">'.$startingSkillPoints.'</span></strong> skill points remaining.</div>';
		echo '<div id="pointInputs">';
		echo $this->Form->input('drivingSkill',array('min'=>0,'onclick'=>'change("CharacterDrivingSkill")','onchange'=>'change("CharacterDrivingSkill")'));
		echo $this->Form->input('mechanicSkill',array('min'=>0,'onclick'=>'change("CharacterDrivingSkill")','onchange'=>'change("CharacterDrivingSkill")'));
		echo $this->Form->input('gunnerSkill',array('min'=>0,'onclick'=>'change("CharacterDrivingSkill")','onchange'=>'change("CharacterDrivingSkill")'));
		echo '</div>';
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Characters'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
<script type='text/javascript'>
	$("#CharacterName").focus();
	var points=<?php echo $startingSkillPoints; ?>
	
	function change(id){
		//get total points used
		var total=0;
		$("input").each(function(){total+=(parseInt($(this).val())||0)});
		$("#sp").text(points-total);
		if (total>points) $(".submit :input").attr("disabled",true);
		else $(".submit :input").attr("disabled",false);
	}
</script>