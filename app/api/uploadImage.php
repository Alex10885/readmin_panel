<?php

if (file_exists($_FILES["image"]["tmp_name"]) && is_uploaded_file($_FILES["image"]["tmp_name"])){

    $fileExt = explode("/", $_FILES["image"]["type"])[1];
    $fileName = uniqid() . "." . $fileExt;

    if (!is_dir("../../img/")){
        mk_dir("../../img/");
    }

    move_uploaded_file($_FILES["image"]["tmp_name"], "../../img/" . $fileName);
    echo json_encode( array ("src" => $fileName ));
}