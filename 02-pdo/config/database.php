<?php
try {
    $conx = new PDO("mysql:host=".HOST.";dbname=".DBNAME."", USER, PASS);

    //if ($conx) {
     //   echo "<h1>Connection DB sucess ✅</h1>";
    //}
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

//conectar las mascotas//
function getallpets($conx){
    try {
        $sql = "SELECT * FROM pets";
        $stm = $conx->prepare($sql);
        $stm->execute();
        return $stm->fetchAll();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}