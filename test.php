<?php  


$var = 'aabcaewewa';
echo $var;
echo "<br>";

for ($i=0; $i < strlen($var); $i++) { 
	str_split($var);
	switch ($var[$i]) {
	case 'a':
		echo "a ";
		break;
	case 'b':
		echo "b ";
		break;
	case 'c':
		echo "c ";
		break;
	
	}
}
