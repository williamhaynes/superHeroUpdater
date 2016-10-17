<?php
/**
 * Created by PhpStorm.
 * User: hype_
 * Date: 17/10/2016
 * Time: 14:03
 */



//Take Values from html form
$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$mainSuperHero = $_POST["mainSuperHero"];


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

$sql_query = "INSERT INTO superheros VALUES ($firstName, $lastName, $mainSuperHero)";

//execute the SQL query

$db->query($sql_query);

$db->close();

?>