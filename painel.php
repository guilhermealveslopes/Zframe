<?php
include('functions.php');
if(isset($_POST['caminho']) && !empty($_POST['caminho'])) {
    $caminho = $_POST['caminho'];
    unlink(realpath($caminho));
}
global $data;
foreach($data as $pasta => $key) {
    $scan = scandir('blocos_html/'.$key);
    unset($scan[0]);
    unset($scan[1]);
    foreach($scan as $bloco){
        $nome = explode('.', $bloco);
        echo '<li data-nome="'.$nome[0].'" data-bloco="blocos_html/'.$key.'/'.$bloco.'"><h3>'. $nome[0] . '</h3><span> '. $key . '</span></li>';
    }
}
?>