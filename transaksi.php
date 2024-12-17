<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home Care</title>
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Inter", sans-serif;
      }

      body {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
      }

      .container {
        display: flex;
        flex-direction: column;
      }

      /* Navbar */
      header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 20px;
        background-color: #ffffff;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        position: sticky;
        top: 0;
        z-index: 10;
      }

      header .logo {
        display: flex;
        align-items: center;
        font-size: 20px;
        color: #1e3a8a;
      }

      header .logo .icon {
        width: 30px;
        margin-right: 10px;
      }

      nav a {
        text-decoration: none;
        color: #1e3a8a; 
        margin: 0 10px;
        font-weight: 500;
        transition: color 0.3s;
      }

      nav a.meal-prep {
        color: #fbbf24; 
        font-weight: bold; 
      }

      nav a:hover {
        color: #3b82f6; 
      }

      .profile-icon img {
        width: 30px;
        height: 30px;
      }

      /* Hero Section */
      .hero-section {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        height: 100vh;
      }

      .hero-section .content {
        color: #1e3a8a;
        font-weight: bold;
        margin-bottom: 20px;
      }

      .hero-section img {
        margin: 20px 0;
        width: 300px; 
      }

      .hero-section button {
        background-color: #1e3a8a;
        color: #ffffff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s;
      }

      .hero-section button:hover {
        background-color: #3b82f6;
      }

      /* Footer */
      footer {
        text-align: center;
        padding: 20px;
        background-color: #f3f4f6;
        font-size: 14px;
        margin-top: auto;
      }

      footer a {
        text-decoration: none;
        color: #1e3a8a;
        margin: 0 5px;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <!-- Navbar -->
      <header>
        <div class="logo">
          <img src="sourcegbr" alt="icon-description" class="icon" />
          <strong>Home Care</strong>
        </div>
        <nav>
          <a href="#">Home</a>
          <a href="#">ART</a>
          <a href="#">House Cleaning</a>
          <a href="#">Child Care</a>
          <a href="#" class="meal-prep">Meal Prep</a>
          <a href="#">Car/Bike Wash</a>
        </nav>
        <div class="profile-icon">
          <img src="sourcegbr" alt="icon-description" class="icon" />
        </div>
      </header>

      <!-- Hero Section -->
      <main>
        <div class="hero-section">
          <div>
            <h2 style="color: #1e3a8a; font-weight: bold;">
              TERIMA KASIH TELAH MENGGUNAKAN JASA KAMI!
            </h2>
            <img
              src="assets/bg_transaksi.png"
              alt="family illustration"
              class="icon-image"
            />
            <div>
              <button onclick="window.location.href='mealprep.php';">
                SELESAI
              </button>
            </div>
          </div>
        </div>
      </main>
    </div>

    <!-- Footer -->
    <footer>
      <p>&copy; 2024 Home Care. All Rights Reserved.</p>
      <p>
        <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a> |
        <a href="#">Contact</a>
      </p>
    </footer>
  </body>
</html>
