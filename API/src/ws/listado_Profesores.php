<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: Content-Type");

require_once('../Modelos/Profesor.php');
require_once('../Conexion/Conexion.php');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    $profesor = new Profesor();
    $listaProfesores = $profesor->listarProfesores();

    if (!$listaProfesores) {
        echo json_encode([
            "status" => false,
            "message" => "No hay profesores registrados"
        ], JSON_PRETTY_PRINT);
        http_response_code(404);
        exit;
    }

    $respuesta = [];

    foreach ($listaProfesores as $p) {
        $respuesta[] = [
            "nombre"       => $p['nombre'],
            "correo"       => $p['correo'],
            "telefono"     => $p['telefono'],
            "area"         => $p['area'],
            "departamento" => $p['departamento'],
            "cursos"       => $p['cursos']  // array de cursos ya decodificado
        ];
    }

    echo json_encode($respuesta, JSON_PRETTY_PRINT);
    http_response_code(200);
}
