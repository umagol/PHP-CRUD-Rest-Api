<?php

$Host = 'localhost';
$UserName = 'root';
$DBName = 'test';
$Password = '';

//Normal Form
// $connection = mysqli_connect($Host,$UserName,$Password,$DBName) or die("Connton is NOt Fonud".mysqli_connect_error()); // Connection String 
   
//--------------------------------------------------------------------------------------------------

// Connection string using PDO
// try{
// $connection = new PDO("mysql: host = $Host; dbname = $DBName ", $UserName, $Password);

// $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

//     // echo"Connetion Successful";

// }
// catch(PDOException $e){

//     echo" Error is : " . $e -> getMessage();

// }

//-----------------------------------------------------------------------------------------------------

//Object Oriented Form

$connection = new mysqli($Host,$UserName,$Password,$DBName);

if($connection -> connect_error){
    die("Error is :". $connection -> connect_error);
}

?>