<?php
    if(!defined('URL')) {
        header("Location: /");
        exit();
    }
?>
    <div class="banner-desktop">
        <div class="banner">
            <div class="text-box"></div>
            <h1 class="text-center texto-principal">ABCD PORTAS DE AÇO</h1>
            <a href="#banner"><h1 class="text-center arrow">↓</h1></a>
        </div>
    </div>

    <div class="banner-mobile">
        <div class="banner">
            <div class="text-box"></div>
            <h1 class="text-center texto-principal">ABCD PORTAS DE AÇO</h1>
            <a href="#banner-mobile"><h1 class="text-center arrow">↓</h1></a>
        </div>
    </div>
    
    <!--Segundo banner-->
    <div class="second-banner-desktop" id="banner">
        <div class="second-banner text-center" id="second-banner">
            <div class='text-box'>
                <h1 class="subtitulo">Portões de Aço e Portas de Aço</h1>
                    <div class="espacamento-pequeno"></div>
                    <p class="alinhar-texto">A empresa ABCD Portas de Aço está há mais de 25 anos no mercado atendendo com qualidade 
                    e oferecendo a melhor relação custo-benefício 
                    a seus clientes, com compromisso de satisfação total e respeito 
                    com os prazos.</p>
                    <p class="alinhar-texto">Possuimos maquinário profissional e mão-de-obra extremamente qualificada na linha de produção, 
                    tudo para garantir o melhor resultado final dos produtos. Acabamento e durabilidade são 
                    fatores que nos diferenciam no mercado.
                    </p> 
                    <div class="espacamento-pequeno"></div>
                    <a class="text-white" href="sobre"><button class="btnVer">VER MAIS</button></a>
            </div>
        </div>
    </div>

    <!--segundo banner mobile-->
    <div class="second-banner-mobile" id="banner-mobile">
        <div class="second-banner text-center" id="second-banner">
            <div class='text-box'>
                <h1 class="subtitulo">Portões de Aço e Portas de Aço</h1>
                    <div class="espacamento-pequeno"></div>
                    <p class="alinhar-texto">A empresa ABCD Portas de Aço está há mais de 25 anos no mercado atendendo com qualidade 
                    e oferecendo a melhor relação custo-benefício 
                    a seus clientes, com compromisso de satisfação total e respeito 
                    com os prazos.</p>
                    <p class="alinhar-texto">Possuimos maquinário profissional e mão-de-obra extremamente qualificada na linha de produção, 
                    tudo para garantir o melhor resultado final dos produtos. Acabamento e durabilidade são 
                    fatores que nos diferenciam no mercado.
                    </p> 
                    <div class="espacamento-pequeno"></div>
                    <a class="text-white" href="sobre"><button class="btnVer">VER MAIS</button></a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="espacamento"></div>
        <span class="servicos">SERVIÇOS</span><br><br>
        <span class="info-titulo">Fabricamos e instalamos:</span><br>
        <span class="info">Portas de Aço de Enrolar (manuais e automáticas)</span><br>
        <span class="info">ver esquema de montagem</span>

    <!--inicio desktop-column-->
        <div class="desktop-column">
            <div class="d-flex justify-content-center bd-highlight mb-3">
                <div class="image-container">
                    <img class="imagem" src="<?php echo URL?>assets/img/portao-escritorio.jpg">                       
                    <img class="imagem" src="<?php echo URL?>assets/img/portao-manual.jpg">
                    <img class="imagem" src="<?php echo URL?>assets/img/portao-roxo.jpg">
                </div>
            </div>          
            
            <div class="d-flex justify-content-center bd-highlight mb-3">
                <div class="image-description">
                    <p>Portões Basculantes, Deslizantes e Pivotantes.</p>
                </div>

                <div class="image-description">
                    <p>Portões tubulares, em chapa liza, galvanizada, bico de diamante, trapezoidal, lambril, tela.</p>
                </div>

                <div class="image-description">
                    <p>Portões Basculantes, Deslizantes e Pivotantes.</p>
                </div>
            </div>
            
            <div class="text-center">
                <a class="text-white" href="servicos"><button class="btnVer">VER MAIS</button></a>
            </div>
        </div>
        <!--Fim desktop column-->

        <!--inicio mobile colum-->
        <div class="mobile-column">
            <div class="col">
                <div class="d-flex justify-content-center bd-highlight">
                    <div class="text-center image-container">
                        <img class="imagem" src="<?php echo URL?>assets/img/portao-escritorio.jpg">   
                        <div class="space-text"></div>
                        <p>Portões Basculantes, Deslizantes e Pivotantes.</p>
                    </div>
                </div>
                
                
                <div class="d-flex justify-content-center bd-highlight">
                    <div class="text-center image-container">
                        <img class="imagem" src="<?php echo URL?>assets/img/portao-manual.jpg">
                        <div class="space-text"></div>
                        <p>Portões Basculantes, Deslizantes e Pivotantes.</p>
                    </div>
                </div>
                    
                <div class="d-flex justify-content-center bd-highlight">
                    <div class="text-center image-container">
                        <img class="imagem" src="<?php echo URL?>assets/img/portao-roxo.jpg">
                        <div class="space-text"></div>
                        <p>Portões Basculantes, Deslizantes e Pivotantes.</p>
                    </div>
                </div>
            </div>
        </div>
        <!--Fim mobile-->

    
        <div class="espacamento">
            <span class="servicos">PRODUTOS</span><br><br>
            <span class="info-titulo">Temos como especialidade fabricação e manutenção<br>
            de portas de enrolar, automáticas e manuais.
            </span>
        </div>
        
        
        <!--ultima coluna desktop-->
        <div class="desktop-column">
            <div class="espacamento-pequeno">
                <div class="d-flex justify-content-center bd-highlight">
                    <a class="image-link" href="<?php echo URL?>assets/img/portao-rolante.jpg"><img class="opacity alinhar" src="<?php echo URL?>assets/img/portao-rolante.jpg"></a>
                    <a class="image-link" href="<?php echo URL?>assets/img/portao-empresarial.jpg"><img class="opacity alinhar" src="<?php echo URL?>assets/img/portao-empresarial.jpg"></a>
                    <a class="image-link" href="<?php echo URL?>assets/img/portao-industrial.jpg"><img class="opacity alinhar" src="<?php echo URL?>assets/img/portao-industrial.jpg"></a>
                    <a class="image-link" href="<?php echo URL?>assets/img/portao-comercio.jpg"><img class="opacity alinhar" src="<?php echo URL?>assets/img/portao-comercio.jpg"></a>
                </div>
            </div>
        </div>
        <!--fim coluna desktop-->

        <!--ultima coluna desktop mobile-->
        <div class="mobile-column">
            <div class="espacamento-pequeno"></div>
                <div class="flex-container">
                    <div class="image-container">
                        <a class="image-link" href="<?php echo URL?>assets/img/portao-rolante.jpg"><img class="opacity alinhar" src="<?php echo URL?>assets/img/portao-rolante.jpg"></a>                       
                    </div>
                    <div class="image-container">
                        <a class="image-link" href="<?php echo URL?>assets/img/portao-empresarial.jpg"><img class="opacity alinhar" src="<?php echo URL?>assets/img/portao-empresarial.jpg"></a>
                    </div>
                </div>
                  
                <div class="flex-container">
                    <div class="image-container">
                        <a class="image-link" href="<?php echo URL?>assets/img/portao-industrial.jpg"><img class="opacity alinhar" src="<?php echo URL?>assets/img/portao-industrial.jpg"></a>
                    </div>
                    <div class="image-container">
                        <a class="image-link" href="<?php echo URL?>assets/img/portao-comercio.jpg"><img class="opacity alinhar" src="<?php echo URL?>assets/img/portao-comercio.jpg"></a>
                    </div>
                </div>
            </div>
        </div>
        <!--fim coluna mobile-->

        
        <div class="espacamento-pequeno text-center">
            <a class="text-white" href="servicos"><button class="btnVer">VER MAIS</button></a>
        </div>
    </div>     
        
    <div class="espacamento">
        <div class="cor">
            <div class="anuncio text-center">    
                <a class="link-contato" href="contato">
                    <strong>Solicite um Orçamento sem Compromisso!</strong>
                </a>
            </div>
        </div>    
    </div>