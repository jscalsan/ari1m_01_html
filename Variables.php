<h1><center>Problemas</center></h1>
<h2><center>Ejercicio 1</h2><center><image height=60% src="imagenes/pentagono.jpg"/></center></center>
<h3>Determina el área de un pentágono regular cuyo lado es de 5 cm y cuya apotema vale 4 cm</h3>
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
<h2><center>Ejercicio 2</h2><center><image height=60% src="imagenes/piscina.jpg"/></center></center>
<h3>Un estanque circular de 6m de radio está rodeado por un sendero de 1m de anchura. Halla el área del sendero</h3>
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
	superficie=Math.round(superficie*100)/100;
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
<h2><center>Ejercicio 3</h2><center><image height=60% src="imagenes/ordenadores.jpg"/></center></center>
<h3>Una tienda ha vendido 60 ordenadores, cuyo precio original era de 1200 EUR, con un descuento del 20% 
a unos y del 25% a otros. Si se han recaudado 56.400 EUR, calcule a cuántos ordenadores se les rebajó el 25%</h3>
<form>

número total de ordenadores <input placeholder="número total de ordenadores" 
	value="60" id="n" name="n" onkeyup="calcular3()"/>
	
precio unitario <input placeholder="precio unitario" 
	value="1200" id="p" name="p" onkeyup="calcular3()"/>
	
descuento1 "%"<input placeholder="descuento 1" 
	value="0.20" id="d1" name="d1" onkeyup="calcular3()"/>
	
descuento2 "%"<input placeholder="descuento 2" 
	value="0.25" id="d2" name="d2" onkeyup="calcular3()"/>	
	
valor venta total <input placeholder="valor venta total%"
	value="56400"/ id="e" name="e" onkeyup="calcular3()">
	
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
	n=document.getElementById('n').value;
	p=document.getElementById('p').value;
	d1=document.getElementById('d1').value;
	d2=document.getElementById('d2').value;
	e=document.getElementById('e').value;
	parseInt(n);
	parseInt(p);
	parseInt(d1);
	parseInt(d2);
	parseInt(e);
	
	ordenadores=(((e/p)+(n*d1)-n))/(d1-d2);
	ordenadores=Math.round(ordenadores*100)/100;
	document.getElementById('ordenadores').innerHTML=ordenadores+' ordenadores con descuento 25%';
}
calcular3();
</script>

<?php
if(isset($_GET['n'])){
	$n = $_GET['n'];
	$p = $_GET['p'];
	$d1 = $_GET['d1'];
	$d2 = $_GET['d2'];
	$e= $_GET['e'];
	echo 'Ordenadores con descuento 25%: '.((($e/$p)+($n*$d1)-$n)/($d1-$d2));
}
?>

<h2><center>Ejercicio 4</h2><center><image height=60% src="imagenes/parcela.jpg"/></center></center>
<h3>Se desea vender un solar rectangular de 12.800 m2 dividiéndolo en tres parcelas rectangulares iguales. 
Si se quieren vallar las lindes de las tres parcelas (los bordes y las separaciones de las parcelas), determina 
las dimensiones del solar para que la longitud de la valla utilizada sea mínima</h3>
<form>
Area m2 <input placeholder="Area" 
	value="12800" id="a" name="a" onkeyup="calcular4()"/>

<button onclick="calcular4()">Calcular</button>
</form>
<div id="largo" style="
	padding:20px;
	background-color:pink;
">
</div>
<div id="ancho" style="
	padding:20px;
	background-color:pink;
">
Resultado
</div>

<script>
function calcular4(){
	a=document.getElementById('a').value;
	x=Math.sqrt((2*a)/9);
	x=Math.round(x*100)/100;
	ancho=a/(x*3);
	ancho=Math.round(ancho*100)/100;
	document.getElementById('largo').
	innerHTML=x+' m de ancho (y)';
	document.getElementById('ancho').
	innerHTML=ancho+' m de largo (x)';
}
calcular4();
</script>

<?php
if(isset($_GET['a'])){
	$a = $_GET['a'];
	echo 'Ancho: '.sqrt((($a*2)/9));
	echo 'Largo: '.($a/(((sqrt(($a*2)/9)))*3));
}
?>