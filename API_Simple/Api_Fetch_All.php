<?php
//Fetch All data from DB

//Set Header
header('content-Type: application.json'); //Set content type
header('Access-control-Allow-Origin:*'); // Which People access this api (* means allow any one)

include "config.php"; //configure DB connection 

$sql = "SELECT * FROM test";
$result = mysqli_query($connection,$sql) or die("Sql Query is Fali");

if(mysqli_num_rows($result) > 0){
$output = mysqli_fetch_all($result,MYSQLI_ASSOC);
echo json_encode($output);
}else{
    echo json_encode(array('message' => 'No Record Found', 'status' => false));
}
?>