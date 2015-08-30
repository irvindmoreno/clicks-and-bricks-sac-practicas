<?php
$acumulador=0;
$contadorDeNumerosPrimos=0;
function esPrimo($numero)
{
	$contador=0;    
    for($i=2;$i<=$numero;$i++)
    {
        if($numero%$i==0)
        {            
            if(++$contador>1)
                return false;//no es primo
        }
    }
    return true;//es primo
}
function sumaDelosPrimosHasta()
{
  for($numeroAEvaluar=0;$GLOBALS['contadorDeNumerosPrimos']<=100;$numeroAEvaluar++)
	{
	    if(esPrimo($numeroAEvaluar))
	    {
	    	$GLOBALS['contadorDeNumerosPrimos']++;
	    	$GLOBALS['acumulador']=$GLOBALS['acumulador']+$numeroAEvaluar;
	    	
	    }
	    
	}  
	return $GLOBALS['acumulador'];
}
echo "casi sale la suma de los 100 primos x.x: ". sumaDelosPrimosHasta();

?>