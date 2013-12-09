<?php

$instruction="";
echo ("*****************************************************\n");
echo ("* Auspicia este programa La Municipalidad de Bouwer *\n");
echo ("*******************La Muni***************************\n\n");
while(1){
    echo ("*****************************************************\n");
    echo ("* Ingrese el nombre de la variable a revisar        *\n");
    echo ('* Ingrese "end" para ver todas las variables        *' . "\n");
    echo ('* O ingrese "quit" para salir                       *'."\n");
    echo ("*****************************************************\n");
    $instruction = trim(fgets(STDIN));
    if($instruction == "quit") break;

    $code = file_get_contents($curret_work);
    $l = explode("SCRIPT ----------------------------------", $code);
    $script = preg_replace("/------*/i", "", $l[1]);

    $l = null;

    $var_a_ver = $instruction;
    $salida = fopen("salida.html", "w");
    fwrite($salida, '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">');

    for($indic=1 ; $indic<=$cantidad_de_paginas ; $indic++){
        $titulo="";         $texto="";          $moneda="";         $pais="";           $provincia="";      $ciudad="";
        $telefonos="";      $email="";          $imagenurl1="";     $imagenurl2="";     $imagenurl3="";     $imagenurl4="";
        $imagenurl5="";     $imagentxt1="";     $imagentxt2="";     $imagentxt3="";     $imagentxt4="";     $imagentxt5="";
        $imagenurl6="";     $imagentxt6="";
        $marca="";          $modelo="";         $modeloversion="";  $condicion="";      $color="";          $puertas="";
        $nafta="";          $direccion="";      $caja="";           $tipoveiculo="";    $motortamanio="";
        // Tipo INT
        $precio=0;      $rubro=0;       $latitud=0;
        $longitud=0;    $ano=0;         $kilometraje=0;
        $dia=0;         $semana=0;      $quincena=0;        $mes=0;     $minmonoches=0; // son del precio
        // los booleanos de cosas
        $balcon=0;      $banadera=0;        $calefaccionelectrica=0;        $ducha=0;   
        $piscina=0;     $cajafuerte=0;      $seguridadalarma=0;             $admitemmascotas=0; 
        $pisosmadera=0; $bidette=0;         $camassimples=0;                $camasqueensize=0;
        $aireacondicionado=0;               $cafetera=0;                    $dvd=0;     
        $heladera=0;    $internet=0;        $lcd=0;                         $microondas=0;
        $mucama=0;      $sabanas=0;         $secadorcabello=0;              $telefono=0;
        $toallas=0;     $tostadora=0;       $tvporcable=0;                  $wifi=0;
        $lavadoralavarropa=0;               $garaje=0;                      $terraza=0;
        $jard=0;        $estacionamientotechado=0;                          $parrilla=0;
        $patio=0;       $accesodiscapacitados=0;                            $ascensor=0;
        $portero=0;     $serviciolimpieza=0;                                $vajilla=0;
        $permitidofumar=0;                  $prohibidofumar=0;              $noadmitenmascotas=0;
        $camadosplazas=0;                   $gimnasio=0; $id=0;$camaskingsize = 0;


        //Las de inmobiliarias
        $capacidad="";      $dimension="";      $ambientes="";
        $barrio="";         $direccion="";      $tipopropiedad="";

        $html = file_get_html("file$indic");

        $dd = fopen("aux.php", "w");
        fwrite($dd, "<?php\n$script\n?>");
        fclose($dd);

        include ("aux.php");
        if($instruction == 'end'){
            include("show.php");
        }
        else{
            echo "\npag $indic " . $var_a_ver . " :";print_r($$var_a_ver); echo ("\n");
            fwrite($salida, "<hr><br><br>pagina $indic<br>" . $var_a_ver . ":" . $$var_a_ver);
        }
        unset($html);
    }
    fclose($salida);
}
?>