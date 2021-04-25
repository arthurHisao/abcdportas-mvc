<?php
    if(!defined('URL')) {
        header("Location: /");
        exit();
    }
?>

<div class="quinto-banner text-center">
    <div class="texto-banner">FALE CONOSCO</div>
</div>

<div class="container">
    <div class="box mt-5">
        <div class="text-center">
            <span class="fonte-medio">DEIXE-NOS SEUS DADOS PESSOAIS</span>

            <div class="espacamento-pequeno">
                <div class="alert-text"></div>
            </div>
            <form method="POST" name="formulario" class="text-center">
                <div class="inputText">
                    <label class="labels">Nome *</label>
                    <input id="nome" type="text" name="nome">
                </div>

                <div>
                    <label class="labels">E-mail *</label>
                    <input id="email" type="text" name="email">
                </div>

                <div>
                    <label class="labels">Telefone / Celular *</label>
                    <input id="telefone" type="text" name="telefone">
                </div>

                <div>
                    <label class="labels">Menssagem *</label>
                    <textarea id="menssagem" name="menssagem" class="txtMsg" id="txtMsg"
                        style="width: 100%;"></textarea>
                    <div class="espacamento-pequeno"></div>
                </div>

                <div class="espacamento-texto">
                    <button class="btn btn-primary" id="enviar">Enviar Menssagem</button>
                </div>
            </form>
        </div>
    </div>
    <div class="mb-5"></div>
</div>


<!--modal -->
<div class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="conteudo text-center">
                    <h2>Enviando E-mail</h2>
                    <img id="caminho" src='<?php echo URL?>/assets/img/gif/loading.gif'>
                </div>
            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>
<!--fim modal-->

<div class="moderate-blue">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d914.7081600887749!2d-46.71014410208339!3d-23.50253687828113!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef8f8aace0e01%3A0xfa84804409843ccb!2sRua%20Precilia%20Rodrigues%2C%20119%20-%20Piqueri%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2002914-010!5e0!3m2!1spt-BR!2sbr!4v1588166630065!5m2!1spt-BR!2sbr"
        width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
        tabindex="0"></iframe>
</div>