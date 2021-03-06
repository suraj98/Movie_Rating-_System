<?php
// Start the session
session_start();
?>
<html>
<head>
  <title>colour_orange</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.html">Movie<span class="logo_colour">Rating</span></a></h1>
          <h2>Simple. Rating . Website System.</h2>
            <h3><?php  echo $_SESSION['login_user']; ?></h3>
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
         </div>

<!-- The four columns -->
<div class="row">
  <div class="column">
      <a href="index11.php?name=img25.jpg">  <img src="img25.jpg" alt="Nature" style="width:100%" > </a>
  </div>
  <div class="column">
      <a href="index11.php?name=img26.jpg"><img src="img26.jpg" alt="Fjords" style="width:100%" onclick="myFunction(this);"></a>
  </div>
  <div class="column">
      <a href="index11.php?name=img3.jpg"><img src="img3.jpg" alt="Mountains" style="width:100%" onclick="myFunction(this);"></a>
  </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <h3>Top 50 Highest-Grossing Actors at the U.S. Box Office</h3>
    
    
    <p>See who ranks highest when you calculate how these actors' movies grossed at the U.S. box office. Can you guess who are in the top spots?</p>
    
     <img src="img3.jpg" alt="Mountains" style="width:70%" onclick="myFunction(this);">
    <br><br><br>
    
    <p><a href="#">See the full list</a></p>
    <br>
    <hr>
        </div>
        <br>
        
        <div class="row">
    
    <div class="column">
    <img src="img13.jpg" alt="Lights" style="width:100%" onclick="myFunction(this);">
  </div>
    <div class="column">
    <img src="img14.jpg" alt="Mountains" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="img15.jpg" alt="Lights" style="width:100%" onclick="myFunction(this);">
  </div>
        </div>
        
        <div class="row">
            
    <div class="column">
    <img src="img18.jpg" alt="Lights" style="width:100%" onclick="myFunction(this);">
  </div>
    <div class="column">
    <img src="img17.jpg" alt="Mountains" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="img16.jpg" alt="Lights" style="width:100%" onclick="myFunction(this);">
  </div>
        </div>
   
     
 
<div class="row">        
  <div class="column">
    <img src="img4.jpg" alt="Lights" style="width:100%" onclick="myFunction(this);">
  </div>
    <div class="column">
    <img src="img6.jpg" alt="Lights" style="width:100%" onclick="myFunction(this);">
  </div>
    <div class="column">
    <img src="img7.jpg" alt="Mountains" style="width:100%" onclick="myFunction(this);">
  </div>
</div>
        
<div class="row">      
  <div class="column">
    <img src="img8.jpg" alt="Lights" style="width:100%" onclick="myFunction(this);">
  </div>
    <div class="column">
    <img src="img9.jpg" alt="Lights" style="width:100%" onclick="myFunction(this);">
  </div>
    <div class="column">
    <img src="img10.jpg" alt="Mountains" style="width:100%" onclick="myFunction(this);">
  </div>
</div>    
    
<div class="row">        
  <div class="column">
    <img src="img11.jpg" alt="Lights" style="width:100%" onclick="myFunction(this);">
  </div>
    <div class="column">
    <img src="img12.jpg" alt="Mountains" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="img4.jpg" alt="Lights" style="width:100%" onclick="myFunction(this);">
  </div>
</div>

          
          
    
    </div>
    <div id="content_footer"></div>
    <div id="footer">
      Copyright &copy; suraj_shukla     </div>
  </div>
</body>
</html>
