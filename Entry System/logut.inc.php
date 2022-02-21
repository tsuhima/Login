<?php


session_start();
session_unse();
session_destroy();

header("location: ../index.php");
exit();