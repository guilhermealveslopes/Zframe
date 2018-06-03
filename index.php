<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <title>Frame</title>
    <script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
    <script src='base.js'></script>
    <script src='funcoes.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/dragula/3.7.2/dragula.min.js'></script>

    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="zpixel.css">
    <link href="https://file.myfontastic.com/p4uUXPejECK4vhCgLyCmka/icons.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="blocos_html">
    <pre>
        <?php include('functions.php') ?>
    </pre>
</div>
    <!-- *** MENU COMPONENTES *** -->
    <aside class="menu_componentes aberto">
        <img src="img/z.png" alt="" class="zlogo">
            <nav>
                <ul>
                    <li class="icon-bars" id="elementos">
                        <div class="sub-elementos">
                            <ul>
                                <?php 
                                    foreach($data as $tipo){
                                        echo '<li data-tipo="'.$tipo.'">'.$tipo.'</li>';
                                    }
                                ?>
                            </ul>
                        </div>
                    </li>
                    <li class="icon-code" id="code-form"></li>
                    <li class="icon-bullhorn" id="duvidas"></li>

                    <li class="s2"><img src="img/s2.png" alt=""><span class="tooltip">Feito com <i class="icon-heart-o"></i> por Z Pixel</span></li></li>
                </ul>
            </nav>
        <span class="arrow"><i class='icon-angle-left'></i></span>
    </aside>
    <!-- *** fim MENU COMPONENTES *** -->


    <div id="html">

    </div>

    <!-- Modal que carrega os blocos, Separados por tipo. -->

    <div id="modal-elementos" class="modal">
        <div class="material">
            <?php include('lista-de-blocos.php');?>
        </div>
        <i class="icon-bolt"></i>
    </div>
    

    <div id="modal-formulario" class="modal">
        <div class="material">
            <div class="coluna form">
                <h1>Adicionar novo bloco</h1>
            <form class="" action="importar.php" method="post" style="display:flex;flex-direction:column;" enctype="multipart/form-data">

            <input type="text" id="novo_bloco" placeholder="Nome arquivo" name="bloco_nome" value="">
            <textarea name="bloco_html" rows="8"  placeholder="bloco html" cols="80"></textarea>
            <textarea name="bloco_css" rows="8" placeholder="bloco css" cols="80"></textarea>
            <div class="anexo">
                <label for="thumb">
                    <h2>Thumbnail:</h2>
                    <i class="icon-file-image-o"></i>
                    <input type="file" name="thumb" id="thumb" data-img="">
                    <div class="nomedathumb"></div>
                </label>
                <label for="full">
                    <h2>Imagem do bloco:</h2>
                    <i class="icon-file-image-o"></i>
                    <input type="file" name="full" id="full" data-img="">
                    <div class="nomedaimg"></div>
                </label>
                <label for="tipo">
                    <h2>Tipo de bloco:</h2>
                    <select class="bloco_tipo" name="bloco_tipo">
                        <option value="header">Header</option>
                        <option value="footer">Footer</option>
                    </select>
                </label>
            </div>
           
            
            
           
            <!-- Desabilita o ajax, e grava a img normalmente 
            <input type="submit" id="criar-bloco"  name="submit" value="Enviar"> -->
            <input id="criar-bloco"  name="submit" value="Enviar">
            </form>

            </div>
            <div class="coluna">2</div>
        </div>
        <i class="icon-bolt"></i>
    </div>

</body>
</html>
