<h2><center>Crea un array con el nombre de tus compañeros, en qué puesto se sienta y selecciona uno de ellos al azar indicando su nombre y puesto</h2>
<br/>

<?php
$companeros = [
	'1'=> 'Andrei',
	'2'=> 'Fabian',
	'3'=> 'Hector',
	'4'=> 'Gabriel',
	'5'=> 'Nury',
	'6'=> 'Agustina',
	'7'=> 'Jesús',
	'10'=> 'Ismael',
	'8'=> 'Daniel',
	'12'=> 'Jesús Alfonso',
	'13'=> 'Javier',
	'14'=> 'Rodrigo S.',
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
</br>
<div id="r3"></div>
<script>
puestos= [
	'1-Andrei',
	'2-Fabian',
	'3-Hector',
	'4-Gabriel',
	'5-Nury',
	'6-Agustina',
	'7-Jesus',
	'10-Ismael',
	'8-Daniel',
	'12-Jesus Alfonso',
	'13-Javier',
	'14-Rodrigo S.',
	'15-Alvaro',
	'16-Darius',
	'17-Ivan',
	'18-Rodrigo T.',
];
i=Math.random()*((puestos.length)-1);
i=Math.round(i);
console.log(i);
console.log(puestos);
document.getElementById('r3').innerHTML =puestos[i];
</script>