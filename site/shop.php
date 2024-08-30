<?php
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
<?php include("../inc/comp/nav_check.php")?>
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
        <h2 class=" font-bold text-gray-800 text-4xl text-center mx-3">laptops</h2>
        <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 my-2.5">
            <!-- Product 1 -->
    <?php
        $query = "SELECT 
                    product_name,
                    product_type, 
                    product_price, 
                    product_desc, 
                    product_img 
                    FROM product
                    where product_type = 'laptop'";
        // check result of query  :
        $result = mysqli_query($conn, $query);

        // if product exist start fetching : 

            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                // Output the product details using your existing HTML structure
                echo '
                <div class="bg-white shadow-lg rounded-lg overflow-hidden shadow-lg shadow-blue-500/30 my-6">
                    <img src="' . $row['product_img'] . '" alt="' . $row['product_name'] . '" class="w-full h-56 object-cover transform transition-transform duration-500 hover:scale-110">
                    <div class="p-4">
                        <h3 class="text-gray-900 font-semibold text-lg">' . $row['product_name'] . '</h3>';
                echo '<p class="mb-3 text-gray-500 dark:text-gray-400">'.$row['product_desc']. '</p>';
                echo '<p class="mt-2 text-gray-600">$'.$row['product_price'].'</p>';
                echo '<a href="#" class="mt-4 inline-block bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700 shadow-lg shadow-sky-500/20 transform transition-transform duration-600 hover:scale-110">Add to Cart</a>
                    </div>
                </div>';
            }
        } else {
            echo "No products found.";
        }
        mysqli_close($conn);
        ?> 
 </section>
  <!-- ./laptop section  -->

   <!-- keyboard section :  -->

    <!-- ./clavier section -->
    <!-- mouses section  -->

    <!-- ./mouses section -->
    <!-- casques section  :  -->

    <!-- ./casques section  -->



    <!-- footer section -->
     <?php include("../inc/comp/footer.php")?>
     <!-- ./footer section -->
</body>
</html>