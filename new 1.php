<h2><center>Ejercicio 4</h2><center><image height=20% src="imagenes/parcela.jpg"/></center></center>
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
	$Ancho=sqrt(($a*2)/9);
	$Ancho=round($Ancho,2);
	$Largo=$a/(Ancho*3);
	$Largo=round(Largo,2);
}
?>
