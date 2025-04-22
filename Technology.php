<?php include 'header.php'; ?>
<?php include 'topbar.php'; ?>

<style>
    /* Estilos existentes mejorados */

    .loading {
    text-align: center;
    padding: 20px;
    color: #2c3e50;
}

.spinner {
    display: inline-block;
    width: 30px;
    height: 30px;
    border: 3px solid #f3f3f3;
    border-radius: 50%;
    border-top-color: #3498db;
    animation: spin 1s ease-in-out infinite;
    margin-bottom: 10px;
}

@keyframes spin {
    to { transform: rotate(360deg); }
}

.btn-download {
    display: inline-block;
    background: #27ae60;
    color: white;
    padding: 12px 25px;
    border-radius: 6px;
    text-decoration: none;
    margin: 15px 0;
    transition: background 0.3s;
}

.btn-download:hover {
    background: #219a52;
}

.share-buttons button {
    background: #2980b9;
    color: white;
    border: none;
    padding: 10px 20px;
    margin: 5px;
    border-radius: 5px;
    cursor: pointer;
    transition: background 0.3s;
}

.share-buttons button:hover {
    background: #2471a3;
}
    .reporte-container {
        max-width: 1200px;
        margin: 2rem auto;
        padding: 25px;
        border: 3px solid #2c3e50;
        border-radius: 15px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.08);
        background: #f8f9fa;
    }
    .calculadora-roi {
        margin-top: 3rem;
        padding: 2rem;
        background: #ffffff;
        border-radius: 12px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    }
    .grid-roi {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 1.5rem;
        margin-bottom: 2rem;
    }
    .input-group {
        margin-bottom: 1.2rem;
    }
    .input-label {
        display: block;
        margin-bottom: 0.5rem;
        color: #2c3e50;
        font-weight: 500;
    }
    .input-field {
        width: 100%;
        padding: 0.8rem;
        border: 2px solid #e0e0e0;
        border-radius: 6px;
        font-size: 1rem;
    }
    .resultados-roi {
        background: #e3f2fd;
        padding: 1.5rem;
        border-radius: 8px;
        margin-top: 1.5rem;
    }
    .metric-box {
        background: white;
        padding: 1rem;
        border-left: 4px solid #3498db;
        margin: 1rem 0;
    }
    .boton-generar {
        background: #27ae60;
        color: white;
        padding: 1rem 3rem;
        border: none;
        border-radius: 6px;
        font-size: 1.2rem;
        cursor: pointer;
        margin-top: 2rem;
        display: block;
        width: 100%;
        max-width: 400px;
        margin-left: auto;
        margin-right: auto;
    }
    .seccion-informe {
        margin-top: 3rem;
        padding: 2rem;
        background: #ffffff;
        border-radius: 12px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    }
    .seccion-informe h2 {
        margin-bottom: 1rem;
        color: #2980b9;
    }
    .vista-previa-pdf {
        border: 2px dashed #bdc3c7;
        padding: 1rem;
        text-align: center;
        margin-top: 1rem;
        font-style: italic;
        color: #7f8c8d;
    }
    .compartir-m365 {
        margin-top: 1.5rem;
        text-align: center;
    }
    .compartir-m365 button {
        background: #0078d4;
        color: white;
        padding: 0.8rem 2rem;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        font-size: 1rem;
    }
</style>

<div class="reporte-container">
    <h1 class="titulo-financiero">PANEL DE DATOS</h1>
    
    <!-- Sección Power BI -->
    <div class="marco-powerbi">
        <iframe title="Reporte Estratégico" 
                width="1080" 
                height="700"
                src="https://app.powerbi.com/reportEmbed?reportId=504fe86c-e079-41ee-81ed-30dd1ffd04e5&autoAuth=true&ctid=d73d9a37-04fd-4229-8f42-b1f8657af496"
                frameborder="0"
                allowFullScreen="true"
                style="transform: scale(1); transition: transform 0.3s ease;">
        </iframe>
    </div>

    <!-- Sección Calculadora ROI Interactiva -->
    <div class="calculadora-roi">
        <h2 style="color: #27ae60; margin-bottom: 1.5rem;">Calculadora ROI de Proyectos</h2>
        
        <div class="grid-roi">
            <!-- Columna 1: Datos Básicos -->
            <div>
                <h3 class="subtitle-roi">📊 Datos del Proyecto</h3>
                <div class="input-group">
                    <label class="input-label">Nombre del Proyecto</label>
                    <input type="text" id="nombre-proyecto" class="input-field">
                </div>
                <div class="input-group">
                    <label class="input-label">Inversión Inicial ($)</label>
                    <input type="number" id="inversion" class="input-field" step="1000">
                </div>
                <div class="input-group">
                    <label class="input-label">Ingresos Anuales ($)</label>
                    <input type="number" id="ingresos" class="input-field" step="1000">
                </div>
                <div class="input-group">
                    <label class="input-label">Costos Operativos ($/año)</label>
                    <input type="number" id="costos" class="input-field" step="1000">
                </div>
            </div>

            <!-- Columna 2: Parámetros Clave y Tiempo -->
            <div>
                <h3 class="subtitle-roi">⚙️ Parámetros Clave</h3>
                <div class="input-group">
                    <label class="input-label">Duración del Proyecto</label>
                    <div style="display: flex; gap: 0.5rem;">
                        <input type="number" id="dias" class="input-field" placeholder="Días" style="flex:1;" min="0">
                        <input type="number" id="meses" class="input-field" placeholder="Meses" style="flex:1;" min="0">
                        <input type="number" id="anios" class="input-field" placeholder="Años" style="flex:1;" min="1" value="1">
                    </div>
                </div>
                <div class="input-group">
                    <label class="input-label">Tasa de Descuento (%)</label>
                    <input type="number" id="tasa" class="input-field" step="0.1" value="8">
                </div>
                <div class="input-group">
                    <label class="input-label">Factor de Riesgo (%)</label>
                    <input type="number" id="riesgo" class="input-field" step="1" value="15">
                </div>
            </div>
        </div>

        <!-- Resultados -->
        <div class="resultados-roi">
            <h3 style="color: #2980b9; margin-bottom: 1rem;">📈 Resultados del Análisis</h3>
            <div class="metric-box">
                <div style="color: #27ae60; font-weight: bold;">ROI:</div>
                <div id="roi-result" style="font-size: 1.2rem;">-</div>
            </div>
            <div class="metric-box">
                <div style="color: #2980b9; font-weight: bold;">VPN (Valor Presente Neto):</div>
                <div id="vpn-result" style="font-size: 1.2rem;">-</div>
            </div>
            <div class="metric-box">
                <div style="color: #e67e22; font-weight: bold;">Período de Recuperación:</div>
                <div id="payback-result" style="font-size: 1.2rem;">-</div>
            </div>
        </div>

        <!-- Botones de la calculadora -->
        <div style="margin-top: 1.5rem; text-align: center;">
            <button onclick="calcularROI()" style="background: #27ae60; color: white; padding: 0.8rem 2rem; border: none; border-radius: 6px; cursor: pointer;">
                Calcular ROI
            </button>
            <button onclick="resetForm()" style="background: #e74c3c; color: white; padding: 0.8rem 2rem; border: none; border-radius: 6px; cursor: pointer; margin-left: 1rem;">
                Reiniciar
            </button>
        </div>
        
        <!-- Botón Generar Informe -->
        <button class="boton-generar" onclick="generarInforme()">GENERAR INFORME</button>
    </div>

    <!-- Sección para generar el informe completo -->
    <div class="seccion-informe">
    <h2>Vista Previa del Documento PDF</h2>
    <div class="vista-previa-pdf" id="vista-previa-pdf">
        <!-- Aquí se mostrará la vista previa del PDF generado -->
        Vista previa del informe en PDF...
    </div>
    
    <div class="compartir-m365" style="margin-top: 2rem; text-align: center;">
        <h3>Compartir Informe</h3>
        <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 1rem;">
            <!-- Botón Descargar Informe -->
            <button class="btn btn-primary" onclick="window.location.href=''" style="padding: 0.8rem 1.5rem; font-size: 1rem;">
                <img src="img/icon-download.png" alt="Descargar" style="width:20px; height:20px; margin-right: 8px;">
                Descargar Informe
            </button>
            <!-- Botón Compartir a Outlook -->
            <button class="btn btn-primary" onclick="window.location.href='https://outlook.live.com'" style="padding: 0.8rem 1.5rem; font-size: 1rem;">
                <img src="img/icon-outlook.png" alt="Outlook" style="width:20px; height:20px; margin-right: 8px;">
                Compartir a Outlook
            </button>
            <!-- Botón Compartir a SharePoint -->
            <button class="btn btn-primary" onclick="window.location.href='https://www.microsoft.com/en-us/microsoft-365/sharepoint/collaboration'" style="padding: 0.8rem 1.5rem; font-size: 1rem;">
                <img src="img/icon-sharepoint.png" alt="SharePoint" style="width:20px; height:20px; margin-right: 8px;">
                Compartir a SharePoint
            </button>
            <!-- Botón Compartir a Microsoft Teams -->
            <button class="btn btn-primary" onclick="window.location.href='https://www.microsoft.com/en-us/microsoft-teams/group-chat-software'" style="padding: 0.8rem 1.5rem; font-size: 1rem;">
                <img src="img/icon-teams.png" alt="Teams" style="width:20px; height:20px; margin-right: 8px;">
                Compartir a Microsoft Teams
            </button>
        </div>
    </div>
</div>

</div>

<script>
// Función para calcular el ROI y otros indicadores
function calcularROI() {
    const inversion = parseFloat(document.getElementById('inversion').value);
    const ingresos = parseFloat(document.getElementById('ingresos').value);
    const costos = parseFloat(document.getElementById('costos').value);
    const dias = parseInt(document.getElementById('dias').value) || 0;
    const meses = parseInt(document.getElementById('meses').value) || 0;
    const anios = parseInt(document.getElementById('anios').value) || 1;
    const tasa = parseFloat(document.getElementById('tasa').value) / 100;
    const riesgo = parseFloat(document.getElementById('riesgo').value) / 100;

    // Convertir duración a años (1 año = 365 días, 1 mes = 30 días)
    const duracion = anios + (meses * 30 + dias) / 365;
    
    let acumulado = 0;
    let payback = duracion;
    
    for(let i = 0; i < duracion; i++) {
        let flujo = (ingresos - costos) * Math.pow(1 - riesgo, i);
        acumulado += flujo / Math.pow(1 + tasa, i + 1);
        if(acumulado >= inversion && payback === duracion) {
            payback = i + 1;
        }
    }
    
    const vpn = acumulado - inversion;
    const roi = ((vpn / inversion) * 100).toFixed(2);
    
    document.getElementById('roi-result').innerHTML = `${roi}%`;
    document.getElementById('vpn-result').innerHTML = `$${vpn.toFixed(2)}`;
    document.getElementById('payback-result').innerHTML = `${payback} años`;
}

// Función para reiniciar el formulario
function resetForm() {
    document.querySelectorAll('.input-field').forEach(input => input.value = '');
    document.getElementById('anios').value = 1;
    document.getElementById('tasa').value = 8;
    document.getElementById('riesgo').value = 15;
    document.querySelectorAll('#roi-result, #vpn-result, #payback-result').forEach(el => el.innerHTML = '-');
}

async function generarInforme() {
    try {
        // Validar campos requeridos
        if (!document.getElementById('nombre-proyecto').value) {
            throw new Error('Debe ingresar un nombre de proyecto');
        }
        
        // Mostrar loader
        document.getElementById('vista-previa-pdf').innerHTML = 
            '<div class="loading">Generando informe...<div class="spinner"></div></div>';

        // Recolectar datos
        const data = {
            proyecto: document.getElementById('nombre-proyecto').value,
            inversion: document.getElementById('inversion').value,
            ingresos: document.getElementById('ingresos').value,
            costos: document.getElementById('costos').value,
            roi: document.getElementById('roi-result').innerText,
            vpn: document.getElementById('vpn-result').innerText,
            payback: document.getElementById('payback-result').innerText
        };

        // Llamar a la API local
        const response = await fetch('api_groq.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        });

        const result = await response.json();

        if (!response.ok || !result.success) {
            throw new Error(result.error || 'Error al generar el informe');
        }

        // Mostrar resultados
        document.getElementById('vista-previa-pdf').innerHTML = `
            <div class="informe-content">
                <h4>${data.proyecto}</h4>
                <pre>${result.informe}</pre>
                <a href="${result.pdfUrl}" target="_blank" class="pdf-link">
                    Descargar PDF
                </a>
            </div>
        `;

    } catch (error) {
        document.getElementById('vista-previa-pdf').innerHTML = `
            <div class="error">
                ❌ Error: ${error.message}
            </div>
        `;
        console.error('Error:', error);
    }
}

// Función compartir simplificada
async function compartirInforme() {
    const pdfLink = document.querySelector('#vista-previa-pdf a');
    if (!pdfLink) {
        alert('Primero genere un informe');
        return;
    }
    
    try {
        const response = await fetch('api_sharepoint.php', {
            method: 'POST',
            body: JSON.stringify({ pdfUrl: pdfLink.href })
        });
        
        const result = await response.json();
        if (result.success) {
            alert('Informe compartido exitosamente');
        } else {
            throw new Error(result.error);
        }
    } catch (error) {
        alert('Error al compartir: ' + error.message);
    }
}
</script>

<?php include 'footer.php'; ?>