<html>

<head>
  <meta http-equiv="pragma" content="no-cache" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="home_nav.css">
    <link rel="stylesheet" type="text/css" href="carpooling_req.css">
    <link rel="stylesheet" type="text/css" href="popup.css">
    <!--Boostrap link-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">


    <!--google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Monoton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Arizonia&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Homemade+Apple&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Zilla+Slab&display=swap" rel="stylesheet">
    <script src="carpooling_city2.js"></script>
    <script src="carpooling_ctiy.js"></script>
    <TITLE></TITLE>
    <style>
        .span1 {
            margin-left: 25vw;
        }
        .modal
{
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  text-align: center;
  font-size: 2vw;
  font-family:Raleway;


}
/* Modal Content */
.modal-content,
{
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 50%;
}

/* The Close Button */
.close,
{
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus
{
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
.s3{
  color:red;
}
    </style>
</head>

<body>
    <nav id="navbar">
        <ul>
            <li><a href="Home2.php"><img src="OH7Yxoy.png" class="nav_ninja" target="_self">&nbsp</a></li>
            <li><span class="span2">Moon Taxi</span></li>
            <li><span class="span1"></span></li>
            <li><a href="Home2.php" target="_self">Home</a></li>
            <li><a href="#" target="_self"> Tour </a></li>
            <li>
                <div class="dropdown div9">
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
            <li>
                <div class="dropdown div9">
                    <button class="dropbtn"><span class="span3 ">&nbsp&nbspWelcome&nbsp<span><?php echo $_COOKIE["userdetails"];?></span></span></button>
                    <div class="dropdown-content">
                        <a href="updateProfile.php">Update Profile</a>
                        <a href="changePwd.php">Change Password</a>
                        <a href="support.php">Support</a>
                        <a href="Home.php">Log Out</a>
                    </div>
                </div>
            </li>
        </ul>
    </nav><br><br><br><br><br><br><br>

    <div class="div10">Have a safe journey</div>
    <center>
        <main>
            <form method="post">
                <center><br><br>
                    <table>
                        <tr>
                            <td><label>Date of Journey</label></td>
                            <td><span class="s4"> </span></td>
                            <td><input type="date" class="form-control " name="date"></td>
                        </tr>
                        <tr>
                            <td><span class="span4">.</span></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td><label>Time of Departure</label></td>
                            <td><span class="s4"> </span></td>
                            <td><input type="time" class="form-control " name="time"></td>
                        </tr>
                        <tr>
                            <td><span class="span4">.</span></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><label>Car's registration Number</label></td>
                            <td><span class="s4"> </span></td>
                            <td><input type="text" class="form-control " name="car_reg" placeholder="#TN01AA0001" required></td>
                        </tr>
                        <tr>
                            <td><span class="span4">.</span></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table><br>
                    <table>
                        <tr>
                            <td><label class="label2">Pick-up Location</label></td>
                        </tr>
                    </table>

                    <table>
                        <tr>
                            <td><select onchange="print_city('state', this.selectedIndex);" id="sts" name="from_state"
                                    class="form-control" required></select></td>
                            <td><select id="state" class="form-control" required name="from_city"></select></td>
                            <td><input type="text" class="form-control " placeholder="Landmark" name="from_landmark"></td>
                        </tr>
                        <script language="javascript">print_state("sts");</script>
                    </table><br>
                    <table>
                        <tr>
                            <td><label class="label2">Drop Location</label></td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td><select onchange="print_city2('state2', this.selectedIndex);" id="sts1" name="to_state"
                                    class="form-control" required></select></td>
                            <td><select id="state2" class="form-control" name="to_city" required></select></td>
                            <td><input type="text" class="form-control " placeholder="Landmark" name="to_landmark"></td>
                        </tr>
                        <script language="javascript">print_state2("sts1");</script>

                    </table><br><br>
                    <table>
                        <tr>
                            <td><label>&nbsp&nbsp&nbsp &nbspPassenger Required</label></td>
                            <td><span class="s4"> </span></td>
                            <td><input type="number" class="form-control f1" name="count"></td>
                        </tr>
                    </table><br><br>
                    <textarea class="form-control f2" rows="12"
                        placeholder="Additional information (driver details, route ,etc)"></textarea>
                    <br><br><br>
                    <button type="submit" class="btn btn-default" name="submit" id="myBtn" onclick="myFunction()">SUBMIT</button>
                    <!-- The Modal -->


                </center>
            </form>
        </main>
        <a href="http://localhost:3000/">click here to take a survey</a>
        <br><br>
    </center>
<!--comment for popup 1-->
    <div id="myModal" class="modal">


      <div class="modal-content">
        <span class="close">&times;</span>
        <p>Request Successfully Generated</p>
      </div>

    </div>
<!--comment for popup2
<div id="myModal2" class="modal2">


  <div class="modal-content2">
    <span class="close2">&times;</span>
    <p>NO</p>
  </div>

</div>
-->
<script>
// Get the modal
var modal = document.getElementById("myModal");
//var modal2 = document.getElementById("myModal2");
// Get the button that opens the modal
var btn = document.getElementById("myBtn");
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
//var span2 = document.getElementsByClassName("close2")[0];
// When the user clicks the button, open the modal
</script>

        <?php
            if(isset($_POST['submit'])){
                $car = $_POST['car_reg'];
                $reg = $_COOKIE["userdetails"];
                $date = $_POST['date'];
                $time = $_POST['time'];
                $from_state = $_POST['from_state'];
                $from_city = $_POST['from_city'];
                $from_landmark = $_POST['from_landmark'];
                $to_state = $_POST['to_state'];
                $to_city = $_POST['to_city'];
                $to_landmark = $_POST['to_landmark'];
                $passenger = $_POST['count'];

                $con = mysqli_connect("localhost","root","","project");
                $query1 = mysqli_query($con,"insert into request values('{$car}','{$reg}','{$date}','{$time}','{$from_state}','{$from_city}','{$from_landmark}','{$to_state}','{$to_city}','{$to_landmark}','{$passenger}')");

                if($con){
                    if($query1)
                    {


                        echo "";
                        echo '<script type="text/javascript">
                                modal.style.display = "block";

                                span.onclick = function() {
                                  modal.style.display = "none";
                                }

                                window.onclick = function(event) {
                                  if (event.target == modal) {
                                    modal.style.display = "none";
                                  }
                                }
                              </script>';
                        $result = mysqli_query($con,"select * from signup where registration='{$_COOKIE['userdetails']}'");
                        $info = mysqli_fetch_row($result);
                        $query2 =mysqli_query($con,"insert into passengers values('{$car}','{$info[0]}','{$info[1]}','{$info[3]}')");

                    }
                    else{
                      echo '';

                    }
                }

            }
        ?>


</div>

        <script>

        btn.onclick = function() {

        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
          modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
          if (event.target == modal) {
            modal.style.display = "none";
          }
        }
        </script>
</body>

    </html>
