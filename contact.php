

<?php include 'header.php'; ?>
<?php include 'topbar.php'; ?>

<!-- Page Header Start -->
<div class="container-fluid page-header2 py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="background-color: black;">
    <div class="container py-5 text-center"> <!-- Agrega 'text-center' para centrar el contenido -->
        <div class="row align-items-center"> <!-- Alinea verticalmente los elementos -->
            <div class="col-md-4"> <!-- Columna para la imagen izquierda -->
                <img src="img/MIC.jpg" alt="Imagen Izquierda" class="img-fluid" style="max-width: 90%; height: auto;"> <!-- Cambia el ancho máximo -->
            </div>
            <div class="col-md-4"> <!-- Columna para el título -->
                <h1 class="display-5 text-white mb-3 animated slideInDown" style="font-size: 2rem;">Innovation Challenge Marzo 2025</h1>
            </div>
            <div class="col-md-4"> <!-- Columna para la imagen derecha -->
                <img src="img/COD.png" alt="Imagen Derecha" class="img-fluid" style="max-width: 90%; height: auto;"> <!-- Cambia el ancho máximo -->
            </div>
        </div>
        <nav aria-label="breadcrumb animated slideInDown">
            <!-- Aquí puedes añadir tu contenido de navegación -->
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 800px;">
            <h1 class="display-5 mb-3">Nuestro Equipo de Innovación</h1>
            <p class="lead">Expertos combinando finanzas y tecnología para tu éxito</p>
        </div>

        <div class="row justify-content-center g-4">
            <!-- Miembro 1 -->
            <div class="col-12 col-md-6 col-lg-5">
                <div class="team-card shadow-lg">
                    <div class="card-image">
                        <img src="img/juan.jpeg" alt="Juan Isaias Contreras Sixto" class="img-fluid">
                    </div>
                    <div class="card-body text-center p-4">
                        <h3 class="card-title mb-2">Juan Isaias Contreras Sixto</h3>
                        <p class="text-primary mb-3">Finanzas Estratégicas</p>
                        <div class="social-links d-flex justify-content-center gap-3">
                            <a href="https://github.com/JUAN-sixto" class="social-icon">
                                <i class="fab fa-github fa-lg"></i>
                            </a>
                            <a href="mailto:juanscontreras796@gmail.com" class="social-icon">
                                <i class="fas fa-envelope fa-lg"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Miembro 2 -->
            <div class="col-12 col-md-6 col-lg-5">
                <div class="team-card shadow-lg">
                    <div class="card-image">
                        <img src="img/adol.jpg" alt="Adolfo Contreras Sixto" class="img-fluid">
                    </div>
                    <div class="card-body text-center p-4">
                        <h3 class="card-title mb-2">Adolfo Contreras Sixto</h3>
                        <p class="text-primary mb-3">Soluciones Digitales</p>
                        <div class="social-links d-flex justify-content-center gap-3">
                            <a href="https://github.com/sixto-AC" class="social-icon">
                                <i class="fab fa-github fa-lg"></i>
                            </a>
                            <a href="https://www.linkedin.com/in/adolfo-contreras-sixto-42648929b/" class="social-icon">
                                <i class="fab fa-linkedin-in fa-lg"></i>
                            </a>
                            <a href="mailto:Adolfocontrerassix@gmail.com" class="social-icon">
                                <i class="fas fa-envelope fa-lg"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->

<style>
.team-card {
    border-radius: 15px;
    overflow: hidden;
    transition: transform 0.3s ease;
    background: #fff;
}

.team-card:hover {
    transform: translateY(-10px);
}

.card-image {
    height: 320px;
    overflow: hidden;
    position: relative;
}

.card-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: top center;
}

.card-body {
    padding: 2rem;
}

.card-title {
    color: #2c3e50;
    font-weight: 600;
    font-size: 1.5rem;
}

.social-icon {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: #f8f9fa;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #2c3e50;
    transition: all 0.3s ease;
    text-decoration: none;
}

.social-icon:hover {
    background: #C5A100;
    color: white;
    transform: scale(1.1);
}

@media (max-width: 768px) {
    .card-image {
        height: 280px;
    }
    
    .card-body {
        padding: 1.5rem;
    }
}
</style>


    <?php include 'footer.php'; ?>