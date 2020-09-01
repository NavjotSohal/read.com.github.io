<?php
include_once 'database.php';
if(isset($_POST['login']))
{
	 $user_name = $_POST['user_name'];
	 $password = $_POST['password'];
	 $sql = "INSERT INTO login (user_name,password) VALUES ('$user_name','$password')";

	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
		" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}

header("index.html");
?>

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


header("index.html");

?>


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
