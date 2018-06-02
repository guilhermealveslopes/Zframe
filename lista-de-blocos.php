<?php 
   $isFolder = is_dir("/opt/lampp/htdocs/Zframe/blocos_html"); //Define a pasta dos blocos HTML
   $folder = "/opt/lampp/htdocs/Zframe/blocos_html";  //Define a pasta dos blocos HTML
   if($isFolder){
      $data = scandir($folder); // Scabeia a pasta e procura pelos tipos de blocos [header] [footer] [etc]
   } 
   unset($data[0]); // Remove o atalho para as pastas anteriores [./]
   unset($data[1]); // Remove o atalho para as pastas anteriores [../]
   if($data){
      foreach ($data as $dat) {
            // Para cada pasta encontrada, repete o processo para encontrar os arquivos internos [credi.html]
            $sub_folder = $folder . '/' . $dat;
            $info = pathinfo($folder."/".$dat); 
            $sub_scan = scandir($sub_folder);
            unset($sub_scan[0]);
            unset($sub_scan[1]);
            if(!empty($sub_scan)){
            
            $bloco = str_replace('.html', '', $sub_scan[2]); // Remove a extensão .html para usar o nome do block [credi]
            ?>
            <!-- Cria lista de blocos disponíveis -->
            <div class="bloco material-<?php print_r($dat) ?>">
                <li>
                    <img src="blocos_img/<?php print_r($dat) ?>/<?php print_r($bloco) ?>.png" alt="">
                    <div class="controles">
                        <a class="swipebox" href="#<?php print_r($dat) ?>-<?php print_r($bloco) ?>">Visualizar</a>
                        <a class="addblock" data-block="<?php print_r($bloco) ?>" type-block="<?php print_r($dat) ?>" href="#">Adicionar</a>
                    </div>
                    <a href="#_" class="lightbox" id="<?php print_r($dat) ?>-<?php print_r($bloco) ?>">
                        <img src="blocos_img/<?php print_r($dat) ?>/full/<?php print_r($bloco) ?>.png" alt="">
                    </a>
                </li>
            </div>

            <?php 
            }
        };
    }else{
      
    } 
?>