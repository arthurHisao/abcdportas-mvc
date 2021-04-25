<?php
    if(!defined('URL')) {
        header("Location: /");
        exit();
    }
?>

<!--Inicio da sessao-->
<section>
    <div class="banner">
        <div class="text-box"></div>
        <h1 class="text-center texto-principal">ABCD PORTAS DE AÇO</h1>
        <a href="#banner">
            <h1 class="text-center arrow">↓</h1>
        </a>
    </div>
</section>

<!--Sessao dois-->
<section>
    <div id="banner">
        <div class="second-banner text-center">
            <div class="container text-box">
                <h1 class="subtitulo">Portões de Aço e Portas de Aço</h1>
                <div class="margin-top-30"></div>
                <p class="alinhar-texto">A empresa ABCD Portas de Aço está há mais de 25 anos no mercado atendendo com
                    qualidade
                    e oferecendo a melhor relação custo-benefício
                    a seus clientes, com compromisso de satisfação total e respeito
                    com os prazos.</p>
                <p class="alinhar-texto">Possuimos maquinário profissional e mão-de-obra extremamente qualificada na linha
                    de produção,
                    tudo para garantir o melhor resultado final dos produtos. Acabamento e durabilidade são
                    fatores que nos diferenciam no mercado.
                </p>
                <div class="margin-top-30"></div>
                <a class="text-white" href="sobre"><button class="btnVer">VER MAIS</button></a>
            </div>
        </div>
    </div>
</section>
<!--Fim da sessao-->

<!--Sessao tres-->
<section>
    <div class="container">
        <div class="margin-top-100"></div>
        <h2 class="servicos">SERVIÇOS</h2>
        <p class="info-titulo">Fabricamos e instalamos:</p>
        <p class="info">Portas de Aço de Enrolar (manuais e automáticas)</p>

        <div class="row d-flex justify-content-center">
            <div class="col-sm-12 col-md-4 col-lg-4">
                <img class="img-fluid" alt="Portão de um escritório" src="<?php echo URL?>assets/img/portoes/portao-escritorio.jpg">
                <div class="text-center mt-4">
                    <p>Portões Basculantes, Deslizantes e Pivotantes.</p>
                </div>
            </div>

            <div class="col-sm-12 col-md-4 col-lg-4">
                <img class="img-fluid" alt="Portão rolante" src="<?php echo URL?>assets/img/portoes/portao-manual.jpg">
                <div class="text-center mt-4">
                    <p>Portões tubulares, em chapa liza, galvanizada, bico de diamante, trapezoidal, lambril, tela.</p>
                </div>
            </div>

            <div class="col-sm-12 col-md-4 col-lg-4">
                <img class="img-fluid" alt="Portão para residências" src="<?php echo URL?>assets/img/portoes/portao-roxo.jpg">
                <div class="text-center mt-4">
                    <p>Portões Basculantes, Deslizantes e Pivotantes.</p>
                </div>
            </div>
            
            <a class="text-white" href="servicos">
                <button class="btnVer">VER MAIS</button>
            </a>
        </div><!--fim row-->

        <div class="margin-top-100"></div>
        <h2 class="servicos">PRODUTOS</h2>
        <p class="info-titulo">
            Temos como especialidade fabricação e manutenção
            de portas de enrolar, automáticas e manuais.
        </p>
        
        
        <div class="row d-flex justify-content-center">
            <div class="margin-top-30"></div>
            
            <div class="col-sm-12 col-md-6 col-lg-3 mt-3 mb-5 text-center">
                <a class="image-link" href="<?php echo URL?>assets/img/portoes/portao-rolante.jpg">
                    <img class="opacity alinhar" alt="Portão rolante de frente" src="<?php echo URL?>assets/img/portoes/portao-rolante.jpg">
                </a>
            </div>
            
            <div class="col-sm-12 col-md-6 col-lg-3 mt-3 mb-5 text-center">
                <a class="image-link" href="<?php echo URL?>assets/img/portoes/portao-empresarial.jpg">
                    <img class="opacity alinhar" alt="Portões rolantes" src="<?php echo URL?>assets/img/portoes/portao-empresarial.jpg">
                </a>
            </div>
            
            <div class="col-sm-12 col-md-6 col-lg-3 mt-3 mb-5 text-center">
                <a class="image-link" href="<?php echo URL?>assets/img/portoes/portao-industrial.jpg">
                    <img class="opacity alinhar" alt="Portão rolante industrial" src="<?php echo URL?>assets/img/portoes/portao-industrial.jpg">
                </a>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-3 mt-3 mb-5 text-center">
                <a class="image-link" href="<?php echo URL?>assets/img/portoes/portao-comercio.jpg">
                    <img class="opacity alinhar" alt="Portão rolante para comércio" src="<?php echo URL?>assets/img/portoes/portao-comercio.jpg">
                </a>
            </div>

            <div class="margin-top-30 text-center mb-5">
                <a class="text-white" href="servicos"><button class="btnVer">VER MAIS</button></a>
            </div>
        </div><!--Fim row-->
    </div><!--Fim container-->
</section>
<!--Fim da sessao tres-->