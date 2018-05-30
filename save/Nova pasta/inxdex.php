<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js'></script>
  
    <title>Document</title>
</head>
<body>
    <form action="frame.php">
        <select name="header" id="header">
            <option value="flex">Flex</option>
            <option value="column">Column</option>
        </select>
    </form>

    <div id="zpixel">

    </div>

     <section id="html-demo">
        <h2>Saving rich text</h2>
        <div class="input" id="html" contenteditable="">
            <h3>Some example rich text</h3>
            <ul>
                <li><del>Plain</del> <ins>Boring</ins> text.</li>
                <li><em>Emphasized text!</em></li>
                <li><strong>Strong text!</strong></li>
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="70" height="70">
                        <circle cx="35" cy="35" r="35" fill="red"/>
                        <text x="10" y="40">image</text>
                    </svg>
                </li>
                <li><a href="https://github.com/eligrey/FileSaver.js">A link.</a></li>
            </ul>
        </div>
        <form id="html-options">
            <label>Filename: <input type="text" class="filename" id="html-filename" placeholder="a rich document"/>.xhtml</label>
            <input type="submit" value="Save"/>
        </form>
    </section>


</body>
<script>
    jQuery(function($){
        var paideTodos = document.getElementById("zpixel");
        console.log(paideTodos);
            $('select#header').bind('change', function() {
            var id = $(this).attr('id');
        var linha = document.getElementById(id);
        console.log(id+'.ativo');
        $('[data-linha="'+id+'"]').fadeOut();
            $(paideTodos).append(
                '<div data-linha="'+id+'" class="ativo">'+this.value+
                    '<a href="#" class="addItem" data-item="'+id+'">Adicionar item</a>'+
                '</div>'
            )
        });

        $(document).delegate(".addItem", "click", function(event){
            event.preventDefault();
            var itemID = $(this).attr('data-item')
            console.log(itemID);
            console.log('click');
           $('[data-linha="'+itemID+'"]').append('<div class="item">teste</div>');
           var outer_element_html = $('#zpixel')[0].outerHTML ;
        console.log(outer_element_html);
        })
        
    })
</script>
<script async="" src="https://cdn.rawgit.com/eligrey/Blob.js/0cef2746414269b16834878a8abc52eb9d53e6bd/Blob.js"/>
    <script async="" src="https://cdn.rawgit.com/eligrey/canvas-toBlob.js/f1a01896135ab378aa5c0118eadd81da55e698d8/canvas-toBlob.js"/>
    <script async="" src="https://cdn.rawgit.com/eligrey/FileSaver.js/5ed507ef8aa53d8ecfea96d96bc7214cd2476fd2/FileSaver.min.js"/>
    <script async="" src="https://cdn.rawgit.com/eligrey/FileSaver.js/5ed507ef8aa53d8ecfea96d96bc7214cd2476fd2/demo/demo.min.js"/>

</html>