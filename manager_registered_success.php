<html>

<head>
  <title> Manager Login | FlavorWave </title>
</head>


<link rel="stylesheet" type="text/css" href="css/manager_registered_success.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


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
      // Smooth scrolling to the top
      $('html, body').animate({
        scrollTop: 0
      }, 'slow');
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
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="aboutus.php">About</a></li>
          <li><a href="contactus.php">Contact Us</a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up </a></li>
          <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login </a></li>
        </ul>
      </div>

    </div>
  </nav>

  <?php

  require 'connection.php';
  $conn = Connect();

  $fullname = $conn->real_escape_string($_POST['fullname']);
  $username = $conn->real_escape_string($_POST['username']);
  $email = $conn->real_escape_string($_POST['email']);
  $contact = $conn->real_escape_string($_POST['contact']);
  $address = $conn->real_escape_string($_POST['address']);
  $password = $conn->real_escape_string($_POST['password']);

  $query = "INSERT into MANAGER(fullname,username,email,contact,address,password) VALUES('" . $fullname . "','" . $username . "','" . $email . "','" . $contact . "','" . $address . "','" . $password . "')";
  $success = $conn->query($query);

  if (!$success) {
    die("Couldnt enter data: " . $conn->error);
  }

  $conn->close();

  ?>

  <div class="container" style="display: flex; flex-direction: column; justify-content: center; align-items: center;
    height: 60vh;">
    <div class="logo-container text-center content-fade">
      <img src="images/LogoImage.png" alt="Flavor Wave Logo" style="max-width: 400px; max-height: 400px">
      <p class="content-fade">Delivering Flavors to Your Doorstep</p>
    </div>
    <br>
    <div class="card-body text-center content-fade2">
      <h3>Welcome <span style="color: blue; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);"><?php echo $fullname; ?></span>
      </h3>
      <h2 class="text-success"><span class="glyphicon glyphicon-ok-circle"></span> Your account has been
        created.</h2>
      <p style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);">
        Click Login to start the Management <br>
        <a href="managerlogin.php" class="btn btn-primary" style="margin-top: 20px;">Login</a>
      </p>
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
    /* Apply fade-in animation */
  }

  /* Keyframes for the fade-in animation */
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
<footer class="footer navbar-inverse navbar-fixed-bottom" style="margin-top: 20px;">
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