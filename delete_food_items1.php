<?php
include('session_m.php');

if (!isset($login_session)) {
    header('Location: managerlogin.php');
}

$cheks = implode("','", $_POST['checkbox']);
$sql = "DELETE FROM FOOD WHERE F_ID IN ('$cheks')";

if (mysqli_query($conn, $sql)) {
    header('Location: delete_food_items.php');
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
