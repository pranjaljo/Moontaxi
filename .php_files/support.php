<html>
    <head>

        <meta http-equiv="cache-control" content="max-age=0" />
        <meta http-equiv="cache-control" content="no-cache" />
        <meta http-equiv="expires" content="0" />
        <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
        <meta http-equiv="pragma" content="no-cache" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="home_nav.css">
        <link rel="stylesheet" type="text/css" href="support.css">
        <link rel="stylesheet" type="text/css" href="footer.css">
        <link rel="stylesheet" type="text/css" href="popup.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Monoton&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Arizonia&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Homemade+Apple&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Zilla+Slab&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Modak&display=swap" rel="stylesheet">


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <style>
        .span1 {
            margin-left: 25vw;
        }
        p{
            font-family: Raleway;

            font-size:19px;
            font-weight: bolder;
            padding:2vw;

        }
        .red{
          color:red;

          animation-name: shake;
          animation-duration: 2s;

}

@keyframes shake {
0% { transform: translate(1px, 1px) rotate(0deg); }
10% { transform: translate(-1px, -2px) rotate(-1deg); }
20% { transform: translate(-3px, 0px) rotate(1deg); }
30% { transform: translate(3px, 2px) rotate(0deg); }
40% { transform: translate(1px, -1px) rotate(1deg); }
50% { transform: translate(-1px, 2px) rotate(-1deg); }
60% { transform: translate(-3px, 1px) rotate(0deg); }
70% { transform: translate(3px, 1px) rotate(-1deg); }
80% { transform: translate(-1px, -1px) rotate(1deg); }
90% { transform: translate(1px, 2px) rotate(0deg); }
100% { transform: translate(1px, -2px) rotate(-1deg); }
}
        </style>


    </head>
    <body>
        <nav id="navbar">
            <ul>
                <li><a href="Home2.php"><img src="OH7Yxoy.png" class="nav_ninja" target="_blank">&nbsp</a></li>
                <li><span class="span2">Moon Taxi</span></li>
                <li><span class="span1"></span></li>
                <li><a href="Home2.php" target="_blank">Home</a></li>
                <li><a href="#" target="_blank"> Tour </a></li>
                <li><div class="dropdown div9">
                    <button class="dropbtn"><span class="s3"></span>Carpool</span></button>
                    <div class="dropdown-content">
                      <a href="carpooling_req.php">Post a Request for carpooling</a>
                      <a href="checkCars.php">Check for Available Cars</a>
                      <a href="currentStatus.php">Check current Status</a>
                    </div>
                    </div>
                </li>

                <li><a href="#" target="_blank">Share</a></li>
                <li><a href="#" target="_blank"><i class="fa fa-facebook view overlay zoom"></i></a></li>
                <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#" target="_blank"><i class="fa fa-wikipedia-w"></i></a></li>
                <li><div class="dropdown div9">
                    <button class="dropbtn"><span class="span3 s3">&nbsp&nbspWelcome&nbsp<span><?php echo $_COOKIE["userdetails"];?></span></span></button>
                        <div class="dropdown-content">
                          <a href="updateProfile.php">Update Profile</a>
                          <a href="changePwd.php">Change Password</a>
                          <a href="support.php">Support</a>
                          <a href="Home.php">Log Out</a>
                        </div>
                    </div>
                </li>
            </ul>
        </nav><br><br><br>

        <div id="myModal" class="modal">


          <div class="modal-content">
            <span class="close">&times;</span>
            <p id="pop_content">Incorrect Password</p>
          </div>

        </div>


        <script>
        // Get the modal
        var modal = document.getElementById("myModal");
        var modal2 = document.getElementById("myModal2");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];
        var span2 = document.getElementsByClassName("close2")[0];
        // When the user clicks the button, open the modal
        </script>
        <div>
        <div class="div12"><br><br>
            <h1><span class="s4"></span>You Have a problem!!</h1>
            <h1><span class="s5"></span>We Got a Soution!!</h1>
            <p><strong><b>The experts at Moon taxi work 24X7 to make your problems their problems. Tell us about the challenges you face and let us offer some suggestions you may not have thought about. A fine Moon taxi Solutions Specialist will address your quesry and respond promptly.
            <br><br><u><b>Email Support:</u></b> Please tell us how we can help, send your request for support to helpdesk@moontaxi.com and be sure to include your complete company name and contact information. Email requests are typically answered within 24 buissness hours.
            <br><br><u><b>Telephone Support:</u></b> Please have your query/id number and all relevent information pertaining to you problem ready when calling. All support services are available via telephone at +91-1234512345
              <br><br> You can also write your complaint below and we will get back to you as soon as poosible</b></strong></p>
            <form  method="POST">
            <input type="text" class="form-control f22" placeholder="subject"  name="subject">
            <textarea class="form-control f22" rows="10" placeholder="Please provide a detailed discription of your problem" name="details"></textarea>
        </div>
        <div class="div11">
            <img src="ycarpool.png" class="img2"><center><br><br><br><br>
            <button  class="btn2 btn btn-default btn-lg" name='submit'>Submit ur Query</button></center>
        </div>
        </div>

        </form>
        <?php
        $serverName = "localhost";
        $userDB = "root";
        $passDB = "";
        $nameDB = "project";
        $con = mysqli_connect($serverName, $userDB, $passDB, $nameDB);
        if($con) {
        if(isset($_POST['submit'])){
          $query = "insert into query values ('{$_COOKIE['userdetails']}','{$_POST['subject']}','{$_POST['details']}')";
          if(mysqli_query($con,$query)){
            //echo "succesfully generated";
            echo '<script type="text/javascript">

                    document.getElementById("pop_content").innerHTML = "Your Query has been registered";
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
          }
        }
        }
        ?>
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
            <script>
            $(document).ready(function(){
              $("button").click(function(){
                $("main").addClass("red");
              });
            });
            </script>

        </footer>
    </body>
</html>
