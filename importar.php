<?php
$bloco_nome = $_POST["bloco_nome"];
$bloco_tipo = $_POST["bloco_tipo"];
$bloco_html = $_POST["bloco_html"];
$bloco_css  = $_POST["bloco_css"];

#Criar o arquivo HTML
$fp = fopen("blocos_html/" . $bloco_tipo . "/" . $bloco_nome .".html", "w");
$fw = fwrite($fp, $bloco_html);

#Criar o arquivo CSS
$fp = fopen("blocos_css/" . $bloco_tipo . "/" . $bloco_nome .".css", "w");
$fw = fwrite($fp, $bloco_css);

$target_dir = "blocos_img/" . $bloco_tipo . "/";
$target_file = $target_dir . basename($_FILES["bloco_img"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$extensao = explode(".", $_FILES["bloco_img"]["name"]);
$img = $bloco_nome . '.' . end($extensao);

if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["bloco_img"]["tmp_name"]);
    if($check !== false) {
        echo 'Novo bloco ['.$bloco_nome.'] criado com sucesso!';
        move_uploaded_file($_FILES["bloco_img"]["tmp_name"], $target_dir.$img);
        $uploadOk = 1;
    } else {
        echo "Anexo inválido.";
        $uploadOk = 0;
    }
}



?>
