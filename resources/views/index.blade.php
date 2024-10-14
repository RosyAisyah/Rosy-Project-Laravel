<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Green Tea Shop</title>
    <link rel="stylesheet" href="assets/css/styles.css" />
  </head>
  <body>
    <header>
      <nav>
        <ul>
          <li><a href="#home">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#products">Products</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav>
      <h1>Welcome to Green Tea Shop</h1>
    </header>

    <section id="home">
      <div class="hero">
        <h2>Discover the Pure Taste of Green Tea</h2>
        <p>
          Your journey to better health starts with a cup of our premium green
          tea.
        </p>
        <button class="hero-button">Shop Now</button>
      </div>
    </section>

    <section id="about">
      <h2>About Us</h2>
      <p>
        Green Tea Shop is dedicated to providing the finest quality green tea,
        sourced from the best tea gardens in the world. Our mission is to offer
        a healthy and refreshing drink that can be enjoyed by everyone.
      </p>
    </section>

    <section id="products">
      <h2>Our Products</h2>
      <div class="product-item">
        <img src="assets/download.jpeg" alt="Green Tea" />
        <h3>Premium Green Tea</h3>
        <p>
          Our Premium Green Tea is rich in antioxidants and perfect for a
          refreshing break.
        </p>
        <button class="buy-button">Buy Now</button>
      </div>
      <div class="product-item">
        <img src="assets/matcha.jpeg" alt="Matcha Tea" />
        <h3>Organic Matcha</h3>
        <p>
          Enjoy the vibrant flavor and health benefits of our Organic Matcha.
        </p>
        <button class="buy-button">Buy Now</button>
      </div>
    </section>

    <section id="contact">
      <h2>Contact Us</h2>
      <p>
        If you have any questions or need more information, feel free to contact
        us.
      </p>
      <form>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required />

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required />

        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="5" required></textarea>

        <button type="submit">Send Message</button>
      </form>
    </section>

    <footer>
      <p>&copy; 2024 Green Tea Shop. All rights reserved.</p>
    </footer>
  </body>
</html>
