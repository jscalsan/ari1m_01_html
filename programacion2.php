< h1 > Ley de Ohm </ h1 >
< formulario >
V < input  placeholder = " Voltaje "
	value = " 30 " id = " v " name = " v " onkeyup = " calcular () " />
R < input  placeholder = " Resistencia "
	valor = " 1 " / id = "r" nombre = "r" onkeyup = "calcular ()" >
< button  onclick = " calcular () " > Calcular </ button >
</ formulario >
< div  id = " i " style = "
	relleno: 20px;
	color de fondo: rosa;
" >
Resultado
</ div >

< guión >
// alerta ('hola mundo');
//console.log('hola otra vez ');
función  calcular ( ) {
	v = documento . getElementById ( 'v' ) . valor ;
	r = documento . getElementById ( 'r' ) . valor ;
	i = v / r ;
	documento . getElementById ( 'i' ) . innerHTML = i + 'Amperios' ;
}
calcular ( ) ;
</ script >

<? php
if ( isset ( $ _GET [ 'r' ])) {
	$ r = $ _GET [ 'r' ];
	$ v = $ _GET [ 'v' ];
	echo  'Intensidad eléctrica:' . ( $ v / $ r );
	
}
?>