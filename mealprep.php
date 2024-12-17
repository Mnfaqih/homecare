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
        color: #1e3a8a; /* Semua link navbar berwarna biru gelap */
        margin: 0 10px;
        font-weight: 500;
        transition: color 0.3s;
      }

      nav a.meal-prep {
        color: #fbbf24; /* Warna kuning khusus Meal Prep */
        font-weight: bold; /* Teks lebih tebal */
      }

      nav a:hover {
        color: #3b82f6; /* Hover effect untuk semua link */
      }

      .profile-icon img {
        width: 30px;
        height: 30px;
      }

      /* Hero Section */
      .hero-section {
        position: relative;
        display: flex;
        justify-content: flex-end; /* Konten di sisi kanan */
        align-items: center; /* Posisikan konten vertikal di tengah */
        background-image: url("assets/background.jpg"); /* Tambahkan gambar sesuai link */
        background-size: cover;
        background-position: center;
        height: 100vh; /* Gambar tampil penuh */
        padding: 20px;
      }

      .hero-section .content {
        position: relative;
        color: #ffffff; /* Warna teks */
        max-width: 400px;
        text-align: left;
        padding: 20px;
        margin-right: 50px; /* Geser konten ke kiri */
        margin-bottom: 10px; /* Naikkan sedikit ke atas */
      }

      .hero-section .content h2 {
        font-size: 24px;
        margin-bottom: 10px;
        color: #1e3a8a; /* Warna judul */
        font-weight: bold;
      }

      .hero-section .content p {
        font-size: 14px;
        margin-bottom: 20px;
        line-height: 1.5;
        color: #ffffff;
      }

      .hero-section .content button {
        background-color: #1e3a8a;
        color: #ffffff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 14px;
        transition: background-color 0.3s;
      }

      .hero-section .content button:hover {
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
          <img src="Sapu.svg" alt="icon-description" class="icon" />
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
          <img src="user.svg" alt="icon-description" class="icon" />
        </div>
      </header>

      <!-- Hero Section -->
      <main>
        <div class="hero-section">
          <div class="content">
            <h2>Meal Prep</h2>
            <p>
              Layanan meal prep profesional yang menawarkan berbagai pilihan
              sesuai kebutuhan, mulai dari menu sehat harian, makanan diet,
              hingga kebutuhan keluarga. Dilengkapi informasi harga, porsi, dan
              jadwal pengiriman untuk memudahkan Anda menikmati hidangan lezat
              dan bergizi.
            </p>
            <button>Pesan</button>
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
