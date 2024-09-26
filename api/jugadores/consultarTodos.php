<?php
require_once '../../modelo/club.php';
require_once '../../modelo/listJugadores.php';
require_once '../jugadores/modeloRespuestas/consultarRespuestas.php';

header('Content-Type: application/json');

$resp = new ConsultarRespuesta();

$c1= new Club();
$c1->Nombre = 'Paris Saint-Germain Football';
$c1->Fundacion = '2 de agosto de 1970 (52 años)';
$c1->Presidente='Nasser Al-Khelaifi';

$c2= new Club();
$c2->Nombre = 'Manchester United Football Club';
$c2->Fundacion = '5 de marzo de 1878 (144 años)';
$c2->Presidente='Joel Glazer';

$j1= new ListJugadores();
$j1->Id= 1;
$j1->Nombre='Lionel Andrés Messi';
$j1->Apodos='La Pulga,  El Mesías,  D10S';
$j1->Club= $c1;
$j1->Altura= '1,70';

$j2= new ListJugadores();
$j2->Id= 2;
$j2->Nombre='Lisandro Martinez';
$j2->Apodos='Licha';
$j2->Club= $c2;
$j2->Altura= '1,75';


$resp->ListJugadores[] = $j1;
$resp->ListJugadores[] = $j2;

echo json_encode($resp);