(function() {
    switch($(location).attr('href')) {
        case 'http://localhost/abcdportas-mvc/': 
            $("meta[name='keywords']").attr("content", "Home, ABCD PORTAS, Portas de Aço, Portas de Enrolar");
        break;

        case 'http://localhost/abcdportas-mvc/servicos': 
            $("meta[name='keywords']").attr("content", "Serviços, ABCD PORTAS, Manutenção e Serviços de Serralheria");
        break;

        case 'http://localhost/abcdportas-mvc/sobre':
            $("meta[name='keywords']").attr("content", "Sobre, ABCD PORTAS, Profissionais especializados, Qualidade nos produtos");
        break;

        case 'http://localhost/abcdportas-mvc/contato':
            $("meta[name='keywords']").attr("content", "Contato, ABCD PORTAS, Fale conosco, Contato ABCD PORTAS");
        break;
    }
})();