<div class="vehicles form">
<?php echo $this->Html->script(array('jquery-1.6.4.min'));?>
<?php echo $this->Form->create('Vehicle');?>
	<fieldset>
		<legend><?php echo __('Create New Vehicle'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo '<fieldset>';
		echo $this->Form->input('body_id',array('onchange'=>'changeBody()'));
		echo 'Body Cost:<span id="bodyCost"></span>';
		echo '<table>';
		echo '<tr><th></th><th>Capacity</th><th>Total</th><th>Remaining</th></tr>';
		echo "<tr><td>Space</td> <td id='capSpace'></td> <td id='totalSpace'></td> <td id='remainSpace'></td> </tr>";
		echo "<tr><td>Weight</td> <td id='capWeight'></td> <td id='totalWeight'></td> <td id='remainWeight'></td> </tr>";
		echo "<tr><td>Cost</td><td>$money</td><td id='totalCost'>0</td><td id='remainCost'>$money</td></tr>";
		echo '</table>';
		echo '</fieldset>';
/*		echo $this->Form->input('user_id');
		echo $this->Form->input('crew');
		echo $this->Form->input('powerplant_id');
		echo $this->Form->input('chassis');
		echo $this->Form->input('suspension');
		echo $this->Form->input('tire_id');
		echo $this->Form->input('tireLFhp');
		echo $this->Form->input('tireRFhp');
		echo $this->Form->input('tireLBhp');
		echo $this->Form->input('tireRBhp');
		echo $this->Form->input('armorF');
		echo $this->Form->input('armorR');
		echo $this->Form->input('armorB');
		echo $this->Form->input('armorL');
		echo $this->Form->input('armorT');
		echo $this->Form->input('armorU');
		echo $this->Form->input('cost');
		echo $this->Form->input('Accessory');
		echo $this->Form->input('Weapon');*/
//debug($bodyData);
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<script type='text/javascript'>
	//pass php array to javascript
	var jsArray = [];
	<?php
		foreach($bodyData as $i=>$b) {
			//loop and pass each array to javascript
			echo "jsArray[$i]=[];\n";
			//drop name
			unset($b['name']);
			foreach ($b as $j=>$d) echo "jsArray[$i]['$j']=$d;";
		}//end foreach
	?>

	function changeBody() {
		var i=$("#VehicleBodyId").val();
		if(i==0) {
			//no body selected
			$("#bodyCost").text(0);
			$("#capSpace").text('');
			$("#capWeight").text('');
			$(".submit :input").attr("disabled",true);
		} else {
			$("#bodyCost").text(jsArray[i]['cost']);
			$("#capSpace").text(jsArray[i]['maxSpace']);
			$("#capWeight").text(jsArray[i]['maxWeight']);
			$(".submit :input").attr("disabled",false);
		}//endif
		calcSpace();
		calcCost();
		calcWeight();
	}
	
	function calcSpace() {
		//calculate the space remaining and total
		var total=0;
		var cap=$("#capSpace").text();
		var remain=cap-total;
		$("#totalSpace").text(total);
		$("#remainSpace").text(remain);
		if (remain<0) $(".submit :input").attr("disabled",true);
	}
	
	function calcCost() {
		//calculate the total space and remaining budget
		var total=0;
		total+=parseInt($("#bodyCost").text());
		
		var cap=<?php echo $money;?>;
		var remain=cap-total;
		$("#totalCost").text(total);
		$("#remainCost").text(remain);
		if (remain<0) $(".submit :input").attr("disabled",true);
	}

	function calcWeight() {
		//calculate the total weight and remaining
		var total=0;
		
		var cap=$("#capWeight").text();
		var remain=cap-total;
		$("#totalWeight").text(total);
		$("#remainWeight").text(remain);
		if (remain<0) $(".submit :input").attr("disabled",true);
	}
</script>