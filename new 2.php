<h2>Un estanque circular de 6m de radio está rodeado por un sendero de 1m de anchura. Halla el área del sendero</h2>
<form>
radio <input placeholder="radio" 
	value="6" id="r" name="radio" onkeyup="calcular()"/>
anchura <input placeholder="anchura"
	value="1"/ id="a" name="anchura" onkeyup="calcular()">
<button onclick="calcular()">Calcular</button>
</form>
<div id="sendero" style="
	padding:20px;
	background-color:pink;
">

Resultado
</div



<script>
//alert('hola mundo');
//console.log('hola otra vez');
function calcular(){
	r=document.getElementById('r').value;
	a=document.getElementById('a').value;
	sendero=((3.1416*((r+a)*(r+a)))-(3.1416*(r*r)));
	document.getElementById('sendero').innerHTML=sendero+' m2';
}
calcular();
</script>
<?php
if(isset($_GET['r'])){
	$r = $_GET['r'];
	$a = $_GET['a'];
	echo 'superficie de sendero: '.((3.1416*(($r+$a)*($r+$a)))-(3.1416*($r*$r)));
}
?>
