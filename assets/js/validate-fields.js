var form = $('form[name="formulario"]'),
    nome = $('#nome'),
    email = $('#email'),
    telefone = $('#telefone'),
    menssagem = $('#menssagem'),
    enviar = $('#enviar'),
    imgCaminho = $('#caminho').attr('src'),
    alertText = $('.alert-text');

(function() {
    //plugin mask para validar campo telefone
    telefone.mask('(00) 000000000');

    //enviando os dados
    form.submit(function(event) {
        event.preventDefault();
        //Validate();    

        var formulario = $(this);
        var dados = {};

        formulario.find('[name]').each(function(value) {
            //cada elemento do formulario
            var formulario = $(this),
            //obtem name de cada elemento
            nome = formulario.attr('name'),
            //obtem valor de cada elemento
            value = formulario.val();
            dados[nome] = value;
        });

        //transformando o objeto em json
        var dadosJson = JSON.stringify(dados);

        if(Validate() === false) {
            return false;
        }
        
        $.ajax({
            type: "POST",
            url: 'index.php',
            //dataType: 'json',
            //contentType: 'application/json; charset=utf-8',
            data: {"dados":dadosJson},

            beforeSend: function() {
                //exibindo modal
                $('.modal').modal({backdrop: 'static', keyboard: false});
                $('.modal').modal('show');
                $('.modal-backdrop.in').remove();
            },

            success:function(data) {      
                // interpretando os dados json
                let res = JSON.parse(data);
                
                if(res.status === "success") {                  
                    //resultado do servidor  
                    $('.conteudo').html(res.response);
                    formulario.find('input, textarea').val("");
                    closeModal();
                } else {
                    $('.conteudo').html(res.response);
                    closeModal();
                }
            }, 

            error:function() {
                $('.conteudo').html("<b>Erro verifique a conexão com a internet</b>");
                closeModal();
            },
        });
    });
})();

function closeModal() {
    setTimeout(function () {
        $('.modal').modal('hide');
        
        // restaurando o modal padrao
        $('.conteudo').html(`
            <h2>Enviando E-mail</h2>
            <img src="${imgCaminho}">
        `);
    }, 4000);
}

function Validate() {
    let nomeVal = $('#nome').val();
    let emailVal = $('#email').val();
    let telefoneVal = $('#telefone').val(); 
    let menssagemVal = $('#menssagem').val(); 
    
    //(.) encontra o caractere cria grupo de caracteres
    //\1 encontre o caractere reptido
    //{x} quantidade de caractere 
    if(nomeVal.match(/(.)\1{2}/)) {
        alertMessage('Digite um nome válido', 'alert-warning'); 
        nome.focus();
        return false;  
    } else if(telefoneVal.match(/(.)\1{4}/)) {
        alertMessage('Insira um número de telefone válido, exemplo (19) 3008-8988', 'alert-warning'); 
        telefone.focus();
        return false;
    } else if(menssagemVal.match(/(.)\1{2}/)) {
        alertMessage('Insira uma menssagem válida', 'alert-warning'); 
        menssagem.focus();
        return false;
    }

    if (!nomeVal.match(/^(\w{2})[a-zA-Z ]{2,}$/g)) { // padrao g = global procura todas as ocorrencias       
        alertMessage('A quantidade mínima é de 3 caracteres, não é valido acentuação exemplo: João, José', 'alert-warning'); 
        nome.focus();
        return false;      
    } else if (!emailVal.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)) {
        alertMessage('Endereço de e-mail inválido', 'alert-danger'); 
        email.focus();
        return false;
    } else if(!telefoneVal.match(/^[0-9() ]{13,}$/g)) {
        alertMessage('Insira um número de telefone válido, exemplo (19) 3008-8988', 'alert-danger'); 
        telefone.focus();
        return false;
    } else if(menssagemVal == "" || menssagemVal.length <= 30) {
        alertMessage('O campo menssagem não deve ser curto', 'alert-danger'); 
        menssagem.focus();
        return false;
    }
}

function alertMessage(msg, alerta) {
    if(alertText.hasClass('alert-danger')) {
        alertText.removeClass('alert-danger');
        alertText.addClass(alerta);
        alertText.html(msg);
        enviar.prop('disabled', true);
        hideAlert();
    } else {
        alertText.addClass(alerta);
        alertText.html(msg);
        enviar.prop('disabled', true);
        hideAlert();
    }
}

function hideAlert() {
    setTimeout(function () {
        alertText.removeClass();
        alertText.html('');
        enviar.prop('disabled', false);
    }, 4000);
}