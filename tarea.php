<?php 

	$curret_work = "../obtiene_florianopolistur_amp.php"; 
	$estan_cargadas = 1;

	function pickup_page($url){
		$ret = "";
		while(!$ret){
			$con = new HttpRequest($url);
			$ret = $con->Retorno;
			unset($con);
		}

		return $ret;
	}
	//fclose(STDERR);
	include("../funcionesobtiene.php");
	include("set_up.php");
	include ("cons.php");
?>