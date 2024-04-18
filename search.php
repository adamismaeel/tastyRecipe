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
    
    <form action="search.php" method="POST">
	<input type="text" name="search" placeholder="Search">
	<button type="submit" name="submit-search">Search</button>
    </form>
    <div class="article-container">
	<?php
		$sql = "SELECT * FROM article";
		$result = mysqli_query($conn, $sql);
		$queryResults = mysqli_num_rows($result);

		if ($queryResults > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				echo "<div class='article-box'>
					<h3>".$row['a_title']."</h3>
					<p>".$row['a_text']."</p>
					<p>".$row['a_date']."</p>
					<p>".$row['a_author']."</p>
				</div>";
			}
		}
	?>
</div>

</body>
</html>
    
            <!--<h3>Upload Image</h3>
        </form>
        <form action="upload_image.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <button type="submit" name="submit">UPLOAD</button>
        </form>-->
    
</body>
</html>   