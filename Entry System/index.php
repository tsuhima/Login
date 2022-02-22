<!DOCTYPE html>
<html>
<head>
	<title>SIGN IN</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <video id="background-video" autoplay loop muted poster="black.jpg">
        <source src="IndexBGV.mp4" type="video/mp4">
      </video>

    <nav>
		<div class="logo">
			<p>DEATHEATERS</p>
		</div>
		<ul>
			<li><a href="welcome.php" >HOME</a></li>
      <li><a href="index.php" class="active">Sign In</a></li>
			<li><a href="Aboutus.php">ABOUT US</a></li>
      
		</ul>
	</nav>


</head>
<body>
     <form action="login.php" method="post">
     	<h2>SIGN IN</h2>
         <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
        <label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

         <button type="submit">SIGN IN</button>
         <a href="signup.php" class="ca">Create an account!</a>


     </form>
</body>
</html>