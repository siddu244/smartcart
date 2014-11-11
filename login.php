<?php 
require('connect.php');
session_start();
    //LOGIN PHP SCRIPT
      if (isset($_POST['email']) && isset($_POST['password'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        //$query = "SELECT PASSWORD FROM `SignupCUSTOMER` (EMAIL_ID) WHERE EMAIL_ID=$email";
        $query= "SELECT * FROM `SignupCUSTOMER` WHERE EMAIL_ID='$email' and PASSWORD='$password'";
        $result = mysqli_query($connection,$query) or die(mysqli_error());
        $rows = mysqli_num_rows($result);
        if($rows==1){
        	$row = mysqli_fetch_array($result);
        	echo $row['CUSTOMER_FIRST_NAME'];
        	$_SESSION['login_user']=$row['CUSTOMER_FIRST_NAME']; 
            $msg = "Login Successful";
            header("Location: index.php");
        }
        else{
            $msg = "Wrong Username/Password";
	    }
	    echo $msg;

}

?>

<!doctype html>
<html>
<head>
	<title>SMARTCART</title>
<!--<link rel="stylesheet" type="text/css" href="slick/slick.css">-->
<link rel="stylesheet" type="text/css" href="./css/bootstrap_sub.css"/> 
<link rel="stylesheet" type="text/css" href="./css/slick.css"/>
<link rel="stylesheet" type="text/css" href="css/style1.css">
<link rel="stylesheet" type="text/css" href="./css/style2.css"/>
<link rel="stylesheet" type="text/css" href="./css/style3.css"/>
<link rel="stylesheet" type="text/css" href="./css/style4.css"/>

	
</head>
<body>
<div class="headermenu">
	<em><div class="headermenu-box"><a class="headermenu-name headermenu-color"  style="float:left;" >SmartCart</a></div></em>
	<div class="headermenu-searchbox"><input type="text" class="headermenu-search" placeholder="search for a product, category or brand"/>
	<input type="button" class="headermenu-button headermenu-button-color" value="SEARCH"/></div>
		<a href="smart_cart_homepage.html" style="text-decoration:none;" ><div class="quicksell" tabindex="1" target=" _self"><div class="quicksell-text2">
		Home</div>
	</div></a href="my_cart_page.html">
	<div class="mycart">
	<div class="mycart-quantity" >0</div>
	<a href="my_cart_page.html" style="text-decoration:none;"><div class="mycart2">My Cart </div>
	</div></a>

    <a href="login.php"><div class="login_signup" style="text-decoration:none;"><a href="login.php"><div class="login2">LogIn | SignUp</div></a></div></a>
</div>
</div>
<div class="bigbox2">
	<div class="two-box">
		<div class="two-one-box3">
			<div class="two-one-box-text">LOGIN</div>
		</div>

		<div class="two-one-box3">
			<div class="two-one-box-text2">REGISTER</div>
		</div>
	</div>

<form method="POST" action="">
<div class="whitebox2">
		<div class="add-title">Enter into Your Account</div>	

		<div class="title-box-total">
		<div class="name-box">
			<div class="detail-product">Email :</div> 
		</div>
	    <input type="text" name="email" class="button-box" placeholder="name as in smartcart account"/>
	    </div>


	    <div class="title-box-total">
		<div class="name-box">
			<div class="detail-product">Password :</div> 
		</div>
	    <input type="text" name="password" class="button-box" placeholder="name as in smartcart account"/>
	    </div>
    	
	<div class="two-box2">
		<a href="register.php"><div class="account">need an account ? Register here</div></a>
	</div>

	<button type="submit" class="final-button" >LogIn</button> 
</form>
</div>



</div>


</body>
</html>