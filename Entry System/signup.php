<?php
 include_once 'header.php';
 ?>



<section class="signup-form">
<h1>sign up</h1>

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
</section>

<?php
 include_once 'footer.php';
 ?>