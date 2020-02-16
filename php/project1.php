<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<head>
	<title>Project</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

</html>
<?php  

$input_data = $_POST['input_data'];
$input_data_oponents = $_POST['input_data_oponents'];
$input_arr = explode(',', $input_data);
$input_arr_oponents = explode(',', $input_data_oponents);
$master['healt'] = $input_arr[0]; $master['Attack'] = $input_arr[1]; $master['Resistance'] = $input_arr[2]; 
$var = $input_arr_oponents;
$apprentice = ['healt' =>5, 'Attack' =>6 , 'Resistance' =>2, ];
$brute = ['healt' =>6, 'Attack' =>8 , 'Resistance' =>2, ];
$guardian = ['healt' =>8, 'Attack' =>6 , 'Resistance' =>5, ];
$resoult = ['winner' => "MorO",'fithers_defeat' => 0, 'fightersRemain'=> 0, 'master_healt' => 0,  'atack_oponents'=>0, 'atack_master' => 0, 'avg_dmg_oponents'=> 0, 'avg_dmg_master' => 0];

$var = 'aab';
$number_of_oponents = strlen($var);
$number_of_defeats_oponents = 0;

for ($i=0; $i < strlen($var); $i++) { 
	str_split($var);
	switch ($var[$i]) {	
		case 'a':
			while (true) {
				$master['healt'] = ($master['healt'] + $master['Resistance']) - $apprentice['Attack'];
				$resoult['atack_oponents']++;
				$resoult['avg_dmg_oponents'] = $resoult['avg_dmg_oponents'] + ($apprentice['Attack'] - $master['Resistance']);
				if ($master['healt'] <= 0) {
					break;
				}
				$apprentice['healt'] = ($apprentice['healt'] + $apprentice['Resistance']) - $master['Attack'];
				$resoult['atack_master'] ++;
				$resoult['avg_dmg_master'] = $resoult['avg_dmg_master'] + ($master['Attack'] - $apprentice['Resistance']);
				if ($apprentice['healt'] <= 0) {
					$number_of_defeats_oponents++;
						break;
				}
			}
		$apprentice['healt'] = 5;
		break;	
		case 'b':
			while (true) {
				$master['healt'] = ($master['healt'] + $master['Resistance']) - $brute['Attack'];
				$resoult['atack_oponents']++;	
				$resoult['avg_dmg_oponents'] = $resoult['avg_dmg_oponents'] + ($brute['Attack'] - $master['Resistance']);
				if ($master['healt'] <= 0) {
					break;
				}
				$brute['healt'] = ($brute['healt'] + $brute['Resistance']) - $master['Attack'];
				$resoult['atack_master'] ++;
				$resoult['avg_dmg_master'] = $resoult['avg_dmg_master'] + ($master['Attack'] - $brute['Resistance']);

				if ($brute['healt'] <= 0)  {
					$number_of_defeats_oponents++;
					break;
				}
			}
		$brute['healt'] = 6;
		break;
		case 'g':
			while (true) {
				$master['healt'] = ($master['healt'] + $master['Resistance']) - $guardian['Attack'];
				$resoult['atack_oponents']++;
				$resoult['avg_dmg_oponents'] = $resoult['avg_dmg_oponents'] + ($guardian['Attack'] - $master['Resistance']);
				if ($master['healt'] <= 0) {
					break;
				}
				$guardian['healt'] = ($guardian['healt'] + $guardian['Resistance']) - $master['Attack'];
				$resoult['atack_master'] ++;
				$resoult['avg_dmg_master'] = $resoult['avg_dmg_master'] + ($master['Attack'] - $guardian['Resistance']);
				if ($guardian['healt'] <= 0) {
					$number_of_defeats_oponents++;
					break;
				}
			}
		$guardian['healt'] = 8;
		break;
	}
}

if ($master['healt'] > 0) {
	$resoult['winner'] = "Master";
}
else{
	$resoult['winner'] = "Fighters";
}

$resoult['fithers_defeat'] = $number_of_defeats_oponents;
$resoult['fightersRemain'] = $number_of_oponents - $number_of_defeats_oponents;

if ($master['healt'] < 0) {
	$master['healt'] = 0;
}
$resoult['master_healt'] = $master['healt'];

if ($resoult['atack_master'] == 0 ) {
	$resoult['avg_dmg_master'] = 0;
}
else{
	$resoult['avg_dmg_master'] /= $resoult['atack_master'];
}

$resoult['avg_dmg_oponents'] /= $resoult['atack_oponents'];
$resoult['avg_dmg_master'] = round($resoult['avg_dmg_master'], 2);
$resoult['avg_dmg_oponents'] =round($resoult['avg_dmg_oponents'], 2);
?>
<table >
	<tr >
		<th ><p>The winner is the</p></th>
		<td ><?= $resoult['winner'] ?></td>
	</tr>
	<tr>
		<th><p>Fighters were defeated:</p></th>
		<td><?= $resoult['fithers_defeat'] ?></td>
	</tr>
	<tr>
		<th><p>Fighter remains:</p></th>
		<td><?= $resoult['fightersRemain'] ?></td>
	</tr>
	<tr>
		<th><p>The master health points:</p></th>
		<td><?= $resoult['master_healt'] ?></td>
	</tr>
	<tr>
		<th><p>The fighters landed hits:</p></th>
		<td><?= $resoult['atack_oponents'] ?></td>
	</tr>
	<tr>
		<th><p>The master landed hits:</p></th>
		<td><?= $resoult['atack_master'] ?></td>
	</tr>
	<tr>
		<th><p>Avrrage damage of fighters:</p></th>
		<td><?= $resoult['avg_dmg_oponents'] ?></td>
	</tr>
	<tr>
		<th><p>Avrrage damage of master:</p></th>
		<td><?= $resoult['avg_dmg_master'] ?></td>
	</tr>
	
</table>
<a href="../index.php"><p>Home</p> </a>


<?php 
include('../includes/footer.php');
 ?>