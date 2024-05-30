<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name']) && isset($_SESSION['name'])) {

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOM4J9fekP3kv12xs2vl7ur+ZDaR0Lp0QbsXYI5H" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>My PlanET</title>    
    <link rel="stylesheet" href="upload.style.css" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
    <main>
    <nav>
        <div class="menu">
          <div class="header-content-1">
            <div class="left-content">
              <div class="home">
                <a href="../index.php"
                  ><i class="material-icons">home</i>Beranda</a
                >
              </div>
              <div class="cek-transaction">
                <a href="./Transaksi/cektransaksi.php"
                  ><i class="material-icons">search</i>Cek Transaksi</a
                >
              </div>
              <div class="compare-price">
                <a href="./Banding Harga/Compare.php"
                  ><span class="material-symbols-outlined">compare_arrows</span
                  >Banding Harga</a
                >
              </div>
            </div>
          </div>
          <div class="header-content-2">
            <div class="right-content">
              <div class="search-container">
                <button id="searchButton">
                  <i class="material-icons">search</i>
                </button>
              </div>
              <div class="language-selector">
                <select id="languageSelect" onchange="changeLanguage()">
                  <option value="id">ID</option>
                  <option value="en">Eng</option>
                  <!-- Tambahkan pilihan bahasa lainnya sesuai kebutuhan -->
                </select>
              </div>
              <div class="auth-links">
                <?php if (isset($_SESSION['name'])): ?>
                <div class="dropdown">
                  <button class="profileButton"  aria-haspopup="true" aria-expanded="false">Selamat datang, <?php echo htmlspecialchars($_SESSION['name']); ?></button>
                  <div class="dropdown-content">
                    <a href="./admin.vendor/upload.html" class="upload"></a>
                  <a href="#">Dashboard</a>
                    <a href="../login/logout.php">Keluar</a>
                  </div>
                </div>
                <?php else: ?>
                <div class="loginButton" id="loginButtonContainer">
                  <a href="./login/login.php" id="loginButton">Masuk</a>
                </div>
                <div class="registerButton" id="registerButtonContainer">
                  <a href="../Register/register.php" id="registerButton">Daftar</a>
                </div>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </nav>
<body>
    <h1>Upload an Image</h1>
    <form action="upload_handler.php" method="post" enctype="multipart/form-data">

        <label for="image">Select image to upload:</label>
        <input type="file" name="image" id="image" required><br><br>
        
        <label for="description">Description:</label>
        <input type="text" name="description" id="description" required><br><br>
        
        <input type="submit" value="Upload Image" name="submit">
    </form>
</body>
</html>

<?php 
}else{
     header("Location: ./login/login.php");
     exit();
}
 ?>
