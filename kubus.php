<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Hitung Kubus</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Hitung Volume Kubus</h1>
  </header>

  <img src="WhatsApp Image 2025-09-10 at 09.17.52.jpeg" id="foto_home" alt="Foto Saya" width="150">
  
  <div class="container">
    <nav>
      <h3>Menu</h3>
      <ul class="nav__bar">
        <li><a href="index.html" class="nav_link">Home</a></li>
        <li><a href="profile.html" class="nav_link">Profile</a></li>
        <li><a href="sosial.html" class="nav_link">Media Sosial</a></li>
        <li><a href="kubus.php" class="nav_link">Hitung Kubus</a></li>
      </ul>
    </nav>

    <main>
      <form method="post">
        <p>Masukkan panjang sisi kubus:</p>
        <input type="number" name="sisi">
        <button type="submit">Hitung</button>
      </form>

      <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $sisi = $_POST['sisi'];

        if ($sisi <= 0) {
          echo "<p style='color:red;'>Masukkan sisi yang benar!</p>";
        } else {
          $volume = $sisi ** 3;
          echo "<p>Volume kubus dengan sisi <b>$sisi</b> adalah <b>$volume</b></p>";
        }
      }
      ?>
    </main>
  </div>

  <footer>
    <p>&copy; 2025 baknus.666.sch.id</p>
  </footer>
</body>
</html>