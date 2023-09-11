<!DOCTYPE html>
<html lang="en">
<head>
    <title>Event Creation Status</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="./06member.css">
</head>
<body style = 'background-image:url(./bg4.jpg);background-repeat: no-repeat; background-size: cover;'>
    <?php
    $ename = $_POST['ename'];
    $edate = $_POST['edate'];
    $evenue = $_POST['evenue'];
    $eintro = $_POST['eintro'];
    $ecat = $_POST['ecat'];
    $conn = mysqli_connect("localhost","root","","gdsc");
    $eno = mysqli_query($conn,"SELECT MAX(eno) as me from events;");
    $eno = mysqli_fetch_assoc($eno);
    $eno = $eno['me']+1;
    $conn = mysqli_connect("localhost","root","","gdsc");
    $q1 = "INSERT INTO events VALUES($eno,'$ename','$edate','$eintro',$ecat,'$evenue');";
    $e1 = mysqli_query($conn,$q1);
    $q2 = "SELECT mno, name, experience, username FROM creds where category = $ecat AND mno NOT IN(SELECT mno from groups WHERE gno = $eno);";
    $r1 = mysqli_query($conn,$q2);
    $n1 = mysqli_num_rows($r1);
    for ($i = 1; $i <= $n1; $i++) {
                $rt = mysqli_fetch_assoc($r1);
                $mno = $rt['mno'];
                $name = $rt['name'];
                $experience = $rt['experience'];
                $username = $rt['username'];
                echo "<form action='./06AddingMembers.php' method='post'>
                <div class='card mb-3' style='width: 800px; margin-left:300px; margin-top:50px' id='cards' style='background-color:#4477CE'>
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
                                    <input type='hidden' name='gno' value='$eno'>
                                    <input type='hidden' name='ecat' value='$ecat'>
                                    <button type='submit' style='margin-left:350px' id='member'><h6>Add member</h6></button>
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