<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Superhero Form</title>
</head>
<body>

    <h1>List of Superheroes</h1>

<?php
/**
 * Created by PhpStorm.
 * User: hype_
 * Date: 17/10/2016
 * Time: 14:03
 */


//connect to server and select database
$db = new mysqli(
    "us-cdbr-azure-southcentral-f.cloudapp.net",
    "b21eaed643e4cb",
    "4756773b",
    "wjh0001db"
);

//test id connection was successfully established

if($db->connect_errno){
    die('Connectfailed['.$db->connect_error.']');
}

//create SQL query as a string

$sql_query = "SELECT * FROM superheros";

//execute the SQL query

$result = $db->query($sql_query);

//iterate over $result object one $row at a time
//use fetch_array() to return an associative array

while($row = $result->fetch_array()){
    echo "<p>" . $row['superheroName'] . "</p>";
}

$result->close();
$db->close();
?>

</body>
</html>

<!--
CREATE TABLE `superheros` (
  `superheroID` int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `firstName` text COLLATE 'latin1_swedish_ci' NOT NULL,
  `lastName` text COLLATE 'latin1_swedish_ci' NOT NULL,
  `mainSuperPower` text COLLATE 'latin1_swedish_ci' NOT NULL
) ENGINE='MyISAM' COLLATE 'latin1_swedish_ci' AUTO_INCREMENT=1;
-->