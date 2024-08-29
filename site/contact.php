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
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php  include("../inc/comp/style.php");?>
 <!-- including icons : -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
    <!--  include the nav  : -->
    <?php include("../inc/comp/nav_check.php")?>
    <!-- the cotact us form  -->
    <section class="bg-white py-16">
  <div class="container mx-auto px-4">
    <div class="text-center mb-12">
      <h2 class="text-3xl font-extrabold text-gray-800">Contact Us</h2>
      <p class="mt-4 text-gray-600">We’d love to hear from you! Reach out to us with any questions or feedback.</p>
    </div>
    
    <div class="flex flex-col md:flex-row md:space-x-8">
      <!-- Contact Information -->
      <div class="md:w-1/2">
        <h3 class="text-2xl font-semibold text-gray-800">Get in Touch</h3>
        <p class="mt-4 text-gray-600">
          Have any questions? Feel free to contact us via email, phone, or our social media channels. We’re here to help!
        </p>
        <div class="mt-8 space-y-4">
          <div class="flex items-center">
            <i class="fas fa-envelope text-gray-600 text-lg"></i>
            <span class="ml-3 text-gray-600">support@yourecommerce.com</span>
          </div>
          <div class="flex items-center">
            <i class="fas fa-phone-alt text-gray-600 text-lg"></i>
            <span class="ml-3 text-gray-600">+1 (234) 567-890</span>
          </div>
          <div class="flex items-center">
            <i class="fas fa-map-marker-alt text-gray-600 text-lg"></i>
            <span class="ml-3 text-gray-600">1234 Market Street, City, Country</span>
          </div>
        </div>
      </div>
      
      <!-- Contact Form -->
      <div class="md:w-1/2 mt-8 md:mt-0">
        <h3 class="text-2xl font-semibold text-gray-800">Send Us a Message</h3>
        <form class="mt-8 space-y-6">
          <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Your Name</label>
            <input type="text" id="name" name="name" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" required>
          </div>
          <div>
            <label for="email" class="block text-sm font-medium text-gray-700">Your Email</label>
            <input type="email" id="email" name="email" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" required>
          </div>
          <div>
            <label for="message" class="block text-sm font-medium text-gray-700">Your Message</label>
            <textarea id="message" name="message" rows="4" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" required></textarea>
          </div>
          <div>
            <button type="submit" class="w-full bg-sky-600 text-white px-4 py-2 rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">Send Message</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

 


<!--  include the footer section :  -->
<?php  include("../inc/comp/footer.php");?>
    
</body>
</html>