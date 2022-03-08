<?php 
 
include 'config.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['email'])) {
    header("Location: dashboard.php");
}
 
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
 
    $sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['email'] = $row['email'];
        header("Location: dashboard.php");
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Truly Yours</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
<style>
body,h1 {font-family: "Raleway", sans-serif}
body, html {height: 100%}
.bgimg {
  background-image: url(../pictures/14.jpg);
  min-height: 100%;
  background-position: center;
  background-size: cover;
}

</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body>

<div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
  <div class="w3-display-topleft w3-padding-large  w3-xlarge">
    Truly Yours
  </div>
  <div class="w3-display-middle">
      <br>

    
      
    <h1 class="w3-jumbo w3-text-grey w3-container">Truly Yours</h1>
    <hr class="w3-border-grey" style="margin:auto;width:40%">
  <div class="alert alert-warning" role="alert">
        <?php echo $_SESSION['error']?>
    </div>
 
    <div class="container w3-grey w3-center w3-text-white">
        <form action="login.php" method="POST" class="login-email w3-center ">
            <p class="login-text w3-center fa fa-user-o" style="font-size: 2rem; font-weight: 800;"> Login Admin</p>
            <p><div class="input-group w3-center">
                <input type="email" placeholder="Email" name="email" value="<?php echo $_POST['email']; ?>" required>
            </div>
            <div class="input-group w3-center">
                <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div></p>
            <div class="input-group">
                <button name="submit" class="btn btn-primary">Login</button>
            </div>
            
        </form>
    </div>
	
	</a>
  </div>
  <div class="w3-display-bottomleft w3-padding-large">
    <a>Copyright @2022</a>
  </div>
</div>

</body>
</html>
