<?php
include('session_m.php');

if (!isset($login_session)) {
    header('Location: managerlogin.php');
    exit; // Terminate the script
}

// Check if the user already has a restaurant
$user_check = $_SESSION['login_user1'];
$checkQuery = "SELECT * FROM RESTAURANTS WHERE M_ID = '$user_check'";
$result = $conn->query($checkQuery);

if ($result->num_rows > 0) {
    // The user already has a restaurant, so display the message
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Restaurant Exists</title>
    </head>
    <link rel="stylesheet" type="text/css" href="css/myrestaurant.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <body>
        <div class="container content-fade" style="margin-top: 5%;">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="card border-warning mb-3">
                        <div class="card-header bg-warning text-white">
                            <h3>Caution</h3>
                        </div>
                        <div class="card-body text-warning" style="padding-top: 20px;">
                            <h5 class="card-text" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);">
                                Your already have one restaurant.</h5>
                            <p>Go back to your <a href="view_food_items.php">Restaurant</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    <?php
    exit; // Exit the script
}

// If the user doesn't have a restaurant, allow them to add one
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all required fields are filled
    if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['contact']) || empty($_POST['address'])) {
        echo "Please fill in all required fields.";
    } else {
        // Sanitize and escape user inputs to prevent SQL injection
        $name = $conn->real_escape_string($_POST['name']);
        $email = $conn->real_escape_string($_POST['email']);
        $contact = $conn->real_escape_string($_POST['contact']);
        $address = $conn->real_escape_string($_POST['address']);

        // Insert the new restaurant record into the database
        $query = "INSERT INTO RESTAURANTS (name, email, contact, address, M_ID) 
        VALUES ('$name', '$email', '$contact', '$address', '$user_check')";
        $success = $conn->query($query);

        if (!$success) {
            // Handle the error here
            echo "Error: " . $query . "<br>" . $conn->error;
        } else {
            header('Location: myrestaurant.php');
        }
    }
}

$conn->close();
    ?>
        <footer class="footer navbar-inverse navbar-fixed-bottom" style="margin-top: 20px;">
        <div class="container text-center">
            <p style="color:white;"></p>
            <p style="color: white;">&copy; 2023 FlavorWave. All rights reserved.</p>
        </div>
    </footer>
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