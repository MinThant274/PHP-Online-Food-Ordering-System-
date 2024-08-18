<?php
include('session_m.php');

// Check if the user is logged in
if (!isset($login_session)) {
    header('Location: managerlogin.php');
    exit; // Terminate the script
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all required fields are filled
    if (empty($_POST['name']) || empty($_POST['price']) || empty($_POST['description']) || empty($_FILES['food_image']['name'])) {
        echo "Please fill in all required fields.";
    } else {
        // Sanitize and escape user inputs to prevent SQL injection
        $name = $conn->real_escape_string($_POST['name']);
        $price = $conn->real_escape_string($_POST['price']);
        $description = $conn->real_escape_string($_POST['description']);
        
        // Get the restaurant ID
        $user_check = $_SESSION['login_user1'];
        $R_IDsql = "SELECT RESTAURANTS.R_ID FROM RESTAURANTS, MANAGER WHERE RESTAURANTS.M_ID='$user_check'";
        $R_IDresult = mysqli_query($conn, $R_IDsql);
        $R_IDrs = mysqli_fetch_array($R_IDresult, MYSQLI_BOTH);
        $R_ID = $R_IDrs['R_ID'];

        // Handle image upload
        $target_dir = "images/"; // The directory where you want to store the uploaded images
        $target_file = $target_dir . basename($_FILES['food_image']['name']);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if the uploaded file is an image
        $check = getimagesize($_FILES['food_image']['tmp_name']);
        if ($check !== false) {
            // Allow only specific image file types (you can customize this)
            if ($imageFileType == "jpg" || $imageFileType == "jpeg" || $imageFileType == "png" || $imageFileType == "gif") {
                // Move the uploaded file to the target directory
                if (move_uploaded_file($_FILES['food_image']['tmp_name'], $target_file)) {
                    // Prepare and execute the SQL query
                    $images_path = $target_file; // Save the path to the image in the database
                    $query = "INSERT INTO FOOD (name, price, description, R_ID, images_path) VALUES ('$name', '$price', '$description', '$R_ID', '$images_path')";
                    if ($conn->query($query) === TRUE) {
                        // Redirect to the success page
                        header('Location: add_food_items.php');
                        exit;
                    } else {
                        // Handle database insertion error
                        echo "Error: " . $query . "<br>" . $conn->error;
                    }
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            } else {
                echo "Sorry, only JPG, JPEG, PNG, and GIF files are allowed.";
            }
        } else {
            echo "File is not an image.";
        }
    }
} else {
    // Handle non-POST requests (e.g., direct access to this script)
    echo "Invalid request.";
}

// Close the database connection
$conn->close();
?>
