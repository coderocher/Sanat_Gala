<!DOCTYPE html>
<html lang="en">
<head>
    <title>06AddingMembers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="./06member.css">
</head>
<body  style='background-image:url(./bg4.jpg);background-repeat: no-repeat; background-size: cover;'>
    <?php
    $mno = $_POST['mno'];
    $gno = $_POST['gno'];
    $ecat = $_POST['ecat'];
    $conn = mysqli_connect("localhost","root","","gdsc");
    $q1 = "INSERT INTO groups VALUES($mno,$gno);";
    $e1 = mysqli_query($conn,$q1);
    $q2 = "SELECT mno, name, experience, username FROM creds where category = $ecat AND mno NOT IN(SELECT mno from groups WHERE gno = $gno);";
    $r1 = mysqli_query($conn,$q2);
    $n1 = mysqli_num_rows($r1);
    echo "<form action='./03home.php' method='post'><input type='hidden' value='theAdmin' name='user'><button type = 'submit' id='Admin' style='width:100px; height:75px; margin-left:1000px; border-radius:55%;margin-top:30px;'><h3 style='color:white'>Done</h3></button><br><br><br>
          </form>";
    for ($i = 1; $i <= $n1; $i++) {
                $rt = mysqli_fetch_assoc($r1);
                $mno = $rt['mno'];
                $name = $rt['name'];
                $experience = $rt['experience'];
                $username = $rt['username'];
                echo "<form action='./06AddingMembers.php' method='post'>
                <div class='card mb-3' style='width: 800px; margin-left:300px; margin-top:50px' id='cards'>
                        <div class='row g-0'>
                            <div class='col-md-4'><br>
                            <img src='./06profile.png' alt='profile pic' style='height:150px width:auto'>
                            </div>
                            <div class='col-md-8'>
                                <div class='card-body'>
                                    <h5 class='card-title'>
                                        Mno: <input name='mno' value='$mno' readonly type='number' min=100 max=200 style='width:55px;'><br>
                                        $name
                                    </h5>
                                    <p class='card-text'>
                                        Experience: $experience years<br>Username: $username
                                    </p>
                                    <input type='hidden' name='gno' value='$gno'>
                                    <input type='hidden' name='ecat' value='$ecat'>
                                    <button type='submit' style='margin-left:350px'><small>Add member</small></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>";
    }
    mysqli_close($conn);
    ?>
</body>
</html>