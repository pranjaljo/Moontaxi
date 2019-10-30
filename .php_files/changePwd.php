<html>
    <head>
        <link rel="stylesheet" type="text/css" href="home_nav.css">
        <link rel="stylesheet" type="text/css" href="updateProfile.css">
        <link rel="stylesheet" type="text/css" href="changepwd.css">
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
                            <form method="post">
                                <img src="OH7Yxoy.png" class="c1">
                                <h1><b>Change your password<b></h1>
                                <center><br><br>
                            <table>

                                <tr>
                                    <td><label>Email</label></td>
                                    <td><span class="s4"></span></td>
                                    <td><input type="email" class="form-control" name="email"></td>
                                </tr>
                                <tr><td><span class="span4">.</span></td><td></td><td></td></tr>
                                <tr>
                                    <td><label>Current Password</label></td>
                                    <td><span class="s4"></span></td>
                                    <td><input type="password" class="form-control" name="former"></td>
                                </tr>
                                <tr><td><span class="span4">.</span></td><td></td><td></td></tr>
                                <tr>
                                    <td><label>New Password</label></td>
                                    <td><span class="s4"></span></td>
                                    <td><input type="password" class="form-control" name="newpass"></td>
                                </tr>
                                <tr><td><span class="span4">.</span></td><td></td><td></td></tr>
                                <tr>
                                    <td><label>Retype New Password</label></td>
                                    <td><span class="s4"></span></td>
                                    <td><input type="password" class="form-control" name="retype"></td>
                                </tr>
                                </table>

                            <br><br>
                            <button type="submit" class="btn btn-default" name="submit">SUBMIT</button>

                        </center>
                        </form>
                        </main>

                    </center>
                    <?php
                      $con = mysqli_connect("localhost","root","","project");
                      if(isset($_POST['submit'])){

                          if($_POST['newpass']==$_POST['retype'])
                        {
                        $query = "update signup set password='{$_POST['newpass']}' where email='{$_POST['email']}' and password='{$_POST['former']}' and registration='{$_COOKIE["userdetails"]}' ";
                        $res = mysqli_query($con,$query);
                        if($res){
                          //echo "success";
                          echo '<script type="text/javascript">

                                  document.getElementById("pop_content").innerHTML = "Your Password has been Updated!!";
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
                        else{
                          //echo "check ur email and former password";
                          echo '<script type="text/javascript">

                                  document.getElementById("pop_content").innerHTML = "Incorrect Email or old Password!!";
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
                      else{
                        echo "pass not same";
                        echo '<script type="text/javascript">

                                document.getElementById("pop_content").innerHTML = "Passwords are not Same!!";
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
                     ?>
                     <script>
                     $(document).ready(function(){
                       $("button").click(function(){
                         $("main").addClass("red");
                       });
                     });
                     </script>
    </body>
</html>
