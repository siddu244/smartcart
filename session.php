<?php
require('connect.php');
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User

$ses_sql=mysqli_query($connection,"select CUSTOMER_FIRST_NAME from SignupCUSTOMER where CUSTOMER_FIRST_NAME='$user_check'");
$row = mysqli_fetch_array($ses_sql);
$login_session =$row['CUSTOMER_FIRST_NAME'];
if(!isset($login_session)){
mysqli_close($connection); // Closing Connection
header('Location: index.php'); // Redirecting To Home Page
}
?>