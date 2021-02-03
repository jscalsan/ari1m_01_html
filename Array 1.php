Crea un array de compañeros, otro de destinos turísticos y asígnalos aleatoriamente mostrando el resultado
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