<?php 

$arquivos = get_included_files();
$link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$link = explode('/',$link);
$link =  array_values(array_filter(array_map('trim', $link), 'strlen'));
if(end($link) == 'frame'){
    $link = 'index.php';
    $split = explode($link, $arquivos[0]);
}
else{
    $split = explode(end($link), $arquivos[0]);
}

$arquivos_scan = scandir($split[0]);
$HTML_ROOT = $split[0] . '/blocos_html';
    $folder = $HTML_ROOT;  //Define a pasta dos blocos HTML
    $data = scandir($folder); // Scabeia a pasta e procura pelos tipos de blocos [header] [footer] [etc]
   if($data){
    unset($data[0]); // Remove o atalho para as pastas anteriores [./]
    unset($data[1]); // Remove o atalho para as pastas anteriores [../]
   }
?>