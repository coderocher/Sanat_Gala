<!DOCTYPE html>
<html lang="en">
<head>
    <title>Events</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="./04events.css">
</head>
<body style="background-image: url(./bg1.jpg); background-repeat: no-repeat; background-size: cover;">
    <h1 style='color:black;margin-left:550px; margin-top:50px'>Sanat-Gala</h1>
    <button id='Admin' style='width:150px; height:50px; margin-left:1050px;
        background-color: #35155D;'><a href='./index.html'><h5>LogOut</h5></a></button><br><br>"
    <div class = 'mycontent'>
    <?php
    $cno = $_POST["cno"];
    $conn = mysqli_connect("localhost","root","","gdsc");
    $q1 = "SELECT * FROM events WHERE ecat=$cno;";
    $r1 = mysqli_query($conn,$q1);
    $n1 = mysqli_num_rows($r1);
    for($i=0;$i<$n1;$i++){
            $rt = mysqli_fetch_assoc($r1);
            $ename = $rt['ename'];
            $eintro = $rt['eintro'];
            $edate = $rt['edate'];
            $evenue = $rt['evenue'];
            echo "<div class='card mb-3' style='width: 1200px;' id='cards'>
                    <div class='row g-0'>
                        <div class='col-md-8'>
                            <div class='card-body' style='padding-left=20px;'>
                                <h2 class='card-title'>
                                    $ename
                                </h2><br>
                                <h5 class='card-title'>
                                    Date: $edate
                                </h5><br>
                                <h5 class='card-title'>
                                    Venue: $evenue
                                </h5><br>
                                <h5 class='card-text'>
                                    $eintro
                                </h5>
                            </div>
                        </div>
                    </div>
                </div><br><br>";
    }
    mysqli_close($conn);
    ?>
</div>
</body>
</html>