<?php 

require "config/app.php";

unset($_SESSION['uid']);
session_destroy();

header('Location: index.php');