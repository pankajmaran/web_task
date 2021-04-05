<?php
extract($_POST);
include("database.php");
$sql=mysqli_query($conn,"SELECT * FROM customer where Email='$email' or user='$username' ");
if(mysqli_num_rows($sql)>0)
{
    echo "Email Id Already Exists"; 
	exit;
}
else
{
    $user = mysqli_real_escape_string($conn, $_REQUEST['username']);
    $email = mysqli_real_escape_string($conn, $_REQUEST['email']);
    $pass = mysqli_real_escape_string($conn, $_REQUEST['password']);
    $gender = mysqli_real_escape_string($conn, $_REQUEST['gender']);
    // Attempt insert query execution
    if( $gender=='male')
    $gender='M';
    else
    $gender='F';
    $sql = "INSERT INTO  customer (user, email, password,gender) VALUES ('$user', '$email', '$pass', '$gender')";
    if(mysqli_query($conn, $sql)){
        echo "Records added successfully.";
        header ("Location: login.php?status=success");
    } 
    else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
}

?>