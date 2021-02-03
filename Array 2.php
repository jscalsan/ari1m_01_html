Crea un array con los meses del año y muestra el que te indique el usuario a través de un formulario con un campo de texto
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
