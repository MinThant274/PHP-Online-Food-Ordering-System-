<?php
session_start();
?>

<html>

<head>
  <title> About | FlavorWave </title>
</head>

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/aboutus.css">

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
        $('html, body').animate({scrollTop: 0}, 'slow');
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
          <li class="active"><a href="aboutus.php">About</a></li>
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

  <div class="container" style="margin-bottom: 100px;">
    <div class="wide">
      <div class="container mt-5 content-fade" style="margin-top: 20px">
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <h2 class="card-title">About Us</h2>
                <p class="card-text">
                  Welcome to FlavorWave, your ultimate destination for hassle-free and delicious online food delivery.
                  We're dedicated to transforming your dining experience by bringing the culinary delights of your favorite local restaurants right to your doorstep.
                </p>
                <p class="card-text">
                  FlavorWave is dedicated to making great food accessible to all, anytime. Our platform provides a seamless and convenient way to explore diverse cuisines, order delicious dishes, and enjoy them from the comfort of your own home. With a focus on culinary excellence and customer satisfaction, FlavorWave aims to create unforgettable dining experiences for you and your loved ones. Whether you're in the mood for comfort classics, exotic flavors, or healthy options, we have something for everyone. Join us on a delectable journey, where FlavorWave brings convenience, variety, and joy to your dining table.
                  Discover flavors that make your taste buds dance and embark on a culinary adventure like never before.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div class="card">
              <div class="card-body">
                <span style="float: right; margin-top: 30px; margin-left: 70px">
                  <img src="images/aboutusimg1.jpg" alt="About Us Image" class="card-img-top" style="max-width: 100%;">
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container mt-5 content-fade2" style="margin-top: 30px">
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <img src="images/aboutusimg2.png" alt="About Us Image" class="card-img-top" style="max-width: 50%; margin-left: 20px;">
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <h2 class="card-title">Our Vision</h2>
                <p class="card-text">
                  At FlavorWave, our top priority is providing exceptional service to our valued customers.
                  We strive to offer a seamless and delightful experience from start to finish. Our dedicated team is committed to ensuring your satisfaction by promptly addressing any queries or concerns you may have. Whether it's assisting with menu selection, accommodating dietary preferences, or providing timely updates on your order, we go above and beyond to exceed your expectations.
                  With FlavorWave, you can expect friendly and efficient service that enhances your dining journey and leaves you with a smile.
                </p>

              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container mt-5 content-fade3" style="margin-top: 30px">
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <h2 class="card-title">FlavorWave Journey</h2>
                <p class="card-text">
                  FlavorWave's journey began in 2015 as a local food delivery service, driven by a passion for culinary excellence and a vision to transform the way people experience food.
                  Starting small, the company quickly gained popularity for its diverse menu options and commitment to quality. By leveraging technology and partnerships with local restaurants, FlavorWave expanded its operations, offering a convenient platform for customers to explore and order a wide range of cuisines. Today, as a leading online food delivery platform, FlavorWave continues to prioritize accessibility, variety, and customer satisfaction, bringing the joy of great food to people's tables with every meal.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div class="card">
              <div class="card-body">
                <span style="float: right; margin-top: 30px; margin-left: 90px">
                  <img src="images/aboutusimg3.png" alt="About Us Image" class="card-img-top" style="max-width: 75%;">
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container mt-5 content-fade3" style="margin-top: 50px;">
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <img src="images/aboutusimg4.png" alt="About Us Image" class="card-img-top" style="max-width: 70%; margin-top: 10px; margin-left: 20px;">
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <h2 class="card-title">Delivering Culinary Delights to Your Doorstep</h2>
                <p class="card-text" style="margin-bottom: 100px;">
                  At FlavorWave, we are passionate about bringing the joy of great food to your doorstep. As a leading online food delivery platform, our mission is to provide accessibility, variety, and exceptional service to our valued customers. With an extensive network of partner restaurants and talented chefs, we offer a diverse range of cuisines to satisfy every craving and dietary preference. Our user-friendly platform and innovative features make it easy to explore, order, and enjoy delicious meals from the comfort of your own home. We are committed to ensuring your satisfaction by providing personalized recommendations, timely updates, and dedicated customer support.
                  Join us on this culinary adventure and experience the convenience, flavor, and delight that FlavorWave brings to your dining table.
                </p>

              </div>
            </div>
          </div>
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
    animation: fadeIn3 3s ease-in-out forwards;
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

</html>