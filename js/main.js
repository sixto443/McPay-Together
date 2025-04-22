(function ($) {
    "use strict";
    
    // Dropdown on mouse hover
    $(document).ready(function () {
        function toggleNavbarMethod() {
            if ($(window).width() > 992) {
                $('.navbar .dropdown').on('mouseover', function () {
                    $('.dropdown-toggle', this).trigger('click');
                }).on('mouseout', function () {
                    $('.dropdown-toggle', this).trigger('click').blur();
                });
            } else {
                $('.navbar .dropdown').off('mouseover').off('mouseout');
            }
        }
        toggleNavbarMethod();
        $(window).resize(toggleNavbarMethod);
    });
    
    async function generarInforme() {
        try {
            // Validación básica
            const camposRequeridos = ['nombre-proyecto', 'inversion', 'ingresos', 'costos'];
            if(camposRequeridos.some(id => !document.getElementById(id).value)) {
                throw new Error('Complete todos los campos requeridos');
            }
    
            // Mostrar loader
            document.getElementById('vista-previa-pdf').innerHTML = `
                <div class="loading">
                    <div class="spinner"></div>
                    Generando informe...
                </div>
            `;
    
            // Recolectar datos
            const data = {
                proyecto: document.getElementById('nombre-proyecto').value,
                inversion: parseFloat(document.getElementById('inversion').value),
                ingresos: parseFloat(document.getElementById('ingresos').value),
                costos: parseFloat(document.getElementById('costos').value),
                roi: document.getElementById('roi-result').innerText,
                vpn: document.getElementById('vpn-result').innerText,
                payback: document.getElementById('payback-result').innerText
            };
    
            // Enviar datos
            const response = await fetch('generar_pdf.php', {
                method: 'POST',
                headers: {'Content-Type': 'application/json'},
                body: JSON.stringify(data)
            });
    
            const result = await response.json();
    
            if(!response.ok || !result.success) {
                throw new Error(result.error || 'Error al generar PDF');
            }
    
            // Actualizar UI
            document.getElementById('vista-previa-pdf').innerHTML = `
                <div class="pdf-preview">
                    <h4>Informe Generado:</h4>
                    <a href="${result.pdfUrl}" target="_blank" class="btn-download">
                        📥 Descargar PDF
                    </a>
                    <p>Compartir informe:</p>
                    <div class="share-buttons">
                        <button onclick="sharePDF('${result.pdfUrl}', 'outlook')">📧 Outlook</button>
                        <button onclick="sharePDF('${result.pdfUrl}', 'teams')">💬 Teams</button>
                    </div>
                </div>
            `;
    
        } catch (error) {
            document.getElementById('vista-previa-pdf').innerHTML = `
                <div class="error">
                    ❌ Error: ${error.message}
                </div>
            `;
        }
    }
    
    // Función para compartir
    function sharePDF(pdfUrl, service) {
        const subject = encodeURIComponent("Informe de ROI");
        const body = encodeURIComponent("Consulta el informe adjunto: ");
        const baseUrls = {
            outlook: `https://outlook.office.com/mail/deeplink/compose?subject=${subject}&body=${body}`,
            teams: `https://teams.microsoft.com/share?href=${encodeURIComponent(pdfUrl)}`
        };
        window.open(baseUrls[service], '_blank');
    }
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Tranding carousel
    $(".tranding-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 2000,
        items: 1,
        dots: false,
        loop: true,
        nav : true,
        navText : [
            '<i class="fa fa-angle-left"></i>',
            '<i class="fa fa-angle-right"></i>'
        ]
    });


    // Carousel item 1
    $(".carousel-item-1").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        items: 1,
        dots: false,
        loop: true,
        nav : true,
        navText : [
            '<i class="fa fa-angle-left" aria-hidden="true"></i>',
            '<i class="fa fa-angle-right" aria-hidden="true"></i>'
        ]
    });

    // Carousel item 2
    $(".carousel-item-2").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        margin: 30,
        dots: false,
        loop: true,
        nav : true,
        navText : [
            '<i class="fa fa-angle-left" aria-hidden="true"></i>',
            '<i class="fa fa-angle-right" aria-hidden="true"></i>'
        ],
        responsive: {
            0:{
                items:1
            },
            576:{
                items:1
            },
            768:{
                items:2
            }
        }
    });


    // Carousel item 3
    $(".carousel-item-3").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        margin: 30,
        dots: false,
        loop: true,
        nav : true,
        navText : [
            '<i class="fa fa-angle-left" aria-hidden="true"></i>',
            '<i class="fa fa-angle-right" aria-hidden="true"></i>'
        ],
        responsive: {
            0:{
                items:1
            },
            576:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            }
        }
    });
    

    // Carousel item 4
    $(".carousel-item-4").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        margin: 30,
        dots: false,
        loop: true,
        nav : true,
        navText : [
            '<i class="fa fa-angle-left" aria-hidden="true"></i>',
            '<i class="fa fa-angle-right" aria-hidden="true"></i>'
        ],
        responsive: {
            0:{
                items:1
            },
            576:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            },
            1200:{
                items:4
            }
        }
    });
    
})(jQuery);

