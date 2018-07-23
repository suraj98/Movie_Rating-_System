
<?php 
session_start(); // Starting Session

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";
$conn = new mysqli($servername, $username, $password,$dbname );
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 
if ($conn->connect_error) 
{die("Connection failed: " . $conn->connect_error);}

$em=$_POST['email'] ;
$pa=$_POST['pass'] ;

$sql = "SELECT * from users where password='$pa' AND email='$em' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
             {
                  $_SESSION['login_user'] = $em;
               
                 header('Location: second.php');
    //exit;
             } 
            else 
            {
                echo "Error creating database: " . $conn->error;
            }
 
$conn->close();
?>
