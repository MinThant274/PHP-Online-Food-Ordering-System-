    <?php
    include('login_u.php');

    if (isset($_SESSION['login_user2'])) {
      header("location: foodlist.php");
    }
    ?>

    <!DOCTYPE html>
    <html>



    <head>
      <title> Guest Login | FlavorWave </title>
    </head>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/managerlogin.css">

    <body>


      <button onclick="topFunction()" id="myBtn" title="Go to top">
        <span class="glyphicon glyphicon-chevron-up"></span>
      </button>

      <script type="text/javascript">
        window.onscroll = function() {
          scrollFunction()
        };

        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("myBtn").style.display = "block";
          } else {
            document.getElementById("myBtn").style.display = "none";
          }
        }

        function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }
      </script>

      <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">FlavorWave</a>
          </div>

          <div class="collapse navbar-collapse " id="myNavbar">
            <ul class="nav navbar-nav">
              <li><a href="index.php">Home</a></li>
              <li><a href="aboutus.php">About</a></li>
              <li><a href="contactus.php">Contact Us</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
              <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Sign Up <span class="caret"></span> </a>
                <ul class="dropdown-menu">
                  <li> <a href="customersignup.php"> User Sign-up</a></li>
                  <li> <a href="managersignup.php"> Manager Sign-up</a></li>

                </ul>
              </li>

              <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-log-in"></span> Login <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li> <a href="customerlogin.php"> User Login</a></li>
                  <li> <a href="managerlogin.php"> Manager Login</a></li>

                </ul>
              </li>
            </ul>
          </div>

        </div>
      </nav>
      <div class="container-fluid">
        <div class="logo-container text-center">
          <img class="content-fade" src="images/LogoImage.png" alt="Flavor Wave Logo" style="max-width: 300px; max-height: 300px">
          <p class="content-fade">Delivering Flavors to Your Doorstep</p>
          <h1 class="content-fade2">Hi Guest,</h1>

          <h3 class="content-fade2">Welcome to <span style="color: blue; text-shadow: 2px 2px 5px lightblue;"> FlavorWave </span>Please Login to Continue</h3>
        </div>
      </div>


      <div class="container-fluid content-fade" style="margin-top: 20px; height: 50vh; display: flex; justify-content: center; align-items: center;">
        <div class="col-md-5">
          <div class="panel panel-default panel-black">
            <div class="panel-heading">Customer Login</div>
            <div class="panel-body">
              <form action="" method="POST">
                <?php if (!empty($error)) : ?>
                  <div class="alert alert-danger"><?php echo $error; ?></div>
                <?php endif; ?>
                <div class="form-group">
                  <label for="username"><span class="text-danger">*</span> Username:</label>
                  <div class="input-group">
                    <input class="form-control" id="username" type="text" name="username" placeholder="Username" required="" autofocus="">
                    <span class="input-group-addon">
                      <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                    </span>
                  </div>
                </div>
                <div class="form-group">
                  <label for="password"><span class="text-danger">*</span> Password:</label>
                  <div class="input-group">
                    <input class="form-control" id="password" type="password" name="password" placeholder="Password" required="">
                    <span class="input-group-addon">
                      <span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
                    </span>
                  </div>
                </div>
                <div class="form-group text-center content-fade4" style="margin-top: 20px;">
                  <button type="button" onclick="goBack()" class="btn btn-default" style="padding-left: 110px; padding-right: 110px;">Go Back</button>
                  <button class="btn btn-primary" name="submit" type="submit" value="Login" style="padding-left: 110px; padding-right: 110px;">Submit</button>
                </div>
              </form>
              <div class="text-center content-fade4">
                <p>or</p>
                <p><a href="customersignup.php">Create a new account.</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <style>
        .content-fade {
          opacity: 0;
          /* Start with 0 opacity */
          animation: fadeIn 1s ease-in-out forwards;
          /* Apply fade-in animation */
        }

        /* Keyframes for the fade-in animation */
        @keyframes fadeIn {
          0% {
            opacity: 0;
            transform: translateY(20px);
            /* Optional: Add a slight vertical shift */
          }

          100% {
            opacity: 1;
            transform: translateY(0);
          }
        }

        .content-fade2 {
          opacity: 0;
          /* Start with 0 opacity */
          animation: fadeIn2 1.5s ease-in-out forwards;
          /* Apply slower fade-in animation */
        }

        /* Keyframes for the slower fade-in animation */
        @keyframes fadeIn2 {
          0% {
            opacity: 0;
            transform: translateY(20px);
            /* Optional: Add a slight vertical shift */
          }

          100% {
            opacity: 1;
            transform: translateY(0);
          }
        }

        .content-fade3 {
          opacity: 0;
          /* Start with 0 opacity */
          animation: fadeIn3 2s ease-in-out forwards;
          /* Apply slower fade-in animation */
        }

        /* Keyframes for the slower fade-in animation */
        @keyframes fadeIn3 {
          0% {
            opacity: 0;
            transform: translateY(20px);
            /* Optional: Add a slight vertical shift */
          }

          100% {
            opacity: 1;
            transform: translateY(0);
          }
        }

        .content-fade4 {
          opacity: 0;
          /* Start with 0 opacity */
          animation: fadeIn4 3s ease-in-out forwards;
          /* Apply slower fade-in animation */
        }

        /* Keyframes for the slower fade-in animation */
        @keyframes fadeIn4 {
          0% {
            opacity: 0;
            transform: translateY(20px);
            /* Optional: Add a slight vertical shift */
          }

          100% {
            opacity: 1;
            transform: translateY(0);
          }
        }

        #myBtn {
          background-color: gray;
          /* z-index: 9999 !important; */
          /* Adjust this value as needed */
        }

        #myBtn span {
          color: white;
        }

        #myBtn:hover {
          background-color: blue;
        }

        .footer {
          padding: 20px 0;
        }
      </style>
      <footer class="footer navbar-inverse">
        <div class="container text-center">
          <p style="color: white;">&copy; 2023 FlavorWave. All rights reserved.</p>
        </div>
      </footer>
      <script>
        function goBack() {
          window.history.back();
        }
      </script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </body>

    </html>