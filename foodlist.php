<?php
session_start();

if (!isset($_SESSION['login_user2'])) {
  header("location: customerlogin.php");
}

?>

<html>

<head>
  <title> Menu | FlavorWave </title>
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
            <li class="active"><a href="foodlist.php"><span class="glyphicon glyphicon-cutlery"></span> Flavor Zone </a></li>
            <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart (
                <?php
                if (isset($_SESSION["cart"])) {
                  $count = count($_SESSION["cart"]);
                  echo "$count";
                } else {
                  echo "0";
                }

                ?>) </a></li>
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

  <!--div class="item">
      <img src="images/home.jpg" style="width:100%;">
      <div class="carousel-caption">

      </div>
      </div-->

  <div id="myCarousel" class="carousel slide content-fade2" data-ride="carousel" style="width: auto; height: auto">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">

      <div class="item active">
        <div class="carousel-image" style="background-image: url('images/slide1.png');"></div>
        <div class="carousel-caption">
          <div class="carousel-overlay"></div>
        </div>
      </div>
      <div class="item">
        <div class="carousel-image" style="background-image: url('images/slide2.png');"></div>
        <div class="carousel-caption">
          <div class="carousel-overlay"></div>
        </div>
      </div>
      <div class="item">
        <div class="carousel-image" style="background-image: url('images/slide3.png');"></div>
        <div class="carousel-caption">
          <div class="carousel-overlay"></div>
        </div>
      </div>
      <div class="item">
        <div class="carousel-image" style="background-image: url('images/slide4.png');"></div>
        <div class="carousel-caption">
          <div class="carousel-overlay"></div>
        </div>
      </div>

    </div>
    <a href="#main-content" class="btn btn-primary btn-lg" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
      Order Now</a>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div class="jumbotron" style="height: 55%; width:auto">
    <div class="container-fluid">
      <div class="logo-container text-center">
        <div id="main-content"></div>
        <img class="content-fade" src="images/LogoImage.png" alt="Flavor Wave Logo" style="max-width: 300px; max-height: 300px">
        <div class="container text-center">
          <h1 class="content-fade2">Menu</h1>
          <p class="content-fade3">Welcome! Pick your Falvor</p>
        </div>
      </div>
      <br>
    </div>
  </div>


  <div class="container content-fade4" style="width:100%; margin-bottom: 100px;">

    <!-- Display all Food from food table -->
    <?php

    require 'connection.php';
    $conn = Connect();

    $sql = "SELECT * FROM FOOD WHERE options = 'ENABLE' ORDER BY F_ID";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      $count = 0;

      while ($row = mysqli_fetch_assoc($result)) {
        if ($count == 0) {
          echo "<div class='row'>";
        }

    ?>
        <div class="col-md-3" style="margin-bottom: 50px;">
          <form method="post" action="cart.php?action=add&id=<?php echo $row["F_ID"]; ?>">
            <div class="mypanel" align="center">
              <img src="<?php echo $row["images_path"]; ?>" class="img-responsive">
              <h4 class="text-dark"><?php echo $row["name"]; ?></h4>
              <h5 class="text-info"><?php echo $row["description"]; ?></h5>
              <h5 class="text-danger">&#36; <?php echo $row["price"]; ?>/-</h5>
              <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>">
              <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
              <input type="hidden" name="hidden_RID" value="<?php echo $row["R_ID"]; ?>">
              <div class="quantity-add-cart" style="display: flex; justify-content: center; align-items: center;">
                <input type="number" min="1" max="25" name="quantity" class="form-control" value="1" style="width: 60px;">
                <input type="submit" name="add" class="btn btn-primary" value="Add to Cart" style="margin-left: 5px;">
              </div>
            </div>
          </form>
        </div>


      <?php
        $count++;
        if ($count == 4) {
          echo "</div>";
          $count = 0;
        }
      }
      ?>

  </div>
  </div>
<?php
    } else {
?>

  <div class="container">
    <div class="jumbotron">
      <center>
        <label style="margin-left: 5px;color: red;">
          <h1>Oops! No food is available.</h1>
        </label>
        <p>Stay Hungry...! :P</p>
      </center>

    </div>
  </div>

<?php

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
    animation: fadeIn4 4s ease-in-out forwards;
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

  .carousel-image {
    background-size: cover;
    background-position: center;
    width: 100%;
    height: 500px;
  }

  .carousel-inner {
    position: relative;
  }

  .carousel-inner img {
    position: relative;
    width: 100%;
  }

  .carousel-inner img:after {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(to right, red, green);
    opacity: 0.5;
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

  .quantity-input {
    opacity: 1;
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

<script>
  $(document).ready(function() {
    // Smooth scrolling when clicking the "Order Now" button
    $("a[href^='#']").on('click', function(event) {
      event.preventDefault();
      var target = this.hash;
      $('html, body').animate({
        scrollTop: $(target).offset().top
      }, 800, function() {
        window.location.hash = target;
      });
    });
  });
</script>
<script>
  $(document).ready(function() {
    // Initialize the first carousel
    $('#myCarousel').carousel();

    // Handle carousel slide event
    $('#myCarousel').on('slide.bs.carousel', function() {
      // Hide other carousels
      $('.carousel').addClass('hidden-carousel');

      // Create a new carousel below
      var newCarousel = $('<div class="carousel hidden-carousel"></div>');
      var carouselInner = $('<div class="carousel-inner"></div>');

      // Populate the new carousel with images
      for (var i = 0; i < 4; i++) {
        var itemClass = (i === 0) ? 'item active' : 'item';
        var imageSrc = 'images/slide' + (i + 1) + '.png';
        var imageDiv = $('<div class="' + itemClass + '"></div>');
        imageDiv.css('background-image', 'url(' + imageSrc + ')');
        carouselInner.append(imageDiv);
      }

      // Append the new carousel to the document
      newCarousel.append(carouselInner);
      $('.container').append(newCarousel);

      // Initialize the new carousel
      newCarousel.carousel();
    });
  });
</script>

</html>