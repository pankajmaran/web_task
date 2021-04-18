<?php
$host="localhost";
$user="root";
$pass="";
$db="test";

//connect with database demo
$connect= new mysqli($host,$user,$pass,$db) or die("ERROR:could not connect to the database!!!");

//select all data from json table
$query="select * from json ";
$result=$connect->query($query);

//fetech all data from json table in associative array format and store in $result variable
$array=$result->fetch_assoc();

//Now encode PHP array in JSON string 
$json=json_encode($array,true);

//test the json string
var_dump($json);

//create file if not exists
$fo=fopen("cart.json","w");

//write the json string in file
$fr=fwrite($fo,$json);

?>



Ad by Valueimpression


Json Tutorial
JSON Introduction
PHP JSON Example
Insert JSON data MySQL
Getting data from MySQL into JSON using PHP


