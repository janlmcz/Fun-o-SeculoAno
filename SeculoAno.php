<?php

/*
Exemplos para teste:

Ano 1905 = século 20
Ano 1700 = século 17

*/


function SeculoAno($ano){
	$ano = str_pad($ano, 4, "0", STR_PAD_LEFT);
	$seculo = substr($ano, 0, 2);
	if(substr($ano,-2,2)>0) {
		$seculo++;
	} else {
		$seculo = $seculo;
	}
	echo $seculo;
}

echo SeculoAno(1700);