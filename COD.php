<?php
session_start();
require 'connection.php';
$conn = Connect();
if (!isset($_SESSION['login_user2'])) {
  header("location: customerlogin.php");
}

unset($_SESSION["cart"]);
?>

<html>

<head>
  <title> COD Success | Le Cafe' </title>
</head>

<link rel="stylesheet" type="text/css" href="css/COD.css">
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
          <li><a href="index.php">Home</a></li>
          <li><a href="aboutus.php">About</a></li>
          <li><a href="contactus.php">Contact Us</a></li>

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
                <li> <a href="#"> Admin Sign-up</a></li>
              </ul>
            </li>

            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-log-in"></span> Login <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li> <a href="customerlogin.php"> User Login</a></li>
                <li> <a href="managerlogin.php"> Manager Login</a></li>
                <li> <a href="#"> Admin Login</a></li>
              </ul>
            </li>
          </ul>

        <?php
        }
        ?>


      </div>

    </div>
  </nav>

  <div class="logo-container text-center">
    <img class="content-fade" src="images/LogoImage.png" alt="Flavor Wave Logo" style="max-width: 400px; max-height: 400px">
    <p class="content-fade2">Delivering Flavors to Your Doorstep</p>
    <h1 class="text-center content-fade2" style="color: green;"><span class="glyphicon glyphicon-ok-circle"></span> Order Placed Successfully.</h1>
    <h2 class="text-center content-fade2"> Thank you for Ordering at FlavorWave! The ordering process is now complete.</h2>
    <?php
    $num1 = rand(100000, 999999);
    $num2 = rand(100000, 999999);
    $num3 = rand(100000, 999999);
    $number = $num1 . $num2 . $num3;
    ?>
    <h3 class="text-center content-fade3"> <strong>Your Order Number:</strong> <span style="color: blue;"><?php echo "$number"; ?></span> </h3>
    <div class="text-center content-fade4" style="margin-top: 50px">
      <p class="content-fade3">You can copy the order number for future reference.</p><br>
      <p>You can now go back to the <a href="index.php">FlavorWave</a></p><br>
      <p>or you can explore in the <a href="foodlist.php">Flavor Zone</a></p>
    </div>
  </div>


</body>
<footer class="footer navbar-inverse navbar-fixed-bottom" style="margin-top: 20px;">
  <div class="container text-center">
    <p style="color:white;"></p>
    <p style="color: white;">&copy; 2023 FlavorWave. All rights reserved.</p>
  </div>
</footer>
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
    animation: fadeIn2 2s ease-in-out forwards;
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
    animation: fadeIn3 2.5s ease-in-out forwards;
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
    z-index: 9999 !important;
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</html>