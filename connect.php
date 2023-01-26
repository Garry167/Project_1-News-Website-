<?php
	include('db.php');
    // $id = $_POST['id'];
	$country = $_POST['country'];
	$name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];

	$sql = "INSERT INTO  fields(country,name,email,password,gender) VALUES ('$country','$name','$email','$password','$gender')";
if(mysqli_query($conn, $sql)){
    echo "\tRecords inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
?>