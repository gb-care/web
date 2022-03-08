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
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}

    .bgimg {
  background-image: url(../pictures/15.jpg);
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

  <a href="logout.php" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-close w3-xxlarge"></i>
    <p>LOGOUT</p>
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
    <a href="logout.php" class="w3-bar-item w3-button" style="width:25% !important">LOGOUT</a>
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
<h2 class="w3-cursive w3-center">~ Book Recommendation ~</h2>

<div class="w3-display-container">
  <form action="crud2.php" enctype="multipart/form-data" method="post">
  <div class="row">
    <div class="col-25">
      <label for="fname">Title</label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="judul" >
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">Tag</label>
    </div>
    <div class="col-75">
      <input type="text" id="lname" name="tag" >
    </div>
  </div>
 
  <div class="row">
    <div class="col-25">
      <label for="subject">Content</label>
    </div>
    <div class="col-75">
      <textarea id="subject" name="content"  style="height:200px"></textarea>
    </div>
  </div>
   <div class="row">
    <div class="col-25">
      <label for="img">Select Image</label>
    </div>
    <div class="col-75">
      
 	 <input type="file" id="img" name="image" accept="image/*">
    </div>
  </div>
  <br>
  <div class="row">
    <input type="submit" value="Save">
  </div>
  </form>
</div>
  
  <!-- End Contact Section -->
  
  <div class="w3-display-container">
   
        <h3>Content List</h3>
   
  
    <table border="1">
   <p>    <tr>
   			  <th>ID</th>
            <th>Judul</th>
            <th>Tag</th>
            <th>Content</th>
            <th>Image</th>
            <th>Tindakan</th>
        </tr>
</p>
        <?php
        $sql = "SELECT * FROM book";
        $query = mysqli_query($koneksi, $sql);

        while($b = mysqli_fetch_array($query)){
            echo "<tr>";
			echo "<td>".$b['id_book']."</td>";
            echo "<td>".$b['judul']."</td>";
            echo "<td>".$b['tag']."</td>";
            echo "<td>".$b['content']."</td>";
            echo "<td>".$b['image']."</td>";
            
            
            echo "<td>";
            echo "<a href='form-edit1.php?id_book=".$b['id_book']."'>Edit</a> | ";
            echo "<a href='hapus1.php?id_book=".$b['id_book']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
</div>
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
