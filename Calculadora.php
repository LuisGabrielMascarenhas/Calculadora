<?php 

$num1 = 10;
$num2 = 5;
$x = "-";
$res = 0;
echo "Calculadora<br/><br/>";
echo "Insira o primeiro número<br/>".$num1;
echo "<br/><br/>Escolha o operador<br/>+ - x /<br/>";
echo "O operador escolhido foi ".$x."<br/>";
echo "<br/>Insira o segundo número<br/>".$num2;
echo "<br/><br/>Números Inseridos foram ".$num1.$x.$num2."<br/>";

function soma($num1,$num2){	
	return ($num1 + $num2);

}

function sub($num1,$num2){	
	return ($num1 - $num2);

}

function mult($num1,$num2){
	return ($num1 * $num2);

}

function div($num1,$num2){
	return ($num1 / $num2);

}
	
function exibir($res){
	echo "O Resultado é:" .$res;
	return$res;

}

function erro(){
	echo "Operação Inválida";

}

switch ($x) {
	case '+':
		exibir(soma($num1,$num2));
		break;	
	
	case '-':
		exibir(sub($num1,$num2));
		break;

	case 'x':
		exibir(mult($num1,$num2));
		break;

	case '*':
		exibir(mult($num1,$num2));
		break;

	case '/':
		if ($num2 == 0) {
			erro();
		}else{
			exibir(div($num1,$num2));
	}
		break;

	default:
		echo"Operador Inválido";
		break;
}

 ?>