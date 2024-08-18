<html>

<head>
  <title> Manager Signup | FlavorWave </title>
</head>

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/managersignup.css">

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

  <div class="container">
    <div class="logo-container text-center">
      <img class="content-fade" src="images/LogoImage.png" alt="Flavor Wave Logo" style="max-width: 300px; max-height: 300px">
      <p class="content-fade">Delivering Flavors to Your Doorstep</p>
      <h1 class="content-fade2">Hi Manager,</h1>

      <h3 class="content-fade2">Welcome to <span style="color: blue; text-shadow: 2px 2px 5px lightblue;"> FlavorWave </span>Get started by creating your account</h3>
    </div>
  </div>



  <div class="container content-fade3" style="padding-right: 75px; margin-top: 2%; margin-bottom: 2%;">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default panel-black">
        <div class="panel-heading"> Create Account </div>
        <div class="panel-body">
          <form role="form" action="manager_registered_success.php" method="POST">
            <div class="row">
              <div class="form-group col-md-6">
                <label for="fullname"><span class="text-danger" style="margin-right: 5px;">*</span> Full Name: </label>
                <div class="input-group">
                  <input class="form-control" id="fullname" type="text" name="fullname" placeholder="Your Full Name" required="" autofocus="">
                  <span class="input-group-btn">
                    <label class="btn btn-dark"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></label>
                  </span>
                </div>
              </div>

              <div class="form-group col-xs-6">
                <label for="username"><span class="text-danger" style="margin-right: 5px;">*</span> Username: </label>
                <div class="input-group">
                  <input class="form-control" id="username" type="text" name="username" placeholder="Your Username" required="">
                  <span class="input-group-btn">
                    <label class="btn btn-dark"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></label>
                  </span>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="form-group col-xs-6">
                <label for="email"><span class="text-danger" style="margin-right: 5px;">*</span> Email: </label>
                <div class="input-group">
                  <input class="form-control" id="email" type="email" name="email" placeholder="Email" required="">
                  <span class="input-group-btn">
                    <label class="btn btn-dark"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></label>
                  </span>
                </div>
              </div>

              <div class="form-group col-xs-6">
                <label for="contact"><span class="text-danger" style="margin-right: 5px;">*</span> Contact: </label>
                <div class="input-group">
                  <input class="form-control" id="contact" type="text" name="contact" placeholder="Contact" required="">
                  <span class="input-group-btn">
                    <label class="btn btn-dark"><span class="glyphicon glyphicon-phone" aria-hidden="true"></span></label>
                  </span>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="form-group col-xs-6">
                <label for="address"><span class="text-danger" style="margin-right: 5px;">*</span> Address: </label>
                <div class="input-group">
                  <input class="form-control" id="address" type="text" name="address" placeholder="Address" required="">
                  <span class="input-group-btn">
                    <label class="btn btn-dark"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></label>
                  </span>
                </div>
              </div>

              <div class="form-group col-xs-6">
                <label for="password"><span class="text-danger" style="margin-right: 5px;">*</span> Password: </label>
                <div class="input-group">
                  <input class="form-control" id="password" type="password" name="password" placeholder="Password" required="">
                  <span class="input-group-btn">
                    <label class="btn btn-dark"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></label>
                  </span>
                </div>
              </div>
            </div>

            <div class="row content-fade4">
              <div class="form-group col-xs-6">
                <button type="button" onclick="goBack()" class="btn btn-default">Go Back</button>
                <button class="btn btn-primary" type="submit">Submit</button>
              </div>
            </div>

            <div class="row content-fade4">
              <div class="form-group col-xs-12">
                <label style="margin-left: 5px;">or</label> <br>
                <label style="margin-left: 5px;"><a href="managerlogin.php">Have an account? Login.</a></label>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
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

  .form-group button {
    margin-right: 50px;
    /* Adjust the value to set the desired spacing */
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
  function goBack() {
    window.history.back();
  }
</script>

</html>