<?php
if(isset($_POST['submit'])){
 // Authorisation details.
 $username = "papun002@gmail.com";
 $hash = "0a70d0d87ff937bd9670a9b15d569b8f8bed8ab98c1ad468043f218c0cd494ac";
 // Config variables. Consult http://api.textlocal.in/docs for more info.
 $test = "0";
 $name= $_POST['name'];
 // Data for text message. This is the text message data.
 $sender = "TXTLCL"; // This is who the message appears to be from.
 $numbers = $_POST['phone']; // A single number or a comma-seperated list of numbers
 $otp=mt_rand(100000,999999);
 setcookie("otp",$otp);
 $message = "Hey ".$name."Your OTP is".$otp;
 // 612 chars or less
 // A single number or a comma-seperated list of numbers
 $message = urlencode($message);
 $data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
 $ch = curl_init('http://api.textlocal.in/send/?');
 curl_setopt($ch, CURLOPT_POST, true);
 curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 $result = curl_exec($ch); // This is the result from the API
 echo("Otp sent Successfully");
 curl_close($ch);

 if(isset($_POST['ver'])){
     $verotp = $_POST['otp'];
     if($verotp == $_COOKIE['otp']){
         echo"login Successfully";
     }else{
         echo"not";
     }
 }
}
 
?>

<!DOCTYPE html>
<html>
<head>
	<title>OTP Example</title>
	

    <style>
        body {
	font-family: Arial, sans-serif;
}

form {
	margin-top: 20px;
}

label {
	display: block;
	margin-bottom: 5px;
}

input[type="text"] {
	padding: 5px;
	margin-bottom: 10px;
}

button[type="button"] {
	padding: 5px 10px;
	background-color: #4CAF50;
	color: white;
	border: none;
	border-radius: 5px;
	cursor: pointer;
}

button[type="button"]:hover {
	background-color: #3e8e41;
}

    </style>
</head>
<body>
	<h1>OTP Example</h1>
	<form  method="post" enctype="multipart/form-data">
    <input type="text" id="" name="name" placeholder="Enter name">
		<label for="phone">Enter your phone number:</label>
		<input type="text" id="" name="phone" placeholder="Enter your phone number">
		<input type="submit" value="Sent Otp" name="submit">

		<input type="text" id=""" name="otp" placeholder="Enter otp">
		<button type="button" name="ver">Verify</button>


	</form>
</body>
</html>
