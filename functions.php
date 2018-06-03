<?php 

$arquivos = get_included_files();
$split = explode('index.php', $arquivos[0]);
$arquivos_scan = scandir($split[0]);
$HTML_ROOT = $split[0] . '/blocos_html';
    $folder = $HTML_ROOT;  //Define a pasta dos blocos HTML
    $data = scandir($folder); // Scabeia a pasta e procura pelos tipos de blocos [header] [footer] [etc]
   if($data){
    unset($data[0]); // Remove o atalho para as pastas anteriores [./]
    unset($data[1]); // Remove o atalho para as pastas anteriores [../]
   }

?>