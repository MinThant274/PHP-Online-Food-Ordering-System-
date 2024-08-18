<?php
session_start();
?>

<html>

<head>
  <title> Home | FlavorWave </title>
</head>

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/index.css">


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
            <li><a href="foodlist.php"><span class="glyphicon glyphicon-cutlery"></span> Flavor Zone </a></li>
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

  <div class="logo-container text-center content-fade">
    <img src="images/LogoImage.png" alt="Flavor Wave Logo" style="max-width: 400px; max-height: 400px">
    <p class="content-fade2">Delivering Flavors to Your Doorstep</p>
  </div>

  <div class="container mt-5 content-fade3" style="margin-bottom: 30px">
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <img src="images/home1.png" class="card-img-top" alt="Card Image" style="max-width: 300px; max-height: 300px">
          <div class="card-body d-flex flex-column align-items-start">
            <h2 class="card-title">Customer</h2>
            <p class="card-text">News to Here? Join us</p>
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                More
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="customerlogin.php">Login</a></li>
                <li><a class="dropdown-item" href="customersignup.php.php">Create an account</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="images/home2.png" class="card-img-top" alt="Card Image" style="max-width: 300px; max-height: 300px">
          <div class="card-body d-flex flex-column align-items-start">
            <h2 class="card-title">Learn more</h2>
            <p class="card-text">More Content</p>
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Explore Us
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="aboutus.php">About us</a></li>
                <li><a class="dropdown-item" href="contactus.php">Contact us</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="images/home3.png" class="card-img-top" alt="Card Image" style="max-width: 300px; max-height: 300px">
          <div class="card-body d-flex flex-column align-items-start">
            <h2 class="card-title">Manger</h2>
            <p class="card-text">Staff Only</p>
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                More
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="managerlogin.php">Login</a></li>
                <li><a class="dropdown-item" href="managersignup.php">Create an account</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <br>
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

    #myBtn {
      background-color: black;
      z-index: 9999 !important;
      /* Adjust this value as needed */
    }

    #myBtn span {
      color: white;
    }

    #myBtn:hover {
      background-color: blue;
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
  <footer class="footer navbar-inverse navbar-fixed-bottom">
    <div class="container text-center">
      <p style="color: white;">&copy; 2023 FlavorWave. All rights reserved.</p>
    </div>
  </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</body>

</html>