Crea un array con el nombre de tus compañeros, en qué puesto se sienta y selecciona uno de ellos al azar indicando su nombre y puesto
<br/>
</br>

<?php
$companeros = [
	'1'=> 'Andrei',
	'2'=> 'Fabian',
	'3'=> 'Hector',
	'4'=> 'Gabriel',
	'5'=> 'Nury',
	'6'=> 'Agustina Soledad',
	'7'=> 'Jesús',
	'10'=> 'Ismael',
	'8'=> 'Daniel',
	'12'=> 'Jesús Alfonso',
	'13'=> 'Javier',
	'14'=> 'Rodrigo',
	'15'=> 'Alvaro',
	'16'=> 'Darius',
	'17'=> 'Ivan',
	'18'=> 'Rodrigo T.',
];
$i=rand(0,count($companeros));
$c=0;
foreach($companeros as $m=>$nombre){
		$c++;

		if($i==$c)
			echo $m. '-'.$nombre.'<br/>';
}

?>