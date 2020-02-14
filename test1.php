<?php  

$master = ['healt' => [20, 30, 50, 60, 30, 35, 53],  'Attack' => 10 , 'Resistance' =>2, ];
$apprentice = ['healt' =>5, 'Attack' =>6 , 'Resistance' =>2, ];
$brute = ['healt' =>6, 'Attack' =>8 , 'Resistance' =>2, ];
$guardian = ['healt' =>8, 'Attack' =>6 , 'Resistance' =>5, ];


echo "<pre>";
echo var_dump($master);
echo "<pre>";
$count_healt = count($master['healt']);

echo $master['healt'][$count_healt - 1];