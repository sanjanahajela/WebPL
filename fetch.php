<?php

//fetch.php


$connect = new PDO("mysql:host=localhost;dbname=professor", "root", "");

$form_data = json_decode(file_get_contents("php://input"));

$query = '';
$data = array();

if(isset($form_data->search_query))
{
 $search_query = $form_data->search_query;
 $query = "
 SELECT * FROM professor
 WHERE first_name LIKE '%$search_query%' 
 OR last_name LIKE '%$search_query%' 

 
 ";
}
else
{
 $query = "SELECT * FROM professor ORDER BY first_name ASC";
}

$statement = $connect->prepare($query);

if($statement->execute())
{
 while($row = $statement->fetch(PDO::FETCH_ASSOC))
 {
  $data[] = $row;
 }
 echo json_encode($data);
}

?>
