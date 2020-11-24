$(document).ready(function() {
    /*Plugin Magnific Popup*
     * Passo a passo para utilizar 
     * 1 - insira um lik nas imagens ex: <a href='/img/imagem.jpg'> 
     * 2 - coloque em todos os link a classe image-link
    **/
   
    /*Abre varias imagens*/
//    $('.imagem-fundo-desk').magnificPopup({
//        delegate: 'a',
//        type: 'image',
//        gallery: {enabled: true} /*Esta opção habilita as setinhas para trocar as imagens*/
//    })

    $('.flex-container').magnificPopup({
        delegate: 'a',
        type: 'image',
        gallery: {enabled: true} /*Esta opção habilita as setinhas para trocar as imagens*/
    });
});