<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f7f7f7;
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    h2 {
      text-align: center;
      color: #fff;
      background: url('kebun.jpg') center/cover;
      padding: 50px;
      margin: 0;
      border-bottom: 5px solid #8FBC8F;
    }

    form {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      margin: 20px;
      max-width: 400px;
    }

    label {
      display: block;
      margin-top: 10px;
      color: #555;
    }

    input, select {
      width: calc(100% - 16px);
      padding: 10px;
      margin-top: 5px;
      margin-bottom: 10px;
      box-sizing: border-box;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    #gambar-tiket {
      text-align: center;
    }

    #gambar-tiket img {
      max-width: 100%;
      height: auto;
      margin-top: 10px;
      border-radius: 8px;
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
    }

    button {
      background-color: #4caf50;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    button:hover {
      background-color: #45a049;
    }

    .slideshow-container {
      max-width: 100%;
      position: relative;
      margin-top: 20px;
    }

    .mySlides {
      display: none;
    }

    .mySlides img {
      width: 100%;
      border-radius: 8px;
    }
  </style>
  <title>Pemesanan Tiket Kebun Binatang</title>
</head>
<body>
  <h2>Pemesanan Tiket Kebun Binatang</h2>

  <form action="process.php" method="post">
    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama" required>

    <label for="tipe_tiket">Tipe Tiket:</label>
    <select id="tipe_tiket" name="tipe_tiket" required onchange="showImage()">
      <option value="platinum">Tiket Platinum</option>
      <option value="reguler">Tiket Reguler</option>
      <option value="promo">Tiket Promo</option>
    </select>

    <div id="gambar-tiket" class="slideshow-container">
      <!-- Gambar tiket akan ditampilkan di sini -->
      <div class="mySlides">
        <img src="platinum.jpeg" alt="Tiket Platinum">
      </div>
      <div class="mySlides">
        <img src="reguler.jpeg" alt="Tiket Reguler">
      </div>
      <div class="mySlides">
        <img src="promo.jpeg" alt="Tiket Promo">
      </div>
    </div>

    <label for="jumlah_tiket">Jumlah Tiket:</label>
    <input type="number" id="jumlah_tiket" name="jumlah_tiket" min="1" required>

    <label for="tanggal">Tanggal Kunjungan:</label>
    <input type="date" id="tanggal" name="tanggal" required>


  <label for="add_on">Paket Add-on:</label>
  <select id="add_on" name="add_on" onchange="showAddOnDetails()">
    <option value="none">Tanpa Add-on</option>
    <option value="safari">Safari Experience</option>
    <option value="feeding">Animal Feeding</option>
    <option value="photo">Photo Session with Animals</option>
  </select>

    <button type="submit">Pesan Tiket</button>
  </form>

  <script>
    var slideIndex = 0;

    function showImage() {
      var tipeTiket = document.getElementById("tipe_tiket").value;
      var gambarTiket = document.getElementById("gambar-tiket");

      // Reset slide index
      slideIndex = 0;

      // Hapus gambar sebelumnya
      gambarTiket.innerHTML = "";

      // Tambahkan gambar sesuai dengan pilihan tiket
      var images;
      if (tipeTiket === "platinum") {
        images = ["platinum.jpeg"];
      } else if (tipeTiket === "reguler") {
        images = ["reguler.jpeg"];
      } else if (tipeTiket === "promo") {
        images = ["promo.jpeg"];
      }

      for (var i = 0; i < images.length; i++) {
        var slide = document.createElement("div");
        slide.className = "mySlides";
        slide.innerHTML = '<img src="' + images[i] + '" alt="Tiket">';
        gambarTiket.appendChild(slide);
      }

      // Tampilkan slideshow
      showSlides();
    }

    function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > slides.length) {
        slideIndex = 1;
      }
      slides[slideIndex - 1].style.display = "block";
      setTimeout(showSlides, 2000); // Ubah durasi tampilan slide di sini (ms)
    }
  </script>
</script>
</body>
</html>
