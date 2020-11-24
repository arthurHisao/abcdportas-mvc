    var velocity = 0.5;
    
    function update() {
        //checkResolution();
        /*janela = $(window) scrollTop() obtém a posição vertical do scroll do mouse */
        /*obs se + ira subir a imagem de baixo para cima se for - imagem ira subir imagem de cima para baixo*/
        var position = $(window).scrollTop()-100; 
        /*classe html cada ou seja um loop*/
        $("#second-banner").each(function() {
            var height = $(this).height();
            $(this).css('backgroundPosition','50% ' +Math.round((height - position) * velocity) + 'px');
        });
    };

    /*executa a função*/
    $(window).bind('scroll', update);
    
