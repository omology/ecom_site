<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("../inc/comp/style.php"); ?>
    <?php include("../inc/comp/header.php"); ?>
</head>
<body class="bg-slate-200">
    <!--  background image  :  -->
    <section class="bg-cover bg-center bg-no-repeat	 h-96" style=" background-size:'cover'; background-image: url('https://img.freepik.com/free-photo/supermarket-carts-near-laptop-photo-frame_23-2147961930.jpg?t=st=1724590345~exp=1724593945~hmac=2f0bf26e4d65d34683a3378b5d14d6c7bc0f2df7009b05fed0d2a64d05b29828&w=740');">
        <div class="flex items-center justify-center h-full bg-black bg-opacity-70 shadow-lg shadow-cyan-800/30">
            <div class="text-center text-white">
                <h1 class="text-4xl font-bold">Welcome to E-Shop</h1>
                <p class="mt-4 text-lg">Discover our exclusive collection now!</p>
                <?php echo '<a href="shop.php" class="mt-6 inline-block bg-sky-700 text-white py-2 px-4 rounded hover:bg-blue-700">Shop Now</a>'; ?>
            </div>
        </div>
    </section>
    <!-- Product Showcase -->
    <section class="container mx-auto px-6 py-10 ">
        <h2 class=" font-bold text-gray-800 text-4xl">best seller</h2>
        <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 my-2.5">
            <!-- Product 1 -->
             <!--  product section cadre :  -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden shadow-lg shadow-blue-500/30">
                <img src="https://img.freepik.com/free-photo/laptop-device-with-minimalist-monochrome-background_23-2150763336.jpg?t=st=1724591272~exp=1724594872~hmac=f33a92065069fa071c1fb73402d3aecb2bf2ad2121035c0b2860c973a716a9d9&w=740" alt="Product Image" class="w-full h-56 object-cover transform transition-transform duration-500 hover:scale-110">
                <div class="p-4">
                    <h3 class="text-gray-900 font-semibold text-lg">laptop</h3>
                    <p class="mt-2 text-gray-600">$499.99</p>
                    <a href="#" class="mt-4 inline-block bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700 shadow-lg shadow-sky-500/20 transform transition-transform duration-600 hover:scale-110">Add to Cart</a>
                </div>
            </div>
            <!-- Repeat for other products -->
            <!-- Product 2 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden shadow-lg shadow-blue-500/40">
                <img src="https://img.freepik.com/free-photo/levitating-music-headphones-display_23-2149817601.jpg?t=st=1724592203~exp=1724595803~hmac=7e77ee889ac28f45834640f51fe8fc7c567adeef091e0fdb16fc7cb9f0b479ad&w=740" alt="Product Image" class="w-full h-56 object-cover transform transition-transform duration-500 hover:scale-110">
                <div class="p-4">
                    <h3 class="text-gray-900 font-semibold text-lg">casque </h3>
                    <?php include("../inc/comp/cart_shop.php"); ?>
                    <a href="#" class="mt-4 inline-block bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700 shadow-lg shadow-sky-500/20 transform transition-transform duration-600 hover:scale-110">Add to Cart</a>
                </div>
            </div>
            <!-- Add more products as needed -->
             <!-- Product 3 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden shadow-lg shadow-blue-500/40">
                <img src="https://img.freepik.com/free-photo/white-keyboard-plant_23-2148708005.jpg?t=st=1724591712~exp=1724595312~hmac=aade2c799a31dab95f243d44d38e58fbef4439c0267f15c329221d1f49d9977e&w=740" class="w-full h-56 object-cover transform transition-transform duration-500 hover:scale-110">
                <div class="p-4">
                    <h3 class="text-gray-900 font-semibold text-lg">clavier</h3>
                    <p class="mt-1 text-gray-700"> description</p>
                    <p class="mt-2 text-gray-600">$69.99</p>
                    <a href="#" class="mt-4 inline-block bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700 shadow-lg shadow-sky-500/20 transform transition-transform duration-600 hover:scale-110">Add to Cart</a>
                </div>
            </div>
            <!-- Add more products as needed -->
                          <!-- Product 4 : -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden shadow-lg shadow-blue-500/40">
                <img src="https://img.freepik.com/free-photo/red-computer-mouse_1260-13.jpg?t=st=1724592073~exp=1724595673~hmac=05433e44bc12edebac93fdcf6d474f8e0058259758ffdf4243b6d0241367e668&w=740" class="w-full h-56 object-cover transform transition-transform duration-500 hover:scale-110">
                <div class="p-4">
                    <h3 class="text-gray-900 font-semibold text-lg">computer mouse</h3>
                    <p class="mt-2 text-gray-600">$29.99</p>
                    <a href="#" class="mt-4 inline-block bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700 shadow-lg shadow-sky-500/20 transform transition-transform duration-600 hover:scale-110">Add to Cart</a>
                </div>
            </div>
    </section>
    <?php include("../inc/comp/footer.php");?>
</body>
</html>