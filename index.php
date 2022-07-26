<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>

<!DOCTYPE html>
<html>
    <head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ছায়াচিত্র</title>
<link rel="stylesheet" href="style.css">
<link rel="shortcut icon" href="Untitled design (1).png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    @import url('https://fonts.googleapis.com/css2?family=Ibarra+Real+Nova:ital,wght@1,700&family=Nunito:wght@300&family=Oleo+Script&display=swap');
    </style>
      
  </head>
  <body>  
    
    <div class="video">
    <video width="'320" height="240" autoplay muted id="'videoID">
    <source src="Juneteenth (3).mp4" type="video/mp4">
   
    
    </video>
    
    </div>
    <nav>
    <ul class="menu">
            <img src="Untitled design (1).png" class="logo">
            <div class="dropdown">
                <div class="dropbtn">Category
                    <i class="fa fa-caret-down"></i>
                </div>
                <div class="dropdown-content">
                    <a href="Action.html">Action</a>
                    <a href="Liberation.html">Liberation War</a>
                    <a href="Thriller.html">Thriller</a>
                    <a href="Commedy.html">Commedy</a>
                </div>
                </div>
            </div>
        
            <a href="" >Location</a>
            <a href="" >Ticket Price</a>
            <a href="" >Showtime</a>
			<a href="index.php?logout='1'" style="color: black;">logout</a> 
			<?php  if (isset($_SESSION['username'])) : ?>
    	<a>Welcome <strong><?php echo $_SESSION['username']; ?></strong></a>
    	
    <?php endif ?>
            <div class="search-box">
           
                <input class="search-txt" type="text" name="" placeholder="Find Your Favourite Movies">
                <a class="search-btn" href="#">
                    <i class= "fa fa-search"></i>
                </a>
            </div>
        </ul>
        <section>
        <div class="latest-movies">
            <h1>Now Showing</h1>
            <div class="latest-container">
                <div class="latest-inside">
                    <img src="googly.jpg" alt="">
                    <div class="heading1">
                        <h4>গুগলি</h4>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                     
                    </div>
                   <div class="btn2">
                       <a href="https://www.youtube.com/watch?v=_v9eIPXXBig&ab_channel=JaazMultimedia"> Watch Now</a>
                   </div>
                </div>
                <div class="latest-inside">
                    <img src="debi.jpg" alt="">
                    <div class="heading1">
                        <h4>দেবী</h4>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                       
                    </div>
                   <div class="btn2">
                       <a href="">Watch Now</a>
                   </div>
                </div>
                <div class="latest-inside">
                  <img src="mission extreme.jpg" alt="">
                  <div class="heading1">
                      <h4>মিশন এক্সট্রিম</h4>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                   
                  </div>
                 <div class="btn2">
                     <a href="https://www.youtube.com/watch?v=_2TG8Z-vtq0&ab_channel=DdhoniChitra"> Watch Now</a>
                 </div>
                 </div>
                 <div class="latest-inside">
                  <img src="ora 11 jon.jpg" alt="">
                  <div class="heading1">
                      <h4>ওরা ১১ জন</h4>
                      <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                  </div>
                 <div class="btn2">
                     <a href="https://www.youtube.com/watch?v=_2TG8Z-vtq0&ab_channel=DdhoniChitra"> Watch Now</a>
                 </div>
                 </div>
                </section>
           <section>
           <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-col">
                        <ul>
                            <li><a href="about us.html">about us</a></li>
                            <li><a href="contact us.html">contact us</a></li>
                            <li><a href="Faq.html">faq</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>follow us</h4>
                        <div class="social-links">
                            <a href=""><i class="fa fa-facebook-f"></i></a>
                            <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-instagram"></i></a>
                            <a href=""><i class="fa fa-linkedin"></i></a>
                        </div>
                        <div class="footer-bottom">
                            <p>Designed and Developed By<span>ছায়াচিত্র</span></p>
                        </div>
                    </div>
                </div>
            </div>
           </footer>
        </nav>
           </section>
</body>
</html>
  	
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

   
		
</body>
</html>