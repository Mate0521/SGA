<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: Content-Type");

require_once('../Modelos/Asignatura.php'); // <-- tu modelo

if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    $asignatura = new Asignatura();
    $listaAsignaturas = $asignatura->listaAsignaturas();

    $respuesta = [];

    foreach ($listaAsignaturas as $a) {

        // Conversión semanas a meses (aprox: 4 semanas = 1 mes)
        $meses = round($a['duracion'] / 4, 1);

        $respuesta[] = [
            "nombre" => $a['nombre'],
            "nombre_car" => $a['nombre_car'],
            "duracion" => $a['duracion'],
            "duracion_meses" => $meses,
            "creditos_teoricos" => $a['creditos_teoricos'],
            "creditos_lab" => $a['creditos_lab'],
            "curso" => $a['curso'] // array con los ids de cursos
        ];
    }

    echo json_encode($respuesta, JSON_PRETTY_PRINT);
    http_response_code(200);
}
