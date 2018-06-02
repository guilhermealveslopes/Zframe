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

    <!-- *** MENU COMPONENTES *** -->
    <aside class="menu_componentes aberto">
        <img src="img/z.png" alt="" class="zlogo">
            <nav>
                <ul>
                    <li class="icon-bars" id="elementos">
                        <div class="sub-elementos">
                            <ul>
                                <li data-tipo="header">Header</li>
                                <li data-tipo="slider">Slider</li>
                                <li data-tipo="sobre">Sobre</li>
                                <li data-tipo="depoimentos">Depoimentos</li>
                                <li data-tipo="portfolio">Portfolio</li>
                                <li data-tipo="galeria">Galeria</li>
                                <li data-tipo="cta">CTA</li>
                                <li data-tipo="footer">Rodapé</li>
                            </ul>
                        </div>
                    </li>
                    <li class="icon-code" id="layout"></li>
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

    <div id="modal-elementos">
        <div class="material">
            <?php include('lista-de-blocos.php');?>
        </div>
        <i class="icon-bolt"></i>
    </div>
   
</body>
</html>
