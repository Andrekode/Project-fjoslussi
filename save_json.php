<?php
#puts all the submitted data into an array
$formdata = array(
    "navn" => $_POST["navn"],
    "telefon" => $_POST["telefon"],
    "email" => $_POST["email"],
    "emne" => $_POST["emne"],
    "beskjed" => $_POST["beskjed"]
);
#encodes the data using JSON
$jsondata = json_encode($formdata, JSON_PRETTY_PRINT);
/*puts the array into the data.txt file
FILE_APPEND so it doesnt overwrite the old data */
file_put_contents("data.txt", $jsondata, FILE_APPEND);
#redirects to index.html after finishing
header("Location:index.html");
?>