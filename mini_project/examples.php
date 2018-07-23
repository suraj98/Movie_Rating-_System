<!DOCTYPE HTML>
<html>
<head>
  <title>colour_orange - examples</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style1.css.css" title="style" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.html">colour<span class="logo_colour">orange</span></a></h1>
          <h2>Simple. Rating. Website .</h2>
        </div>
      </div>
     
    <div id="content_header"></div>
    <div id="site_content">
      <div class="sidebar">
        <!-- insert your sidebar items here -->
        <h3>Latest News</h3>
        <h4>New Website Launched</h4>
        <h5>January 1st, 2010</h5>
        <p>2010 sees the redesign of our website. Take a look around and let us know what you think.<br /><a href="#">Read more</a></p>
        <p></p>
        <h4>New Website Launched</h4>
        <h5>January 1st, 2010</h5>
        <p>2010 sees the redesign of our website. Take a look around and let us know what you think.<br /><a href="#">Read more</a></p>
        <h3>Useful Links</h3>
        <ul>
          <li><a href="#">link 1</a></li>
          <li><a href="#">link 2</a></li>
          <li><a href="#">link 3</a></li>
          <li><a href="#">link 4</a></li>
        </ul>
        <h3>Search</h3>
        <form method="post" action="#" id="search_form">
          <p>
            <input class="search" type="text" name="search_field" value="Enter keywords....." />
            <input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px;" src="style/search.png" alt="Search" title="Search" />
          </p>
        </form>
      </div>
        
        
        
      <div id="content">
        <!-- insert the page content here -->
    
          
          <h2>Rating</h2>          
       
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) 
    die("Connection failed: " . $conn->connect_error); 
          
          
      $sql = "SELECT img,name,time FROM images";
      $result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
$image= $row['img']; 
        
$q1 =  "SELECT AVG(rate)FROM rating where img='$image' ";
$rates =    $conn->query($q1); 
$rate = $rates->fetch_assoc() ;
      
$q2 = "SELECT COUNT(rate)FROM rating where img='$image' ";
$counts = $conn->query($q2); 
$count  = $counts->fetch_assoc() ;
          
    echo "<div class='column1'> 
    <div class='class1'>   
    <img src=".$row['img']." alt='Lights' style='height:130px' onclick='myFunction(this);'>
    </div>
     <div class='class2'> 
     <h2>".$row['name']."</h2><br><br<br>
    <h4>User Rating: ".$rate['AVG(rate)']."/10 ( ".$count['COUNT(rate)'] ." user ratings)  | Rank: 4 </h4>
     <h3>Showtimes 3D</h3> <hr> <h5>".$row['time']."</h5> </div> 
     </div>";
    }
} 
    else 
    {
    echo "0 results";
    }
$conn->close();
    

?>          
          
          
        </div>
   
        </div>
    
      </div>
      
    </div>
</body>
</html>
    
