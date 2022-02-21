<?php

function emptyInputSignup($name ,$email , $username ,$pwd ,$pwdrepeat){
    $result;
    if (empty($name) ||  empty($email) || empty($username) ||empty($pwd) ||empty($pwdrepeat) )
    $result = true;
} 
else {
    $result = false;
}
return $result;
}

function invaliduid($username){
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/"),$username)){
        $result = true;
    }

 else{
     $result false;

 }
 return $result;
}
function invalidemail($email){
    $result;
    if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $result = true;
    }
    
 else{
     $result false;

 }
 return $result;
}
function pwdMAtch($pwd , $pwdrepeat){
    $result;
    if ($pwd !== $pwdrepeat){
        $result = true;
    }
    
 else{
     $result false;

 }
 return $result;
}
function (uidExists($conn , $username , $email){
   $sql = "SELECT * FROM users WHERE useruid =? OR useremail = ?;";
   $stmt = mysqli_stmt_init($conn);
   if(mysqli_stmt_prepare($stmt , $sqli)) {
    header("location:../signup.php?error=stmtfailed");
    exit();
   }

   mysqli_stmt_bind_param($stmt, "ss" ,  $username , $email );
   mysqli_stmt_execute($stmt);


   $resultData = mysqli_stmt_get_result($stmt);

   if($row = mysqli_fetch_assoc($resultData)){
       return $row;


   }
   else{
   $result = false;
   reutrn $result;
}

mysqli_stmt_close($stmt);

}

function createUser($conn, $name, $email,$username , $pwd){
    $sql = "INSERT INTO users (userName, usersemanil, useruid , userPwd) VALUES (?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(mysqli_stmt_prepare($stmt , $sqli)) {
     header("location:../signup.php?error=stmtfailed");
     exit();
    }
    $hashedPwd = password_hash($pwd , PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss" ,  $username , $email ,$name , $hashedpwd );
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location:../signup.php?error=none");
    exit();

 
 }
 
function emptyInputLOgin( $username ,$pwd){
    $result;
    if(empty($username) ||empty($pwd) ) )
    $result = true;

}
else{
    $result = false;

}
return $result;
}
function loginuser ($conn , $username,$pwd){
    $uidEXISTS = uidExists($conn , $username , $email);

    if($uidEXISTS ==false){
        header("location:../login.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $uidExists["userPWD"];
    $checkPwd = password_verify($pwd , $pwdHashed );

    if($checkPwd === false){
        header("location:../login.php?error=wronglogin");
        exit();

    }
    else if ($checkpwd === true){
        session_start();
        $_SESSION["userid"] =$uidExists["userId"];
        $_SESSION["useruid"] =$uidExists["userUid"];
        header("location: ../index.php");
        exit();
    }
}
 




