<!DOCTYPE html>
<html lang="en">
<head>
    <title>Creating Event</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="./05CreateEvent.css">
</head>
<body>
    <section style="background-image:url(./cards-bg.jpg);background-repeat: no-repeat; background-size: cover;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-8 col-xl-6">
              <div class="card rounded-3" style= "background-color: #8CABFF; margin-bottom: 60px;">
                <div class="card-body p-4 p-md-5">
                  <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Event Info</h3>
      
                  <form class="px-md-2" action="./05CreateEventNext.php" method="post">

                    <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example1q">Event Name</label>
                      <input type="text" id="form3Example1q" class="form-control" name="ename"/>
                    </div>
      
                    <div class="row">
                      <div class="col-md-6 mb-4">
      
                        <div class="form-outline datepicker">
                            <label for="exampleDatepicker1" class="form-label">Select a date</label>
                          <input type="text" class="form-control" id="exampleDatepicker1" name = "edate" placeholder="YYYY-MM-DD"/>
                        </div>
      
                      </div>
                      <div class="col-md-6 mb-4">
      
                        Event Catergory<br><select class="select" name="ecat">
                          <option value="0" disabled>Event Category</option>
                          <?php
                          $conn = mysqli_connect("localhost","root","","gdsc");
                          $e = mysqli_query($conn,"SELECT * FROM ecategories;");
                          $n = mysqli_num_rows($e);
                          for($i=1;$i<=$n;$i++){
                            $ec = mysqli_fetch_assoc($e);
                            $ecn = $ec['cname'];
                            echo "<option value='$i'>$ecn</option>";
                          }
                          ?>
                        </select>
      
                      </div>
                    </div>
      
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example1q">Event Venue</label>
                      <input type="text" id="form3Example1q" class="form-control" name="evenue"/>
                    </div>
      
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example1q">Event Introduction</label>
                      <textarea id="form3Example1q" class="form-control" name="eintro"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success btn-lg mb-1" style="background-color: #4477CE;">+ Add members</button><br><br>
                  </form>
                  <button type = "submit" class="btn btn-success btn-lg mb-1" style="background-color: #4477CE;"><a style="color:white;" href = "./03home.php">Discard</a></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>
</html>