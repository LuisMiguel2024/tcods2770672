<?php
try {
    $conx = new PDO("mysql:host=" . HOST . ";dbname=" . DBNAME . "", USER, PASS);

    //if ($conx) {
    //   echo "<h1>Connection DB sucess ✅</h1>";
    //}
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

//conectar las mascotas//
function getallpets($conx)
{
    try {
        $sql = "SELECT * FROM pets";
        $stm = $conx->prepare($sql);
        $stm->execute();
        return $stm->fetchAll();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
function addpet($conx, $data)
{
    try {
        $sql = "INSERT INTO pets (name, photo, kind, weight, age, breed, location)
VALUES (:name, :photo, :kind, :weight, :age, :breed, :location)";
        $smt = $conx->prepare($sql);

        if ($smt->execute($data)) {
            $_SESSION['msg'] = 'The Pet: ' . $data['name'] . ' has been added successfully!';
            return true;
        } else {
            return false;
        }
    } catch (PDOException $e) {
        echo "error: " . $e->getMessage();
    }
}