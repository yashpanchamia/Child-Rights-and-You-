<?php
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'sample';
//connect with the database
$db = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
//get search term
$searchTerm = $_GET['term'];
//get matched data from skills table
$query = $db->query("SELECT DISTINCT(pingredients) FROM recipe WHERE pingredients LIKE '%".$searchTerm."%' ORDER BY pingredients ASC");
while ($row = $query->fetch_assoc()) {
    $data[] = $row['pingredients'];
}
//return json data
echo json_encode($data);
?>