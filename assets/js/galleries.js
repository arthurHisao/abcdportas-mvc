$(document).ready(function() {
    /*Plugin Magnific Popup*/
    $('.flex-container').magnificPopup({
        delegate: 'a',
        type: 'image',
        gallery: {enabled: true} /*Esta opção habilita as setinhas para trocar as imagens*/
    });
});