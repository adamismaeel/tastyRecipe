<?php

declare(strict_types=1);//prevents more errors

function get_username(object $pdo, string $username) 
{
    $query = "SELECT username FROM tut_users WHERE username = :username;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function get_email(object $pdo, string $email) 
{
    $query = "SELECT username FROM tut_users WHERE email = :email;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":email", $username);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function set_user(object $pdo, string $firstname, string $lastname,string $username, string $email, string $pwd)
{
    $query = "INSERT INTO tut_users (firstname, lastname, username, email, pwd) VALUES (:firstname, :lastname, :username, :email, :pwd);";
    $stmt = $pdo->prepare($query);

    $options = [
        'cost' => 12
    ];
    $hashedPwd = password_hash($pwd, PASSWORD_BCRYPT, $options);


    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":firstname", $firstname);
    $stmt->bindParam(":lastname", $lastname);
    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":pwd", $hashedPwd);
    $stmt->execute();
}
