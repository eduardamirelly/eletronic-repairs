<?php

$banco = new mysqli("localhost", "root", "", "db_servicos", "3307");
if(mysqli_connect_error()){
    die(mysqli_connect_error());
    exit();
}

?>