<?php 

$num1 = 10;
$num2 = 0;
echo "Calculadora<br/>";
echo "Insira dois números<br/>";
$x = "+";
$res = 0;
echo "Números Inseridos foram ".$num1." e ".$num2."<br/>";
echo "Escolha o operador<br/>+<br/>-<br/>x<br/>/<br/>";
echo "O operador escolhido foi ".$x."<br/>";


function soma($num1,$num2){
	
	$res = $num1 + $num2;
	echo "O Resultado da soma é:".$res;
	return$res;

}
function sub($num1,$num2){
	
	$res = $num1 - $num2;
	echo "O Resultado da subtração é:".$res;
	return$res;

}
function mult($num1,$num2){
	
	$res = $num1 * $num2;
	echo "O Resultado da multiplicação é:".$res;
	return$res;

}
function div($num1,$num2){
	if ($num1 == 0 || $num2 == 0) {
		echo "0 não é valido na divisão";
	}else{
	$res = $num1 / $num2;
	echo "O Resultado da divisão é:".$res;
	return$res;	
	}
	

}
switch ($x) {
	case '+':
		soma($num1,$num2);
		break;
	
	case '-':
		sub($num1,$num2);
		break;

	case 'x':
		mult($num1,$num2);
		break;

	case '/':
		div($num1,$num2);
		break;

	default:
		echo"Operador Inválido";
		break;
}

 ?>