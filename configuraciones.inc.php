<?php
$titulo_pagina="Wisibilizalas";
$metatag_description="";
$metatag_keywords="";
$url_canonica="";
$url_upf="https://es.wikipedia.org/wiki/Universidad_Pompeu_Fabra";

$formulario_participa="https://docs.google.com/forms/d/e/1FAIpQLScpV0BhY-s8Wa74YleoJf0C_KyYLqczQoeT7oggtSaDohMTTA/viewform";
$formulario_inscribirse="https://docs.google.com/forms/d/e/1FAIpQLScpV0BhY-s8Wa74YleoJf0C_KyYLqczQoeT7oggtSaDohMTTA/viewform";

//---------------------------------------------------------------------------------------------------

//busco el dispositivo que esta ejecutando la pagina
$user_agent=strtolower($_SERVER['HTTP_USER_AGENT']);
$dispositivo="browser";
if (preg_match("/phone|iphone|itouch|ipod|ipad|symbian|android|htc_|htc-|palmos|blackberry|opera mini|iemobile|windows ce|nokia|fennec|hiptop|kindle|mot |mot-|webos\/|samsung|sonyericsson|^sie-|nintendo/",$user_agent)) $dispositivo='mobile';
if (preg_match("/mobile|pda;|avantgo|eudoraweb|minimo|netfront|brew|teleca|lg;|lge |wap;| wap /",$user_agent)) $dispositivo='mobile';
if (preg_match("/pda/",$user_agent)) $dispositivo='pda';
if (preg_match("/googlebot|adsbot|yahooseeker|yahoobot|msnbot|watchmouse|pingdom\.com|feedfetcher-google/", $user_agent)) $dispositivo='bot';


?>