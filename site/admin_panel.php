<?php

session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_email'])) {

    header("Location:../site/login.php");
    exit();
}

// Database connection
include("../inc/database/conn.php");

// Get the logged-in user's email from the session
$user_email = $_SESSION['user_email'];

// Fetch the user's role from the database
$query = "SELECT role FROM user WHERE user_email = '$user_email' LIMIT 1";
$result = mysqli_query($conn, $query);

if ($result && mysqli_num_rows($result) > 0) {
    // Get the role from the database
    $user = mysqli_fetch_assoc($result);

    // Check if the user is not an admin
    if ($user['role'] !== 'admin') {
        // If the user is not an admin, redirect them to the homepage or another page
        header("Location: home.php");
        exit();
    }
} else {
    // If the query failed or the user was not found, handle it (e.g., log out the user)
    echo "<script>alert('User not found or query failed.');</script>";
    header("Location: home.php");
    exit();
}

// If the user is an admin, continue to the admin panel
?> 

<!DOCTYPE html>
<html lang="en">
<head>
 <?php include("../inc/comp/style.php"); ?>
</head>
<body class="bg-slate-100">
<?php include("../inc/comp/nav_check.php"); ?>

<div class="container mx-auto p-4">
    <!-- the section name  :  -->
    <h1 class="text-3xl text-center font-bold mb-4 mt-5">Admin Panel</h1>

    <!-- Add Product Section -->
    <section class="mb-8">
        <h2 class="text-2xl font-semibold mb-2">Add Product</h2>
        <form class="bg-white p-5 rounded-lg shadow-lg" method="POST" enctype="multipart/form-data">
            <div class="mb-4">
                <label for="productName" class="block text-gray-700 mb-3">Product Name</label>
                <!-- product name :  -->
                <input type="text" name="product_name" id="productName" class="w-full p-2 border rounded-lg" placeholder="Enter product name" required>
            </div>
            
            <div class="mb-4">
                <label for="product_type" class="block text-gray-700 mb-3">Choose a product type:</label>
                <!-- product type :  -->
                <select name="product_type" id="product_type" class="w-full p-2 border rounded-lg" required>
                    <option value="" disabled selected>--Select a Product Type--</option>
                    <option value="laptop">Laptop</option>
                    <option value="keyboard">Keyboard</option>
                    <option value="mouse">Mouse</option>
                    <option value="casque">Casque</option>
                </select>
            </div>

            <div class="mb-4">
                <!-- product descrition  : -->
                <label for="productDescription" class="block 
                text-gray-700 mb-2">Product Description</label>
                <textarea id="productDescription" name="product_description" class="w-full p-2 border rounded-lg" placeholder="Enter product description" required></textarea>
            </div>

            <div class="mb-4">
                <!-- product price :  -->
                <label for="productPrice" class="block text-gray-700">Product Price</label>
                <input type="number" name="product_price" id="productPrice" class="w-full p-2 border rounded-lg" placeholder="Enter product price" required>
            </div>

            <div class="mb-4">
                <!-- photo section :  -->
                <label for="productPhoto" class="block text-gray-700 mb-2">Product Photo</label>
                <div class="flex items-center justify-center w-full">
                    <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 rounded-lg cursor-pointer dark:hover:bg-gray-200">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <svg class="w-8 h-8 mb-4 text-gray-800 dark:text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                            </svg>
                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-600"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                            <p class="text-xs text-gray-500 dark:text-gray-600">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                        </div>
                        <input id="dropzone-file" name="product_photo" type="file" class="hidden" required/>
                    </label>
                </div>
            </div>

            <button type="submit" name="add_product" class="bg-blue-500 text-white py-2 px-4 rounded-lg">Add Product</button>
        </form>
    </section>

    <?php

    if (isset($_POST['add_product'])) {
        //  getting data fro form : 
            $product_name = $_POST['product_name'];
            $product_type = $_POST['product_type'];
            $product_description = $_POST['product_description'];
            $product_price = $_POST['product_price'];
        // Assume you handle the photo upload separately
            $product_photo = $_FILES['product_photo']['name'];
            $image_ext = pathinfo($product_photo,PATHINFO_EXTENSION);
            $image_name  = time().'.'.$image_ext;
        // send img to other directory : 
        // Handle the photo upload
        $target_dir = "../prducts_img/"; // Specify the target directory
        //  get the name of img  : 
        $target_file = $target_dir.basename($_FILES["product_photo"]["name"]);
        //  check if file is an image : 
        // Check if the file is an actual image
        $check = getimagesize($_FILES["product_photo"]["tmp_name"]);

        if ($check !== false) {
            // Move the file to the target directory
            if (move_uploaded_file($_FILES["product_photo"]["tmp_name"], $target_file)) {
                // add  the product :
                //  next step get the img name in other repo "img "
                // work : 
                $add_product_query = "INSERT INTO product (
                    product_name, 
                    product_type, 
                    product_price, 
                    product_desc, 
                    product_img
                ) VALUES (
                    '$product_name', 
                    '$product_type', 
                    '$product_price', 
                    '$product_description', 
                    '$target_file'
                );";

                // insert data here : 
                if (mysqli_query($conn, $add_product_query)) {
                    echo "Product added successfully!";
                    mysqli_close($conn);
                        
                } else {
                    echo "Error: " . mysqli_error($conn);
                }
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        } else {
            echo "File is not an image.";
        }
        // Clear form values
        unset($_POST['product_name']);
        unset($_POST['product_type']);
        unset($_POST['product_price']);
        unset($_POST['product_desc']);
        unset($_POST['product_img']);
    }

                //  code work here :
        //  link the db and start put the product in the site :
        // error here  => 
    ?>
    <section class="mb-8">
        <h2 class="text-2xl font-semibold mb-2">Remove Product</h2>
        <div class="bg-white p-4 rounded-lg shadow-md">
            <label for="removeProduct" class="block text-gray-700">Select Product to Remove</label>
            <select id="removeProduct" class="w-full p-2 border rounded-lg mb-4">
                <option>Product 1</option>
                <option>Product 2</option>
                <option>Product 3</option>
            </select>
            <button class="bg-red-500 text-white py-2 px-4 rounded-lg">Remove Product</button>
        </div>
    </section>

    <!-- Remove Users Section -->
    <section class="mb-8">
        <h2 class="text-2xl font-semibold mb-2">Remove Users</h2>
        <div class="bg-white p-4 rounded-lg shadow-md">
            <label for="removeUser" class="block text-gray-700">Select User to Remove</label>
            <select id="removeUser" class="w-full p-2 border rounded-lg mb-4">
                <option>User 1</option>
                <option>User 2</option>
                <option>User 3</option>
            </select>
            <button class="bg-red-500 text-white py-2 px-4 rounded-lg">Remove User</button>
        </div>
    </section>
</div>
<?php include("../inc/comp/footer.php"); ?>
</body>
</html>
