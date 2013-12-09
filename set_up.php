<?php
$code = file_get_contents($curret_work);
$cantidad_de_paginas = preg_match_all('/\$URLss\[[0-9]+\][^=]*= *\'?"?([^\'"]+)/i', $code, $mat);
$i=1;
$URLss = array();
foreach ($mat[1] as $value) {
	$URLss[$i++] = $value;
}

$i=0;
if(!$estan_cargadas){
	foreach($mat[1] as $e){
		$i++;
		$URLss[$i] = $e;
		$f = fopen("file$i" , "w");
		fwrite($f, pickup_page($e));
		fclose($f);
	}
}
?>