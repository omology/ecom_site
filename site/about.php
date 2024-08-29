<?php
// protect from non loged users  :

// Start the session
session_start();
// Check if the user is logged in
if (!isset($_SESSION['user_email'])) {
    // If the session variable for the user is not set, redirect to the login page
    header("Location: login.php");
    exit(); // Always use exit after a header redirect
}

// If the user is logged in, the rest of the page content will be displayed
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <?php include("../inc/comp/style.php");?>
</head>
<body>
    <?php include("../inc/comp/shop_nav.php");?>
    <section class="bg-gray-100 py-16">
  <div class="container mx-auto px-4">
    <div class="text-center mb-12">
      <h2 class="text-3xl font-extrabold text-gray-800">About Us</h2>
      <p class="mt-4 text-gray-600">Your trusted destination for quality products and exceptional service.</p>
    </div>
    
    <div class="flex flex-col md:flex-row md:space-x-8">
      <div class="md:w-1/2">
        <img src="https://img.freepik.com/free-photo/group-people-working-out-business-plan-office_1303-15872.jpg?t=st=1724849043~exp=1724852643~hmac=485cddb1cd96d2644cde8b41ec7d74a35f9cec8146d76baae3731f613e0f19e2&w=740" alt="Our Story" class="w-full rounded-lg shadow-lg">
      </div>
      <div class="md:w-1/2 mt-8 md:mt-0">
        <h3 class="text-2xl font-semibold text-gray-800">Our Story</h3>
        <p class="mt-4 text-gray-600">
          Founded in 2020, our e-commerce store has been dedicated to providing customers with top-quality products from around the globe. We believe in delivering not just products, but an experience that makes shopping easy, enjoyable, and fulfilling.
        </p>
        <p class="mt-4 text-gray-600">
          Our journey began with a passion for finding unique, high-quality items that cater to every aspect of your life. From fashion to home goods, we’ve curated a collection that reflects our commitment to excellence and customer satisfaction.
        </p>
        <p class="mt-4 text-gray-600">
          We are proud to serve thousands of customers worldwide and continue to grow our offerings, bringing you the best of what's available in the market.
        </p>
      </div>
    </div>
    
    <div class="mt-12">
      <h3 class="text-2xl font-semibold text-gray-800 text-center">Our Mission</h3>
      <p class="mt-4 text-gray-600 text-center">
        Our mission is to create a seamless shopping experience by offering a diverse selection of high-quality products at competitive prices, supported by a commitment to customer service that exceeds expectations.
      </p>
    </div>
  </div>
</section>
<?php include("../inc/comp/footer.php")?>
    
</body>
</html>