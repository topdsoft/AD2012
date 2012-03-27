<div class="vehicles form">
<?php echo $this->Html->script(array('jquery-1.6.4.min'));?>
<?php echo $this->Form->create('Vehicle');?>
	<fieldset>
		<legend><?php echo __('Create New Vehicle'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo '<fieldset>';
		echo $this->Form->input('body_id',array('onchange'=>'changeBody()'));
//		echo 'Body Cost:<span id="bodyCost"></span>';
		
		echo '<table>';
		echo '<tr><th></th><th>Capacity</th><th>Total</th><th>Remaining</th></tr>';
		echo "<tr><td>Space</td> <td id='capSpace'></td> <td id='totalSpace'></td> <td id='remainSpace'></td> </tr>";
		echo "<tr><td>Weight</td> <td id='capWeight'></td> <td id='totalWeight'></td> <td id='remainWeight'></td> </tr>";
		echo "<tr><td>Cost</td><td>$money</td><td id='totalCost'>0</td><td id='remainCost'>$money</td></tr>";
		echo '</table>';
		echo '</fieldset>';
/*		echo $this->Form->input('user_id');
		
		
		echo $this->Form->input('suspension');
		
		echo $this->Form->input('tireLFhp');
		echo $this->Form->input('tireRFhp');
		echo $this->Form->input('tireLBhp');
		echo $this->Form->input('tireRBhp');
		
		echo $this->Form->input('armorR');
		echo $this->Form->input('armorB');
		echo $this->Form->input('armorL');
		echo $this->Form->input('armorT');
		echo $this->Form->input('armorU');
		echo $this->Form->input('cost');
		echo $this->Form->input('Accessory');
		echo $this->Form->input('Weapon');*/
//debug($weaponData);
	?>
	<div style="overflow-y:auto; ">
	<table id="mytable">
		<tr><th></th><th></th><th></th><th>Spaces</th><th>Weight</th><th>Cost</th></tr>
		<tr><td rowspan="5"></td><td><?php echo $this->Form->input('chassis_id',array('between'=>'</td><td>','onchange'=>'changeBody()')); ?></td><td>-</td><td>-</td><td id="bodyCost" class="cost"></td></tr>
		<tr><td><?php echo $this->Form->input('powerplant_id',array('between'=>'</td><td>','onchange'=>'changePP()')); ?></td>
			<td id="ppSpace" class="space"><?php echo $ppData[1]['space'] ?></td>
			<td id="ppWeight" class="weight"><?php echo $ppData[1]['weight'] ?></td>
			<td id="ppCost" class="cost"><?php echo $ppData[1]['cost'] ?></td></tr>
		<tr><td><?php echo $this->Form->input('tire_id',array('label'=>'Tires(<span id="numTires">4</span>)','between'=>'</td><td>','onchange'=>'changeTires()')); ?></td>
			<td>-</td>
			<td id="tireWeight" class="weight"><?php echo $tireData[1]['weight']*4; ?></td>
			<td id="tireCost" class="cost"><?php echo $tireData[1]['cost']*4; ?></td></tr>
		<tr><td>Driver</td><td></td><td class="space">2</td><td class="weight">150</td><td>-</td></tr>
		<tr><td><?php echo $this->Form->input('crew',array('between'=>'</td><td>','onchange'=>'changeCrew()','onclick'=>'changeCrew()','class'=>'numinput','min'=>0)); ?></td>
			<td id="crewSpace" class="space">0</td>
			<td id="crewWeight" class="weight">0</td>
			<td id="crewCost" class="cost">0</td></tr>
		<tr><td></td><td></td><td></td><td></td><td></td><td></td></tr>
		<tr><td rowspan="6"></td>
			<td><?php echo $this->Form->input('armorF',array('label'=>'Front','between'=>'</td><td>','onchange'=>'changeArmor("F")','onclick'=>'changeArmor("F")','class'=>'numinput','min'=>0)); ?></td>
			<td>-</td>
			<td id="armorWeightF" class="weight">0</td>
			<td id="armorCostF" class="cost">0</td></tr>
		<tr><td><?php echo $this->Form->input('armorB',array('label'=>'Back','between'=>'</td><td>','onchange'=>'changeArmor("B")','onclick'=>'changeArmor("B")','class'=>'numinput','min'=>0)); ?></td>
			<td>-</td>
			<td id="armorWeightB" class="weight">0</td>
			<td id="armorCostB" class="cost">0</td></tr>
		<tr><td><?php echo $this->Form->input('armorR',array('label'=>'Right','between'=>'</td><td>','onchange'=>'changeArmor("R")','onclick'=>'changeArmor("R")','class'=>'numinput','min'=>0)); ?></td>
			<td>-</td>
			<td id="armorWeightR" class="weight">0</td>
			<td id="armorCostR" class="cost">0</td></tr>
		<tr><td><?php echo $this->Form->input('armorL',array('label'=>'Left','between'=>'</td><td>','onchange'=>'changeArmor("L")','onclick'=>'changeArmor("L")','class'=>'numinput','min'=>0)); ?></td>
			<td>-</td>
			<td id="armorWeightL" class="weight">0</td>
			<td id="armorCostL" class="cost">0</td></tr>
		<tr><td><?php echo $this->Form->input('armorT',array('label'=>'Top','between'=>'</td><td>','onchange'=>'changeArmor("T")','onclick'=>'changeArmor("T")','class'=>'numinput','min'=>0)); ?></td>
			<td>-</td>
			<td id="armorWeightT" class="weight">0</td>
			<td id="armorCostT" class="cost">0</td></tr>
		<tr><td><?php echo $this->Form->input('armorU',array('label'=>'Under','between'=>'</td><td>','onchange'=>'changeArmor("U")','onclick'=>'changeArmor("U")','class'=>'numinput','min'=>0)); ?></td>
			<td>-</td>
			<td id="armorWeightU" class="weight">0</td>
			<td id="armorCostU" class="cost">0</td></tr>
		<tr><td></td><td></td><td></td><td></td><td></td><td></td></tr>
		
		<tr id="w0" style="display:none;"><td><?php echo $this->Form->button('&nbsp;-&nbsp;',array('type'=>'button','title'=>'Click Here to remove this weapon')); ?></td>
			<td><?php echo $this->Form->input('Vehicle.weaponPosition.0',array('label'=>'','type'=>'select','options'=>$positions)); ?></td>
			<td><?php echo $this->Form->input('Vehicle.weapon_id.0',array('label'=>'','type'=>'select','options'=>$weapons,'onchange'=>'changeW(0)')); ?></td>
			<td id="weaponSpace0" class="space"></td>
			<td id="weaponWeight0" class="weight"></td>
			<td id="weaponCost0" class="cost"></td></tr>
		
		<tr id="trAddW"><td> <?php echo $this->Form->button('+',array('type'=>'button','title'=>'Click Here to add another weapon','onclick'=>'addW()')); ?> </td><td></td><td></td><td></td><td></td><td></td></tr>
		<tr><td></td><td></td><td></td><td></td><td></td><td></td></tr>
		
		<tr id="a0" style="display:none;"><td><?php echo $this->Form->button('&nbsp;-&nbsp;',array('type'=>'button','title'=>'Click Here to remove this accessory')); ?></td>
			<td></td>
			<td><?php echo $this->Form->input('Vehicle.acc_id.0',array('label'=>'','type'=>'select','options'=>$accessories,'onchange'=>'changeA(0)')); ?></td>
			<td id="accSpace0" class="space"></td>
			<td id="accnWeight0" class="weight"></td>
			<td id="accCost0" class="cost"></td></tr>
		
		<tr id="trAddA"><td> <?php echo $this->Form->button('+',array('type'=>'button','title'=>'Click Here to add another accessory','onclick'=>'addA()')); ?> </td><td></td><td></td><td></td><td></td><td></td></tr>
		<tr><td></td><td></td><td></td><td></td><td></td><td></td></tr>
	</table>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
</div>
<script type='text/javascript'>
	var armorCost=0;
	var armorWeight=0;
	var lastWeaponRow=0;
	var lastAccRow=0;
	//pass php arrays to javascript
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
	var jsChassis = [];
	<?php
		foreach($chassisData as $i=>$c) {
			echo "jsChassis[$i]=[];\n";
			unset($c['name']);
			foreach ($c as $j=>$d) echo "jsChassis[$i]['$j']=$d;";
		}
	?>
	var jsPP = [];
	<?php
		foreach($ppData as $i=>$c) {
			echo "jsPP[$i]=[];\n";
			foreach ($c as $j=>$d) echo "jsPP[$i]['$j']='$d';";
		}
	?>
	var jsTire = [];
	<?php
		foreach($tireData as $i=>$c) {
			echo "jsTire[$i]=[];\n";
			foreach ($c as $j=>$d) echo "jsTire[$i]['$j']='$d';";
		}
	?>
	var jsWeapon = [];
	<?php
		foreach($weaponData as $i=>$c) {
			echo "jsWeapon[$i]=[];\n";
			foreach ($c as $j=>$d) echo "jsWeapon[$i]['$j']='$d';";
		}
	?>
	var jsAcc = [];
	<?php
		foreach($accData as $i=>$c) {
			echo "jsAcc[$i]=[];\n";
			foreach ($c as $j=>$d) echo "jsAcc[$i]['$j']='$d';";
		}
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
			//get chassis_id
			var c=$("#VehicleChassisId").val();
			$("#bodyCost").text(jsArray[i]['cost']*jsChassis[c]['cost']);
			$("#capSpace").text(jsArray[i]['maxSpace']);
			$("#capWeight").text(parseInt(jsArray[i]['maxWeight']*jsChassis[c]['load']));
			$(".submit :input").attr("disabled",false);
			//deal with armor change
			armorCost=jsArray[i]['armorCost'];
			armorWeight=jsArray[i]['armorWeight'];
			changeArmor('F');
			changeArmor('B');
			changeArmor('R');
			changeArmor('L');
			changeArmor('T');
			changeArmor('U');
		}//endif
		calcSpace();
		calcCost();
		calcWeight();
	}
	
	function changePP(){
		var i=$("#VehiclePowerplantId").val();
		$("#ppSpace").text(jsPP[i]['space']);
		$("#ppWeight").text(jsPP[i]['weight']);
		$("#ppCost").text(jsPP[i]['cost']);
		calcSpace();
		calcCost();
		calcWeight();
	}
	
	function changeTires(){
		var i=$("#VehicleTireId").val();
		var n=$("#numTires").text();
		$("#tireWeight").text(jsTire[i]['weight']*n);
		$("#tireCost").text(jsTire[i]['cost']*n);
		calcCost();
		calcWeight();
	}
	
	function changeCrew(){
		var i=$("#VehicleCrew").val();
		$("#crewSpace").text(i*2);
		$("#crewWeight").text(i*150);
		$("#crewCost").text(i*200);
		calcSpace();
		calcCost();
		calcWeight();
	}
	
	function changeArmor(p){
		var i=$("#VehicleArmor"+p).val();
		$("#armorWeight"+p).text(i*armorWeight);
		$("#armorCost"+p).text(i*armorCost);
		calcCost();
		calcWeight();
	}
	
	function changeW(x){
		var i=$("#VehicleWeaponId"+x).val();
		$("#weaponSpace"+x).text(jsWeapon[i]['space']);
		$("#weaponWeight"+x).text(jsWeapon[i]['weight']);
		$("#weaponCost"+x).text(jsWeapon[i]['cost']);
		calcSpace();
		calcCost();
		calcWeight();
	}
	
	function changeA(x){
		var i=$("#VehicleAccId"+x).val();
		$("#accSpace"+x).text(jsAcc[i]['space']);
		$("#accWeight"+x).text(jsAcc[i]['weight']);
		$("#accCost"+x).text(jsAcc[i]['cost']);
		calcSpace();
		calcCost();
		calcWeight();
	}
	
	function calcSpace() {
		//calculate the space remaining and total
		var total=0;
		$(".space").each(function(){total+=(parseInt($(this).text())||0)});

		var cap=$("#capSpace").text();
		var remain=cap-total;
		$("#totalSpace").text(total);
		$("#remainSpace").text(remain);
		if (remain<0) $(".submit :input").attr("disabled",true);
	}
	
	function calcCost() {
		//calculate the total space and remaining budget
		var total=0;
		$(".cost").each(function(){total+=(parseInt($(this).text())||0)});
		
		var cap=<?php echo $money;?>;
		var remain=cap-total;
		$("#totalCost").text(total);
		$("#remainCost").text(remain);
		if (remain<0) $(".submit :input").attr("disabled",true);
	}

	function calcWeight() {
		//calculate the total weight and remaining
		var total=0;
		$(".weight").each(function(){total+=(parseInt($(this).text())||0)});
		
		var cap=$("#capWeight").text();
		var remain=cap-total;
		$("#totalWeight").text(total);
		$("#remainWeight").text(remain);
		if (remain<0) $(".submit :input").attr("disabled",true);
	}
	
	function addW() {
		lastWeaponRow++;
		$("#mytable tbody>tr:#w0").clone(true).attr('id','w'+lastWeaponRow).removeAttr('style').insertBefore("#mytable tbody>tr:#trAddW");
		$("#w"+lastWeaponRow+" button").attr('onclick','removeW('+lastWeaponRow+')');
		$("#w"+lastWeaponRow+" select:first").attr('name','data[Vehicle][weaponPosition]['+lastWeaponRow+']').attr('id','VehicleWeaponPosition'+lastWeaponRow);
		$("#w"+lastWeaponRow+" select:last").attr('name','data[Vehicle][weapon_id]['+lastWeaponRow+']').attr('onchange','changeW('+lastWeaponRow+')').attr('id','VehicleWeaponId'+lastWeaponRow);
		$("#w"+lastWeaponRow+" td:.space").attr('id','weaponSpace'+lastWeaponRow);
		$("#w"+lastWeaponRow+" td:.weight").attr('id','weaponWeight'+lastWeaponRow);
		$("#w"+lastWeaponRow+" td:.cost").attr('id','weaponCost'+lastWeaponRow);
		changeW(lastWeaponRow);
	}
	
	function removeW(x) {
		$("#w"+x).remove();
		calcSpace();
		calcCost();
		calcWeight();
	}
	
	function addA() {
		lastAccRow++;
		$("#mytable tbody>tr:#a0").clone(true).attr('id','a'+lastAccRow).removeAttr('style').insertBefore("#mytable tbody>tr:#trAddA");
		$("#a"+lastAccRow+" button").attr('onclick','removeA('+lastAccRow+')');
		$("#a"+lastAccRow+" select").attr('name','data[Vehicle][acc_id]['+lastAccRow+']').attr('onchange','changeA('+lastAccRow+')').attr('id','VehicleAccId'+lastAccRow);
		$("#a"+lastAccRow+" td:.space").attr('id','accSpace'+lastAccRow);
		$("#a"+lastAccRow+" td:.weight").attr('id','accWeight'+lastAccRow);
		$("#a"+lastAccRow+" td:.cost").attr('id','accCost'+lastAccRow);
		changeA(lastAccRow);
	}
	
	function removeA(x) {
		$("#a"+x).remove();
		calcSpace();
		calcCost();
		calcWeight();
	}
</script>