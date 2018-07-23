<?php

 session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) 
    die("Connection failed: " . $conn->connect_error); 
      
$rate = $_POST['rate'];
$user = $_SESSION['login_user'] ;
$movie = $_SESSION['movie_name'] ;
$img   = $_SESSION['image'];


    
    
$sql="INSERT INTO  rating (`username`,`movie_name`,`rate`,`datestamp`,`img`) VALUES ('$user','$movie','$rate',CURRENT_TIMESTAMP,'$img')  ";

 
               $curr = $_SESSION['image'];
                
if ($conn->query($sql) === TRUE) 
{
     header('Location: index11.php?name='.$curr);
} 
else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}
     
     


?>