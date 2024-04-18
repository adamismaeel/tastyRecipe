<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username=$_POST['username'];
    $pwd=$_POST['pwd'];

    try {
        require_once 'includes/connection.php';
        require_once 'includes/login_model.inc.php';
        require_once 'includes/login_contr.inc.php';

        //ERROR HANDLERS

        $errors = [];


        if (is_input_empty($username, $pwd)){
            $errors ["empty_input"] = "Fill in all fields!";
        }

        $result = get_user($pdo, $username);

        if (is_username_wrong($result)){
            $errors["login_incorrect"] = "Incorrect login info!";
        }
        if (is_username_wrong($result) && is_password_wrong($pwd, $result["pwd"])){
            $errors["login_incorrect"] = "Incorrect login info!";
        }
        
       

        require_once 'includes/config_session.inc.php';
        
        if ($errors) {
            $_SESSION["errors_login"] = $errors;
            header("Location: signup.php");
            die();
        }

        $newSessionId = session_create_id();
        $sessionId = $newSessionId . "_" . $result["id"];
        session_id($sessionId);

        $_SESSION["user_id"] = $result["id"];
        $_SESSION["user_username"] = htmlspecialchars($result["username"]);

        $SESSION["last_regeneration"] = time();

        header("Location: login.php?login=success");
        $pdo = null;
        $statement = null;

        die();

    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }


} else {
    header("Location: login.php");
    die();
}


