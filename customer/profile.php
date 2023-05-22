<?php include('partials/menu.php'); ?>

<?php
include "../dbconn.php";
// Start the session (if not already started)
session_start();

// Check if the user is logged in and the user ID is set in the session
if (isset($_SESSION['userId'])) {
    // User is logged in, retrieve the user ID
    $userId = $_SESSION['userId'];

    // Query the database to fetch the user's profile using the user ID
    $sql = "SELECT * FROM users WHERE userId = $userId";
    $result = mysqli_query($conn, $sql);

    // Check if a user record was found
    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);

        // Display the user's profile information
        echo "Name: " . $row['name'] . "<br>";
        echo "Email: " . $row['email'] . "<br>";
        echo "Contact Number: " . $row['contactNo'] . "<br>";
        // ... Display other profile information as needed
    } else {
        echo "User not found.";
    }
} else {
    // User is not logged in, handle the case accordingly (redirect to login page, show an error message, etc.)
    // ...
}
?>