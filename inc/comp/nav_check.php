<?php 
include("../inc/comp/style.php");

    if(!isset($_SESSION['user_email'])){
        // include nav if non loged
         include("../inc/comp/non_log_nav.php");

    } else{
        // connect db : 
        include("../inc/database/conn.php");
        // get email :
        $user_email = $_SESSION['user_email'];
        // check the tole linked with email : 
        $query = "SELECT role FROM user WHERE user_email = '$user_email' LIMIT 1";
        $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
            // Get the role from the database
            $user = mysqli_fetch_assoc($result);

            //Check if the user is not an admin
            if ($user['role'] == 'admin') {
                // include the aadmin nav : 
                include("../inc/comp/admin_nav.php");
            } else {
                include("../inc/comp/shop_nav.php");
            }
    }
    }

?>