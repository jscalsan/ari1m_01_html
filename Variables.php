<h1>Problemas</h1>
<div>
<h2>Determina el área de un pentágono regular cuyo lado es de 5 cm y cuya apotema vale 4 cm</h2>
<form>
lado <input placeholder="lado" 
	value="5" id="l" name="lado" onkeyup="calcular()"/>
apotema <input placeholder="apotema"
	value="4"/ id="ap" name="apotema" onkeyup="calcular()">
<button onclick="calcular()">Calcular</button>
</form>
<div id="area" style="
	padding:20px;
	background-color:pink;
">
Resultado
</div>

<script>
function calcular(){
	l=document.getElementById('l').value;
	ap=document.getElementById('ap').value;
	area=(5*l*ap)/2
	document.getElementById('area').
	innerHTML=area+' cm2';
}
calcular();
</script>

<?php
if(isset($_GET['l'])){
	$l = $_GET['l'];
	$ap = $_GET['ap'];
	echo 'area: '.((5*$l*$ap)/2);
}
?>
</div>
<div>
<h2>Un estanque circular de 6m de radio está rodeado por un sendero de 1m de anchura. Halla el área del sendero</h2>
<form>
radio <input placeholder="radio" 
	value="6" id="r" name="radio" onkeyup="calcular()"/>
anchura <input placeholder="anchura"
	value="1"/ id="anch" name="anchura" onkeyup="calcular()">
<button onclick="calcular()">Calcular</button>
</form>
<div id="sendero" style="
	padding:20px;
	background-color:pink;
">
Resultado
</div>

<script>
function calcular(){
	r=document.getElementById('r').value;
	anch=document.getElementById('anch').value;
	sendero=((1*((r+anch)*(r+anch)))-(1*(r*r)));
	document.getElementById('sendero').innerHTML=sendero+' m2';
}
calcular();
</script>

<?php
if(isset($_GET['r'])){
	$r = $_GET['r'];
	$anch = $_GET['anch'];
	echo 'superficie de sendero: '.((Pi*(($r+$anch)*($r+$anch)))-(Pi*($r*$r)));
}
?>

</div>
<div>
<h2>Una tienda ha vendido 60 ordenadores, cuyo precio original era de 1200 EUR, con un descuento del 20% 
a unos y del 25% a otros. Si se han recaudado 56.400 EUR, calcule a cuántos ordenadores se les rebajó el 25%</h2>
<form>
dto 20% <input placeholder="dto 20%" 
	value="40" id="dto1" name="dto 20%" onkeyup="calcular()"/>
dto 25% <input placeholder="dto 25%"
	value="20"/ id="dto2" name="dto 25%" onkeyup="calcular()">
<button onclick="calcular()">Calcular</button>
</form>
<div id="ordenadores" style="
	padding:20px;
	background-color:pink;
">
Resultado
</div>

<script>
function calcular(){
	dto1=document.getElementById('dto1').value;
	dto2=document.getElementById('dto2').value;
	ordenadores=(dto1+dto2);
	document.getElementById('ordenadores').innerHTML=sendero+' ordenadores';
}
calcular();
</script>

<?php
if(isset($_GET['dto1'])){
	$dto1 = $_GET['dto1'];
	$dto2 = $_GET['dto2'];
	echo 'ordenadores: '.($dto1+$dto2);
}
?>


</div>
<div>
<h2>Se desea vender un solar rectangular de 12.800 m2 dividiéndolo en tres parcelas rectangulares iguales. 
Si se quieren vallar las lindes de las tres parcelas (los bordes y las separaciones de las parcelas), determina 
las dimensiones del solar para que la longitud de la valla utilizada sea mínima</h2>
<form>
lado x <input placeholder="lado x" 
	value="53.33" id="x" name="lado x" onkeyup="calcular()"/>
lado y <input placeholder="lado y"
	value="80"/ id="y" name="lado y" onkeyup="calcular()">
<button onclick="calcular()">Calcular</button>
</form>
<div id="superficie solar" style="
	padding:20px;
	background-color:pink;
">
Resultado
</div>

<script>
function calcular(){
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
</div>