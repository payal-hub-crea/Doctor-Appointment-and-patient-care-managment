<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "appointment"
);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

?>