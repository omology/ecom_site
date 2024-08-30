<?php
    session_start();
    // connect db :  
    include("../inc/database/conn.php");

    if (isset($_POST['login'])) {
      // Get email and password from the form
      $user_email = $_POST['email'];
      $user_password = $_POST['password'];  
      // Start the login process
      $query = "SELECT user_email, user_password FROM user WHERE user_email = '$user_email' LIMIT 1";
      $result = mysqli_query($conn, $query);
  
      // Check if the query returned a result
      if (mysqli_num_rows($result) > 0) {
          $user = mysqli_fetch_assoc($result);
  
          // Verify the password against the hashed password stored in the database
          if (password_verify($user_password, $user['user_password'])) {
              // Password is correct, start session and redirect to shop.php
              
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
<!DOCTYPE html>
<html lang="en">
<head>
<?php include("../inc/comp/style.php");?>
</head>
<body>
<?php include("../inc/comp/non_log_nav.php"); ?>
<!-- start form  -->

<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <img class="mx-auto h-20 w-auto" src="https://img.freepik.com/free-vector/colorful-letter-n-icon-logo-design_474888-3534.jpg?t=st=1724881350~exp=1724884950~hmac=842d7a4265985fd25e01895ee79a91e842ac58c0cad0fa563458f9b20decc503&w=740" alt="Your Company">
    <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Sign in to your account</h2>
  </div>

  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <form class="space-y-6" action="#" method="POST">
      <div>
        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
        <div class="mt-2">
          <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>

      <div>
        <div class="flex items-center justify-between">
          <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
          <div class="text-sm">
            <a href="#" class="font-semibold text-sky-600 hover:text-blue-600">Forgot password?</a>
          </div>
        </div>
        <div class="mt-2">
          <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>

      <div>
        <button type="submit" name="login" class="flex w-full justify-center rounded-md bg-sky-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">login</button>
      </div>
    </form>
    

    <p class="mt-10 text-center text-sm text-gray-500">
      Not a member?
      <a <?php echo 'href="./signup.php"';?> class="font-semibold leading-6 text-sky-600 hover:text-blue-500">sign up here</a>
    </p>
  </div>
</div>

</body>
</html>