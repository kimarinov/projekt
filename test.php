<?php  


$var = 'abc';

for ($i=0; $i < strlen($var); $i++) { 
	str_split($var);
	switch ($var[$i]) {
	case 'a':
		echo "string123123 ";
		
	case 'b':
		echo "23 ";
		break;
	case 'c':
		echo "rwerw ";
		break;
	
	}
}
