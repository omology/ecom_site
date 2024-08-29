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
<?php include("../inc/comp/style.php"); ?>
</head>
<body class="bg-slate-100">
<?php include("../inc/comp/shop_nav.php");?>
        <!--  background image  :  -->
        <section class="bg-cover bg-no-repeat bg-center h-96" style=" background-size:'cover'; background-image: url('https://img.freepik.com/free-photo/laptop-digital-tablet-with-white-blank-screen-display-office-desk_23-2148052719.jpg?t=st=1724842493~exp=1724846093~hmac=a6a25b235f9a20d4c14ed57ca79da3bd725d7c3ce5da4ff705fbc40763bee949&w=740');">
        <div class="flex items-center justify-center h-full bg-black bg-opacity-70 shadow-lg shadow-cyan-800/30">
            <div class="text-center text-white">
                <h1 class="text-4xl font-bold">Welcome to Shop store</h1>
                <p class="mt-4 text-lg">Discover our exclusive collection now!</p>
                <?php echo '<a href="shop.php" class="mt-6 inline-block bg-sky-700 text-white py-2 px-4 rounded hover:bg-blue-700">lets start</a>'; ?>
            </div>
        </div>
    </section>
 <!-- laptop section :  -->
 <section class="container mx-auto px-6 py-10">
    <!-- category of products  : -->
        <h2 class=" font-bold text-gray-800 text-4xl text-center mx-3">laptop  </h2>
        <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 my-2.5">
            <!-- Product 1 -->
             <!--  product section cadre :  -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden shadow-lg shadow-blue-500/30 my-6">
                <img src="https://img.freepik.com/free-photo/laptop-device-with-minimalist-monochrome-background_23-2150763336.jpg?t=st=1724591272~exp=1724594872~hmac=f33a92065069fa071c1fb73402d3aecb2bf2ad2121035c0b2860c973a716a9d9&w=740" alt="Product Image" class="w-full h-56 object-cover transform transition-transform duration-500 hover:scale-110">
                <div class="p-4">
                    <h3 class="text-gray-900 font-semibold text-lg">laptop</h3>
                    <?php include("../inc/comp/cart_shop.php");?>
                    <a href="#" class="mt-4 inline-block bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700 shadow-lg shadow-sky-500/20 transform transition-transform duration-600 hover:scale-110">Add to Cart</a>
                </div>
            </div>
           <!-- repeat for more products  -->
                        <!-- Product 1 -->
             <!--  product section cadre :  -->
             <div class="bg-white shadow-lg rounded-lg overflow-hidden shadow-lg shadow-blue-500/30 my-6">
                <img src="https://img.freepik.com/free-photo/laptop-device-with-minimalist-monochrome-background_23-2150763336.jpg?t=st=1724591272~exp=1724594872~hmac=f33a92065069fa071c1fb73402d3aecb2bf2ad2121035c0b2860c973a716a9d9&w=740" alt="Product Image" class="w-full h-56 object-cover transform transition-transform duration-500 hover:scale-110">
                <div class="p-4">
                    <h3 class="text-gray-900 font-semibold text-lg">laptop</h3>
                    <?php include("../inc/comp/cart_shop.php");?>
                    <a href="#" class="mt-4 inline-block bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700 shadow-lg shadow-sky-500/20 transform transition-transform duration-600 hover:scale-110">Add to Cart</a>
                </div>
            </div>
           <!-- repeat for more products  -->
                        <!-- Product 1 -->
             <!--  product section cadre :  -->
             <div class="bg-white shadow-lg rounded-lg overflow-hidden shadow-lg shadow-blue-500/30 my-6">
                <img src="https://img.freepik.com/free-photo/laptop-device-with-minimalist-monochrome-background_23-2150763336.jpg?t=st=1724591272~exp=1724594872~hmac=f33a92065069fa071c1fb73402d3aecb2bf2ad2121035c0b2860c973a716a9d9&w=740" alt="Product Image" class="w-full h-56 object-cover transform transition-transform duration-500 hover:scale-110">
                <div class="p-4">
                    <h3 class="text-gray-900 font-semibold text-lg">laptop</h3>
                    
                     <!-- description section :  -->
                     <p class="mb-3 text-gray-500 dark:text-gray-400">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit </p>
                     <!-- ./description section  -->
                     <p class="mt-2 text-gray-600">$59.99</p>
                    <!--  review section :  -->
                    <div class="flex items-center">
                        <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                        <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                        <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                        <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                        <svg class="w-4 h-4 ms-1 text-gray-300 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                    </div>
                    <!-- ./review secton : -->

                    <a href="#" class="mt-4 inline-block bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700 shadow-lg shadow-sky-500/20 transform transition-transform duration-600 hover:scale-110">Add to Cart</a>
                </div>
            </div>
           <!-- repeat for more products  -->
                        <!-- Product 1 -->
             <!--  product section cadre :  -->
             <div class="bg-white shadow-lg rounded-lg overflow-hidden shadow-lg shadow-blue-500/30 my-6">
                <img src="https://img.freepik.com/free-photo/laptop-device-with-minimalist-monochrome-background_23-2150763336.jpg?t=st=1724591272~exp=1724594872~hmac=f33a92065069fa071c1fb73402d3aecb2bf2ad2121035c0b2860c973a716a9d9&w=740" alt="Product Image" class="w-full h-56 object-cover transform transition-transform duration-500 hover:scale-110">
                <div class="p-4">
                    <h3 class="text-gray-900 font-semibold text-lg">laptop</h3>
                    <?php include("../inc/comp/cart_shop.php");?>
                    <a href="#" class="mt-4 inline-block bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700 shadow-lg shadow-sky-500/20 transform transition-transform duration-600 hover:scale-110">Add to Cart</a>
                </div>
            </div>
           <!-- repeat for more products  -->
        </div>
 </section>
  <!-- ./laptop section  -->

   <!-- clavier section :  -->
   <section class="container mx-auto px-6 py-2">
    <!-- category of products  : -->
        <h2 class="font-bold text-gray-800 text-4xl text-center pb-8">keyboards </h2>
        <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 my-2">
  <!-- Product 2 -->
  <div class="bg-white shadow-lg rounded-lg overflow-hidden shadow-lg shadow-blue-500/40">
                <img src="https://img.freepik.com/free-photo/white-keyboard-plant_23-2148708005.jpg?t=st=1724591712~exp=1724595312~hmac=aade2c799a31dab95f243d44d38e58fbef4439c0267f15c329221d1f49d9977e&w=740" class="w-full h-56 object-cover transform transition-transform duration-500 hover:scale-110">
                <div class="p-4">
                    <h3 class="text-gray-900 font-semibold text-lg">clavier</h3>
                    <?php include("../inc/comp/cart_shop.php");?>
                    <a href="#" class="mt-4 inline-block bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700 shadow-lg shadow-sky-500/20 transform transition-transform duration-600 hover:scale-110">Add to Cart</a>
                </div>
            </div>
           <!-- repeat for more products  -->
              <!-- Product 2 -->
  <div class="bg-white shadow-lg rounded-lg overflow-hidden shadow-lg shadow-blue-500/40">
                <img src="https://img.freepik.com/free-photo/white-keyboard-plant_23-2148708005.jpg?t=st=1724591712~exp=1724595312~hmac=aade2c799a31dab95f243d44d38e58fbef4439c0267f15c329221d1f49d9977e&w=740" class="w-full h-56 object-cover transform transition-transform duration-500 hover:scale-110">
                <div class="p-4">
                    <h3 class="text-gray-900 font-semibold text-lg">clavier</h3>
                    <?php include("../inc/comp/cart_shop.php");?>
                    <a href="#" class="mt-4 inline-block bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700 shadow-lg shadow-sky-500/20 transform transition-transform duration-600 hover:scale-110">Add to Cart</a>
                </div>
            </div>
           <!-- repeat for more products  -->
              <!-- Product 2 -->
  <div class="bg-white shadow-lg rounded-lg overflow-hidden shadow-lg shadow-blue-500/40">
                <img src="https://img.freepik.com/free-photo/white-keyboard-plant_23-2148708005.jpg?t=st=1724591712~exp=1724595312~hmac=aade2c799a31dab95f243d44d38e58fbef4439c0267f15c329221d1f49d9977e&w=740" class="w-full h-56 object-cover transform transition-transform duration-500 hover:scale-110">
                <div class="p-4">
                    <h3 class="text-gray-900 font-semibold text-lg">clavier</h3>
                    <?php include("../inc/comp/cart_shop.php");?>
                    <a href="#" class="mt-4 inline-block bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700 shadow-lg shadow-sky-500/20 transform transition-transform duration-600 hover:scale-110">Add to Cart</a>
                </div>
            </div>
           <!-- repeat for more products  -->
              <!-- Product 2 -->
  <div class="bg-white shadow-lg rounded-lg overflow-hidden shadow-lg shadow-blue-500/40">
                <img src="https://img.freepik.com/free-photo/white-keyboard-plant_23-2148708005.jpg?t=st=1724591712~exp=1724595312~hmac=aade2c799a31dab95f243d44d38e58fbef4439c0267f15c329221d1f49d9977e&w=740" class="w-full h-56 object-cover transform transition-transform duration-500 hover:scale-110">
                <div class="p-4">
                    <h3 class="text-gray-900 font-semibold text-lg">clavier</h3>
                    <?php include("../inc/comp/cart_shop.php");?>
                    <a href="#" class="mt-4 inline-block bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700 shadow-lg shadow-sky-500/20 transform transition-transform duration-600 hover:scale-110">Add to Cart</a>
                </div>
            </div>
           <!-- repeat for more products  -->
        </div>
 </section>

    <!-- ./clavier section -->




    <!-- mouses section  -->
    <section class="container mx-auto px-6 py-10 ">
    <!-- category of products  : -->
        <h2 class=" font-bold text-gray-800 text-4xl text-center pb-8"> mouses  </h2>
        <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 my-2.5">
              <!-- Product 4 : -->
              <div class="bg-white shadow-lg rounded-lg overflow-hidden shadow-lg shadow-blue-500/40">
                <img src="https://img.freepik.com/free-photo/red-computer-mouse_1260-13.jpg?t=st=1724592073~exp=1724595673~hmac=05433e44bc12edebac93fdcf6d474f8e0058259758ffdf4243b6d0241367e668&w=740" class="w-full h-56 object-cover transform transition-transform duration-500 hover:scale-110">
                <div class="p-4">
                    <h3 class="text-gray-900 font-semibold text-lg">computer mouse</h3>
                     <?php include("../inc/comp/cart_shop.php");?>
                    <a href="#" class="mt-4 inline-block bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700 shadow-lg shadow-sky-500/20 transform transition-transform duration-600 hover:scale-110">Add to Cart</a>
                </div>
            </div>
           <!-- repeat for more products  -->
                          <!-- Product 4 : -->
                          <div class="bg-white shadow-lg rounded-lg overflow-hidden shadow-lg shadow-blue-500/40">
                <img src="https://img.freepik.com/free-photo/red-computer-mouse_1260-13.jpg?t=st=1724592073~exp=1724595673~hmac=05433e44bc12edebac93fdcf6d474f8e0058259758ffdf4243b6d0241367e668&w=740" class="w-full h-56 object-cover transform transition-transform duration-500 hover:scale-110">
                <div class="p-4">
                    <h3 class="text-gray-900 font-semibold text-lg">computer mouse</h3>
                    <?php include("../inc/comp/cart_shop.php");?>
                    <a href="#" class="mt-4 inline-block bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700 shadow-lg shadow-sky-500/20 transform transition-transform duration-600 hover:scale-110">Add to Cart</a>
                </div>
            </div>
           <!-- repeat for more products  -->
                          <!-- Product 4 : -->
                          <div class="bg-white shadow-lg rounded-lg overflow-hidden shadow-lg shadow-blue-500/40">
                <img src="https://img.freepik.com/free-photo/red-computer-mouse_1260-13.jpg?t=st=1724592073~exp=1724595673~hmac=05433e44bc12edebac93fdcf6d474f8e0058259758ffdf4243b6d0241367e668&w=740" class="w-full h-56 object-cover transform transition-transform duration-500 hover:scale-110">
                <div class="p-4">
                    <h3 class="text-gray-900 font-semibold text-lg">computer mouse</h3>
                    <?php include("../inc/comp/cart_shop.php");?>
                    <a href="#" class="mt-4 inline-block bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700 shadow-lg shadow-sky-500/20 transform transition-transform duration-600 hover:scale-110">Add to Cart</a>
                </div>
            </div>
           <!-- repeat for more products  -->
                          <!-- Product 4 : -->
                          <div class="bg-white shadow-lg rounded-lg overflow-hidden shadow-lg shadow-blue-500/40">
                <img src="https://img.freepik.com/free-photo/red-computer-mouse_1260-13.jpg?t=st=1724592073~exp=1724595673~hmac=05433e44bc12edebac93fdcf6d474f8e0058259758ffdf4243b6d0241367e668&w=740" class="w-full h-56 object-cover transform transition-transform duration-500 hover:scale-110">
                <div class="p-4">
                    <h3 class="text-gray-900 font-semibold text-lg">computer mouse</h3>
                    <?php include("../inc/comp/cart_shop.php");?>
                    <a href="#" class="mt-4 inline-block bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700 shadow-lg shadow-sky-500/20 transform transition-transform duration-600 hover:scale-110">Add to Cart</a>
                </div>
            </div>
           <!-- repeat for more products  -->

        </div>
 </section>
    <!-- ./mouses section -->




    <!-- casques section  :  -->
    <section class="container mx-auto px-6 py-10 ">
    <!-- category of products  : -->
        <h2 class=" font-bold text-gray-800 text-4xl text-center pb-8 ">casque </h2>
        <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 my-2.5">
  <!-- Product 4 -->
  <div class="bg-white shadow-lg rounded-lg overflow-hidden shadow-lg shadow-blue-500/40">
                <img src="https://img.freepik.com/free-photo/levitating-music-headphones-display_23-2149817601.jpg?t=st=1724592203~exp=1724595803~hmac=7e77ee889ac28f45834640f51fe8fc7c567adeef091e0fdb16fc7cb9f0b479ad&w=740" alt="Product Image" class="w-full h-56 object-cover transform transition-transform duration-500 hover:scale-110">
                <div class="p-4">
                    <h3 class="text-gray-900 font-semibold text-lg">casque </h3>

                     <!-- description section :  -->
                                        <p class="mb-3 text-gray-500 dark:text-gray-400">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit </p>
                     <!-- ./description section  -->
                     <p class="mt-2 text-gray-600">$59.99</p>
                    <!--  review section :  -->
                    <div class="flex items-center">
                        <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                        <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                        <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                        <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                        <svg class="w-4 h-4 ms-1 text-gray-300 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                    </div>
                    <!-- ./review secton : -->

                    <a href="#" class="mt-4 inline-block bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700 shadow-lg shadow-sky-500/20 transform transition-transform duration-600 hover:scale-110">Add to Cart</a>
                </div>
            </div>
           <!-- repeat for more products  -->
              <!-- Product 4 -->
  <div class="bg-white shadow-lg rounded-lg overflow-hidden shadow-lg shadow-blue-500/40">
                <img src="https://img.freepik.com/free-photo/levitating-music-headphones-display_23-2149817601.jpg?t=st=1724592203~exp=1724595803~hmac=7e77ee889ac28f45834640f51fe8fc7c567adeef091e0fdb16fc7cb9f0b479ad&w=740" alt="Product Image" class="w-full h-56 object-cover transform transition-transform duration-500 hover:scale-110">
                <div class="p-4">
                    <h3 class="text-gray-900 font-semibold text-lg">casque </h3>
                    
                     <!-- description section :  -->
                     <p class="mb-3 text-gray-500 dark:text-gray-400">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit </p>
                     <!-- ./description section  -->
                     <p class="mt-2 text-gray-600">$59.99</p>
                    <!--  review section :  -->
                    <div class="flex items-center">
                        <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                        <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                        <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                        <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                        <svg class="w-4 h-4 ms-1 text-gray-300 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                    </div>
                    <!-- ./review secton : -->

                    <a href="#" class="mt-4 inline-block bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700 shadow-lg shadow-sky-500/20 transform transition-transform duration-600 hover:scale-110">Add to Cart</a>
                </div>
            </div>
           <!-- repeat for more products  -->
              <!-- Product 4 -->
  <div class="bg-white shadow-lg rounded-lg overflow-hidden shadow-lg shadow-blue-500/40">
                <img src="https://img.freepik.com/free-photo/levitating-music-headphones-display_23-2149817601.jpg?t=st=1724592203~exp=1724595803~hmac=7e77ee889ac28f45834640f51fe8fc7c567adeef091e0fdb16fc7cb9f0b479ad&w=740" alt="Product Image" class="w-full h-56 object-cover transform transition-transform duration-500 hover:scale-110">
                <div class="p-4">
                    <h3 class="text-gray-900 font-semibold text-lg">casque </h3>
                    <?php include("../inc/comp/cart_shop.php");?>
                    <a href="#" class="mt-4 inline-block bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700 shadow-lg shadow-sky-500/20 transform transition-transform duration-600 hover:scale-110">Add to Cart</a>
                </div>
            </div>
           <!-- repeat for more products  -->
              <!-- Product 4 -->
  <div class="bg-white shadow-lg rounded-lg overflow-hidden shadow-lg shadow-blue-500/40">
                <img src="https://img.freepik.com/free-photo/levitating-music-headphones-display_23-2149817601.jpg?t=st=1724592203~exp=1724595803~hmac=7e77ee889ac28f45834640f51fe8fc7c567adeef091e0fdb16fc7cb9f0b479ad&w=740" alt="Product Image" class="w-full h-56 object-cover transform transition-transform duration-500 hover:scale-110">
                <div class="p-4">
                    <h3 class="text-gray-900 font-semibold text-lg">casque </h3>
                    <?php include("../inc/comp/cart_shop.php");?>
                    <a href="#" class="mt-4 inline-block bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700 shadow-lg shadow-sky-500/20 transform transition-transform duration-600 hover:scale-110">Add to Cart</a>
                </div>
            </div>
           <!-- repeat for more products  -->
        </div>
 </section>
    <!-- ./casques section  -->


    <!-- footer section -->
     <?php include("../inc/comp/footer.php")?>
     <!-- ./footer section -->
</body>
</html>