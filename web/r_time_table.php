<?php
session_start();
include('server.php');
$from=$_SESSION['t_from'];
$to=$_SESSION['t_to'];
$ondate=$_SESSION['ondate'];
$returndate=$_SESSION['returndate'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>MiniBus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="/image/minibus-logo v.PNG">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body>
    <div id="main_page" class="page-container">
        <div class="header">
            <div class="hTop">
                <div class="leftC">
                    <div class="logo">
                        <a href="main.php"><img src="image/minibus-logo v.PNG"></href></a>
                    </div>
                    <div class="cpname">
                        <h2>MiniBus</h2>
                    </div>
                </div>
                <div class="rightC">
                    <div class="user_content">
                        <?php if (isset($_SESSION['success'])) : ?>
                            <div class="success">
                                <p>
                                    <?php
                                    echo $_SESSION['success'];
                                    unset($_SESSION['success']);
                                    ?>
                                </p>
                            </div>
                        <?php endif ?>
                        <?php if (isset($_SESSION['username']) && !empty($_SESSION['username'])) { ?>
                            <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
                            <p><a href="main.php?logout='1'" style="color:blue">Logout</a></p>
                        <?php } else { ?>
                            <div class="loginBox">
                                <a href="login.php">Login</a>
                                <a href="signup.php">Sign up</href></a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="hBtm">
                <div class="leftC">
                    <div class="navBar">
                        <nav>
                            <ul>
                                <li><a href="main.php">Home</a></li>
                                <li><a href="booking.php">Booking</a></li>
                                <li><a href="contact.php">Contact Us</a></li>
                                <li><a href="help.php">Help</a></li>
                                <li><a href="about.php">About Us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="rightCb">
                    <div class="container-location">
                        <a href="location.php">Our Location</a>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 column">
                        <h1> time table</h1>
                        <br>
                        <table class="table">
                          <thead>
                            <tr>
                              <th>From</th>
                              <th>To</th>
                              <th>Time</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                              echo "<h3>",$from," -> ",$to,"<br>","DATE : ",$ondate,"</h3>";
                              $query="select t_from,t_to,date_format(time,'%H:%i') as time from timetable where t_from = '$from' AND t_to='$to'";
                              $result = mysqli_query($conn, $query);
                              
                              while($row = mysqli_fetch_assoc($result))
                              {
                                echo "<tr>
                              <td>".$row["t_from"]."</td>
                              <td>".$row["t_to"]."</td>
                              <td>".$row["time"]."</td>
                              <td>
                                <a class='btn btn-primary btn-sm' href='seat1.php'>Seat</a>
                              </td>";
                              }
                              
                              ?>
                          </tbody>




                        </table>
                </div>
            
                    <div class="col-md-4 column">
                        <h1> time table</h1>
                        <br>
                        <table class="table">
                          <thead>
                            <tr>
                              <th>From</th>
                              <th>To</th>
                              <th>Time</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                              echo "<h3>",$from," -> ",$to,"<br>","DATE : ",$returndate,"</h3>";
                              $query="select t_from,t_to,date_format(time,'%H:%i') as time from timetable where t_from = '$from' AND t_to='$to'";
                              $result = mysqli_query($conn, $query);
                              
                              while($row = mysqli_fetch_assoc($result))
                              {
                                echo "<tr>
                              <td>".$row["t_from"]."</td>
                              <td>".$row["t_to"]."</td>
                              <td>".$row["time"]."</td>
                              <td>
                                <a class='btn btn-primary btn-sm' href='seat1.php'>Seat</a>
                              </td>";
                              }
                              
                              ?>
                          </tbody>




                        </table>
                </div>
            </div>
    </div>      
</body>