<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
<title>Truly Yours</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    .bgimg {
  background-image: url('pictures/15.jpg');
  width: 992px;
  height: 400px;
  
  
}
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
</style>
</head>
<body class="w3-black">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <!-- Avatar image in top left corner -->

  <a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>HOME</p>
  </a>
  <a href="book.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-book w3-xxlarge"></i>
    <p>BOOK RECS </p>
  </a>
  <a href="travel.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-camera-retro w3-xxlarge"></i>
    <p>TRAVELLING </p>
  </a>
  <a href="learning-english.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-star w3-xxlarge"></i>
    <p>LEARN ENGLISH</p>
  </a>
  <a href="tajwid.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-heart w3-xxlarge"></i>
    <p>TAJWID</p>
  </a>
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="index.php" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
    <a href="book.php" class="w3-bar-item w3-button" style="width:25% !important">BOOK RECS</a>
    <a href="travel.php" class="w3-bar-item w3-button" style="width:25% !important">TRAVELLING</a>
    <a href="learning-english.php" class="w3-bar-item w3-button" style="width:25% !important">LEARN ENGLISH</a>
    <a href="tajwid.php" class="w3-bar-item w3-button" style="width:25% !important">TAJWID</a>
  </div>
</div>

<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  
  
  <header class="w3-content w3-justify  w3-center w3-black w3-padding" id="home">
  <div class="bgimg w3-mobile w3-display-container w3-animate-opacity w3-text-white">
    <h1 class="w3-jumbo w3-padding-top-64"> Truly Yours.</h1>
    <p>Let's live to the fullest!</p>
    </div> 
  </header>


  <!-- About Section -->
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">
<h2 class="w3-text-light-grey w3-text-grey w3-cursive w3-center">~ Learning English ~</h2>
  <!-- First Photo Grid-->
<div class="w3-row-padding w3-padding-16 w3-center" id="book">
    <div class="w3-quarter">
	<?php
        $sql = "SELECT * FROM english";
        $query = mysqli_query($koneksi, $sql);
		$rand = rand();
        while($book = mysqli_fetch_array($query)){
            echo "<tr>";?>
			<td><?php $book['id_english']?></td>
     <i class="fa fa-star w3-xxlarge"></i>
      <h3><a href="#"><?php echo "<td>".$book['judul']."</td>";?></a></h3>
    
	<br>
	</div>
    <div class="w3-quarter">
	
	
	 <?php  } ?>
	<p>Total: <?php echo mysqli_num_rows($query) ?></p>
    </div>
	
	</div>
	
  <!-- Pagination -->
  <div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <a href="#" class="w3-bar-item w3-button w3-hover-black">�</a>
      <a href="#" class="w3-bar-item w3-black w3-button">1</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">�</a>
    </div>
  </div>
  
  <!-- End Contact Section -->
  </div>
  
    <!-- Footer -->
  <footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <p class="w3-medium">Copyright @2022</p>
  <!-- End footer -->
  </footer>

<!-- END PAGE CONTENT -->
</div>

</body>
</html>
