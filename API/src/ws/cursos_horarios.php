<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json; charset=utf-8");

// Manejo de preflight CORS
if ($_SERVER["REQUEST_METHOD"] === "OPTIONS") {
    http_response_code(200);
    exit;
}

require_once('../Modelos/Alumno.php');

// Validar método
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405);
    echo json_encode(["error" => "Método no permitido. Debe usar POST."]);
    exit;
}

// Obtener JSON del cuerpo
$input = json_decode(file_get_contents("php://input"), true);

// Validar JSON correcto
if (!is_array($input)) {
    http_response_code(400);
    echo json_encode(["error" => "El cuerpo debe ser un JSON válido."]);
    exit;
}

// Validar parámetro correo
if (!isset($input["correo"]) || empty(trim($input["correo"]))) {
    http_response_code(400);
    echo json_encode(["error" => "Debe enviar el correo"]);
    exit;
}

$correo = trim($input["correo"]);

// Validar formato
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
