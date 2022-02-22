<?php
 include_once 'header.php';
 ?>

<section class="signup-form">
<h2>sign up</h2>
<div class="signup-form-form">
<form action="include/signup.inc.php" method="post">
<input type="text" name="name" placeholder="Full name...">
<input type="text" name="Emailid" placeholder="emailid...">
<input type="text" name="uid" placeholder="username...">
<input type="password" name="pwd" placeholder="password...">
<input type="password" name="pwdrepeat" placeholder="repeatpassword...">
<button type="submit" name="submit">sign up</button>
</form>
</div>
<?php
if (isset($_GET["error"])){
     if ($_GET["error"] == "stmt failed"){
        echo "<p>Fill in all fields</p>";
    }

else if ($_GET["error"] == "invaliduid"){
    echo "<p>Choose a proper username!</p>";
}
else if ($_GET["error"] == "invalidemail"){
    echo "<p>Choose a proper email!</p>";
}
else if ($_GET["error"] == "password doesnot match"){
    echo "<p>Make sure the passowrds match!</p>";
}
else if ($_GET["error"] == "stmt failed"){
    echo "<p>Something went wrong , try again!</p>";
}
else if ($_GET["error"] == "username taken"){
    echo "<p>This username has already taken!</p>";
}
else if ($_GET["error"] == "none"){
    echo "<p>Signed up!</p>";
  }
}
?> 
</section>

}

<?php
 include_once 'footer.php';
 ?>