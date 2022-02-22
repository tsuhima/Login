<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <video id="background-video" autoplay loop muted poster="black.jpg">
        <source src="snow1.mp4" type="video/mp4">
      </video>

</head>
<body>
<h1>Hello, <?php echo $_SESSION['name']; ?></h1>
<h2> You Have Succesfully Logged into your Dashboard 😊😊😊</h2><break>
     <a href="logout.php">Logout</a>
</body>
</html>

<?php
}else{
    header("Location: index.php");
    exit();
}
?>
