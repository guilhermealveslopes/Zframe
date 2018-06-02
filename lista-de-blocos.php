<?php

$arquivos = get_included_files();
$root = $arquivos[1];
$split = explode('lista-de-blocos.php', $root);
$HTML_ROOT = $split[0] . '/blocos_html';

   $isFolder = is_dir($HTML_ROOT); //Define a pasta dos blocos HTML
   $folder = $HTML_ROOT;  //Define a pasta dos blocos HTML
   if($isFolder){
      $data = scandir($folder); // Scabeia a pasta e procura pelos tipos de blocos [header] [footer] [etc]
   } 
   unset($data[0]); // Remove o atalho para as pastas anteriores [./]
   unset($data[1]); // Remove o atalho para as pastas anteriores [../]
   if($data){
      foreach ($data as $dat) {
        echo '<div class="bloco material-'.$dat.'">';
            // Para cada pasta encontrada, repete o processo para encontrar os arquivos internos [credi.html]
            $sub_folder = $folder . '/' . $dat;
            $info = pathinfo($folder."/".$dat); 
            $sub_scan = scandir($sub_folder);
            unset($sub_scan[0]);
            unset($sub_scan[1]);
            if(!empty($sub_scan)){
               foreach($sub_scan as $blocos){
                   
                $bloco = str_replace('.html', '', $blocos); // Remove a extensão .html para usar o nome do block [credi]
                $imgdir = scandir('blocos_img/'.$dat);
                if(in_array($bloco.'.png', $imgdir)){
                    $img = true;
                }
                else{
                    $img = false;
                }
                
                ?>
            
                <!-- Cria lista de blocos disponíveis -->
                <li>
                    <?php if($img):  echo '<img src="blocos_img/'.$dat.'/'.$bloco.'.png" alt="">'; ?>
                    <?php else:  echo '<img src="img/semimg.png" alt="">'; endif; ?>
                    <div class="controles">
                        <?php if($img):?>
                        <a href="#<?php print_r($dat) ?>-<?php print_r($bloco) ?>">Visualizar</a>
                        <a class="addblock" data-block="<?php print_r($bloco) ?>" type-block="<?php print_r($dat) ?>" href="#">Adicionar</a>

                        <?php else:?>
                        <a href="#<?php print_r($dat) ?>-<?php print_r($bloco) ?>">Visualizar</a>
                        <a href="#<?php print_r($dat) ?>-<?php print_r($bloco) ?>">Adicionar</a>
                        <?php endif; ?>
                    </div>
                    <a href="#_" class="lightbox" id="<?php print_r($dat) ?>-<?php print_r($bloco) ?>">
                        <?php if($img):  echo '<img src="blocos_img/'.$dat.'/full/'.$bloco.'.png" alt="">'; ?>
                        <?php else:  echo '<div class="alerta"><span>Bloco não disponível, volte em breve.</span></div>'; endif; ?>
                    </a>
                </li>
                <?php 
               }
            }
        echo '</div>';
        };
    }else{
      
    } 
?>