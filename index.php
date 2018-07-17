<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <title>Frame</title>
   



    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="zpixel.css">
    <!-- BOOTSTRAP -->
	<!-- FAVICON -->
	<link rel="shortcut icon" href="images/favicon.ico">

	<!-- BOOTSTRAP -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- ICONS -->
	<link rel="stylesheet" href="css/icons/fontawesome/css/style.css">
	<link rel="stylesheet" href="css/icons/style.css">
	<link rel="stylesheet" href="css/icons/icon2/style.css">
	<link rel="stylesheet" href="js/vendors/swipebox/css/swipebox.min.css">

	<!-- THEME / PLUGIN CSS -->
	<link rel="stylesheet" href="js/vendors/slick/slick.css">
	<link rel="stylesheet" href="css/style.css">

	<!-- SKIN -->
	<link rel="stylesheet" href="css/skin/default.css">
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="blocos_html">
        <?php include('functions.php') ?>
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
            <form id="formbloco" class="form-blocos" action="importar.php" method="post" style="display:flex;flex-direction:column;" enctype="multipart/form-data">

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
                        <?php 
                            foreach($data as $tipo){
                                echo '<option value="'.$tipo.'">'.$tipo.'</option>';
                            }
                        ?>
                    </select>
                </label>
            </div>
           
           
            <!-- Desabilita o ajax, e grava a img normalmente 
            <input id="criar-bloco"  name="submit" value="Enviar"> -->
            <input type="submit" id="criar-bloco"  name="submit" value="Enviar">
            </form>

            </div>
            <div class="coluna painel">
                <div class="alerta"></div>
                <div class="heading">
                   <h2>Últimos blocos adicionados</h2>
                </div>
                <div class="lista">
                    <?php include('painel.php') ?>
                </div>
            </div>
        </div>
        <i class="icon-bolt"></i>
    </div>

</body>




<!-- JAVASCRIPT =============================-->
<script src="js/jquery.js"></script>
<script src='base.js'></script>
<script src='funcoes.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/dragula/3.7.2/dragula.min.js'></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/vendors/slick/slick.min.js"></script>
<script src="js/vendors/jquery.easing.min.js"></script>
<script src="js/vendors/stellar.js"></script>
<script src="js/vendors/isotope/isotope.pkgd.js"></script>
<script src="js/vendors/swipebox/js/jquery.swipebox.min.js"></script>
<script src="js/vendors/mc/jquery.ketchup.all.min.js"></script>
<script src="js/vendors/mc/main.js"></script>
<script>
    jQuery(function($){
        $('document').ready(function(){
            $('.addblock').on('click', function(){ 
                $('#main').remove();
                var script = document.createElement("script");
                script.type = "text/javascript";
                script.src = "js/main.js"; 
                script.id = "main";
                document.getElementsByTagName("head")[0].appendChild(script);
                return false;

           }) 
        })
    })

</script>

</html>
