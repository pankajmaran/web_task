<?php
session_start();
if(isset($_POST['save'])){
    $options['expires']=time()+3600;
    setcookie('name', $_POST['user'], $options);
}
// if(isset($_POST['save']))
{
    extract($_POST);
    include 'database.php';
    $sql=mysqli_query($conn,"SELECT * FROM customer where user='$user' and password='$pass'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION["ID"] = $row['ID'];
        $_SESSION["Email"]=$row['Email'];
        $_SESSION["user"]=$row['user'];
        // echo "asda";
        header("Location: index.php"); 
    }
    else
    {
        echo "Invalid Email ID/Password";
    }
}
?>