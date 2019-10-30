<html>
<head>

<link rel="stylesheet" type="text/css" href="home_nav.css">
<link rel="stylesheet" type="text/css" href="currentStatus1.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Monoton&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Arizonia&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Homemade+Apple&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Zilla+Slab&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="footer.css">
<script src="carpooling_city2.js"></script>
<script src="carpooling_ctiy.js"></script>

<style>

.span1{
     margin-left:25vw;
      }
table{
  color:white;
  font-size:1.2vw;
}
h1{
    font-family:Pacifico;
}
h4{
    font-size:1.2vw;
}
</style>
</head>


<body>
<nav id="navbar">
            <ul>

                    <li><a href="Home2.php"><img src="OH7Yxoy.png" class="nav_ninja" target="_self">&nbsp</a></li>
                    <li><span class="span2">Moon Taxi</span></li>
                    <li><span class="span1"></span></li>
                    <li><a href="Home2.php" target="_self">Home </a></li>
                    <li><a href="#" target="_self"> Tour </a></li>
                    <li><div class="dropdown div9">
                        <button class="dropbtn"><span class="s3">Carpool</span></button>
                        <div class="dropdown-content">
                          <a href="carpooling_req.php">Post a Request for carpooling</a>
                          <a href="checkCars.php">Check for Available Cars</a>
                          <a href="currentStatus.php">Check current Status</a>
                        </div>
                      </div>
                    </li>

                    <li><a href="#" target="_self">Share</a></li>
                    <li><a href="#" target="_self"><i class="fa fa-facebook view overlay zoom"></i></a></li>
                    <li><a href="#" target="_self"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#" target="_self"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" target="_self"><i class="fa fa-wikipedia-w"></i></a></li>
                    <li><div class="dropdown div9">
                        <button class="dropbtn"><span class="span3">&nbsp&nbsp&nbspWelcome <span><?php echo $_COOKIE["userdetails"];?></span></span></button>
                        <div class="dropdown-content">
                          <a href="updateProfile.php">Update Profile</a>
                          <a href="changePwd.php">Change Password</a>
                          <a href="support.php">Support</a>
                          <a href="Home.php">Log Out</a>
                        </div>
                      </div>
                    </li>


            </ul>
        </nav><br><br>
        <center>
        <main>
            <h1>Your Current Booking Details are as follows</h1><br>
        <?php
$reg = $_COOKIE['userdetails'];
$con = mysqli_connect("localhost","root","","project");
if($con){
    $query = "select car_no from passengers where registration = '{$reg}'";
    $result = mysqli_query($con,$query);
    
    while($row= mysqli_fetch_row($result)){
        $query1 = "select * from request where car_no = '{$row[0]}'";
        $result1 = mysqli_query($con,$query1);
        $row1 = mysqli_fetch_row($result1);
        echo "<h3> Date of Journey is  $row1[2]<br> From $row1[5] To $row1[8] <br>";
        //
        echo "<h4> Travelling companions are - <h4><br>";
        $query2 = "select * from passengers where car_no = '{$row[0]}'";
        $result2 = mysqli_query($con,$query2);
        {
            echo "<center><table border='2'><tr><th>&nbsp&nbsp&nbsp&nbspReg. No&nbsp&nbsp&nbsp&nbsp</th><th>&nbsp&nbsp&nbsp&nbspName&nbsp&nbsp&nbsp&nbsp</th><th>&nbsp&nbsp&nbsp&nbspMobile Number&nbsp&nbsp&nbsp&nbsp</th></tr>";
            while($row2 = mysqli_fetch_row($result2))
            {
                echo "<tr>";
                //echo "<td> $row2[0] </td>";
                echo "<td> $row2[1] </td>";
                echo "<td> $row2[2] </td>";
                echo "<td> $row2[3] </td>";
                echo "</tr>";
            }
            echo"</table></center>";
            echo "<br><br><br><br>";
        }

    }
}

?>
</main>
<center>


</body>
</html>