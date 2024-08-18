<?php
session_start();
require 'connection.php';
$conn = Connect();
if (!isset($_SESSION['login_user2'])) {
  header("location: customerlogin.php");
}
?>

<html>

<head>
  <title> Cart | FlavorWave </title>
</head>

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/cart.css">
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
        <a class="navbar-brand" href="index.php">FalvorWave</a>
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
            <li><a href="foodlist.php"><span class="glyphicon glyphicon-cutlery"></span> Flavor Zone </a></li>
            <li class="active"><a href="foodlist.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart
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


  <?php
  if (!empty($_SESSION["cart"])) {
  ?>
    <div class="container-fluid">
      <div class="logo-container text-center">
        <img class="content-fade" src="images/LogoImage.png" alt="Flavor Wave Logo" style="max-width: 400px; max-height: 400px">
        <p class="content-fade2">Delivering Flavors to Your Doorstep</p>
        <h3 class="content-fade3">Your Shopping List</h3>
      </div>
      <br>
    </div>
    <div class="table-responsive content-fade3" style="padding-left: 100px; padding-right: 100px; margin-top: 10px; margin-bottom: 20px;">
      <table class="table table-striped">
        <thead class="thead-dark">
          <tr>
            <th width="40%">Food Name</th>
            <th width="10%">Quantity</th>
            <th width="20%">Price Details</th>
            <th width="15%">Order Total</th>
            <th width="5%">Action</th>
          </tr>
        </thead>


        <?php
          $total = 0;
          foreach ($_SESSION["cart"] as $keys => $values) {
        ?>
          <tr>
            <td><?php echo $values["food_name"]; ?></td>
            <td><?php echo $values["food_quantity"] ?></td>
            <td>&#36; <?php echo $values["food_price"]; ?></td>
            <td>&#36; <?php echo number_format($values["food_quantity"] * $values["food_price"], 2); ?></td>
            <td><a href="cart.php?action=delete&id=<?php echo $values["food_id"]; ?>"><span class="text-danger">Remove</span></a></td>
          </tr>
        <?php
          $total = $total + ($values["food_quantity"] * $values["food_price"]);
        }
        ?>
        <tr>
          <td colspan="3" align="right">Total</td>
          <td align="right">&#36; <?php echo number_format($total, 2); ?></td>
          <td></td>
        </tr>
      </table>
      <?php
      echo '<a href="cart.php?action=empty"><button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Empty Cart</button></a>&nbsp;<a href="foodlist.php"><button class="btn btn-warning">Continue Shopping</button></a>&nbsp;<a href="payment.php"><button class="btn btn-success pull-right"><span class="glyphicon glyphicon-share-alt"></span> Check Out</button></a>';
      ?>

      <div class="container content-fade4" style="margin-top: 5%;">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="card border-warning mb-3">
              <div class="card-header bg-warning text-white">
                <h3>Caution</h3>
              </div>
              <div class="card-body text-warning" style="padding-top: 20px;">
                <h5 class="card-text" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);">Review the items you have added to your cart below.
                  <br> Make any necessary changes before proceeding to checkout. Thank you for shopping with us!
                </h5>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    <br><br><br><br><br><br><br>
  <?php
  }
  if (empty($_SESSION["cart"])) {
  ?>

    <div class="container">
      <div class="logo-container text-center">
        <img class="content-fade" src="images/LogoImage.png" alt="Flavor Wave Logo" style="max-width: 400px; max-height: 400px">
        <p class="content-fade2">Delivering Flavors to Your Doorstep</p>
        <h1 class="content-fade2">:(</h1>
        <h3 class="content-fade3">Your Shopping List</h3>
        <div class="container content-fade3" style="margin-top: 5%;">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <div class="card border-warning mb-3">
                <div class="card-header bg-warning text-white">
                  <h4>Note:</h4>
                </div>
                <div class="card-body text-warning" style="padding-top: 20px;">
                  <h4>Oops! We can't smell any food here. Go back to <a href="foodlist.php">Flavor Zone.</a> and pick one for order.</h4>
                  <h5 class="card-text" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);">If you encounter error, you can
                    <a href="cart.php">refresh</a> the page
                  </h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <?php
  }
    ?>


    <?php

    if (isset($_POST["add"])) {
      if (isset($_SESSION["cart"])) {
        $item_array_id = array_column($_SESSION["cart"], "food_id");
        if (!in_array($_GET["id"], $item_array_id)) {
          $count = count($_SESSION["cart"]);

          $item_array = array(
            'food_id' => $_GET["id"],
            'food_name' => $_POST["hidden_name"],
            'food_price' => $_POST["hidden_price"],
            'R_ID' => $_POST["hidden_RID"],
            'food_quantity' => $_POST["quantity"],
          );
          $_SESSION["cart"][$count] = $item_array;
          echo '<script>window.location="cart.php"</script>';
        } else {
          echo '<script>alert("Products already added to cart")</script>';
          echo '<script>window.location="cart.php"</script>';
        }
      } else {
        $item_array = array(
          'food_id' => $_GET["id"],
          'food_name' => $_POST["hidden_name"],
          'food_price' => $_POST["hidden_price"],
          'R_ID' => $_POST["hidden_RID"],
          'food_quantity' => $_POST["quantity"],
        );
        $_SESSION["cart"][0] = $item_array;
      }
    }
    if (isset($_GET["action"])) {
      if ($_GET["action"] == "delete") {
        foreach ($_SESSION["cart"] as $keys => $values) {
          if ($values["food_id"] == $_GET["id"]) {
            unset($_SESSION["cart"][$keys]);
            echo '<script>alert("Food has been removed")</script>';
            echo '<script>window.location="cart.php"</script>';
          }
        }
      }
    }

    if (isset($_GET["action"])) {
      if ($_GET["action"] == "empty") {
        foreach ($_SESSION["cart"] as $keys => $values) {

          unset($_SESSION["cart"]);
          echo '<script>alert("Cart is made empty!")</script>';
          echo '<script>window.location="cart.php"</script>';
        }
      }
    }

    ?>
    <?php

    ?>

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
    animation: fadeIn4 3.5s ease-in-out forwards;
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
        position: fixed;
        bottom: 20px;
        right: 20px;
        display: none;
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