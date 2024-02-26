<?php 
require "config/app.php";
require "config/database.php";
if (isset($_GET['id'])) {
    if (deletepet($conx, $_GET['id']));
    header("location: index.php");
}