<?php
header('Content-Type: application/json');
require 'vendor/autoload.php'; // Si usas Composer

// Configuración de seguridad básica
header('Access-Control-Allow-Origin: *'); // Modificar en producción
ini_set('display_errors', 0);

// Validar método
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    die(json_encode(['error' => 'Método no permitido']));
}

// Leer y validar datos
$input = json_decode(file_get_contents('php://input'), true);

$required = [
    'proyecto' => 'string',
    'inversion' => 'numeric',
    'ingresos' => 'numeric',
    'costos' => 'numeric',
    'roi' => 'string',
    'vpn' => 'string',
    'payback' => 'string'
];

$errors = [];
foreach ($required as $field => $type) {
    if (!isset($input[$field]) || !$input[$field]) {
        $errors[] = "Campo requerido: $field";
    } elseif ($type === 'numeric' && !is_numeric($input[$field])) {
        $errors[] = "Formato inválido para $field";
    }
}

if (!empty($errors)) {
    http_response_code(400);
    die(json_encode(['error' => $errors]));
}

// Configurar Groq
$apiKey = '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'; // Obtener de entorno seguro
$endpoint = 'https://api.groq.com/openai/v1/chat/completions';

// Construir prompt
$prompt = <<<PROMPT
Generar informe ejecutivo profesional con los siguientes datos:

Proyecto: {$input['proyecto']}
Inversión Inicial: \${$input['inversion']}
Ingresos Anuales: \${$input['ingresos']}
Costos Operativos: \${$input['costos']}
ROI: {$input['roi']}
VPN: {$input['vpn']}
Periodo Recuperación: {$input['payback']}

El informe debe incluir:
1. Análisis financiero detallado
2. Evaluación de riesgos
3. Recomendaciones estratégicas
4. Conclusión ejecutiva
5. Formato profesional con encabezados y secciones claras
PROMPT;

// Enviar a Groq
$payload = [
    'model' => 'mixtral-8x7b-32768',
    'messages' => [['role' => 'user', 'content' => $prompt]],
    'temperature' => 0.7,
    'max_tokens' => 2000
];

$ch = curl_init();
curl_setopt_array($ch, [
    CURLOPT_URL => $endpoint,
    CURLOPT_HTTPHEADER => [
        'Authorization: Bearer ' . $apiKey,
        'Content-Type: application/json'
    ],
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => json_encode($payload),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_SSL_VERIFYPEER => true
]);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

if (curl_errno($ch)) {
    error_log('Error Groq: ' . curl_error($ch));
    http_response_code(500);
    die(json_encode(['error' => 'Error de conexión con el servicio']));
}

curl_close($ch);

$responseData = json_decode($response, true);

if (!$responseData || !isset($responseData['choices'][0]['message']['content'])) {
    http_response_code(500);
    die(json_encode(['error' => 'Error procesando respuesta de Groq']));
}

// Generar PDF (ejemplo básico)
$informe = $responseData['choices'][0]['message']['content'];
$pdfUrl = generarPDF($informe, $input['proyecto']);

// Respuesta exitosa
echo json_encode([
    'success' => true,
    'informe' => $informe,
    'pdfUrl' => $pdfUrl
]);

function generarPDF($contenido, $nombre) {
    // Implementación real con TCPDF o similar
    $nombreArchivo = 'informes/' . preg_replace('/[^a-z0-9]/i', '_', $nombre) . '.pdf';
    
    // Simulación: Guardar texto temporalmente
    file_put_contents($nombreArchivo, $contenido);
    
    return $nombreArchivo;
}