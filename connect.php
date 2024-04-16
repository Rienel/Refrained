<?php
    $connection = new mysqli('localhost', 'root', '', 'dbBasiliscoF2');

    if(!$connection) {
        die (mysqli_error($mysqli));
    }
?>