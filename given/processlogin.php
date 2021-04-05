<?php

session_start();
$conn = mysqli_connect("localhost", "root", "", "rms");


$uname=$_REQUEST['name'];
$pw=$_REQUEST['pwd'];
//$pw=md5($pw);


$lq="SELECT * FROM user WHERE uname='$uname' and upwd='$pw'";

$sq=mysqli_query($conn,$lq);

$row=mysqli_fetch_array($sq);





if(!empty($row))
{
	

	if($uname==$row['uname'] && $row['upwd']==$pw)
	{
       
       
   //    $_SESSION=array();

        $_SESSION['un']=$row[uname];
        
    
            header("Location:index.html");
	}
	else
	{
		
		 //echo "<script>window.alert(\"Wrong Username And Password\");</script>";
         //echo("Wrong Username And Password");
         echo '<script language="javascript">';
		 echo 'alert("Wrong Username And Password")';
		  echo '</script>';
         header("Location:login.php?value=fail");
	}


}

else
{
	 header("Location:index.php?value=fail");
	 //echo "<script>window.alert(\"Wrong Username And Password\");</script>";
	// echo("Wrong Username And Password");
	  echo '<script language="javascript">';
		 echo 'alert("Wrong Username And Password")';
		  echo '</script>';
}


?>