<?php
include_once 'database.php';
if(isset($_POST['signup']))
{
	 $user_name = $_POST['user_name'];
	 $user_email = $_POST['user_email'];
	 $user_password = $_POST['user_password'];
	 $user_re_password = $_POST['user_re_password'];

	 $sql = "INSERT INTO read_sign_up (user_name,user_email,user_password,user_re_password) VALUES ('$user_name','$user_email','$user_password','$user_re_password')";

	 if (mysqli_query($conn, $sql)) {
		 echo "New record created successfully !";
	 } else {
		 echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}




?>
