<?php
include "header.php";

?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Food Recipes</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/signup_login.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <div class="wallpaper">
    </div>
    <h1>Welcome to Shahana's Cooking Blog :</h1>
    <br>
    <h3>Add a New Recipe here</h3>
    
        <form method="post" action="addrecipe.inc.php" enctype="multipart/form-data">
            <label>Chef Name:</label>
            <input type="text" name="chefname" /><br><br>
            <label>Category:&nbsp;&nbsp;</label>
            <input type="text" name="category" /> <br><br>
            <label>Recipe Name:&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="text" name="RecipeName" /> <br><br>
            <label>Location:&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="text" name="location" /> <br><br>
            <label>Ingredients:&nbsp;&nbsp;&nbsp;</label>
            <textarea name="Ingredients" id="Ingredients" rows="5" cols="100"> </textarea><br><br>
            <label>Directions:&nbsp;&nbsp;&nbsp;</label>
            <textarea name="Directions" id="Directions" rows="10" cols="100"> </textarea><br><br>
            <label>Choose image:</label>
            <input type="file" name="img_path" />
            <button type="submit" name="upload">Choose image</button>
            &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
            <input type="submit" name="upload" value="Submit" />
            &nbsp;&nbsp;&nbsp;&nbsp;
            <input type="button" value="Reset" />
            <!--label>Choose image:</label>
            <input type="text" name="image" />
            <input type="file" name="file"-->
            
            
            <!--h3>Choose Image</h3>
        </form>
        <form action="upload_image.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <button type="submit" name="submit">UPLOAD</button>
        </form-->
    
</body>
</html>   

<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'project');
//include_once 'includes\connection.php';
if (isset($_POST['upload']))
{

    $file = addslashes(file_get_contents($_FILES["img_path"]["tmp_name"]));
    $chefname = $_POST['chefname'];
    $category = $_POST['category'];
    $RecipeName = $_POST['RecipeName'];
    $location = $_POST['location'];
    $Ingredients = $_POST['Ingredients'];
    $Directions = $_POST['Directions'];

    $query = "INSERT INTO addrecipe (img_path, chefname, category, RecipeName, location, Ingredients, Directions) VALUES ('$file', '$chefname', '$category', '$RecipeName', '$location',  '$Ingredients', '$Directions')";
    $query_run = mysqli_query($connection, $query);
}
?>