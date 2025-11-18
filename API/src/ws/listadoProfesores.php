<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: Content-Type");

require_once('../modelo/profesor.php'); // <-- tu modelo

if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    $profesor = new Profesor();
    $listaProfesores = $profesor->listarProfesores(); 
    // Este método deberías tenerlo en tu modelo

    $respuesta = [];

    foreach ($listaProfesores as $p) {
        $respuesta[] = [
            "nombre" => $p['nombre'],
            "correo" => $p['correo'],
            "telefono" => $p['telefono'],
            "area" => $p['area'],
            "departamento" => $p['departamento'],
            "cursos" => $p['cursos']   // aquí se supone que es un array con nombres de cursos
        ];
    }

    echo json_encode($respuesta, JSON_PRETTY_PRINT);
    http_response_code(200);
}
