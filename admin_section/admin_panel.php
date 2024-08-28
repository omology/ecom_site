<!DOCTYPE html>
<html lang="en">
<head>
 <?php include("../inc/comp/style.php");?>
</head>
<body class="bg-slate-100">
<?php include("../inc/comp/shop_nav.php")?>

<div class="container mx-auto p-4">
    <h1 class="text-3xl font-bold mb-4">Admin Panel</h1>

    <!-- Add Product Section -->
    <section class="mb-8">
        <h2 class="text-2xl font-semibold mb-2">Add Product</h2>
        <form class="bg-white p-4 rounded-lg shadow-md">
            <div class="mb-4">
                <label for="productName" class="block text-gray-700 mb-3">Product Name</label>
                <input type="text" id="productName" class="w-full p-2 border rounded-lg" placeholder="Enter product name">
            </div>
        <div class="mb-4">
            <!-- the type form  : -->
                <form class="max-w-sm mx-auto">
                <label for="product_type" class="block text-gray-600 mb-3">Select product type</label>
                <select id="product_type" class="w-full p-2 border rounded-lg mb-4">
                    <option selected class="text-gray-300">select an option</option>
                    <option value="laptop">laptop</option>
                    <option value="keyboard">keyboard</option>
                    <option value="mouse">mouse</option>
                    <option value="casque">casque</option>
                </select>
                </form>
            <div class="mb-4">
                <label for="productDescription" class="block text-gray-700 mb-2">Product Description</label>
                <textarea id="productDescription" class="w-full p-2 border rounded-lg" placeholder="Enter product description"></textarea>
            </div>
            <div class="mb-4">
                <label for="productPrice" class="block text-gray-700">Product Price</label>
                <input type="number" id="productPrice" class="w-full p-2 border rounded-lg" placeholder="Enter product price">
            </div>
            <div class="mb-4">
                <!-- photo place :  -->
            <label for="productPhoto" class="block text-gray-700 mb-2">Product Photo</label>
            <div class="flex items-center justify-center w-full">
    <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300  rounded-lg cursor-pointer  dark:hover:bg-gray-200 ">
        <div class="flex flex-col items-center justify-center pt-5 pb-6">
            <svg class="w-8 h-8 mb-4 text-gray-800 dark:text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
            </svg>
            <p class="mb-2 text-sm text-gray-500 dark:text-gray-600"><span class="font-semibold">Click to upload</span> or drag and drop</p>
            <p class="text-xs text-gray-500 dark:text-gray-600">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
        </div>
        <input id="dropzone-file" type="file" class="hidden" />
    </label>
</div> 

            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Product Review</label>
                <div class="flex space-x-1">
                    <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27l6.18 3.73-1.64-7.03 5.46-4.73-7.19-.62L12 2 9.19 8.62l-7.19.62 5.46 4.73-1.64 7.03L12 17.27z" />
                    </svg>
                    <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27l6.18 3.73-1.64-7.03 5.46-4.73-7.19-.62L12 2 9.19 8.62l-7.19.62 5.46 4.73-1.64 7.03L12 17.27z" />
                    </svg>
                    <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27l6.18 3.73-1.64-7.03 5.46-4.73-7.19-.62L12 2 9.19 8.62l-7.19.62 5.46 4.73-1.64 7.03L12 17.27z" />
                    </svg>
                    <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27l6.18 3.73-1.64-7.03 5.46-4.73-7.19-.62L12 2 9.19 8.62l-7.19.62 5.46 4.73-1.64 7.03L12 17.27z" />
                    </svg>
                    <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27l6.18 3.73-1.64-7.03 5.46-4.73-7.19-.62L12 2 9.19 8.62l-7.19.62 5.46 4.73-1.64 7.03L12 17.27z" />
                    </svg>
                </div>
            </div>
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-lg">Add Product</button>
        </form>
    </section>

    <!-- Remove Product Section -->
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


</body>
</html>