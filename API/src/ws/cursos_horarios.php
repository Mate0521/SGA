<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET");
header("Access-Control-Allow-Headers: Content-Type");

require_once('../Modelos/Alumno.php');

$metodo = $_SERVER['REQUEST_METHOD'];

if ($metodo === 'GET' || $metodo === 'POST') {

    // Obtener correo ya sea por GET o POST
    $correo = $_GET['correo'] ?? null;

    if ($metodo === 'POST') {
        $json = file_get_contents("php://input");
        $data = json_decode($json, true);
        if (isset($data['correo'])) {
            $correo = $data['correo'];
        }
    }

    // Validar que se envió el correo
    if (!$correo) {
        echo json_encode([
            "error" => "Debe enviar el correo del alumno."
        ], JSON_PRETTY_PRINT);
        http_response_code(400);
        exit;
    }

    // Modelo
    $alumno = new Alumno();
    $alumno->setCorreo($correo);

    // Llamada a la función
    $lista = $alumno->obtenerCursosYHorarios();

    // Respuesta
    echo json_encode($lista, JSON_PRETTY_PRINT);
    http_response_code(200);
}
?>