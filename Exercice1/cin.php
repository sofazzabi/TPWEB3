<?php

if (isset($_FILES['image'])) {

    $errors = array();
    $fileTmp = $_FILES['image']['tmp_name'];
    $fileName = $_FILES['image']['name'];
    $extensions = array("jpeg", "jpg", "png");
    $tmp = explode('.', $fileName);
    $fileExtension = strtolower(end($tmp));
    if (in_array($fileExtension, $extensions) == false) {
        $errors[] = "Prière de choisir une extension png,jpg ou jpeg";
    }

    if (empty($errors) == true) {
        $nom = uniqid(rand(), true);
        move_uploaded_file($fileTmp, "images/" . $nom . "." . $fileExtension);
        echo "Image téléchargée ";
    } else {
        print_r($errors);
    }

}
