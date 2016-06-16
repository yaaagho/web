//COMECANDO A APRENDER PHP <br>
<?php
	$A="oi";
	$x=10;

//concatenando variaveis
	echo $A."Bom dia";


//salta linha
	echo "<br>";


//escreve o bom dia e o 10
	echo "bom dia $x";
	echo "<br>";


//escreve o bom dia e o $x	
	echo 'bom dia $x';
	echo "<br>";


//passa traço
	echo "<hr>";


//IF
//sempre colocar a variavel antes
if($x == 10){
	echo "igual a 10";
}else if($x > 10){
	echo "maior que 10";
}else{
	echo "menor que 10";
}
echo "<br>";


//SWITCH
$y=1;
switch($y){
case 1:
	echo "igual a 10";
	break;
case 2:
	echo "maior que 10";
	break;
case 3:
	echo "menor que 10";
	break;
}
echo "<br>";


//FOR
$estado[0]="MG";
$estado[1]="ES";
$estado[2]="SP";

for($i=0; $i<3; $i++){
	echo $estado[$i];
	echo "<br>";
}


//array- mostra tud o que tem no vetor
print_r($estado);


//FUNÇÕES com parâmetro
function teste($a,$b){
	return $a + $b;
}
/*
//FUNÇÕES sem parâmetro
function teste(){
 $a=2;
 $b=4;
	return $a + $b;
}
*/

//FUNÇÃO COM ".this" usa o &
$a=20;
function teste(&$a){
	return $a;
}

//hora
$hora = date('H');

//minutos
$min = date('m');

//segundos
$seg = date('s');
?>
