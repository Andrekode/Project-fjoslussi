<?php
$formdata = array(
    "navn" => $_POST["navn"],
    "telefon" => $_POST["telefon"],
    "email" => $_POST["email"],
    "emne" => $_POST["emne"],
    "beskjed" => $_POST["beskjed"]
);
$jsondata = json_encode($formdata, JSON_PRETTY_PRINT);
file_put_contents("data.txt", $jsondata)
?>