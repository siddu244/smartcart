<?php 
require('connect.php');

// REGISTRATION PHP SCRIPT
  if (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['password'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
 		echo $fname;
        $query = "INSERT INTO `SignupCUSTOMER` (EMAIL_ID, CUSTOMER_FIRST_NAME,CUSTOMER_LAST_NAME,PASSWORD) VALUES ('$email', '$fname','$lname','$password')";
        $result = mysqli_query($connection,$query);
        if($result){
            $msg = "Registration successful";
        }
        else{
            $msg = "User already exists";
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
	</div></a>
	<div class="mycart">
	<div class="mycart-quantity" >0</div>
	<a href="my_cart_page.html" style="text-decoration:none;"><div class="mycart2">My Cart </div>
	</div></a>

    <a href="login.php"><div class="login_signup" style="text-decoration:none;"><a href="login_.php"><div class="login2">LogIn | SignUp</div></a></div></a>
</div>
</div>
<div class="bigbox2">
	<div class="two-box">

		<div class="two-one-box3">
			<div class="two-one-box-text2" style="color:#333;">LOGIN</div>
		</div>

		<div class="two-one-box3">
			<div class="two-one-box-text">REGISTER</div>
		</div>
	
	</div>

<form method="POST" action="">
	<div class="whitebox3">
		<div class="add-title">Our Database Will Secure Your Details</div>

		<div class="title-box-total">
		<div class="name-box">
			<div class="detail-product" >First name :</div> 
		</div>
	    <input type="text" name="fname" class="button-box" placeholder="name with a category enclosed "/>
	    </div>


	    <div class="title-box-total">
		<div class="name-box">
			<div class="detail-product">Last name :</div> 
		</div>
	    <input type="text" name="lname" class="button-box" placeholder="main description about the shipping and address"/>
	    </div>
    	
	    <div class="title-box-total">
		<div class="name-box">
			<div class="detail-product">Email :</div> 
		</div>
	    <input type="text" name="email" class="button-box" placeholder="main description about the shipping and address"/>
	    </div>

	    <div class="title-box-total">
		<div class="name-box">
			<div class="detail-product">Password :</div> 
		</div>
	    <input type="text" name="password" class="button-box" placeholder="main description about the shipping and address"/>
	    </div>

	    <div class="title-box-total">
		<div class="name-box">
			<div class="detail-product">Confirm Password :</div> 
		</div>
	    <input type="text" class="button-box" placeholder="main description about the shipping and address"/>
	    </div>

</div>
	
<button type="submit" name="submit" class="final-button" >REGISTER </button> 

</form>
</div>


</body>
</html>