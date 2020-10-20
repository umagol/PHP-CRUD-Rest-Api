<?php
//Fetch Single data from DB

//Set Header
header('content-Type: application.json'); //Set content type
header('Access-Control-Allow-Origin:*'); // Which People access this api (* means allow any one)


$data = json_decode(file_get_contents('php://input'),true);
$id = $data['id']; //we pass data using name Id in frontend to backend

include "config.php"; //configure DB connection 

$sql = "SELECT * FROM test WHERE id= {$id} ";
$result = mysqli_query($connection,$sql) or die("Sql Query is Fali"); // fire Query

if(mysqli_num_rows($result) > 0)
{
    $output = mysqli_fetch_all($result,MYSQLI_ASSOC);
    echo json_encode($output);
}
else
{
    echo json_encode(array('message' => 'No Record Found', 'status' => false));
}
?>