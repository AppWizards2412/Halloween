<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $adminUsername = "admin"; // admin username
    $adminPassword = "admin123"; // admin password

    $enteredUsername = $_POST["username"];
    $enteredPassword = $_POST["password"];

    if ($enteredUsername === $adminUsername && $enteredPassword === $adminPassword) {
        // Redirect to the admin page
        header("Location: admin/welcome.php");
        exit();
    } else {
        // Redirect to the user page
        header("Location: user/user_welcome.php");
        exit();
    }
}
?>
