<?php
	function calculaJurosCompostos($capital, $taxa, $tempo){
	  $resultado = $capital * pow( (1 + ($taxa / 100) / $tempo), $tempo);
	  return $resultado - $capital;
	}
	echo calculaJurosCompostos(100, 0.1, 10);
?>