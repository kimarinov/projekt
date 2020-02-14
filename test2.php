<?php  

$master = ['healt' =>[20,], 'Attack' =>10 , 'Resistance' =>2, ];
// $input_data = $_POST['input_data'];
// $input_arr = explode(',', $input_data);
// $master['healt'][0] = $input_arr[0]; $master['Attack'] = $input_arr[1]; $master['Resistance'] = $input_arr[2]; 
$apprentice = ['healt' =>5, 'Attack' =>6 , 'Resistance' =>2, ];
$brute = ['healt' =>6, 'Attack' =>8 , 'Resistance' =>2, ];
$guardian = ['healt' =>8, 'Attack' =>6 , 'Resistance' =>5, ];
$resoult = ['winner' => "MorO",'fithers_defeat' => 0, 'fightersRemain'=> 0, 'master_healt' => $master['healt'], 'atack_master' => 0, 'atack_oponents'=>0, 'avg_dmg_master' => 0,'avg_dmg_oponents'=> 0, ];


$var = 'aaa';
$count = 0;

	for ($i=0; $i < strlen($var); $i++) { 
	str_split($var);
	switch ($var[$i]) {
		case 'a':


		while ($master['healt'][$count] >= 0 && $apprentice['healt'] >= 0 ) {
		
			$master['healt'][$count] = ($master['healt'][$count] + $master['Resistance']) - $apprentice['Attack'];
			$resoult['atack_master'] ++;
			$resoult['avg_dmg_master'] = $resoult['avg_dmg_master'] + ($master['Attack'] - $apprentice['Resistance']);
			$apprentice['healt'] = ($apprentice['healt'] + $apprentice['Resistance']) - $master['Attack'];
			$resoult['atack_oponents']++;
			$resoult['avg_dmg_oponents'] = $resoult['avg_dmg_oponents'] + ($apprentice['Attack'] - $master['Resistance']);
			$count++;
			}
			
			echo "string ";
			echo $count ." ";
			$apprentice = ['healt' =>5, 'Attack' =>6 , 'Resistance' =>2, ];
		break;
			

		}
		
	}



	// echo $master['healt'];
	// echo "<br>";
// echo $resoult['atack_oponents'];
// echo "<br>";
// echo $resoult['atack_master'];
// echo "<br>";
// echo $resoult['avg_dmg_master'] / $resoult['atack_master'] ;
// echo "<br>";
// echo $resoult['avg_dmg_oponents'] / $resoult['atack_oponents'] ;

// echo $resoult['avg_dmg_master'];
$resoult['avg_dmg_master'] ;
$resoult['avg_dmg_oponents'] /= $resoult['atack_oponents'];
// echo "<pre>";
// echo var_dump($resoult);
// echo "<pre>";

echo "<pre>";
echo var_dump($master);
echo "<pre>";