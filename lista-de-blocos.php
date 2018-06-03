<?php
    foreach ($data as $dat) {
    echo '<div class="bloco material-'.$dat.'">';
        // Para cada pasta encontrada, repete o processo para encontrar os arquivos internos
        $blocos_img = $folder . '/' . $dat;
        $info = pathinfo($folder."/".$dat); 
        $sub_scan = scandir($blocos_img);
        unset($sub_scan[0]);
        unset($sub_scan[1]);
        if(!empty($sub_scan)){
            foreach($sub_scan as $blocos){
                
            $bloco = str_replace('.html', '', $blocos); // Remove a extensão .html para usar o nome do block
            $thumb_imgdir = scandir('blocos_img/'.$dat); // Diretório blocos_img/[bloco]
            $full_imgdir = scandir('blocos_img/'.$dat.'/full'); // Diretório blocos_img/[bloco]/full
            
            if (($key = array_search('full', $thumb_imgdir)) !== false) {
                unset($thumb_imgdir[$key]); // Remove a pasta [FULL] do array das thumbnails
            }
            // Remove os indices do array [.], [..]
            unset($thumb_imgdir[0]);
            unset($thumb_imgdir[1]);
            unset($full_imgdir[0]);
            unset($full_imgdir[1]);
            ?>
        
            <!-- Cria lista de blocos disponíveis -->
            <li>
                <?php 
                foreach($thumb_imgdir as $thumb_imagem){ // Verifica todas as thumbs existentes

                   
                    $ext_thumb = explode(".", $thumb_imagem); // Separa [nome] [extensão]
                    
                    if($ext_thumb[0] == $bloco){ // Se o [nome] da img for igual ao bloco atual, exibe
                        echo '<img src="blocos_img/'.$dat.'/'.$bloco.'.'.$ext_thumb[1].'" alt="">';
                    }
                }
                ?>
                <div class="controles">
                    <a href="#<?php print_r($dat) ?>-<?php print_r($bloco) ?>">Visualizar</a>
                    <a class="addblock" data-block="<?php print_r($bloco) ?>" type-block="<?php print_r($dat) ?>" href="#">Adicionar</a>
                </div>
                <a href="#_" class="lightbox" id="<?php print_r($dat) ?>-<?php print_r($bloco) ?>">
                    <?php 
                    foreach($full_imgdir as $full_imagem){
                        $ext_full = explode(".", $full_imagem);
                        if($ext_full[0] == $bloco){
                        echo '<img src="blocos_img/'.$dat.'/'. 'full/'.$bloco.'.'.$ext_full[1].'" alt="">';
                        }
                    } ?>
                </a>
                <?php # Alerta # Bloco em desenvolvimento --- else:  echo '<div class="alerta"><span>Bloco não disponível, volte em breve.</span></div>'; endif; ?>
            </li>
            <?php 
            }
        }
    echo '</div>';
    };
?>