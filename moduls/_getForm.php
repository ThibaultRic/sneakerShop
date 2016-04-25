<?php

    include '../dbconnect.php';

    $data = $_POST['data'];

    $first_name = $data[0];
    $last_name = $data[1];
    $email = $data[2];
    $reasons = $data[3];
    $textarea1 = $data[4];
    $optinNewsletter = $data[5];

    $i = true;

    if($i){

    $sql= "INSERT INTO users (firstName, lastName, mail, message, optinNewsletter, raisons)
    VALUES ('$first_name','$last_name','$email','$textarea1','$optinNewsletter','$reasons')";

    mysql_query($sql);

    $i = false;
    };


    echo 'Merci, votre message a bien été transmis';

    return true;
?>