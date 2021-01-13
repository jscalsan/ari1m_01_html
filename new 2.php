
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