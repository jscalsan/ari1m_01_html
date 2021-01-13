<h1>Problemas</h1>
<h3><center>Ejercicio 1</h3><image height=30% src="imagenes/pentagono.jpg"/></center>
<h2>Determina el área de un pentágono regular cuyo lado es de 5 cm y cuya apotema vale 4 cm</h2>
<form>
Lado <input placeholder="lado" 
	value="5" id="lado" name="lado" onkeyup="calcular1()"/>
Apotema <input placeholder="apotema"
	value="4"/ id="apotema" name="apotema" onkeyup="calcular1()">
<button onclick="calcular1()">Calcular</button>
</form>
<div id="area" style="
	padding:20px;
	background-color:pink;
">
Resultado
</div>

<script>
function calcular1(){
	lado=document.getElementById('lado').value;
	apotema=document.getElementById('apotema').value;
	area=(5*lado*apotema)/2
	document.getElementById('area').
	innerHTML=area+' cm2';
}
calcular1();
</script>

<?php
if(isset($_GET['lado'])){
	$lado = $_GET['lado'];
	$apotema = $_GET['apotema'];
	echo 'Area de pentágono: '.((5*$lado*$apotema)/2); 
}
?>
<h3><center>Ejercicio 2</h3><image height=30% src="imagenes/piscina.jpg"/></center>
<h2>Un estanque circular de 6m de radio está rodeado por un sendero de 1m de anchura. Halla el área del sendero</h2>
<form>
Radio estanque <input placeholder="radio" 
	value="6" id="radio" name="radio" onkeyup="calcular2()"/>
Anchura sendero <input placeholder="anchura"
	value="1"/ id="anchura" name="anchura" onkeyup="calcular2()">
<button onclick="calcular2()">Calcular</button>
</form>
<div id="superficie" style="
	padding:20px;
	background-color:pink;
">
Resultado
</div>

<script>
function calcular2(){
	radio=document.getElementById('radio').value;
	anchura=document.getElementById('anchura').value;
	parseInt(radio);
	parseInt(anchura);
	superficie=((3.14*((parseInt(radio)+parseInt(anchura))*(parseInt(radio)+parseInt(anchura))))-(3.14*(parseInt(radio)*parseInt(radio))));
	document.getElementById('superficie').innerHTML=superficie+' m2';
}
calcular2();
</script>

<?php
if(isset($_GET['radio'])){
	$radio = $_GET['radio'];
	$anchura = $_GET['anchura'];
	echo 'Superficie de sendero: '.((3.14*(($radio+$anchura)*($radio+$anchura)))-(3.14*($radio*$radio)));
}
?>


<h2>Una tienda ha vendido 60 ordenadores, cuyo precio original era de 1200 EUR, con un descuento del 20% 
a unos y del 25% a otros. Si se han recaudado 56.400 EUR, calcule a cuántos ordenadores se les rebajó el 25%</h2>
<form>
dto 20% <input placeholder="dto 20%" 
	value="40" id="dto1" name="dto 20%" onkeyup="calcular3()"/>
dto 25% <input placeholder="dto 25%"
	value="20"/ id="dto2" name="dto 25%" onkeyup="calcular3()">
<button onclick="calcular3()">Calcular</button>
</form>
<div id="ordenadores" style="
	padding:20px;
	background-color:pink;
">
Resultado
</div>

<script>
function calcular3(){
	dto1=document.getElementById('dto1').value;
	dto2=document.getElementById('dto2').value;
	ordenadores=(dto1+dto2);
	document.getElementById('ordenadores').innerHTML=sendero+' ordenadores';
}
calcular3();
</script>

<?php
if(isset($_GET['dto1'])){
	$dto1 = $_GET['dto1'];
	$dto2 = $_GET['dto2'];
	echo 'ordenadores: '.($dto1+$dto2);
}
?>


<h3><center>Ejercicio 4</h3><image height=30% src="imagenes/parcela.jpg"/></center>
<h2>Se desea vender un solar rectangular de 12.800 m2 dividiéndolo en tres parcelas rectangulares iguales. 
Si se quieren vallar las lindes de las tres parcelas (los bordes y las separaciones de las parcelas), determina 
las dimensiones del solar para que la longitud de la valla utilizada sea mínima</h2>
<form>
lado x <input placeholder="lado x" 
	value="53.33" id="x" name="lado x" onkeyup="calcular4()"/>
lado y <input placeholder="lado y"
	value="80"/ id="y" name="lado y" onkeyup="calcular4()">
<button onclick="calcular4()">Calcular</button>
</form>
<div id="superficie solar" style="
	padding:20px;
	background-color:pink;
">
Resultado
</div>

<script>
function calcular4(){
	x=document.getElementById('x').value;
	y=document.getElementById('y').value;
	superficie solar=(sqrt((2*x*y)/9))*((x*y)/(3*x));
	document.getElementById('superficie solar').innerHTML=superficie solar+' m2';
}
calcular();
</script>

<?php
if(isset($_GET['x'])){
	$x = $_GET['x'];
	$y = $_GET['y'];
	echo 'superficie solar: '.(($sqrt((2*$x*$y)/9))*(($x*$y)/(3*$x)));
}
?>
