function download(data, filename, type) {
    var file = new Blob([data], {type: type});
    if (window.navigator.msSaveOrOpenBlob) // IE10+
        window.navigator.msSaveOrOpenBlob(file, filename);
    else { // Others
        var a = document.createElement("a"),
                url = URL.createObjectURL(file);
        a.href = url;
        a.download = filename;
        document.body.appendChild(a);
        a.click();
        setTimeout(function() {
            document.body.removeChild(a);
            window.URL.revokeObjectURL(url);  
        }, 0); 
    }
}
 
jQuery(function($){

        $('.controles i:not(#form)').click(function(event){
            event.preventDefault();
            $('.caixa-de-controle').slideToggle();
        })

        $('.nav-tab li').click(function(event){
            event.preventDefault();
            $('.tab').removeClass('ativa');
            var tab = $(this).attr('class');
            $('.tab').hide();
            $('#'+tab).slideToggle();
        })

        $('#form').click(function(event){
            event.preventDefault();
            $('#download').slideToggle();
        })

        var paideTodos = document.getElementById("html");

        // Adiciona uma nova coluna com as devidas opções

        $('#coluna').click(function(event){
            event.preventDefault();
            var coluna = $('#nomeColuna').val();
           $('#nomeColuna').val('');
           $('.modal_2').fadeIn();

        // Opções da Coluna

        var colunaOption = '<div class="objeto" id="'+coluna+'">'+
        '<select class="tipo" name="tipo" data-tipo="tipo_'+coluna+'">'+
            '<option value="">Elemento</option>'+
            '<option value="div">div</option>'+
            '<option value="img">img</option>'+
            '<option value="ul">ul</option>'+
            '<option value="li">li</option>'+
            '<option value="header">header</option>'+
            '<option value="footer">footer</option>'+
        '</select>'+

        '<input type="text" data-tipo="id_'+coluna+'" placeholder="ID da DIV">'+

        '<select class="tipo" name="tipo" data-tipo="colunas_'+coluna+'">'+
            '<option value="">Colunas</option>'+
            '<option value="1">1</option>'+
            '<option value="2">2</option>'+
            '<option value="3">3</option>'+
            '<option value="4">4</option>'+
            '<option value="5">5</option>'+
            '<option value="6">6</option>'+
            '<option value="7">7</option>'+
            '<option value="8">8</option>'+
            '<option value="9">9</option>'+
            '<option value="10">10</option>'+
            '<option value="11">11</option>'+
            '<option value="12">12</option>'+
        '</select>'+

          '<select class="tipo" name="tipo" data-tipo="flex_'+coluna+'">'+
            '<option value="">Flex Dir</option>'+
            '<option value="row">row</option>'+
            '<option value="column">column</option>'+
          
        '</select>'+

        '<input type="text" data-tipo="classe_'+coluna+'" placeholder="Classe da DIV">'+
        '<input type="text" data-tipo="conteudo_'+coluna+'" placeholder="Conteudo da DIV">'+

            '<div class="controles">'+
                '<a href="#" class="addLinha" data-item="'+coluna+'">+</a>'+
                '<a href="#" class="removeLinha" data-item="'+coluna+'">-</a>'+
            '</div>'+
        '</div>'+
        
        
        $(paideTodos).append(colunaOption);

        })


         $(document).delegate("#modal", "click", function(event){
        
        event.preventDefault();
        $('body').css('background', 'none');
        var tipo = $(this).attr('class');
        console.log('tipo ' + tipo);
        var bloco = document.getElementById(tipo);
        console.log('bloco ' + bloco);
        var imgblock = $(bloco).find('.blocoZ.ativo').attr('data-block');
        console.log('imgblock ' + imgblock);
        console.log('var ' + window[imgblock]);
        $(paideTodos).append(
            window[imgblock]
        )
        $('.modal_2').fadeOut();
         });
        // Ao clicar em adicionar linha, pega os valores setados e gera um novo elemento
        
        console.log(paideTodos);
        $(document).delegate(".addLinha", "click", function(event){
        event.preventDefault();
        var id = $(this).attr('data-item');
        var obj = document.getElementById(id);
        var objID = $(obj).find('[data-tipo="id_'+id+'"]').val();
        var objtipo = $(obj).find('[data-tipo="tipo_'+id+'"]').val();
        var objcoluna = $(obj).find('[data-tipo="colunas_'+id+'"]').val();
        var objflex = $(obj).find('[data-tipo="flex_'+id+'"]').val();
        var objclasse = $(obj).find('[data-tipo="classe_'+id+'"]').val();
        var objconteudo = $(obj).find('[data-tipo="conteudo_'+id+'"]').val();

        $('[data-linha="'+id+'"]').fadeOut();
        var link = '';
        if(objtipo == 'img'){
            var link = ' src="'+objconteudo+'" ';
            var objconteudo = '';
        }
       
            $(paideTodos).append(
                '<'+objtipo+' '+link+' data-linha="'+id+'" id="'+objID+'" class="linha col-'+objcoluna+' '+objclasse+' '+objflex+'">'+
                    objconteudo +
                    '<a href="#" class="addItem" data-item="'+id+'">Adicionar item</a>'+
                '</'+objtipo+'>'
            )
        });


        // Ao clicar em adicionar item, Adiciona um elemento filho na div em questão

        $(document).delegate(".removeLinha", "click", function(event){
            event.preventDefault();
            var id = $(this).attr('data-item');
            var obj = document.getElementById(id);
           $(obj).remove();
           $('[data-linha="'+id+'"]').remove();
        })

        // Ao clicar em adicionar item, Adiciona um elemento filho na div em questão

        $(document).delegate(".addItem", "click", function(event){
            event.preventDefault();
            var itemID = $(this).attr('data-item')
            console.log(itemID);
            console.log('click');
           $('[data-linha="'+itemID+'"]').append('<div class="item">teste</div>');
        })

        // Pega todo o código gerado, remove os botões de opções, e gera um arquivo com o nome e extensão escolhida.

        $('#printa').click(function(){
            $(".addItem, .add, .objeto").remove();
            var resultado = $('#html')[0].outerHTML ;
            var filename = document.getElementById('filename');
            var arquivo = filename.value;
            download(resultado, arquivo, 'text/html');

        })

        $(document).delegate(".block-link", "click", function(event){
            event.preventDefault();
            $('.block-link').find('img').removeClass('ativo');
            $(this).find('img').addClass('ativo');

        })

        
        
    })