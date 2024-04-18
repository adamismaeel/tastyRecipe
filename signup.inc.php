<?php


//Did user signup legitimately
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $pwd=$_POST['pwd'];

    try {

        require_once 'includes/connection.php';
        require_once 'includes/signup_model.inc.php';
        require_once 'includes/signup_contr.inc.php';

        //ERROR HANDLERS

        $errors = [];


        if (is_input_empty($firstname, $lastname, $email, $username, $pwd)){
            $errors ["empty_input"] = "Fill in all fields!";

        }
        if (is_email_invalid($email)){
            $errors ["invalid_email"] = "Invalid email used!";

        }
        if (is_email_registered($pdo, $email)) {
            $errors ["email_used"] = "Email already registered!";

        }
        if (is_username_taken($pdo, $username)){
            $errors ["username_taken"] = "Username already taken!";
        }

        require_once 'includes/config_session.inc.php';
        
        if ($errors) {
            $_SESSION["errors_signup"] = $errors;
            header("Location: signup.php");
            die();
        }

        create_user($pdo, $firstname, $lastname, $username, $email, $pwd);

        header("Location: signup.php?signup=success");

        $pdo=null;
        $stmt=null;

        die();
        

    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }

} else {
    header("Location: signup.php");
    die();
}
