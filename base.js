$( document ).ready(function() {
    var form = $('.form').html();
    var divPai = $("#html");
    var cssGlobal = {};

   // **** CLIQUE BOTÃO COMPONENTES PARA APARECER O MENU **** //
   $(".menu_componentes .arrow").click(function(){
      if ($(".menu_componentes").hasClass("aberto")) {
         $(this).html("<i class='icon-angle-right'></i>");

      }else{
         $(this).html("<i class='icon-angle-left'></i>");
      }

      $(".menu_componentes").toggleClass("aberto")

   })
   // **** fim CLIQUE BOTÃO COMPONENTES PARA APARECER O MENU **** //


   $(".addblock").click(function(){

      var type = $(this).attr('type-block');
      var block = $(this).attr('data-block');

      $('head').append('<link rel="stylesheet" href="blocos_css/'+ type +'/'+ block +'.css" type="text/css" />');

      jQuery.get('blocos_css/' + type + '/' + block + '.css', function(data) {
         cssGlobal = data
         console.log(cssGlobal)
      })

      jQuery.get('blocos_html/'+ type +'/' + block + '.html', function(data) {
         $(divPai).append(data)
      })

   })


   dragula([document.getElementById("html")]);



   // **** Abre e Fecha modal dos elementos *** //

    $('.sub-elementos ul li').click(function(){
        var tipo = $(this).attr('data-tipo');

        $('#modal-formulario').css('display', 'none');
        $('#modal-formulario .material').css('display','none');
        $('#modal-elementos .material').css('display','flex');
        $('#modal-elementos').css('opacity', '1').css('display', 'flex');

        $('.icon-bolt').fadeIn();
        $('#modal-elementos').addClass('index'); // Altera o z-index, trazendo a modal para frente do conteúdo
        $('.material').removeClass('.ativo'); // Procura pelo material ativo e oculta
        $('.material').find('.ativo').css('opacity', '0').css('z-index','1'); // Procura pelo material ativo e oculta
        $('.material-'+tipo).css('display', 'flex').css('opacity', '1').css('z-index','2'); // Ativa o material selecionado
        $('.material-'+tipo).addClass('ativo'); // Adiciona a classe 'ativo' ao material selecionado, 
        // tornando-o alvo para ser ocultado no próximo click
    })

    $('.icon-bolt, .addblock').click(function(e){
        e.preventDefault();
        $('.icon-bolt').hide();
        $('.modal').removeClass('index'); // Tira a prioridade da modal, tornando o conteúdo arrastável novamente
        $('.modal').css('opacity', '0'); // Esconde a modal
    })

   // *** Modal Formulário *** //
    
    $(document).on('click', '#code-form, #novo-bloco', function(){
       if($(this).hasClass('bloco-adicionado')){
            $(this).removeClass('bloco-adicionado');
            $('.form').html(form);
       }
        $('#modal-elementos').css('display', 'none');
        $('#modal-elementos .material').css('display','none');
        $('#modal-formulario .material').css('display','flex');
        $('#modal-formulario').css('opacity', '1').css('display', 'flex'); // Ativa a modal
        $('#modal-formulario .coluna').fadeIn(); // Ativa a modal
        $('#modal-formulario').addClass('index'); // Altera o z-index, trazendo a modal para frente do conteúdo
        $('.icon-bolt').fadeIn();
    })

})

jQuery(function($){
    var form;
    // Salva o nome da thumb enviada a ser inserida na tela de sucesso!
    $(document).on('change', 'input[name="thumb"]',function(e){
        form = new FormData();
        form.append('thumb', event.target.files[0]);
        var thumbSelecionada = e.target.files[0].name;
        $(this).attr('data-img', thumbSelecionada);
        thumb = e.target.files[0];
        $('.nomedathumb').html('<p>'+thumbSelecionada+'</p>');
    });
    $(document).on('change','input[name="full"]', function(e){
        var imgselecionada = e.target.files[0].name;
        $(this).attr('data-img', imgselecionada);
        file = e.target.files[0];
        $('.nomedaimg').html('<p>'+imgselecionada+'</p>');
    });

$('#formbloco').submit(function(e) {
    e.preventDefault();

    var formData = new FormData(this);
    formData.append('thumb', thumb);
    console.log(thumb);
    $('#code-form').addClass('bloco-adicionado');
    var thumb = $('#thumb').attr('data-img');
    var thumb = thumb.split('.');
    console.log(thumb);
    var bloco_nome = $('input[name="bloco_nome"]').val();
    var bloco_tipo = $('.bloco_tipo option:selected').text().toLowerCase();
    var diretorioHTML = 'blocos_html/'+ bloco_tipo + '/' + bloco_nome;
    var diretorioCSS = 'blocos_css/'+ bloco_tipo + '/' + bloco_nome;
    var diretorioIMG = 'blocos_img/'+ bloco_tipo + '/';
    alert(bloco_tipo);
    $.ajax({
        url: 'importar.php',
        type: 'POST',
        cache: false,
        contentType: false,
        processData: false,
        data:formData,
        success: function (response) {
            alert(response);
            $('.material .coluna').find('form').slideUp();
            $('.coluna.form').delay(800).html(
                '<div class="sucesso">'+
                    '<div class="coluna">'+
                        '<p class="titulo"> Bloco ' +
                            '<span class="blocoNome">' +
                                bloco_nome +
                            '</span>' +
                            ' criado com sucesso!'+
                        '</p>'+
                        '<div class="tipo"> Bloco do tipo: <span class="tipo">' +           bloco_tipo + '</span>' +
                        '</div>' +
                        '<ul> <strong>Caminhos criados :</strong>'+
                            '<li><span class="html">html</span> - <a href=" '+ diretorioHTML + '.html" target="_new">' + diretorioHTML + '</a>' +
                            '</li>'+
                            '<li><span class="css">css</span> - <a href=" '+ diretorioCSS + '.css" target="_new">' + diretorioCSS + '</a>' +
                            '</li>'+
                            '<li><span class="img">html</span> - <a href=" '+ diretorioIMG + '.html" target="_new">' + diretorioIMG + '</a>' +
                            '</li>'+
                        '</ul>'+
                    '</div>'+
                    '<div class="coluna">'+
                        '<img src="'+ diretorioIMG + bloco_nome + '.' + thumb[1] + '">' +
                    '</div>'+
                '</div>'+
                '<a id="novo-bloco" class="bloco-adicionado" href="#"> Adicionar um novo bloco </a>'
            );
            notificacao();
        }               
    });
});
$('.alerta').click(function(){
    alert('Você está preste a excluir um bloco de conteúdo. Esta ação é irreversível');
    $('.alerta').remove();
})
})


// Exclui bloco via painel

$(document).on('click', '.painel li', function(){
    var caminho = $(this).attr('data-bloco');
    var nome = $(this).attr('data-nome');
     $.ajax({ url: 'painel.php',
         data: {caminho: caminho},
         type: 'post',
         success: function(output) {
             $('.lista').html(output);
             alert('Bloco '+nome+' excluido com sucesso!');
         }
     });
})

function notificacao() {
    if (Notification.permission !== "granted")
    Notification.requestPermission();
    else {
        var mensagens = ["Uhuuul!", "AEEE!", "hmm... mais um então! BOA", "Vai que vai!", "Coda muito esse guri!"];
    function mensagem() {
        return mensagens[Math.floor(Math.random() * mensagens.length)];
    }
    var bloco_nome = $('.blocoNome').html();
    var notification = new Notification(mensagem(), {
    icon: 'http://localhost/frame/img/z-dark.png',
    body: 'Bloco ' + bloco_nome + ' criado com sucesso!',
    requireInteraction: true,
    });
    notification.onclick = function () {
        window.open("http://localhost/frame");      
        };
        setTimeout(function(){
            notification.close();
        }, 6000); 
    }
}

/* Notificação */

// request permission on page load
document.addEventListener('DOMContentLoaded', function () {
if (!Notification) {
alert('Desktop notifications not available in your browser. Try Chromium.'); 
return;
}

if (Notification.permission !== "granted")
Notification.requestPermission();
});
