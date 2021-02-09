<body style=" 
	background-color:#FFF0C9;
	">

<h1><center>Arrays</center></h1>

<h2><center>Crea un array de compañeros, otro de destinos turísticos y asígnalos aleatoriamente mostrando el resultado</center></h2>
<br/>

<?php
$compañeros = [
	'Andrei',
	'Fabian',
	'Hector',
	'Gabriel',
	'Nury',
	'Agustina',
	'Jesús',
	'Ismael',
	'Daniel',
	'Jesús Alfonso',
	'Javier',
	'Rodrigo S.',
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

echo "Compañeros aleatorios<br>";
echo $compañeros[rand(0,15)];
echo "<br>";

echo "Destinos trurísticos aleatorios<br>";
echo $destinos_turísticos[rand(0,15)];
?>
</br>
</br>

<div id="companeros"></div>
<div id="destinos_turísticos"></div>
<script>
companeros = [
	'Andrei',
	'Fabian',
	'Hector',
	'Gabriel',
	'Nury',
	'Agustina',
	'Jesús',
	'Ismael',
	'Daniel',
	'Jesús Alfonso',
	'Javier',
	'Rodrigo S.',
	'Alvaro',
	'Darius',
	'Ivan',
	'Rodrigo T.',
];
destinos_turísticos = [
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
c=Math.random()*(companeros.length -1);
c=Math.round(c);
console.log(c);
document.getElementById('companeros').innerHTML =companeros[c];
d=Math.random()*(destinos_turísticos.length -1);
d=Math.round(d);
console.log(d);
document.getElementById('destinos_turísticos').innerHTML =destinos_turísticos[d];
</script>




<h2><center>Crea un array con los meses del año y muestra el que te indique el usuario a través de un formulario con un campo de texto</center></h2>

<form>
<button>Mostrar</button>
<input name="mes" id="mes" value="<?=$_GET["mes"]?>"onkeyup="Mostrar()"/>
</form>
<br/>
<?php
if(!isset($_GET["mes"]))
	$_GET["mes"]=1;
$meses = [
	'Enero',
	'Febrero',
	'Marzo',
	'Abril',
	'Mayo',
	'Junio',
	'Julio',
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

<div id="t"></div>
<script>

mes = [
	'Enero',
	'Febrero',
	'Marzo',
	'Abril',
	'Mayo',
	'Junio',
	'Julio',
	'Agosto',
	'Septiembre',
	'Octubre',
	'Noviembre',
	'Diciembre',
];
function Mostrar(){
	meses=document.getElementById('mes').value=1;
document.getElementById('t').innerHTML =mes[meses-1];
}
Mostrar();
</script>



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