<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="./03home.css">
</head>
<body style="background-image: url(./bg1.jpg); background-repeat: no-repeat; background-size: cover;">
    <div class="mycontent">
        <?php
        $AOrM = $_POST['user'];
        $conn = mysqli_connect("localhost", "root", "", "GDSC");
        $q0 = "SELECT mno from creds where username='$AOrM';";
        echo "<h1 style='color:black;margin-left:500px'>Sanat-Gala</h1>";
        if ($AOrM == 'theAdmin') {
            echo "<button id='Admin' style='width:275px; height:75px; margin-left:800px;
          background-color: #35155D;'><h5 style='color:white'>+ <a href='./05CreateEvent.php'>Create Events</a></h5></button>";
        }
        else{
            $a = mysqli_query($conn,$q0);
            $a = mysqli_fetch_assoc($a);
            $a = $a['mno'];
            echo "<form action='./07profile.php' method='post'><input type='hidden' value='$a' name='mno'>
            <button id='Admin' type='submit' style='width:275px; height:75px; margin-left:800px;
          background-color: #35155D;'><h5 style='color:white'>View Profile</h5></button></form>";
        }
        echo "<a href='./index.html'><button id='Admin' style='width:275px; height:75px; margin-left:800px;
        background-color: #35155D;margin-top:50px;'><h5 style='color:white'>LogOut</h5></button></a><br><br>";
        $q1 = "SELECT * FROM ecategories;";
        $r1 = mysqli_query($conn, $q1);
        $n1 = mysqli_num_rows($r1);
        ?>
            <?php
            for ($i = 1; $i <= $n1; $i++) {
                $rt = mysqli_fetch_assoc($r1);
                $cname = $rt['cname'];
                $cintro = $rt['cintro'];
                echo "<form action='./04events.php' method='post'>
                <div class='card mb-3' style='width: 1200px;' id='cards'>
                        <div class='row g-0'>
                            <div class='col-md-4'><br>
                                <img
                                src='./eve$i.jpeg'
                                alt='Image retrieving'
                                class='img-fluid rounded-start'
                                />
                            </div>
                            <div class='col-md-8'>
                                <div class='card-body'>
                                    <h5 class='card-title'>
                                        <input name='cno' value='$i'>
                                        $cname
                                    </h5>
                                    <p class='card-text'>
                                        $cintro
                                    </p>
                                    <button type='submit' class='learn'><small>Learn more</small></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>";
            }
            mysqli_close($conn);
            ?>
    </div>
</body>
</html>
