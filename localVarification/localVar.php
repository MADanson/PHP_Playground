<?php
error_reporting(E_ALL);


$usr = "Dave";//wtf. how do sessions work??
$pwd = "123";
$sub = $_POST["sub"];
$indexUsr = $_POST["usr"];
$indexPwd = $_POST["pwd"];

if ($sub == "Submit") {
    if (($_POST["usr"] == $usr) and ($_POST["pwd"] == $pwd)) {//compare this to the database
      header("Location: http://logintest.com/PHP_Playground/PHP_Playground/home.php");
    } else {
      header("Location: http://logintest.com/PHP_Playground/PHP_Playground/index.php");
      //find way to give error message when back on page
    }
}else{
    header("Location: http://logintest.com/PHP_Playground/PHP_Playground/index.php");
}
