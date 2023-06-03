<?php 
$servername="localhost";
$dbname="procurement";
$username="root";
$password="";
$dsn="mysql:host=$servername;dbname=$dbname";

try{
    $conn= new PDO($dsn,$username,$password);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    
}
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }





?>