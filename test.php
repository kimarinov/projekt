<?php  

$master = ['healt' =>20, 'Attack' =>10 , 'Resistance' =>5, ];
$apprentice = ['healt' =>5, 'Attack' =>6 , 'Resistance' =>2, ];
$brute = ['healt' =>6, 'Attack' =>8 , 'Resistance' =>2, ];
$guardian = ['healt' =>8, 'Attack' =>6 , 'Resistance' =>5, ];


$resoult = ['atack_master' => 0, 'atack_oponents'=>0, 'avg_dmg_master' => 0,'avg_dmg_oponents'=> 0, ];



	while ($master['healt'] >= 0 && $guardian['healt'] >= 0 ) {
	
		$master['healt'] = ($master['healt'] + $master['Resistance']) - $guardian['Attack'];
		$resoult['atack_master'] ++;
		$resoult['avg_dmg_master'] = $resoult['avg_dmg_master'] + ($master['Attack'] - $guardian['Resistance']);
		$guardian['healt'] = ($guardian['healt'] + $guardian['Resistance']) - $master['Attack'];
		$resoult['atack_oponents']++;
		$resoult['avg_dmg_oponents'] = $resoult['avg_dmg_oponents'] + ($guardian['Attack'] - $master['Resistance']);
		//echo $master['healt']. " " ;
		//echo $guardian['healt']. "<br>";
		if ( $guardian['healt'] == 0 || $master['healt'] == 0) {
			break;
		}
		echo "<br>";
	}

	while ($master['healt'] >= 0 && $brute['healt'] >= 0 ) {
		
		$master['healt'] = ($master['healt'] + $master['Resistance']) - $brute['Attack'];
		$resoult['atack_master'] ++;
		$resoult['avg_dmg_master'] = $resoult['avg_dmg_master'] + ($master['Attack'] - $brute['Resistance']);
		$brute['healt'] = ($brute['healt'] + $brute['Resistance']) - $master['Attack'];
		$resoult['atack_oponents']++;
		$resoult['avg_dmg_oponents'] = $resoult['avg_dmg_oponents'] + ($brute['Attack'] - $master['Resistance']);
		//echo $master['healt']. " " ;
		//echo $brute['healt']. "<br>";
		if ( $brute['healt'] == 0 || $master['healt'] == 0) {
			break;
		}
		echo "<br>";
	}


echo $resoult['atack_oponents'];
echo "<br>";
echo $resoult['atack_master'];
echo "<br>";
echo $resoult['avg_dmg_oponents'] / $resoult['atack_oponents'] ;
echo "<br>";
echo $resoult['avg_dmg_master'] / $resoult['atack_master'];

//echo $resoult['avg_dmg_master'];