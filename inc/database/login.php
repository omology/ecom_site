<?php
// connect db :  
include("conn.php");
    // start checkin data : 
    if (isset($_POST['login'])) {
        // Get email and password from the form
        $user_email = $_POST['email'];
        $user_password = $_POST['user_password'];
    
        // Start the login process
        $query = "SELECT user_email, user_password FROM user WHERE user_email = '$user_email' LIMIT 1";
        $result = mysqli_query($conn, $query);
    
        // Check if the query returned a result
        if (mysqli_num_rows($result) > 0) {
            $user = mysqli_fetch_assoc($result);
    
            // Verify the password
            if (password_verify($user_password, password_hash($user['user_password'],PASSWORD_DEFAULT))) {
                // Start session and redirect to shop.php
                session_start();
                $_SESSION['user_email'] = $user_email;
                header("Location: shop.php");
                exit(); // Make sure to exit after header redirect
            } else {
                // Password doesn't match
                echo "<script>alert('Password or email is incorrect');</script>";
            }
        } else {
            // Email doesn't exist in the database
            echo "<script>alert('Password or email is incorrect');</script>";
        }
    }

?>