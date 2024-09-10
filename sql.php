<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "studysyc";
//create the connection 
$conn = mysqli_connect( $servername, $username, $password , $database);
//check if there is a connection to the server
if(!$conn){
    die("show error ".mysqli_connect_error()); //print an error
}
else{
    echo "connection was successfull<br>";
}

//sql to create database

/*$sql =  "CREATE DATABASE studysyc";
if(mysqli_query($conn ,$sql)){
    echo "database created successfully";
}else{
    echo "connection failed".mysqli_connect_error();
}


//create table in db

$table = "reg";
$sql =  "CREATE TABLE $table(id int NOT NULL AUTO_INCREMENT PRIMARY KEY ,
email VARCHAR(50) NOT NULL UNIQUE)";
if(mysqli_query($conn,$sql)){
    echo"table created successfully";
}else{
    echo"table not created successfully".mysqli_connect_error();
}*/


//insert data 

$table = "reg";

/*$sql =  "INSERT INTO ".$table." (email) VALUES ('mohamed.elsharkawy@gmail.com')";
if(mysqli_query($conn,$sql)){
    echo"table inserted successfully";
}else{
    echo"table not created successfully".mysqli_error($conn);
}*/

//to reterive data

$email = $_REQUEST['email'];

$sql =  "INSERT INTO ".$table." (email) VALUES ('$email')";
if(mysqli_query($conn,$sql)){
    echo"data inserted successfully";
}else{
    echo"table not created successfully".mysqli_error($conn);
}
 ?>