<?php

header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: Content-Type");

require_once('../Modelos/Asignatura.php');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    $asignatura = new Asignatura();
    $listaAsignaturas = $asignatura->listarAsignaturas();

    $respuesta = [];

    foreach ($listaAsignaturas as $a) {

        // Conversión semanas → meses
        $meses = round($a['duracion'] / 4, 1);

        $respuesta[] = [
            "nombre"            => $a['nombre'],
            "nombre_car"        => $a['nombre_car'],
            "duracion"          => $a['duracion'],
            "duracion_meses"    => $meses,
            "creditos_teoricos" => $a['creditos_teoricos'],
            "creditos_lab"      => $a['creditos_lab'],
            "cursos"            => $a['cursos']   // <-- CORRECTO
        ];
    }

    echo json_encode($respuesta, JSON_PRETTY_PRINT);
    http_response_code(200);
}

