<?php
session_start();
if( $_POST['passw']==$_SESSION['password'] and strlen($_POST['aname'])!=0 and strlen($_POST['anumber'])==12 and strlen($_POST['mno'])==10 and strlen($_POST['amount'])>1) {
	$dbh=new PDO('mysql:host=localhost; dbname=bank','root','');
	$array = array{
	'aname'= $_POST['aname'],
	'anumber'= $_POST['anumber'],
	'mno'= $_POST['mno'],
	'amount'= $_POST['amount']
	};
	function insertjson($array){
		//echo json_encode($array);
		return json_encode($array);
	}

	function insertmysql($dbh,$data){
		$stmt=$dbh->prepare("INSERT INTO withdraw VALUES (?,?,?,?)");
		$stmt->bindParam(1,$aname);
		$stmt->bindParam(2,$anumber);
		$stmt->bindParam(3,$mno);
		$stmt->bindParam(4,$amount);
		
		$stmt->execute();
	}
	function formjsonmysql($dbh,$array){
		$myjson=insertjson($array);
		$obj=json_decode($myjson);
		insertmysql($dbh,$obj);
	}
	
}
	echo "<script> location.href='withdraw.html' </script>";
?>