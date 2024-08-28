<?php
// connect with the db :
include("conn.php");
//connect fields :
if(isset($_POST['sign_up'])){

    // get data : 
    $user_fullname = $_POST['full_name'];
    $user_email = $_POST['user_email'];
    $user_password =$_POST['user_password'];
    $user_adress =$_POST['user_address'];
    $user_city  =$_POST['user_city'];
    $user_country = $_POST['user_country'];
    $user_state =$_POST['user_state'];
    $user_zipCode  =$_POST['user_zipCode'];
    // hash the password for security reason : 
    $hashed_password = password_hash($user_password,PASSWORD_DEFAULT);
    // the query of  fetch data : 
    $query = "INSERT INTO user(user_fullname,user_email,user_password,user_adress,user_city,user_country,user_state,user_zipCode)
              VALUES(
              '$user_fullname',
              '$user_email',
              '$hashed_password',
              '$user_adress',
              '$user_city',
              '$user_country',
              '$user_state',
              '$user_zipCode'
              )";
    mysqli_query($conn,$query);
  
  }

// inserstion query :
?>