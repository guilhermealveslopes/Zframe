<?php
if(isset($_POST['caminho']) && !empty($_POST['caminho'])) {
    $caminho = $_POST['caminho'];
    unlink(realpath($caminho));
}
?>