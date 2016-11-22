<?php
error_reporting(E_ALL);

$db_server = "localhost";
$db_user = "admin";
$db_pwd = "apple123"
$conn = mysql_connect($db_server, $db_user, $db_pwd)


mysql_select_db('logintest');
mysql_query('SELECT * FROM users', $conn);






// if ($sub == "Submit") {
//     if (($_POST["usr"] == $usr) and ($_POST["pwd"] == $pwd)) {//compare this to the database
//       header("Location: http://logintest.com/PHP_Playground/PHP_Playground/home.php");
//     } else {
//       header("Location: http://logintest.com/PHP_Playground/PHP_Playground/index.php");
//       //find way to give error message when back on page
//     }
// }else{
//     header("Location: http://logintest.com/PHP_Playground/PHP_Playground/index.php");
// }
// ?>
