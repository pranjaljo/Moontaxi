 <html>
    <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="Cache-control" content="no-cache">


        <link rel="stylesheet" type="text/css" href="home_nav.css">
        <link rel="stylesheet" type="text/css" href="checkCars2.css">
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
    </head>
    <style>
        footer{margin-top:47.5vw;}
    </style>
        <style>

                .span1{
                margin-left:25vw;
              }
              .f3{
                  width:10vw;
              }

              #myDIV {
                display:none
              }
              </style>
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


        <main><center><br>
          <div class="asideclass">
            <h2>Travel Details</h2>
            <form class="form-group" method="post">

                <label>Date of Journey</label>
                <input type="date" class="form-control f3" name="pass_doj" required><br>
                <label class="label2">Pick-up Location</label>
                <table>
                    <tr>
                        <td><select onchange="print_city('state', this.selectedIndex);" id="sts" name ="pass_from_state" class="form-control" ></select></td>
                        <td><select id ="state" class="form-control" name="pass_from_city" required></select></td>
                        <td><input type="text" class="form-control " name="pass_from_landmark" placeholder="Landmark"></td>
                    </tr>
                </table>
                <script language="javascript">print_state("sts");</script><br>
                <label class="label2">Drop-up Location</label>
                <table>
                    <tr>
                        <td><select onchange="print_city2('state2', this.selectedIndex);" id="sts1" name ="pass_to_state" class="form-control" ></select></td>
                        <td><select id ="state2" class="form-control"  name="pass_to_city" required></select></td>
                        <td><input type="text" class="form-control " placeholder="Landmark" name="pass_to_landmark"></td>
                    </tr>
                </table>
                <script language="javascript">print_state2("sts1");</script><br><br>
                <center><input type="submit" name="submit" value="submit" class="btn2 btn btn-default" onclick="myFunction()"></center>
            </form>
          </div>

        </center>
        <!--hiddenContent-->
        <div id="myDIV">
          <div id="hiddendiv">
          <center>
          <table border='5'>
              <tr>
                  <th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspName &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                  <th>&nbsp&nbsp&nbsp&nbspdate of journey&nbsp&nbsp&nbsp&nbsp</th>
                  <th>&nbsp&nbsp&nbsp&nbsptime of travel&nbsp&nbsp&nbsp&nbsp</th>
                  <th>&nbsp&nbsp&nbsp&nbspdeparture city&nbsp&nbsp&nbsp&nbsp</th>
                  <th>&nbsp&nbsp&nbsp&nbsparrival city&nbsp&nbsp&nbsp&nbsp</th>
                  <th>&nbsp&nbsp&nbsp&nbspno. of passengers required&nbsp&nbsp&nbsp&nbsp</th>
                  <th>&nbsp&nbsp&nbsp&nbspoptions&nbsp&nbsp&nbsp&nbsp</th>
              </tr>

          <?php
              $con = mysqli_connect("localhost","root","","project");
              if(isset($_POST['submit']))
              {
                  $var1=$_POST['pass_from_city'];
                  $var2=$_POST['pass_to_city'];
                  $var3=$_POST['pass_doj'];
                  $result = mysqli_query($con,"select * from request where (from_city='{$var1}' and  to_city='{$var2}' and date='{$var3}') order by time");
                  $count = mysqli_num_rows($result);
                  echo "<form method='post'>";
               while($count>0)

               {
                  $res=mysqli_fetch_row($result);
                   echo"<tr>";
                        echo "<td>$res[1]</td>";
                        echo "<td>$res[2]</td>";
                        echo "<td>$res[3]</td>";
                        echo "<td>$res[5]</td>";
                        echo "<td>$res[8]</td>";
                        echo "<td>$res[10]</td>";
                        echo "<td><input type='radio' name='chosen' value='{$res[0]}'></td>";

                   echo"</tr>";
                   $count--;
               }

             }
          ?>


          </table></center><br><br>

                      <input type='submit' name='submit1' value='submit1' class="btn2 btn btn-default" id='submit1'>
          </div>
        </div>

        <script>
        function myFunction() {
          var x = document.getElementById("myDIV");
        x.style.display="block";
        }
        </script>

        <?php
            if(isset($_POST['submit1']))
            {
                $var = $_POST['chosen'];
                $query = mysqli_query($con,"update request set passengers = passengers-1 where car_no = '{$var}' ");
                $result = mysqli_query($con,"select * from signup where registration='{$_COOKIE['userdetails']}'");
                $info = mysqli_fetch_row($result);
                $query2 =mysqli_query($con,"insert into passengers values('{$var}','{$info[0]}','{$info[1]}','{$info[3]}')");

            }

        ?>

        </main>
        <!--
        <footer>
                <div class="div3"><br>
                    Your one stop solution to college commute problems. Join MoonTaxi, VIT’s biggest carpool and bikepool app

                </div>
                <div class="div4">
                    <div><span class="sp">
                        <a class="a1" href="#">
                        <img width="60px" class="pull-left" src="http://www.userlogos.org/files/logos/jumpordie/google_play_04.png"><div class="btn-text"><small>Available on</small><br><strong>Google Play</strong></div></a>
                        </span>
                    </div><br>
                    <div>
                        <a class="#" href="#">
                        <img width="40px" class="pull-left" src="http://1.bp.blogspot.com/-rD2_M6Vvv6w/UbmywLq5V8I/AAAAAAAACko/BEcR4QqtkRI/s1600/Windows%2BStore%2BLogo.png"><div class="btn-text"><small>&nbsp Available on</small><br>&nbsp Windows Store</div></a>
                    </div>
                </div>
                <div class="div5"><br>
                    <strong>Contact Us</strong><br><br>
                    &nbsp&nbsp&nbsp&nbsp+91-1234512345<br>
                    &nbsp&nbsp&nbsp&nbsphelpdesk@moontaxi.com<br>
                </div>

            </footer>

          -->
    </body>
</html>
