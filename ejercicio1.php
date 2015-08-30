<?php
$acumulador=0;
$numeroAleatorio=0;
 function generarNumerosAleatoriosEntre($numero1, $numero2)
{
	return rand($numero1, $numero2);
}

 function sumarNumero($numero1,$numero2)
{   
    	$suma=$numero1+$numero2;
    	return $suma;
}
 function devolverNumeroAnteriorADiesmil($acumulador,$ultimoNumeroAleatorio)
{//aqui hay otra forma de hacer que lea las variables globales en ves q de parametros
	//pero lo prefiero asi
	return $acumulador-$ultimoNumeroAleatorio;
}

while($acumulador<=10000)
{
	$numeroAleatorio=generarNumerosAleatoriosEntre(1, 100);
	$acumulador=sumarNumero($numeroAleatorio,$acumulador);

	// si quiere ver los pasos de la acumulacion y de los numeros generados descomente la linea de abajo
	//echo "Numero Aleatorio: ".$numeroAleatorio." , acumulacion: ".$acumulador."</br>";
}
echo "acumulacion antes de 10 000: ".devolverNumeroAnteriorADiesmil($acumulador,$numeroAleatorio);
?>