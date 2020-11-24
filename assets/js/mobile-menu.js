    $(document).ready(function() {
        //função de ocultar o modal personalizado
        $('.menu-btn').on('click', function(event) {
            if(!($('.menu-btn').hasClass('open'))) {
                $('.menu-btn').toggleClass('open');
                $('.bar').css({'transform': 'translateX(380px)'});
                $('.menu-btn_burger').append('<style>.menu-btn_burger::before, .menu-btn_burger::after, .menu-btn_burger{background-color: #FFF}</style>');
                event.stopPropagation(); // evita que o modal fique borbulhando  
                $('.overlay').css({'display': 'block'});
            } else {
                $('.bar').css({'transform': 'translateX(0px)'}); 
                $('.menu-btn_burger').append('<style>.menu-btn_burger::before, .menu-btn_burger::after, .menu-btn_burger{background-color: #000}</style>');
                $('.menu-btn').toggleClass('open');
                $('.overlay').css({'display': 'none'}); 
            }
        });  
        
        $('.overlay').click(function(event) {
            $('.bar').css({'transform': 'translateX(0px)'}); 
            $('.menu-btn_burger').append('<style>.menu-btn_burger::before, .menu-btn_burger::after, .menu-btn_burger{background-color: #000}</style>');
            $('.menu-btn').toggleClass('open');
            $('.overlay').css({'display': 'none'});
        });
    });