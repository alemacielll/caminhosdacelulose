/* =========================
   OWL CAROUSEL
========================= */
if (typeof jQuery !== "undefined") {
    jQuery(function ($) {
        if ($(".main-slider").length) {
            $(".main-slider").owlCarousel({
                items: 1,
                loop: true,
                margin: 0,
                nav: true,
                dots: true,
                autoplay: true,
                autoplayTimeout: 12000, // fica 12s parado em cada slide
                smartSpeed: 800, // velocidade da transição
                navText: [
                    "<i class='fa fa-chevron-left'></i>",
                    "<i class='fa fa-chevron-right'></i>"
                ],
                responsive: {
                    0: { nav: false },
                    768: { nav: true }
                }
            });
        }
    });
}

/* =========================
   FANCYBOX
========================= */



document.addEventListener("DOMContentLoaded", function() {
    
    // Verifica se o Fancybox existe para não dar erro
    if (typeof Fancybox !== "undefined") {
        
        // O seletor "[data-fancybox]" (sem =nome) ativa para TODAS as galerias do site
        Fancybox.bind("[data-fancybox]", {
            Images: {
                zoom: true,
            },
            Toolbar: {
                display: {
                    left: ["infobar"],
                    middle: ["zoomIn", "zoomOut"],
                    right: ["slideshow", "thumbs", "close"],
                },
            },
        });
        
    } else {
        console.error("Erro: Fancybox JS não encontrado. Verifique o footer.");
    }
    
});