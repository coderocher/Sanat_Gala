<!DOCTYPE html>
<html lang="en">
<head>
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel='stylesheet' href='./07profile.css'>
</head>
<body>
<section style="background-image:url(./bg.jpg); background-repeat: no-repeat; background-size: cover;">
<?php
echo "<a href='./index.html'><button id='Admin' style='width:300px; height:75px; margin-left:980px;
background-color: #35155D;margin-top:50px;'><h3>LogOut</h3></button></a><br><br><br>";
?>
        <div class='container py-5 h-100'>
          <div class='row d-flex justify-content-center align-items-center h-100'>
            <div class='col col-lg-6 mb-4 mb-lg-0'>
              <div class='card mb-3' style='border-radius: .5rem;background-color: #512B81;'>
                <div class='row g-0' style='background-color: #512B81;'>
                  <div class='col-md-4 gradient-custom text-center text-white'
                    style='border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;'>
                    <img src='./06profile.png' alt='profile pic' style='padding-top:50px; height:200px; width:auto;'>
                    <i class='far fa-edit mb-5'></i>
                  </div>
                  <div class='col-md-8'>
                    <div class='card-body p-4'>
                    <?php
                    $conn = mysqli_connect("localhost","root","","gdsc");
                    $mno = $_POST['mno'];
                    $q1 = "SELECT c.name, c.experience, e.cname from creds c, ecategories e where c.mno=$mno AND c.category=e.cno;";
                    $e1 = mysqli_query($conn,$q1);
                    $r = mysqli_fetch_assoc($e1);
                    $name = $r['name'];
                    $experience = $r['experience'];
                    $cname = $r['cname'];
                      echo "<h2>$name</h2>
                      <hr class='mt-0 mb-4'>
                      <div class='row pt-1'>
                        <div class='col-6 mb-3'>
                          <h4>Experience</h4>
                          <h5>$experience years</h5>
                      </div>
                        <div class='col-6 mb-3'>
                          <h4>Category</h4>
                          <h5>$cname</h5>
                      </div>
                      <hr class='mt-0 mb-4'>
                      <h3>Events</h3>
                      <div class='row pt-1'>
                        <div class='col-6 mb-3'>
                          <h4>Organising<br><br></h4>";
                          $q2 = "SELECT e.ename from groups g, events e WHERE g.mno=$mno AND g.gno=e.eno;";
                          $r2 = mysqli_query($conn,$q2);
                          $n2 = mysqli_num_rows($r2);
                          for($i=1;$i<=$n2;$i++){
                            $n = mysqli_fetch_assoc($r2);
                            $n = $n['ename'];
                            echo "<h5>$i. $n</h5><br>";
                          }
                        echo "</div>
                  </div>";
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>
</html>