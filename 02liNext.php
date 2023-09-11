<!DOCTYPE html>
<html lang="en">
<head>
  <title>LogIn Status</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="./02li.css">
</head>
<body style="background-image: url(./bg2.jpg); background-repeat: no-repeat; background-size: cover;">
<div class='container col-xl-10 col-xxl-8 px-4 py-5'>
          <div class='row align-items-center g-lg-5 py-5'>
            <div class='col-lg-7 text-center text-lg-start'>
            <h1 style="color: black;"><strong>Welcome to the Sanat-Gala portal!</strong></h1><br>
        <p class="col-lg-10 fs-4" style="color: black;">Your gateway to an electrifying fusion of technology, music, and sports. Unlock a world of thrilling events and seamless registration. Join the rhythm of excitement, amplify your experience, and embark on an unforgettable journey. Log in now and immerse yourself in the pulse of innovation and entertainment!</p>
            </div>
            
<?php 
$u = $_POST['Username'];
$p = $_POST['Password'];
$conn = mysqli_connect("localhost", "root", "", "gdsc");
$q1 = "SELECT * FROM creds WHERE username = '$u' and password = '$p';";
$e1 = mysqli_query($conn, $q1);
$n = mysqli_num_rows($e1);

if ($n > 0) {
  echo "<div class='col-md-10 mx-auto col-lg-5' id='box'>
              <form action='./03home.php' method='post' style = 'background-color: #4477CE;'>
                <div class='form-floating mb-3' id='innerbox'>
                  <h5>Login Successful! <br><br>Continue as <br><input value ='$u' id='user' name='user' readonly><br><br>
                  <button type='submit' class='inline-flex text-white bg-blue-500 border-0 py-2 px-6 focus:outline-none hover:bg-blue-600 rounded text-lg'>Proceed to Home</button>
                </div>
                <hr class='my-4'>
              </form>
            </div>";
    } 
else {
        echo "<div class='col-md-10 mx-auto col-lg-5' id='box'>
        <form style = 'background-color: #4477CE;'>
        <div class='form-floating mb-3' id='innerbox'>
                <h5>Invalid Password! <br></h5><br><br>
                <button type='submit' class='inline-flex text-white bg-blue-500 border-0 py-2 px-6 focus:outline-none hover:bg-blue-600 rounded text-lg'><a href = './02li.html'>Retry</a></button>
              </div>
              <hr class='my-4'>
              </form>
              </div>
            </div>
          </div>";
    }
mysqli_close($conn);
?>
</div>
</div>
</body>
</html>
