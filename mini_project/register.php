<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname );

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// Check connection
if ($conn->connect_error) 
    die("Connection failed: " . $conn->connect_error);

$finame =    $_POST["fir"] ; 
$lname  =    $_POST['lastname'] ;
$email  =    $_POST['email'] ;
$pass   =    $_POST['pass'] ;
$pass1  =    $_POST['pass1'];
$gen    =    $_POST['gender'] ;   

if($pass == $pass1)
{
$q1="insert into users(firstname,lastname,password,gender,email)VALUES('$finame','$lname','$pass','$gen','$email')" ;
    if ($conn->query($q1) === TRUE) 
    {
    echo "inserted created successfully";
    } 
    else
    {
    echo "Error creating database: " . $conn->error;
    }
echo "Connected successfully";

}
else
{
    echo "Error : failed since password != confirm_password .....Resubmit";
}
$conn->close();

?>