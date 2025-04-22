<?php
require('fpdf/fpdf.php');
require 'vendor/autoload.php'; // Si usas composer

header('Content-Type: application/json');

try {
    $data = json_decode(file_get_contents('php://input'), true);
    
    // Validar datos esenciales
    if(empty($data)) throw new Exception("Datos no recibidos");
    
    $projectData = [
        'nombre'    => $data['proyecto'],
        'inversion' => number_format($data['inversion'], 2),
        'ingresos'  => number_format($data['ingresos'], 2),
        'costos'    => number_format($data['costos'], 2),
        'roi'       => $data['roi'],
        'vpn'       => $data['vpn'],
        'payback'   => $data['payback']
    ];

    // Determinar escenario
    $roiValue = (float)str_replace(['%', ','], '', $projectData['roi']);
    $escenario = [
        'titulo' => $roiValue > 20 ? 'Escenario Favorable' : 'Escenario No Favorable',
        'texto'  => $roiValue > 20 
            ? "El proyecto muestra un ROI excepcional con alta rentabilidad. Recomendamos su implementación inmediata."
            : "El ROI está por debajo del umbral recomendado. Sugerimos revisar la estructura de costos."
    ];

    // Crear PDF
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',16);
    
    // Encabezado
    $pdf->Cell(0,10,"Informe de ROI: {$projectData['nombre']}",0,1);
    $pdf->Ln(10);

    // Detalles del proyecto
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(0,10,'Datos del Proyecto:',0,1);
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(0,10,"Inversion Inicial: $ {$projectData['inversion']}",0,1);
    $pdf->Cell(0,10,"Ingresos Anuales: $ {$projectData['ingresos']}",0,1);
    $pdf->Cell(0,10,"Costos Operativos: $ {$projectData['costos']}",0,1);
    $pdf->Ln(15);

    // Resultados
    $pdf->SetFont('Arial','B',14);
    $pdf->Cell(0,10,"Resultados Clave:",0,1);
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(0,10,"ROI: {$projectData['roi']}",0,1);
    $pdf->Cell(0,10,"VPN: {$projectData['vpn']}",0,1);
    $pdf->Cell(0,10,"Payback: {$projectData['payback']}",0,1);
    $pdf->Ln(15);

    // Análisis de escenario
    $pdf->SetFont('Arial','B',14);
    $pdf->Cell(0,10,$escenario['titulo'],0,1);
    $pdf->SetFont('Arial','',12);
    $pdf->MultiCell(0,10,$escenario['texto']);
    $pdf->Ln(20);

    // Imágenes
    $pdf->Image('img/IMAGEN1.jpeg', 20, $pdf->GetY(), 50);
    $pdf->Image('img/IMAGEN2.jpeg', 80, $pdf->GetY(), 50);
    $pdf->Image('img/IMAGEN3.jpeg', 140, $pdf->GetY(), 50);

    // Guardar PDF
    $directory = 'pdfs/';
    if(!is_dir($directory)) mkdir($directory, 0755, true);
    
    $filename = $directory . 'ROI_Report_' . time() . '.pdf';
    $pdf->Output('F', $filename);

    echo json_encode([
        'success' => true,
        'pdfUrl'  => $filename
    ]);

} catch (Exception $e) {
    echo json_encode([
        'success' => false,
        'error'   => $e->getMessage()
    ]);
}
?>