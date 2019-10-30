  <html>
  <?php
    $con = mysqli_connect("localhost","root","","project");
    if($con){
    $query = "delete from request where date < NOW()";
    mysqli_query($con,$query);
    
  }
   ?>
      <head>
        <meta http-equiv="pragma" content="no-cache" />
            <link rel="stylesheet" type="text/css" href="login.css">
          <link rel="stylesheet" type="text/css" href="home_nav.css">
          <link rel="stylesheet" type="text/css" href="popup.css" media="screen">
          <!--googlefontlink-->
          <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
          <link href="https://fonts.googleapis.com/css?family=Monoton&display=swap" rel="stylesheet">
          <link href="https://fonts.googleapis.com/css?family=Arizonia&display=swap" rel="stylesheet">
          <link href="https://fonts.googleapis.com/css?family=Homemade+Apple&display=swap" rel="stylesheet">
          <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
          <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
          <link href="https://fonts.googleapis.com/css?family=Zilla+Slab&display=swap" rel="stylesheet">
          <link href="https://fonts.googleapis.com/css?family=Zilla+Slab&display=swap" rel="stylesheet">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
          <style>
                  .span1{
                  margin-left:25vw;
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

          <div class="bg-image"></div>
          <center>
          <main>

              <img src="OH7Yxoy.png" class="c1">
              <h2>Moon Taxi</h2><br><br><br>
              <p>User Authentication</p><form method="post" >
              <input type="text" class="inp1" placeholder="Username (Registration No.)" name="username"><br><br>
              <input type="password" class="inp1" placeholder="Please enter password" name = "password"><br><br><br>
              <!--<a href="D:\HTML\07Project\signup.html"><u>Forgot Password</u></a></p>-->

              <button class="btn2 btn btn-default" id="myButton" name='submit' >Submit</button><br><br><br><br>
              <p class="p11">Don't have an account <a href="signup.php"><u>click here make one</u></a></p>
              <!--google disabled 3rd party request>
              <p class="p11">Forgot Password, Don't worry <a href="forgotPassword.php"><u>click here </u></a></p>
            -->
          </main>
      </center>
      <div id="myModal" class="modal">


        <div class="modal-content">
          <span class="close">&times;</span>
          <p id="pop_content">Incorrect Password</p>
        </div>

      </div>

      <!--popup2-->


      <script>
      // Get the modal
      var modal = document.getElementById("myModal");
      var modal2 = document.getElementById("myModal2");

      // Get the <span> element that closes the modal
      var span = document.getElementsByClassName("close")[0];
      var span2 = document.getElementsByClassName("close2")[0];
      // When the user clicks the button, open the modal
      </script>
      <?php
          $con = mysqli_connect("localhost","root","","project");
          if(isset($_POST['submit'])){
              $entered = $_POST['username'];
              $ent_pass = $_POST['password'];
              $query = mysqli_query($con,"select password from signup where registration = '{$entered}'");

              if(mysqli_num_rows($query) == 1){
                  $row = mysqli_fetch_array($query);

                  if($row['password'] == $ent_pass)
                  {
                      setcookie("userdetails",$entered);
                      header('Location: Home2.php');
                  }
                  else{
                      echo "password incorrect";
                      echo '<script type="text/javascript">

                              document.getElementById("pop_content").innerHTML = "Incorrect Password!";
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
              else {
                  echo " User does not exist, SignUp";
                  echo '<script type="text/javascript">
                          document.getElementById("pop_content").innerHTML = "User Does Not Exist!";
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

      <nav id="navbar">
              <ul>
                      <li><a href=""><img src="OH7Yxoy.png" class="nav_ninja" target="_self">&nbsp</a></li>
                      <li><span class="span2">Moon Taxi</span></li>
                      <li><span class="span1"></span></li>
                      <li><a href='login.php'  target="_self"> Home</a></li>
                      <li><a href="login.php"  target="_self">&nbsp Tour &nbsp</a></li>
                      <li><a href="login.php"  target="_self">&nbspCarpool &nbsp</a></li>
                      <li><a href="login.php"  target="_self">&nbspShare&nbsp&nbsp</a></li>
                      <li><a href="login.php"  target="_self"><i class="fa fa-facebook view overlay zoom"></i></a></li>
                      <li><a href="login.php" target="_self"><i class="fa fa-instagram"></i></a></li>
                      <li><a href="login.php" target="_self"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="login.php" target="_self"><i class="fa fa-wikipedia-w"></i></a></li>
                      <li><a href="login.php" target="self"><span class="s3">Login</span></a></li>
                      <li><a href="signup.php" target="self">Sign Up</a></li>


              </ul>
          </nav>
          <script>
          $(document).ready(function(){
            $("button").click(function(){
              $("main").addClass("red");
            });
          });
          </script>
      </body>
  </html>
