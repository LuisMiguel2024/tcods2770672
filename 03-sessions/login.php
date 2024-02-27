<?php
    require "config/app.php";
    require "config/database.php";
    
            if ($_POST) {
                $email = $_POST['email'];
                $pass =  $_POST['password'];
                // echo var_dump($_POST);

                if (loginuser($conx, $email, $pass)) {
                    header("Location: dashboard.php");
                } else {
                    header("Location: index.php");
                }
            } 
            