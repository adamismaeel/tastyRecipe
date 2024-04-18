<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $chefname=$_POST['chefname'];
    $category=$_POST['category'];
    $RecipeName=$_POST['RecipeName'];
    $location=$_POST['location'];
    $Ingredients=$_POST['Ingredients'];
    $Directions=$_POST['Directions'];
    //$file=$_POST["img_path"];


    try {
        require_once "includes\connection.php";

        $query = "INSERT INTO addrecipe (chefname,category,RecipeName,location,Ingredients,Directions) VALUES (:chefname, :category, :RecipeName, :location, :Ingredients, :Directions)";

        // Prepare the statement
        $stmt = $pdo->prepare($query);

        // Bind values to placeholders
        $stmt->bindParam(':chefname', $chefname);
        $stmt->bindParam(':category', $category);
        $stmt->bindParam(':RecipeName', $RecipeName);
        $stmt->bindParam(':location', $location);
        $stmt->bindParam(':Ingredients', $Ingredients);
        $stmt->bindParam(':Directions', $Directions);
        //$stmt->bindParam(':img_path', $file);

        // Execute the statement
        $stmt->execute();

        /*
        // Not using named parameters

        $query = "INSERT INTO users (username, pwd, email) VALUES (?, ?, ?)";

        $stmt = $pdo->prepare($query);

        $stmt->execute([$username, $pwd, $email]);
        */

        // Send the user back to the front page
        header("Location: index.php");

        // Close the connection and statement
        $pdo = null;
        $statement = null;

        die();
    } catch (PDOException $e) {
        die('Query failed: ' . $e->getMessage());
    }
}
