<!DOCTYPE HTML>
<html>

<head>
  <title>colour_orange</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.html">Movie<span class="logo_colour">Rating</span></a></h1>
          <h2>Simple. Rating . Website System.</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li class="selected"><a href="index.html">Home</a></li>
          <li><a href="examples.php">Movies</a></li>
                  </ul>
      </div>
    </div>
    <div id="site_content">
      <div class="sidebar">
        <!-- insert your sidebar items here -->
          <h3>Top India Charts</h3>
          <h4> <a href="#">Top Rated Hindi Movie</a></h4>
          <h4> <a href="#">Top Rated Tamil Movie</a></h4>
          <h4> <a href="#">Top Rated Malayalam Movie</a></h4>
          <h4> <a href="#">Top Rated Telugu Movie</a></h4>
          <br><br>
          <hr>
          <br><br>
          <h3>Now Playing (Box Office)</h3>
          <h5> <a href="#">Black Panther</a></h5>
          <h5> <a href="#">A Wrinkle in Time</a></h5>
          <h5> <a href="#">The Strangers: Prey at Night</a></h5>
          <h5> <a href="#">Red Sparrow</a></h5>
          <h5> <a href="#">Game Night</a></h5>
          <br>
          <h5> <a href="#">See more box office results</a></h5>
<br><br>
          <hr>
          <br><br>
          <h3>Coming Soon</h3>
          <h5> <a href="#">Pacific Rim Uprising</a></h5>
          <h5> <a href="#">Unsane</a></h5>
          <h5> <a href="#">Sherlock Gnomes</a></h5>
          <h5> <a href="#">Paul, Apostle of Christ</a></h5> <br>
          <h5> <a href="#">See more coming soon</a></h5> 
          
          <br><br><hr>


       
        
        <h3>Search</h3>
        <form method="post" action="#" id="search_form">
          <p>
            <input class="search" type="text" name="search_field" value="Enter keywords....." />
            <input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px;" src="style/search.png" alt="Search" title="Search" />
          </p>
        </form>
      </div>
       
      <div id="content">
                 
<?php
          session_start();
          
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";
$image = $_GET['name'];
$_SESSION['image'] = $image;
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) 
    die("Connection failed: " . $conn->connect_error); 
          
          $sql = "SELECT id,name,time,genre,type,img,vid_link,director,writer,stars,summary,certificate, parents_guide,facebook,instagram,country,language,release_date,production_co,runtime FROM page where img='$image' ";
$result = $conn->query($sql);

$q = "SELECT AVG(rate)FROM rating where img='$image' ";
$rates =    $conn->query($q); 
$rate = $rates->fetch_assoc() ;
          
if ($result->num_rows > 0)
{
    // output data of each row
    $row = $result->fetch_assoc() ;
      $_SESSION['movie_name'] =  $row['name'];
          echo"<h1>". $row['name']  ."    RATINGS = ".$rate['AVG(rate)']."</h1>
          <form action='rate.php' method='post'>
          <input type='number' name='rate'>
          <input type='submit' value='rate'>
          </form>
          
         <h4>TV-14 | ". $row['time'] ." | ".$row['genre'] ." | ".$row['type'] ." </h4>
          <hr>
          <br>
          <div class=img_index11>
       <a href='#'>  <img src=' ".$row['img'] ."' alt='Nature'  width='172' height='268' class='imgl_index11' > </a>
       <iframe class='imgr_index11' width='407' height='268' src='".$row['vid_link'] ."' frameborder='0' allow='autoplay; encrypted-media' allowfullscreen></iframe>
          </div>              
         
          <div>
              <br>
           <hr>
              <br><br>
              <h5>Director: ".$row['director'] ."</h5>
              <h5>Writers:".$row['writer'] ."</h5>
              <h5>Stars: ".$row['stars'] ."</h5>
              <hr>
              <h2>Summary</h2>
              <p>
                 ".$row['summary'] ."
              </p>
              <hr>
                  <br>
                  <h5> Genres:".$row['genre'] ."</h5>
                  <h5>Certificate: ".$row['certificate'] ." </h5>
                  <h5>Parents Guide:".$row['parents_guide'] ."</h5>
                  
                  <hr>
                  <h2>Details</h2>
                  <h5>Official Sites:".$row['facebook'] ." |". $row['instagram'] ." </h5>
                  <h5>Country: ".$row['country'] ."</h5>
                  <h5>Language:". $row['language'] ."</h5>
                  <h5>Release Date: ".$row['release_date'] ."</h5>
                  
                  <hr>
                  <h2>Company Credits</h2>
                  <h5>Production Co:". $row['production_co']." </h5>
                  
                  <hr>
                  <h2>Technical Specs</h2>
                    <h5>Runtime: ".$row['runtime'] ."min</h5>
          </div>  
    </div>
 ";      
}
else
{
  echo "0 results";
}
      
?>
    <div id="content_footer"></div>
    <div id="footer">
      Copyright &copy; suraj_shukla     </div>
  </div>
</body>
</html>
