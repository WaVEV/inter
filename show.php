<?php
/*aca se imprimen las cosas*/
if(!$tipopropiedad || !$rubro || !$ciudad || !$alqenta)
    fwrite($salida,  '<h1>ERROR! te olvidaste alguna varible importante!</h1>');


fwrite($salida,  "<br /><br /><br />titulo:".$titulo);
fwrite($salida,  "<br />texto:".$texto);
fwrite($salida,  "<br />moneda:".$moneda);
fwrite($salida,  "<br />precio:".$precio);
fwrite($salida,  "<br />mes:".$mes);
fwrite($salida,  "<br />quincena:".$quincena);
fwrite($salida,  "<br />minmonoches:".$minmonoches);
fwrite($salida,  "<br />dia:".$dia);

fwrite($salida,  "<br />imagenurl1:".$imagenurl1);
fwrite($salida,  "<br />imagenurl2:".$imagenurl2);
fwrite($salida,  "<br />imagenurl3:".$imagenurl3);
fwrite($salida,  "<br />imagenurl4:".$imagenurl4);
fwrite($salida,  "<br />imagentxt1:".$imagentxt1);
fwrite($salida,  "<br />imagentxt2:".$imagentxt2);
fwrite($salida,  "<br />imagentxt3:".$imagentxt3);
fwrite($salida,  "<br />imagentxt4:".$imagentxt4);
fwrite($salida,  "<br />email:".$email);
fwrite($salida,  "<br />telefonos:".$telefonos);
fwrite($salida,  "<br />rubro:".$rubro);
fwrite($salida,  "<br />ciudad:".$ciudad);
fwrite($salida,  "<br />provincia:".$provincia);
fwrite($salida,  "<br />latitud:".$latitud);
fwrite($salida,  "<br />longitud:".$longitud);
fwrite($salida,  "<hr>");
fwrite($salida,  "<br />marca:".$marca);
fwrite($salida,  "<br />modelo:".$modelo);
fwrite($salida,  "<br />modeloversion:".$modeloversion);
fwrite($salida,  "<br />ano:".$ano);
fwrite($salida,  "<br />kilometraje:".$kilometraje);
fwrite($salida,  "<br />nafta:".$nafta);
fwrite($salida,  "<br />condicion:".$condicion);
fwrite($salida,  "<br />color:".$color);
fwrite($salida,  "<br />puertas:".$puertas);
fwrite($salida,  "<br />direccionauto:".$direccionauto);
fwrite($salida,  "<br />caja:".$caja);
fwrite($salida,  "<hr>");
fwrite($salida,  "<br />id:".$id);
fwrite($salida,  "<br />alqenta:".$alqenta);
fwrite($salida,  "<br />capacidad:".$capacidad);
fwrite($salida,  "<br />dimension:".$dimension);
fwrite($salida,  "<br />ambientes:".$ambientes);
fwrite($salida,  "<br />barrio:".$barrio);
fwrite($salida,  "<br />direccion:".$direccion);
fwrite($salida,  "<br />cerca_de:".$cerca_de);
fwrite($salida,  "<br />tipopropiedad:".$tipopropiedad);
fwrite($salida,  "<br />balcon:".$balcon);
fwrite($salida,  "<br />banadera:".$banadera);
fwrite($salida,  "<br />calefaccionelectrica:".$calefaccionelectrica);
fwrite($salida,  "<br />ducha:".$ducha);
fwrite($salida,  "<br />piscina:".$piscina);
fwrite($salida,  "<br />cajafuerte:".$cajafuerte);
fwrite($salida,  "<br />seguridadalarma:".$seguridadalarma);
fwrite($salida,  "<br />admitemmascotas:".$admitemmascotas);
fwrite($salida,  "<br />pisosmadera:".$pisosmadera);
fwrite($salida,  "<br />bidette:".$bidette);
fwrite($salida,  "<br />camassimples:".$camassimples);
fwrite($salida,  "<br />camasqueensize:".$camasqueensize);
fwrite($salida,  "<br />aireacondicionado:".$aireacondicionado);
fwrite($salida,  "<br />cafetera:".$cafetera);
fwrite($salida,  "<br />dvd:".$dvd);
fwrite($salida,  "<br />heladera:".$heladera);
fwrite($salida,  "<br />internet:".$internet);
fwrite($salida,  "<br />lcd:".$lcd);
fwrite($salida,  "<br />microondas:".$microondas);
fwrite($salida,  "<br />mucama:".$mucama);
fwrite($salida,  "<br />sabanas:".$sabanas);
fwrite($salida,  "<br />secadorcabello:".$secadorcabello);
fwrite($salida,  "<br />telefono:".$telefono);
fwrite($salida,  "<br />toallas:".$toallas);
fwrite($salida,  "<br />tostadora:".$tostadora);
fwrite($salida,  "<br />tvporcable:".$tvporcable);
fwrite($salida,  "<br />wifi:".$wifi);
fwrite($salida,  "<br />lavadoralavarropa:".$lavadoralavarropa);
fwrite($salida,  "<br />garaje:".$garaje);
fwrite($salida,  "<br />terraza:".$terraza);
fwrite($salida,  "<br />jard:".$jard);
fwrite($salida,  "<br />estacionamientotechado:".$estacionamientotechado);
fwrite($salida,  "<br />parrilla:".$parrilla);
fwrite($salida,  "<br />patio:".$patio);
fwrite($salida,  "<br />accesodiscapacitados:".$accesodiscapacitados);
fwrite($salida,  "<br />ascensor:".$ascensor);
fwrite($salida,  "<br />portero:".$portero);
fwrite($salida,  "<br />serviciolimpieza:".$serviciolimpieza);
fwrite($salida,  "<br />vajilla:".$vajilla);
fwrite($salida,  "<br />permitidofumar:".$permitidofumar);
fwrite($salida,  "<br />prohibidofumar:".$prohibidofumar);
fwrite($salida,  "<br />noadmitenmascotas:".$noadmitenmascotas);
fwrite($salida,  "<br />camadosplazas:".$camadosplazas);
fwrite($salida,  "<br />gimnasio:".$gimnasio);

fwrite($salida,  "<br><br>FIN DE LAS VARIABLES<br><hr><hr><br>");

$ok=1;

comprobar_int();

if($ok){

fwrite($salida,  "ASI SE VE<br><hr>");

fwrite($salida,  "</div></div><br><br>IMAGENES<br>");

fwrite($salida,  '<img alt="'.$imagentxt1.'" src="'.$imagenurl1.'"><br>');
fwrite($salida,  '<img alt="'.$imagentxt2.'" src="'.$imagenurl2.'"><br>');
fwrite($salida,  '<img alt="'.$imagentxt3.'" src="'.$imagenurl3.'"><br>');
fwrite($salida,  '<img alt="'.$imagentxt4.'" src="'.$imagenurl4.'"><br>');
fwrite($salida,  '<img alt="'.$imagentxt5.'" src="'.$imagenurl5.'"><br>');
fwrite($salida,  '<img alt="'.$imagentxt6.'" src="'.$imagenurl6.'"><br>');

}

fwrite($salida,  "<br><br>PROXIMA<br><hr><hr><br>");
?>