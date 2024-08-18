<?php
session_start();
?>

<html>

<head>
  <title> Contact | FlavorWave </title>
</head>

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/contactus.css">


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
          <li><a href="index.php">Home</a></li>
          <li><a href="aboutus.php">About</a></li>
          <li class="active"><a href="contactus.php">Contact Us</a></li>
        </ul>

        <?php

        if (isset($_SESSION['login_user1'])) {

        ?>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
            <li><a href="myrestaurant.php">MANAGER CONTROL PANEL</a></li>
            <li><a href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
        <?php
        } else if (isset($_SESSION['login_user2'])) {
        ?>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
            <li><a href="foodlist.php"><span class="glyphicon glyphicon-cutlery"></span> Food Zone </a></li>
            <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart
                (<?php
                  if (isset($_SESSION["cart"])) {
                    $count = count($_SESSION["cart"]);
                    echo "$count";
                  } else {
                    echo "0";
                  }

                  ?>)
              </a></li>
            <li><a href="logout_u.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
        <?php
        } else {

        ?>

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

        <?php
        }
        ?>
      </div>

    </div>
  </nav>
  <br>

  <!-- <div class="col-xs-12 line"><hr></div> -->

  <div class="container content-fade">
    <div class="col-md-6 col-md-offset-3">
      <div class="form-area" style="margin-bottom: 100px;">
        <form method="post" action="">
          <br style="clear: both">
          <div class="logo-container text-center content-fade">
            <img src="images/LogoImage.png" alt="Flavor Wave Logo" style="max-width: 400px; max-height: 400px">
            <p class="content-fade2">Delivering Flavors to Your Doorstep</p>
          </div>
          <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> Contact Form</h3>
          <h5 style="margin-bottom: 25px;">Thank you for reaching out to us. We value your feedback, inquiries, and suggestions.
            Please use the form below to get in touch with our team. </h5>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" class="form-control" id="name" name="name" placeholder="Name" required autofocus="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="Number" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
              </div>
            </div>
          </div>
          <div class="form-group">
            <textarea class="form-control" type="textarea" id="message" name="message" placeholder="Message" maxlength="140" rows="7"></textarea>
            <span class="help-block">
              <p id="characterLeft" class="help-block">Max Character length : 140 </p>
            </span>
          </div>
          <div>
            <button type="button" onclick="goBack()" class="btn btn-default">Go Back</button>
            <input type="submit" name="submit" id="submit" class="btn btn-primary pull-right" value="Submit">
          </div>
        </form>
      </div>
    </div>
  </div>


  <?php
  if (isset($_POST['submit'])) {
    require 'connection.php';
    $conn = Connect();

    $Name = $conn->real_escape_string($_POST['name']);
    $Email_Id = $conn->real_escape_string($_POST['email']);
    $Mobile_No = $conn->real_escape_string($_POST['mobile']);
    $Subject = $conn->real_escape_string($_POST['subject']);
    $Message = $conn->real_escape_string($_POST['message']);

    $query = "INSERT into contact(Name,Email,Mobile,Subject,Message) VALUES('$Name','$Email_Id','$Mobile_No','$Subject','$Message')";
    $success = $conn->query($query);

    if (!$success) {
      die("Couldnt enter data: " . $conn->error);
    }

    $conn->close();
  }
  ?>

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