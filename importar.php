<?php
$bloco_nome = $_POST["bloco_nome"];
$bloco_tipo = $_POST["bloco_tipo"];
$bloco_html = $_POST["bloco_html"];
$bloco_css  = $_POST["bloco_css"];
$thumbnail = $_FILES["full"]["name"];
$tmpName = $_FILES["full"]["tmp_name"];
$tmpNameThumb = $_FILES["thumb"]["tmp_name"];
#Criar o arquivo HTML
$fp = fopen("blocos_html/" . $bloco_tipo . "/" . $bloco_nome .".html", "w");
$fw = fwrite($fp, $bloco_html);

#Criar o arquivo CSS
$fp = fopen("blocos_css/" . $bloco_tipo . "/" . $bloco_nome .".css", "w");
$fw = fwrite($fp, $bloco_css);

$full_dir = "blocos_img/" . $bloco_tipo . "/" . "full/";
$thumb_dir = "blocos_img/" . $bloco_tipo . "/";
$uploadOk = 1;

#Trata as imagens enviadas, renomeando de acordo com o bloco
$full_extensao = explode(".", $_FILES["full"]["name"]);
$full = $bloco_nome . '.' . end($full_extensao);

$thumb_extensao = explode(".", $_FILES["thumb"]["name"]);
$thumb = $bloco_nome . '.' . end($thumb_extensao);

if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["full"]["tmp_name"]);
    if($check !== false) {
        echo 'Novo bloco ['.$bloco_nome.'] criado com sucesso!';
        echo 'Thumbnail:';
        echo '<img src="'.$thumb_dir.$thumb.'">';
        move_uploaded_file($tmpNameFull, $full_dir.$full);
        move_uploaded_file($tmpNameThumb, $thumb_dir.$thumb);
        $uploadOk = 1;
    } else {
        echo "Anexo inválido.";
        $uploadOk = 0;
    }
}



?>
