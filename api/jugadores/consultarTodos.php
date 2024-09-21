<?php

header('Content-Type: application/json');

require_once 'modelosRespuestas/consultarTodosRespuesta.php';
require_once '../../modelo/club.php';
require_once '../../modelo/jugador.php';

$resp= new ConsultarTodosRespuesta();

$c1= new CLub();
$c1->Nombre='Paris Saint-Germain Football Club';
$c1->Fundacion='2 de agosto de 1970 (52 años)';
$c1->Presidente='Nasser Al-Khelaifi';

$c2= new Club();
$c2->Nombre='Manchester United Football Club';
$c2->Fundacion='5 de marzo de 1878 (144 años)';
$c2->Presidente='Joel Glazer';

$j1=new Jugador();
$j1->Nombre ='Lionel Andrés Messi';
$j1->Apodos= 'Pulga,  El Mesías,  D10S';
$j1->Club=$c1;

$j2=new Jugador();
$j2->Nombre ='Lisandro Martínez';
$j2->Apodos= 'Licha';
$j2->Club=$c2;

$resp->ListaJugadores[]=$j1;
$resp->ListaJugadores[]=$j2;

echo json_encode ($resp);

