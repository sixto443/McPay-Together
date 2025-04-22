<!-- Footer Start -->
<div class="container-fluid footer-main pt-5 px-sm-3 px-md-5">
    <div class="row text-center justify-content-center">
        <!-- Brand Section -->
        <div class="col-lg-4 col-md-6 mb-5 footer-column">
            <a href="index.php" class="footer-brand">
                <h1 class="brand-title">Visionary-ROI</h1>
            </a>
            <p class="brand-slogan">Predice, Planifica, Prospera</p>
            <div class="social-links">
               
            </div>
        </div>

        <!-- Quick Links -->
        <div class="col-lg-4 col-md-6 mb-5 footer-column">
            <h4 class="section-title">Enlaces Rápidos</h4>
            <div class="footer-links">
                <a href="Finance.php" class="footer-link">
                    <i class="fas fa-chevron-right"></i>Acerca de
                </a>
                <a href="Privacyandpolicy.php" class="footer-link">
                    <i class="fas fa-chevron-right"></i>Privacidad
                </a>
                <a href="Termsandconditions.php" class="footer-link">
                    <i class="fas fa-chevron-right"></i>Términos
                </a>
                <a href="contact.php" class="footer-link">
                    <i class="fas fa-chevron-right"></i>Contacto
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Footer Bottom -->
<div class="container-fluid copyright-bar">
    <div class="row">
        <div class="col-12 text-center py-3">
            <p class="copyright-text">
                © 2025 VisionaryROI. Todos los derechos reservados<br>
                <span class="partners">Microsoft Partner | CódigoFacilito </span>
            </p>
        </div>
    </div>
</div>

<!-- Back to Top -->
<a href="#" class="back-to-top">
    <i class="fas fa-arrow-up"></i>
</a>

<style>
    :root {
        --primary-color: #2A5C82;
        --secondary-color: #F5B041;
        --dark-text: #2C3E50;
        --light-text: #F8F9FA;
        --background-light: #FFFFFF;
    }

    .footer-main {
        background: var(--background-light);
        border-top: 3px solid var(--primary-color);
        box-shadow: 0 -2px 15px rgba(0,0,0,0.05);
    }

    .footer-brand {
        text-decoration: none;
        transition: transform 0.3s ease;
    }

    .brand-title {
        font-family: 'Montserrat', sans-serif;
        font-weight: 700;
        color: var(--primary-color);
        font-size: 2rem;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        margin-bottom: 0.5rem;
    }

    .brand-slogan {
        color: var(--dark-text);
        font-size: 1.1rem;
        font-style: italic;
        margin-bottom: 1.5rem;
    }

    .social-links {
        display: flex;
        justify-content: center;
        gap: 1.5rem;
    }

    .social-icon {
        color: var(--primary-color);
        font-size: 1.5rem;
        transition: all 0.3s ease;
    }

    .social-icon:hover {
        color: var(--secondary-color);
        transform: translateY(-3px);
    }

    .section-title {
        color: var(--primary-color) !important;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 1.5rem;
        position: relative;
        padding-bottom: 0.5rem;
    }

    .section-title::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 50px;
        height: 2px;
        background: var(--secondary-color);
    }

    .footer-links {
        display: flex;
        flex-direction: column;
        gap: 0.8rem;
    }

    .footer-link {
        color: var(--dark-text) !important;
        text-decoration: none;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
    }

    .footer-link i {
        color: var(--primary-color);
        transition: all 0.3s ease;
    }

    .footer-link:hover {
        color: var(--secondary-color) !important;
        transform: translateX(5px);
    }

    .footer-link:hover i {
        color: var(--secondary-color);
    }

    .copyright-bar {
        background: var(--dark-text);
        color: var(--light-text);
    }

    .copyright-text {
        font-size: 0.9rem;
        margin: 0;
    }

    .partners {
        display: block;
        font-size: 0.8rem;
        color: rgba(255,255,255,0.7);
        margin-top: 0.5rem;
    }

    .back-to-top {
        position: fixed;
        bottom: 30px;
        right: 30px;
        background: var(--secondary-color);
        color: var(--light-text) !important;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        box-shadow: 0 3px 10px rgba(0,0,0,0.2);
        opacity: 0;
        transition: all 0.3s ease;
    }

    .back-to-top.show {
        opacity: 1;
    }

    .back-to-top:hover {
        background: var(--primary-color);
        transform: translateY(-3px);
    }

    @media (max-width: 768px) {
        .brand-title {
            font-size: 1.5rem;
        }
        
        .footer-column {
            margin-bottom: 2rem;
        }
    }
</style>

<script>
    // Back to Top Button
    window.addEventListener('scroll', function() {
        const backToTop = document.querySelector('.back-to-top');
        if (window.scrollY > 300) {
            backToTop.classList.add('show');
        } else {
            backToTop.classList.remove('show');
        }
    });
</script>