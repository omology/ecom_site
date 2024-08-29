<?php include("style.php");
  if(isset($_POST['logout'])){
  // Unset all session variables
  $_SESSION = array();
  // Destroy the session
  session_destroy();
  // Redirect to login page or home page
  header("Location:login.php");
  exit(); // Always use exit after a header redirect
  
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dropdown Menu with Tailwind CSS</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.0/dist/tailwind.min.css" rel="stylesheet">
  <style>
    /* Ensure dropdown is hidden by default */
    .dropdown:hover .dropdown-menu {
      display: block;
    }
  </style>
</head>
<body>
<nav class="bg-gray-900 ">
  <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <div class="relative flex h-16 items-center justify-between">
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
        <!-- Mobile menu button -->
        <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
          <span class="absolute -inset-0.5"></span>
          <span class="sr-only">Open main menu</span>
          <!-- Icon when menu is closed -->
          <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
          <!-- Icon when menu is open -->
          <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
        <div class="flex flex-shrink-0 items-center">
          <img class="h-8 w-auto" src="https://img.freepik.com/free-vector/colorful-letter-n-icon-logo-design_474888-3534.jpg?t=st=1724881350~exp=1724884950~hmac=842d7a4265985fd25e01895ee79a91e842ac58c0cad0fa563458f9b20decc503&w=740" alt="Your Company">
        </div>
        <div class="hidden sm:ml-6 sm:block">
          <div class="flex space-x-4">
            <!-- Static Link -->
             <?php echo '
            <a href="../site/home.php" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white underline decoration-2 decoration-sky-600 hover:decoration-blue-400" aria-current="page">Home</a>'; ?>
            
            <!-- Dropdown -->
            <div class="relative inline-block text-left dropdown">
              <button class="text-zinc-200 font-medium rounded-lg text-sm px-3 py-2.5 text-center inline-flex items-center">
               <?php echo '<a href="../site/shop.php"> Shop </a>' ?>
                <svg class="w-2.5 h-2.5 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                </svg>
              </button>

              <!-- Dropdown menu -->
              <div class="dropdown-menu absolute right-1 mt-0.1 w-44 bg-white divide-y divide-gray-100 rounded-lg shadow-lg hidden">
                <ul class="py-3 text-sm text-gray-600" aria-labelledby="dropdownHoverButton">
                  <li>
                    <a href="#laptop" class="block px-4 py-2 hover:bg-gray-100">laptop</a>
                  </li>
                  <li>
                    <a href="#clavier" class="block px-4 py-2 hover:bg-gray-100">clavier</a>
                  </li>
                  <li>
                    <a href="#mouses" class="block px-4 py-2 hover:bg-gray-100">mouses</a>
                  </li>
                  <li>
                    <a href="#casque" class="block px-4 py-2 hover:bg-gray-100">casque</a>
                  </li>
                </ul>
              </div>
            </div>
            
            <!-- Static Links -->
            <?php echo '<a href="../site/about.php" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">About</a>';?>
            <?php echo ' <a href="../site/contact.php" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Contact</a>' ; ?>
            <?php echo ' <a href="../site/admin_panel.php" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">admin panel</a>' ; ?>

          </div>
        </div>
      </div>

      <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
        <!-- Logout  Section -->
        <div class="relative ml-3">
          <div>
            <form method="post">
              <button type="submit" name="logout" class="text-inherit text-zinc-100 bg-sky-700 lowercase hover:bg-sky-500/75 rounded-md p-3 mt-auto">Log out</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Mobile menu -->
  <div class="sm:hidden" id="mobile-menu">
    <div class="space-y-1 px-2 pb-3 pt-2">
      <?php echo '<a href="home.php" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white" aria-current="page">Home</a>';?>
      <?php echo '<a href="../site/shop.php" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Shop</a>';?>
      <?php echo '<a href="../site/about.php" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">About</a>';?>
      <?php echo '<a href="../site/contact.php" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Contact</a>';?>
      <?php echo '<a href="../site/admin_panel.php" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Admin panel</a>';?>
    </div>
  </div>
</nav>

</body>
</html>
