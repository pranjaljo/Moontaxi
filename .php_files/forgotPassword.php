<html>
    <head>
        <link rel="stylesheet" type="text/css" href="home_nav.css">
        <link rel="stylesheet" type="text/css" href="login.css">

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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <style>
                .span1{
                margin-left:25vw;
              }
              </style>
    </head>
    <body>
        <nav id="navbar">
            <ul>
                    <li><a href="Home2.php"><img src="OH7Yxoy.png" class="nav_ninja" target="_self">&nbsp</a></li>
                    <li><span class="span2">Moon Taxi</span></li>
                    <li><span class="span1"></span></li>
                    <li><a href="Home2.php" target="_self"> Home</a></li>
                    <li><a href="#" onclick='f1();' target="_self">&nbsp Tour &nbsp</a></li>
                    <li><a href="#" onclick='f1();' target="_self">&nbspCarpool &nbsp</a></li>
                    <li><a href="#" onclick='f1();'target="_self">&nbspShare&nbsp&nbsp</a></li>
                    <li><a href="#" onclick='f1();' target="_self"><i class="fa fa-facebook view overlay zoom"></i></a></li>
                    <li><a href="#" onclick='f1();' target="_self"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#" onclick='f1();' target="_self"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" onclick='f1();' target="_self"><i class="fa fa-wikipedia-w"></i></a></li>
                    <li><a href="login.php" target="self"><span class="s31">Login</span></a></li>
                    <li><a href="signup.php" target="self">Sign Up</a></li>


            </ul>
        </nav>
        <div class="bg-image"></div>
        <center>
        <main>

            <img src="OH7Yxoy.png" class="c1">
            <h2>Moon Taxi</h2><br><br><br>
            <p>User Authentication</p>
            <input type="text" class="inp1" placeholder="Please enter your Email"><br><br>
            <input list="browsers" class="inp1" placeholder="Please select your security question"><br>
            <datalist id="browsers">
                <option value="Name of your First Pet" selected="selected">
                <option value="Your Favourite Color">
                <option value="Mothers Maiden Name">
                <option value="Your Favourite Movie">
                <option value="Name of your first Car">
            </datalist><br>
            <input type="text" class="inp1" placeholder="Please enter the answer "><br><br><br>

            <button class="btn2 btn btn-default" id="b" onClick="myFunction()">Submit</button><br><br><br><br>
            <label id="i1">A temp-password has been sent to your Mail</label>
        </main>
    </center>
    <script>
        document.getElementById("i1").style.display = "none";
        function myFunction(){
            document.getElementById("i1").style.display = "block";
        }
    </script>
            <script type="text/javascript">
                document.getElementById("myButton").onclick = function () {
                    location.href = "login.php";
                };
                function f1(){
                  window.alert("Please login in order to continue")
                }
            </script>

            <?php
              
             ?>
    </body>
</html>
