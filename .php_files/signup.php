<html>
    <head>
        <link rel="stylesheet" type="text/css" href="home_nav.css">
        <link rel="stylesheet" type="text/css" href="signup_body.css">
        <link rel="stylesheet" type="text/css" href="popup.css" media="screen">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <!--googlefontlink-->
         <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
         <link href="https://fonts.googleapis.com/css?family=Monoton&display=swap" rel="stylesheet">
         <link href="https://fonts.googleapis.com/css?family=Arizonia&display=swap" rel="stylesheet">
         <link href="https://fonts.googleapis.com/css?family=Homemade+Apple&display=swap" rel="stylesheet">
         <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
         <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
         <link href="https://fonts.googleapis.com/css?family=Zilla+Slab&display=swap" rel="stylesheet">
         <link href="https://fonts.googleapis.com/css?family=Zilla+Slab&display=swap" rel="stylesheet">

         <!--bootstap-->
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

         <style>
                .span1{
                margin-left:25vw;
              }
              input{
  color:black;
}
p{
    font-size:1.5vw;
    color:black;
    text-align:center;
    font-family:Raleway;
    font-weight:900;

}
body{

background-image: url("moonBack3.PNG");
background-position: center;
background-repeat: no-repeat;
background-size: cover;
background-attachment: fixed;

}
.k1{
  color:white;
}
.inp1{
    width:16vw;
    height: 35px;
    padding:3px;
}
              </style>
        </head>
    <body>

        <div class="bg-image2"></div>
        <center>
            <main>
                <img src="OH7Yxoy.png" class="c1">
                <h2 class="k1">Moon Taxi</h2>
                <p class="k1">User Registration</p>
                <form method="post">
                <input type="text" class="btn2 btn btn-default inp1" placeholder="UserName (Registration No.)" name="username" required><br><br>
                <input type="text" class="btn2 btn btn-default inp1" placeholder="Enter your First Name" name="name" required><br><br>
                <input type="email" class="btn2 btn btn-default inp1" placeholder="Please enter your Email" name="email" required><br><br>
                <input type="tel" class="btn2 btn btn-default inp1" placeholder="Enter your contact number" name="contact" requied><br><br>
                <input type="password" class="btn2 btn btn-default inp1" placeholder="Please enter your Password" name="pass" required><br><br>
                <input type="password" class="btn2 btn btn-default inp1" placeholder="Confirm Password" name="cnf" required><br><br>
                <button class="btn2 btn btn-default" id="b"  name="submit">Submit</button></form>
                <br>
                <br>
                <p class="p11">Already got an acount <a href="login.php"><u>click here to Login</u></a></p>
            </main>

        </center>
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
        <?php
        $count=0;
            if(isset($_POST['submit'])){
                if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                    $email =  $_POST['email'];
                }
                else{
                    //echo " <p>enter a valid email</p>";
                    echo '<script type="text/javascript">

                            document.getElementById("pop_content").innerHTML = "enter a valid email!";
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
                    $count++;


                }
                if (preg_match('(^[0-9]{2}[A-Z]{3}[0-9]{4}$)',$_POST['username'])){
                    $username = $_POST['username'];
                }
                else{
                    //echo "<p>enter valid registration number</p>";
                    echo '<script type="text/javascript">

                            document.getElementById("pop_content").innerHTML = "enter valid registration number!";
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
                    $username="";
                    $count++;
                }
                if($_POST['cnf']==$_POST['pass'] && strlen($_POST['pass'])>=8){

                    $password = $_POST['pass'] ;

                }
                else{
                    //echo "<p> check your password</p>";
                    echo '<script type="text/javascript">

                            document.getElementById("pop_content").innerHTML = "Check your password!";
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
                    $count++;
                }
                $name = $_POST['name'];
                $phone = $_POST['contact'];
                $con = mysqli_connect("localhost","root","","project");
                $query = mysqli_query($con,"select registration from signup where registration = '{$username}'");
                $check="";
                while($row = mysqli_fetch_array($query))
                {
                    if($row['registration'])
                    {
                        $check = $row['registration'];
                    }
                }
                if($con){
                    if($check == $username){
                        //echo "<p>user alresdy exists</p><br>";
                        echo '<script type="text/javascript">

                                document.getElementById("pop_content").innerHTML = "User alresdy exists!";
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
                      if($count==0){
                        $query=mysqli_query($con,"insert into signup values('{$username}','{$name}',
                        '{$email}','{$phone}','{$password}')");
                        header('Location: login.php');
                        echo '<script type="text/javascript">

                                document.getElementById("pop_content").innerHTML = "User profile created, Please Login!";
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
            }
        ?>
        <nav id="navbar">
            <ul>
                    <li><a href=""><img src="OH7Yxoy.png" class="nav_ninja" target="_self">&nbsp</a></li>
                    <li><span class="span2">Moon Taxi</span></li>
                    <li><span class="span1"></span></li>
                    <li><a href="login.php" target="_self"> Home</a></li>
                    <li><a href="login.php" target="_self">&nbsp Tour &nbsp</a></li>
                    <li><a href="login.php" target="_self">&nbspCarpool &nbsp</a></li>
                    <li><a href="login.php" target="_self">&nbspShare&nbsp&nbsp</a></li>
                    <li><a href="login.php" target="_self"><i class="fa fa-facebook view overlay zoom"></i></a></li>
                    <li><a href="login.php" target="_self"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="login.php" target="_self"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="login.php" target="_self"><i class="fa fa-wikipedia-w"></i></a></li>
                    <li><a href="login.php" target="_self">Login</a></li>
                    <li><a href="signup.php" target="_self"><span class="s3">Sign Up</span></a></li>
            </ul>
        </nav>
    </body>
</html>
