<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: Content-Type");

require_once('../Modelos/Alumno.php');

if ($_SERVER["REQUEST_METHOD"] !== "GET") {
    http_response_code(405);
    echo json_encode(["error" => "Método no permitido"]);
    exit;
}

header("Content-Type: application/json; charset=utf-8");

// Validar parámetro correo
if (!isset($_GET["correo"]) || empty(trim($_GET["correo"]))) {
    http_response_code(400);
    echo json_encode(["error" => "Debe enviar el correo"]);
    exit;
}

$correo = trim($_GET["correo"]);

// Validar formato de correo
if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(["error" => "Formato de correo inválido"]);
    exit;
}

try {
    $alumno = new Alumno();
    $alumno->setCorreo($correo);

    $resultado = $alumno->obtenerCursosYHorarios();

    if ($resultado === false || empty($resultado)) {
        http_response_code(404);
        echo json_encode(["error" => "No se encontraron cursos para este alumno"]);
        exit;
    }

    http_response_code(200);
    echo json_encode($resultado, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

} catch (Exception $e) {
    http_response_code(500);
    echo json_encode([
        "error" => "Error interno del servidor",
        "detalle" => $e->getMessage()
    ]);
}
?>
