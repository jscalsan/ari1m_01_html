<h2>Crea un array de compañeros, otro de destinos turísticos y asígnalos aleatoriamente mostrando el resultado</h2>
<br/>
</br>

<?php
$compañeros = [
	'Andrei',
	'Fabian',
	'Hector',
	'Gabriel',
	'Nury',
	'Agustina Soledad',
	'Jesús',
	'Ismael',
	'Daniel',
	'Jesús Alfonso',
	'Javier',
	'Rodrigo',
	'Alvaro',
	'Darius',
	'Ivan',
	'Rodrigo T.',
];
$destinos_turísticos = [
	'San Vicente de la Barquera',
	'Comillas',
	'Santillana del Mar',
	'Carmona',
	'Cabezon de la Sal',
	'Potes',
	'Barcena Mayor',
	'Cahecho',
	'Vega de Pas',
	'Mogrovejo',
	'Puente Viesgo',
	'Noja',
	'Cosío',
	'Liencres',
	'Cartes',
	'Cervatos',
];

echo "compañeros aleatorios<br>";
echo $compañeros[rand(0,15)];
echo "<br>";

echo "destinos trurísticos aleatorios<br>";
echo $destinos_turísticos[rand(0,15)];
?>
</br>
</br>




<h2>Crea un array con los meses del año y muestra el que te indique el usuario a través de un formulario con un campo de texto</h2>
<br/>
</br>
<form>
<input name="mes"/>
</form>
<?php
$meses = [
	'Enero',
	'Febrero',
	'Marzo',
	'Abril',
	'Mayo',
	'Junio',
	'Junio',
	'Agosto',
	'Septiembre',
	'Octubre',
	'Noviembre',
	'Diciembre',
];
$mes= $_GET['mes'];
foreach ($meses as $n=>$m){
if ($n==$mes-1){
echo $m;
}}

?>
</br>
</br>



<h2>Crea un array con el nombre de tus compañeros, en qué puesto se sienta y selecciona uno de ellos al azar indicando su nombre y puesto</h2>
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

<div id="n"></div>
<script>

companeros = [
	
	'1 Andrei',
	'2 Fabian',
	'3 Hector',
	'4 Gabriel',
	'5 Nury',
	'6 Agustina Soledad',
	'7 Jesús',
	'10 Ismael',
	'8 Daniel',
	'12 Jesús Alfonso',
	'13 Javier',
	'14 Rodrigo',
	'15 Alvaro',
	'16 Darius',
	'17 Ivan',
	'18 Rodrigo T.',

]
i=Math.random()*(companeros.length -1);
i=Math.round(i);
console.log(i);
document.getElementById('n').innerHTML =companeros[i];
</script>