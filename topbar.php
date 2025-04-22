<!-- Sección de Fecha y Hora -->
<div class="container-fluid datetime-bar">
    <div class="row">
        <div class="col-12 text-right py-2">
            <div id="current-date-time" class="datetime-display"></div>
        </div>
    </div>
</div>

<!-- Encabezado con Logo -->
<header class="container-fluid header-main">
    <div class="row align-items-center py-3 px-lg-5">
        <div class="col-lg-4 brand-container">
            <a href="#" class="navbar-brand d-flex align-items-center">
                <img src="img/logo.jpg" alt="Visionary ROI Logo" class="brand-logo">
                <h1 class="brand-title">Visionary-ROI</h1>
            </a>
        </div>
    </div>
</header>

<!-- Barra de Navegación -->
<nav class="navbar navbar-expand-lg navbar-main">
    <div class="container-fluid px-lg-5">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav main-menu">
                <a href="index.php" class="nav-link active">INICIO</a>
                <a href="Technology.php" class="nav-link">CALCULADORA</a>
                <a href="Finance.php" class="nav-link">ACERCA DE</a>
                <a href="contact.php" class="nav-link">SOPORTE</a>
            </div>
        </div>
    </div>
</nav>

<style>
    :root {
        --primary-color: #2A5C82;  /* Azul corporativo */
        --secondary-color: #F5B041; /* Naranja acento */
        --text-dark: #2C3E50;
        --text-light: #F8F9FA;
    }

    .datetime-bar {
        background: var(--text-dark);
        padding: 0 1rem;
    }

    .datetime-display {
        color: var(--text-light);
        font-size: 0.9rem;
        font-family: 'Courier New', monospace;
        letter-spacing: 1px;
        padding: 5px 10px;
        display: inline-block;
        background: rgba(255,255,255,0.1);
        border-radius: 3px;
    }

    .header-main {
        background: var(--text-light);
        box-shadow: 0 2px 15px rgba(0,0,0,0.1);
    }

    .brand-logo {
        max-height: 90px;
        margin-right: 20px;
        transition: transform 0.3s ease;
    }

    .brand-logo:hover {
        transform: scale(1.05);
    }

    .brand-title {
        font-family: 'Montserrat', sans-serif;
        font-weight: 700;
        color: var(--primary-color);
        font-size: 1.8rem;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        margin: 0;
    }

    .navbar-main {
        background: var(--primary-color) !important;
        padding: 0;
    }

    .main-menu .nav-link {
        color: var(--text-light) !important;
        font-weight: 500;
        padding: 1rem 1.5rem !important;
        transition: all 0.3s ease;
        position: relative;
    }

    .main-menu .nav-link:hover,
    .main-menu .nav-link.active {
        background: var(--secondary-color);
        color: var(--text-dark) !important;
    }

    .main-menu .nav-link::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        width: 0;
        height: 3px;
        background: var(--secondary-color);
        transition: all 0.3s ease;
    }

    .main-menu .nav-link:hover::after,
    .main-menu .nav-link.active::after {
        width: 100%;
        left: 0;
    }

    .navbar-toggler {
        border-color: var(--text-light);
    }

    .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3e%3cpath stroke='rgba(255, 255, 255, 0.8)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }

    @media (max-width: 992px) {
        .brand-title {
            font-size: 1.4rem;
        }
        
        .main-menu .nav-link {
            padding: 0.8rem 1rem !important;
        }
    }
</style>

<script>
    // Función para actualizar fecha y hora
    function updateDateTime() {
        const options = {
            weekday: 'long',
            year: 'numeric',
            month: 'long',
            day: 'numeric',
            hour: '2-digit',
            minute: '2-digit',
            second: '2-digit',
            hour12: true
        };
        
        const dateTime = new Date().toLocaleDateString('es-ES', options);
        document.getElementById("current-date-time").textContent = dateTime;
    }

    // Actualizar inmediatamente y cada segundo
    updateDateTime();
    setInterval(updateDateTime, 1000);
</script>