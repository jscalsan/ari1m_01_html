<h1>Problemas</h1>
<h2>Determina el área de un pentágono regular cuyo lado es de 5 cm y cuya apotema vale 4 cm</h2>
<form>
lado <input placeholder="lado" 
	value="5" id="lado" name="lado" onkeyup="calcular()"/>
apotema <input placeholder="apotema"
	value="4"/ id="apotema" name="apotema" onkeyup="calcular()">
<button onclick="calcular()">Calcular</button>
</form>
<div id="area" style="
	padding:20px;
	background-color:pink;
">
Resultado
</div>

<script>
//alert('hola mundo');
//console.log('hola otra vez');
function calcular(){
	lado=document.getElementById('lado').value;
	apotema=document.getElementById('apotema').value;
	area=(5*lado*apotema)/2;
	document.getElementById('area').innerHTML=area+' cm2';
}
calcular();
</script>

<?php
if(isset($_GET['lado'])){
	$lado = $_GET['lado'];
	$apotema = $_GET['apotema'];
	echo 'area: '.((5*$lado*$apotema)/2);
}
?>
