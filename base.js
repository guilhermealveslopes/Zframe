$( document ).ready(function() {
    
   var divPai = $("#html")
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
        $('.icon-bolt').fadeIn();
        $('#modal-elementos').css('opacity', '1'); // Ativa a modal
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
       $('#modal-elementos').removeClass('index'); // Tira a prioridade da modal, tornando o conteúdo arrastável novamente
    $('#modal-elementos').css('opacity', '0'); // Esconde a modal
   })


})
