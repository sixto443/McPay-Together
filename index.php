<?php 
include 'header.php';
include 'topbar.php';

// Eliminamos la conexión a Google Sheets que no corresponde a esta página
// Mantenemos solo el contenido estático sobre ROI
?>

<style>
/* Mejoramos la especificidad de los selectores */
.main-content .container {
    max-width: 800px;
    margin: 2rem auto;
    padding: 0 15px;
}

.section-roi {
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
    padding: 2rem;
    margin-bottom: 1.5rem;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.section-roi:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 16px rgba(0, 0, 0, 0.12);
}

.roi-title {
    text-align: center;
    color: #2c3e50;
    margin-bottom: 2.5rem;
    font-size: 2.2rem;
}

.subtitle-roi {
    color: #2980b9;
    border-bottom: 2px solid #3498db;
    padding-bottom: 0.8rem;
    margin-bottom: 1.2rem;
    font-size: 1.4rem;
}

.highlight-roi {
    color: #27ae60;
    font-weight: 600;
}

.roi-list {
    padding-left: 1.5rem;
    list-style-type: none;
}

.roi-list li {
    margin-bottom: 1rem;
    padding-left: 1.5rem;
    position: relative;
    line-height: 1.6;
}

.roi-list li::before {
    content: '▹';
    position: absolute;
    left: 0;
    color: #3498db;
}

.formula-roi {
    background: #f8f9fa;
    padding: 1.5rem;
    border-radius: 8px;
    margin: 1.5rem 0;
    text-align: center;
    font-size: 1.1rem;
    border: 1px solid #e9ecef;
}
</style>




<style>
:root {
    --primary-gold: #C5A100;
    --dark-text: #2C3E50;
    --accent-red: #DC3545;
    --light-bg: #FFFFFF;
}

.main-content .container {
    max-width: 1200px;
    margin: 2rem auto;
    padding: 0 20px;
}

.section-roi {
    background: var(--light-bg);
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.08);
    padding: 2rem;
    margin: 2rem 0;
    border: 1px solid #e9ecef;
}

.roi-title {
    color: var(--dark-text);
    text-align: center;
    font-size: 2.5rem;
    margin-bottom: 2rem;
}

.subtitle-roi {
    color: var(--dark-text);
    border-bottom: 3px solid var(--primary-gold);
    padding-bottom: 0.8rem;
    margin-bottom: 1.5rem;
    font-size: 1.8rem;
}

.alert-statistic {
    background: rgba(220, 53, 69, 0.08);
    border-left: 4px solid var(--accent-red);
    padding: 1.5rem;
    display: flex;
    align-items: center;
    gap: 1rem;
    margin: 2rem 0;
}

.statistic-text {
    margin: 0;
    color: var(--accent-red);
    font-weight: 600;
    font-size: 1.1rem;
}

.solution-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    margin-top: 2rem;
}

.solution-card {
    background: var(--light-bg);
    border: 2px solid var(--primary-gold);
    padding: 1.5rem;
    border-radius: 8px;
    transition: all 0.3s ease;
}

.solution-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 15px rgba(0,0,0,0.1);
}

.strategic-list {
    list-style: none;
    padding: 0;
}

.strategic-item {
    display: grid;
    grid-template-columns: 60px 1fr;
    gap: 1.5rem;
    padding: 1.5rem;
    margin-bottom: 1rem;
    border-radius: 8px;
    border: 2px solid rgba(197, 161, 0, 0.15);
    background: rgba(197, 161, 0, 0.03);
}

.icon-container {
    font-size: 2rem;
    color: var(--primary-gold);
    display: flex;
    align-items: center;
    justify-content: center;
}

.highlight-risk {
    color: var(--accent-red);
    font-weight: 700;
}

.highlight-roi {
    color: var(--primary-gold);
    font-weight: 700;
}

.formula-roi {
    background: #f8f9fa;
    padding: 1.5rem;
    border-radius: 8px;
    margin: 2rem 0;
    text-align: center;
    border: 1px solid #dee2e6;
}

.roi-list {
    padding-left: 1.5rem;
    list-style-type: none;
}

.roi-list li {
    margin-bottom: 1rem;
    padding-left: 1.5rem;
    position: relative;
    line-height: 1.6;
}

.roi-list li::before {
    content: '▹';
    position: absolute;
    left: 0;
    color: var(--primary-gold);
}
</style>

<main class="main-content">
    <div class="container">
        <h1 class="roi-title">VisionaryROI.   Predice, Planifica, Prospera.</h1>

        <section class="section-roi">
            <div class="alert-statistic">
                <div class="alert-icon">⚠️</div>
                <p class="statistic-text"><strong>70% de los proyectos de transformación fracasan</strong> por falta de preparación estratégica</p>
            </div>
            
            <h2 class="subtitle-roi">VisionaryROI: Tu Solución para una Transformación Exitosa</h2>
            
            <div class="solution-container">
                <p>En un mundo donde <span class="highlight-risk">7 de cada 10 iniciativas de cambio colapsan</span>, el <span class="highlight-roi">VisionaryROI</span> ofrece:</p>
                
                <div class="solution-grid">
                    <div class="solution-card">
                        <h3>🔮 Predicción Precog</h3>
                        <p>Modelos de IA que analizan 50+ variables para predecir éxito/fracaso con 92% de precisión</p>
                    </div>
                    
                    <div class="solution-card">
                        <h3>📉 Mitigación de Riesgos</h3>
                        <p>Análisis de sentimiento en tiempo real + simulaciones de impacto financiero</p>
                    </div>
                    
                    <div class="solution-card">
                        <h3>🎯 Recomendaciones Accionables</h3>
                        <p>Planes personalizados para optimizar recursos y estrategias</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-roi">
    <div class="roi-grid">
        <img src="img/logo.jpg" alt="Fórmula ROI en pizarra financiera" class="roi-image">
        <div>
            <h2 class="subtitle-roi">¿Qué es VisionaryROI?</h2>
            <p>El <span class="highlight-roi"></span>  VisionaryROI es una plataforma integral que combina inteligencia artificial, análisis de datos y modelado predictivo para optimizar la toma de decisiones en proyectos empresariales. 
            Integrando datos de diversas fuentes —desde ERP y CRM hasta redes sociales y encuestas—, la herramienta transforma la información en insights valiosos y recomendaciones accionables.</p>
            <div class="formula-roi">
                <div class="formula-container">
                <h2 class="subtitle-roi">¿Qué hace VisionaryROI?</h2>
                 Orquesta la ingesta y transformación de datos utilizando Azure Data Factory, extrae sentimientos en tiempo real con Azure Functions, limpia y enriquece la información en Azure Databricks y entrena modelos predictivos en Azure Machine Learning para calcular el ROI y evaluar riesgos. Además, procesa datos cualitativos mediante Azure Cognitive Services y genera informes narrativos con Azure OpenAI Service, mostrando dashboards interactivos en Power BI.
                </p>
                    <div class="formula-caption"> Predice, Planifica, Prospera</div>
                </div>
            </div>
        </div>
    </div>
</section>



        
        <section class="section-roi">
    <div class="roi-grid">
        <img src="img/roi-formula.jpg" alt="Fórmula ROI en pizarra financiera" class="roi-image">
        <div>
            <h2 class="subtitle-roi">El ROI: Tu Brújula en la Toma de Decisiones Estratégicas</h2>
            <p>El <span class="highlight-roi">Retorno de Inversión (ROI)</span> funciona como termómetro financiero, cuantificando la eficiencia de cada dólar invertido. Más que una simple fórmula, es un sistema de navegación empresarial:</p>
            <div class="formula-roi">
                <div class="formula-container">
                    ROI = [(Beneficio Neto ÷ Inversión) × 100]%
                    <div class="formula-caption">Precisión matemática para decisiones estratégicas</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-roi">
    <div class="roi-grid reverse">
        <img src="img/decision-making.jpg" alt="Equipo analizando datos en dashboard" class="roi-image">
        <div>
            <h2 class="subtitle-roi">Por qué el ROI Dicta el Ritmo Empresarial</h2>
            <ul class="roi-list">
                <li><strong>Termómetro de Eficiencia:</strong> Mide el pulso financiero de cada iniciativa</li>
                <li><strong>Traductor Universal:</strong> Convierte resultados complejos en porcentajes accionables</li>
                <li><strong>Anticipación Estratégica:</strong> Predice el impacto financiero antes de implementar</li>
                <li><strong>Brújula Directiva:</strong> Prioriza proyectos con mayor potencial de crecimiento</li>
            </ul>
        </div>
    </div>
</section>

<section class="section-roi">
    <div class="roi-grid">
        <img src="img/business-areas.jpg" alt="Mapa conceptual de áreas empresariales" class="roi-image">
        <div>
            <h2 class="subtitle-roi">Campos de Batalla del ROI Moderno</h2>
            <ul class="roi-list">
                <li><strong>Marketing Digital:</strong> ROI de conversiones vs. gasto en ads</li>
                <li><strong>Transformación Tecnológica:</strong> ROI de productividad vs. costos de implementación</li>
                <li><strong>Capital Humano:</strong> ROI de capacitación vs. ganancias en eficiencia</li>
                <li><strong>Innovación:</strong> ROI de I+D vs. ventajas competitivas generadas</li>
            </ul>
        </div>
    </div>
</section>

<section class="section-roi">
    <div class="roi-grid reverse">
        <img src="img/digital-analytics.jpg" alt="Dashboard de analítica digital" class="roi-image">
        <div>
            <h2 class="subtitle-roi">ROI en la Era Digital: Supervivencia Empresarial</h2>
            <div class="formula-roi">
                <ul class="roi-list digital-metrics">
                    <li><strong>ROAS (Return on Ad Spend):</strong> $3.5 generados por cada $1 invertido</li>
                    <li><strong>LTV (Lifetime Value):</strong> Valoración del ciclo vital del cliente</li>
                    <li><strong>CAC (Customer Acquisition Cost):</strong> Eficiencia en captación</li>
                    <li><strong>CR (Conversion Rate):</strong> Termómetro de efectividad campañas</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<style>
.roi-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 2rem;
    align-items: center;
}

.reverse {
    direction: rtl;
}

.reverse > * {
    direction: ltr;
}

.roi-image {
    width: 100%;
    height: 350px;
    object-fit: cover;
    border-radius: 8px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
}

.roi-image:hover {
    transform: scale(1.02);
}

.formula-container {
    position: relative;
    padding: 1.5rem;
    background: #f8f9fa;
    border-radius: 8px;
}

.formula-caption {
    font-size: 0.9rem;
    color: #6c757d;
    margin-top: 1rem;
    font-style: italic;
}

.digital-metrics li {
    padding: 1rem;
    background: rgba(197, 161, 0, 0.05);
    margin-bottom: 1rem;
    border-radius: 6px;
}

@media (max-width: 768px) {
    .roi-grid {
        grid-template-columns: 1fr;
    }
    
    .reverse {
        direction: ltr;
    }
    
    .roi-image {
        height: 250px;
    }
}
</style>
    </div>
</main>

<?php include 'footer.php'; ?>