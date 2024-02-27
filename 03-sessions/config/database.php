<?php

// - - - - - - - - - - - - - - - - - - - - 
// Connection
try {
    $conx = new PDO("mysql:host=" . HOST . ";dbname=" . DBNAME . "", USER, PASS);

    // if ($conx) {
    //     echo "<h4>Connection DB Success ✅ </h4>";
    // }

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// - - - - - - - - - - - - - - - - - - - - 
//LOGIN USER
function loginuser($conx, $email, $pass) {
    try {
        $sql = "SELECT * FROM users WHERE email = :email LIMIT 1";
        $stm = $conx->prepare($sql);
        $stm->execute([":email" => $email]);

        if ($stm->rowCount() > 0) {
            $user = $stm->fetch();
            if (password_verify($pass, $user['password'])) {
                $_SESSION['uid'] = $user['id'];
                return true;
            } else {
                $_SESSION['error'] = "Email or password incorrect Please Try Again";
                return false;
        } 
        } else {
    $_SESSION['error'] = "Email or password incorrect. Please Try Again";
    return false;
    }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
