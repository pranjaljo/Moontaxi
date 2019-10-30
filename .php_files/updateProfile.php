<html>
    <head>
        <link rel="stylesheet" type="text/css" href="home_nav.css">
        <link rel="stylesheet" type="text/css" href="updateProfile.css">
        <link rel="stylesheet" type="text/css" href="popup.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <!--googlefontlink-->
        <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Monoton&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Arizonia&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Homemade+Apple&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Zilla+Slab&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Zilla+Slab&display=swap" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <style>
                .span1{
                margin-left:25vw;
              }
              h1{
                font-family:Arizonia;
                font-size:2.5vw;
              }
              #imgid11{
                width:9vw;
                height:auto;
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
                        <li><a href="Home2.php"><img src="OH7Yxoy.png" class="nav_ninja" target="_self">&nbsp</a></li>
                        <li><span class="span2">Moon Taxi</span></li>
                        <li><span class="span1"></span></li>
                        <li><a href="Home2.php" target="_self">Home</a></li>
                        <li><a href="#" target="_self"> Tour </a></li>
                        <li><div class="dropdown div9">
                            <button class="dropbtn"><span class="">Carpool</span></button>
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
                                <button class="dropbtn"><span class="span3 s3">&nbsp&nbsp&nbspWelcome<span> <?php echo $_COOKIE["userdetails"];?></span></span></button>
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
                <center>
                        <main>
                            <form method='post'>
                                <!--
                                <table>
                                    <tr><td><label class="label1">Your headings for your Moonpool</label></td>
                                    </tr>
                                </table>
                                <div class="form-group">
                                    <center><input type="text" class="form-control space inp1" id="usr" placeholder=" #Need need 4 for journey"></center>
                                </div>-->
                                <center>
                                <img src="OH7Yxoy.png" id="imgid11">
                                <h1><b>Update Your Credentials</b></h1><br><br>
                            <table>
                                <tr>
                                    <td><label>Your Name</label></td>
                                    <td><span class="s4"> </span></td>
                                    <td><input type="text" class="form-control" name='name'></td>
                                </tr>
                                <tr><td><span class="span4">.</span></td><td></td><td></td></tr>

                                <tr>
                                    <td><label>Email</label></td>
                                    <td><span class="s4"></span></td>
                                    <td><input type="email" class="form-control" name='email'></td>
                                </tr>
                                <tr><td><span class="span4">.</span></td><td></td><td></td></tr>

                                <tr><td><span class="span4"></span></td><td></td><td></td></tr>
                                <tr>
                                    <td><label>Mobile</label></td>
                                    <td><span class="s4"></span></td>
                                    <td><input type="text" class="form-control" name='contact'></td>
                                </tr>
                                </table>
                                   <br><br><br>

                           <br><br><br>
                            <button type="submit" class="btn btn-default" name='submit'>SUBMIT</button>

                        </center>
                        </form>
                        <?php
                        $con = mysqli_connect("localhost","root","","project");
                        if(isset($_POST['submit'])){
                          if(!empty($_POST['name'])){
                            $query="update signup set name='{$_POST['name']}' where registration='{$_COOKIE['userdetails']}'";
                            if(mysqli_query($con,$query)){
                              //echo "name";
                              echo '<script type="text/javascript">

                                      document.getElementById("pop_content").innerHTML = "Your Name has been Updated!!";
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
                          if(!empty($_POST['email'])){
                            $query="update signup set email='{$_POST['email']}' where registration='{$_COOKIE['userdetails']}'";
                            if(mysqli_query($con,$query)){
                              //echo "email";
                              echo '<script type="text/javascript">

                                      document.getElementById("pop_content").innerHTML = "Your Email has been Updated!!";
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
                          if(!empty($_POST['contact'])){
                            $query="update signup set contact='{$_POST['contact']}' where registration='{$_COOKIE['userdetails']}'";
                            if(mysqli_query($con,$query)){
                              //echo "phone";
                              echo '<script type="text/javascript">

                                      document.getElementById("pop_content").innerHTML = "Your Mobile No. has been Updated!!";
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
                        </main>
                        <script>
                        $(document).ready(function(){
                          $("button").click(function(){
                            $("main").addClass("red");
                          });
                        });
                        </script>

                    </center>

    </body>
</html>
