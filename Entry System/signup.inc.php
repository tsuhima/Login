<?php



    if(isset($_POST["submit"])){
        
        $name= $_POST["name"];
        $email= $_POST["email"];
        $username= $_POST["username"];
        $pwd= $_POST["pwd"];
        $pwdrepeat= $_POST["pwdrepeat"];

        require_once 'dhb.inc.php';
        require_once 'functions.inc.php';

        if (emptyInputsignup($name ,$email , $username ,$pwd ,$pwdrepeat)  !== false){
            header("location:../signup.php?error=emptyinput");
            exit();

        } 
        if (invaliduid($username) !==false){
            header("location:../signup.php?error=invaliduid");
            exit();

        }
        if (invalidemail($email) !==false){
            header("location:../signup.php?error=invalidemail");
            exit();

        }
        if (pwdMAtch($pwd , $pwdrepeat) !==false){
            header("location:../signup.php?error=passworddoesnotmatch");
            exit();
        }
        if (uidExists($conn , $username , $email) !==false){
            header("location:../signup.php?error=usernametaken");
            exit();
        }
      
        createUser($conn, $name, $email,$username , $pwd)


}
    else{
        header("location:../signup.php");
    }
   