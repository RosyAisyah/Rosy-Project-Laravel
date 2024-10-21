<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Green Tea Shop</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans text-gray-700">
  <!-- Header -->
  <header class="bg-teal-600 text-white py-6 text-center">
    <nav class="flex justify-center mt-4">
      <a href="#" class="mx-4 hover:bg-teal-700 py-2 px-4 rounded">Home</a>
      <a href="#" class="mx-4 hover:bg-teal-700 py-2 px-4 rounded">About</a>
      <a href="#" class="mx-4 hover:bg-teal-700 py-2 px-4 rounded">Products</a>
      <a href="#" class="mx-4 hover:bg-teal-700 py-2 px-4 rounded">Contact</a>
    </nav>
    <h1 class="text-4xl font-bold mt-4">Welcome to Green Tea Shop</h1>
  </header>

  <!-- Section: Introduction -->
  <section class="bg-gray-100 py-10">
    <div class="max-w-4xl mx-auto px-4">
      <h2 class="text-2xl font-bold mb-8 text-center">Discover the Pure Taste of Green Tea</h2>
      <p class="text-lg text-center">Your journey to better health starts with a cup of our premium green tea.</p>
      <div class="flex justify-center mt-8">
        <a href="#" class="bg-orange-500 hover:bg-orange-600 text-white py-2 px-4 rounded">Shop Now</a>
      </div>
    </div>
  </section>

  <!-- Section: About Us -->
  <section class="bg-gray-100 py-10">
    <div class="max-w-4xl mx-auto px-4">
      <h2 class="text-2xl font-bold mb-8 text-center">About Us</h2>
      <p class="text-lg text-center">Green Tea Shop is dedicated to providing the finest quality green tea, sourced from the best tea gardens in the world. Our mission is to offer a healthy and refreshing drink that can be enjoyed by everyone.</p>
    </div>
  </section>

  <!-- Section: Products -->
  <section class="px-8 py-10">
    <div class="max-w-4xl mx-auto">
      <div class="flex flex-wrap justify-between">
        <div class="w-full md:w-1/2 mb-8 text-center">
          <img src="assets/download.jpeg" alt="Premium Green Tea" class="w-1/2 h-auto mb-4 mx-auto">
          <h3 class="text-xl font-bold mb-2">Premium Green Tea</h3>
          <p class="mb-4">Our Premium Green Tea is rich in antioxidants and perfect for a refreshing break.</p>
          <button class="bg-green-500 hover:bg-green-600 text-white py-2 px-4 rounded">Buy Now</button>
        </div>
        <div class="w-full md:w-1/2 mb-8 text-center">
          <img src="assets/matcha.jpeg" alt="Organic Matcha" class="w-1/2 h-auto mb-4 mx-auto">
          <h3 class="text-xl font-bold mb-2">Organic Matcha</h3>
          <p class="mb-4">Enjoy the vibrant flavor and health benefits of our Organic Matcha.</p>
          <button class="bg-green-500 hover:bg-green-600 text-white py-2 px-4 rounded">Buy Now</button>
        </div>
      </div>
    </div>
  </section>

  <!-- Section: Contact Us -->
  <section class="bg-gray-100 py-10">
    <div class="max-w-xl mx-auto px-4">
      <h2 class="text-2xl font-bold mb-6">Contact Us</h2>
      <form class="space-y-4">
        <input type="text" placeholder="Name" class="w-full border border-gray-300 py-2 px-4 rounded focus:outline-none focus:ring focus:ring-teal-500" required>
        <input type="email" placeholder="Email" class="w-full border border-gray-300 py-2 px-4 rounded focus:outline-none focus:ring focus:ring-teal-500" required>
        <textarea placeholder="Message" rows="4" class="w-full border border-gray-300 py-2 px-4 rounded focus:outline-none focus:ring focus:ring-teal-500" required></textarea>
        <button type="submit" class="bg-teal-500 hover:bg-teal-600 text-white py-2 px-4 rounded">Send Message</button>
      </form>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-gray-800 text-white py-6 text-center">
    <p>&copy; 2024 Green Tea Shop. All rights reserved.</p>
  </footer>
</body>
</html>
