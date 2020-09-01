<?php
include_once 'database.php';
if(isset($_POST['save']))
{	 
	 $name = $_POST['name'];
	 $mobile = $_POST['mobile'];
	 $email = $_POST['email'];
	 $password = $_POST['password'];
	 $re_password = $_POST['re_password'];
	 $sql = "INSERT INTO sign_up (name,mobile,email,password,re_password) VALUES ('$name','$mobile','$email','$password','$re_password')";
	 
	 if (mysqli_query($conn, $sql)) {
		 echo "New record created successfully !";
	 } else {
		 echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}

?>