<?php

function save_contact_message($name, $email, $message) {

    $query = "INSERT INTO contact_messages (name, email, message) VALUES ('$name', '$email', '$message')";
    $res = mysqli_query(connectDB(), $query);
    return $res;
} 