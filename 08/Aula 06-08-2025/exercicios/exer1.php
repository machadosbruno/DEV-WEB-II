<?php
	function calcularJurosSimples($capital, $taxa, $tempo){
	  return $capital * ($taxa/100) * $tempo;
	}
	echo calcularJurosSimples(100, 0.1, 10);
?>