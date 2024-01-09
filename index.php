<?php
session_start()
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Home</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/homestyle.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="index.php">Home</a>
            <a class="navbar-brand" href="form_jualtiket.php" style="margin-left: 50px;">Pesan Tiket</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <?php if (isset($_SESSION['username'])) : ?>
                        <li class="nav-item"><a class="nav-link text-uppercase" href="admin/dashboard.php" style="font-weight: bolder;"><?php echo $_SESSION['username'] ?></a></li>
                        <li class="nav-item"><a class="nav-link" href="aksi_logout.php" style="font-weight: bolder;">Logout</a></li>
                    <?php else : ?>
                        <li class="nav-item"><a class="nav-link" href="login.php" style="font-weight: bolder;">Login</a></li>
                    <?php endif ?>
                </ul>
            </div>
            <div class="search-container">
    <form action="index.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
            <div class="d-flex justify-content-center">
                <div class="text-center">
                    <h1 class="mx-auto my-0 text-uppercase">ZOOPEDIA</h1>
                    <h2 class="text-white-50 mx-auto mt-2 mb-5">Selamat datang di kebun binatang online</h2>
                    <a class="btn btn-primary" href="#about">Get Started</a>
                </div>
            </div>
        </div>
    </header>
    <!-- About-->
    <section class="about-section text-center" id="about">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8">
                    <h2 class="text-white mb-4">Apasih Zoopedia ???</h2>
                    <p class="text-white-50">
                        Zoopedia merupakan aplikasi yang berisikan klasifikasi dari hewan-hewan yang ada di kebun binatang. Jadi sebelum dateng
                        ke kebun binatang kita kalian bisa liat-liat dulu nih hewan apa yang ada di kebun binatang kita, bisa dilihat dibawah ini yahhh
                    </p>
                    <!-- <br><br><br><br><br><br><br><br><br><br> -->
                </div>
         
    </section>
    <!-- Projects-->
    <section class="projects-section bg-light" id="projects">
        <div class="container px-4 px-lg-5">
            <!-- Featured Project Row-->
            <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="assets/img/singa.jpg" width="800px" alt="..." /></div>
                <div class="col-xl-4 col-lg-5">
                    <div class="featured-text text-center text-lg-left">
                        <h4>Singa</h4>
                        <table border="0" style="margin-left: auto; margin-right: auto; text-align: left;">
                            <tbody>
                                <?php
                                include "koneksi.php";
                                $a = "SELECT nama_hewan, kingdom, filum, kelas, ordo, famili, nama_penjaga FROM daftar_hewan, klasifikasi, penjaga 
                                      where daftar_hewan.klasifikasi_id = klasifikasi.id and daftar_hewan.id_penjaga = penjaga.id AND klasifikasi.id = 1";
                                $b = $koneksi->query($a);
                                while ($c = $b->fetch_array()) { ?>
                                    <tr>
                                    <tr>
                                        <td>Nama Hewan</td>
                                        <td> : </td>
                                        <td><?php echo $c['nama_hewan']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Kingdom</td>
                                        <td> : </td>
                                        <td><?php echo $c['kingdom']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Filum</td>
                                        <td> : </td>
                                        <td><?php echo $c['filum']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Kelas</td>
                                        <td> : </td>
                                        <td><?php echo $c['kelas']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Ordo</td>
                                        <td> : </td>
                                        <td><?php echo $c['ordo']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Famili</td>
                                        <td> : </td>
                                        <td><?php echo $c['famili']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Penjaga</td>
                                        <td> : </td>
                                        <td><?php echo $c['nama_penjaga']; ?></td>
                                    </tr>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Featured Project Row-->
            <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="assets/img/jerapah.jpg" width="800px" alt="..." /></div>
                <div class="col-xl-4 col-lg-5">
                    <div class="featured-text text-center text-lg-left">
                        <h4>Jerapah</h4>
                        <table border="0" style="margin-left: auto; margin-right: auto; text-align: left;">
                            <tbody>
                                <?php
                                include "koneksi.php";
                                $a = "SELECT nama_hewan, kingdom, filum, kelas, ordo, famili, nama_penjaga FROM daftar_hewan, klasifikasi, penjaga 
                                      where daftar_hewan.klasifikasi_id = klasifikasi.id and daftar_hewan.id_penjaga = penjaga.id AND klasifikasi.id = 2";
                                $b = $koneksi->query($a);
                                while ($c = $b->fetch_array()) { ?>
                                    <tr>
                                    <tr>
                                        <td>Nama Hewan</td>
                                        <td> : </td>
                                        <td><?php echo $c['nama_hewan']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Kingdom</td>
                                        <td> : </td>
                                        <td><?php echo $c['kingdom']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Filum</td>
                                        <td> : </td>
                                        <td><?php echo $c['filum']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Kelas</td>
                                        <td> : </td>
                                        <td><?php echo $c['kelas']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Ordo</td>
                                        <td> : </td>
                                        <td><?php echo $c['ordo']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Famili</td>
                                        <td> : </td>
                                        <td><?php echo $c['famili']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Penjaga</td>
                                        <td> : </td>
                                        <td><?php echo $c['nama_penjaga']; ?></td>
                                    </tr>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Featured Project Row-->
            <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="assets/img/kuda.jpg" width="800px" alt="..." /></div>
                <div class="col-xl-4 col-lg-5">
                    <div class="featured-text text-center text-lg-left">
                        <h4>Kuda</h4>
                        <table border="0" style="margin-left: auto; margin-right: auto; text-align: left;">
                            <tbody>
                                <?php
                                include "koneksi.php";
                                $a = "SELECT nama_hewan, kingdom, filum, kelas, ordo, famili, nama_penjaga FROM daftar_hewan, klasifikasi, penjaga 
                                      where daftar_hewan.klasifikasi_id = klasifikasi.id and daftar_hewan.id_penjaga = penjaga.id AND klasifikasi.id = 3";
                                $b = $koneksi->query($a);
                                while ($c = $b->fetch_array()) { ?>
                                    <tr>
                                    <tr>
                                        <td>Nama Hewan</td>
                                        <td> : </td>
                                        <td><?php echo $c['nama_hewan']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Kingdom</td>
                                        <td> : </td>
                                        <td><?php echo $c['kingdom']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Filum</td>
                                        <td> : </td>
                                        <td><?php echo $c['filum']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Kelas</td>
                                        <td> : </td>
                                        <td><?php echo $c['kelas']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Ordo</td>
                                        <td> : </td>
                                        <td><?php echo $c['ordo']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Famili</td>
                                        <td> : </td>
                                        <td><?php echo $c['famili']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Penjaga</td>
                                        <td> : </td>
                                        <td><?php echo $c['nama_penjaga']; ?></td>
                                    </tr>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="assets/img/kucing.jpg" width="800px" alt="..." /></div>
                <div class="col-xl-4 col-lg-5">
                    <div class="featured-text text-center text-lg-left">
                        <h4>Kucing</h4>
                        <table border="0" style="margin-left: auto; margin-right: auto; text-align: left;">
                            <tbody>
                                <?php
                                include "koneksi.php";
                                $a = "SELECT nama_hewan, kingdom, filum, kelas, ordo, famili, nama_penjaga FROM daftar_hewan, klasifikasi, penjaga 
                                      where daftar_hewan.klasifikasi_id = klasifikasi.id and daftar_hewan.id_penjaga = penjaga.id AND klasifikasi.id = 4";
                                $b = $koneksi->query($a);
                                while ($c = $b->fetch_array()) { ?>
                                    <tr>
                                    <tr>
                                        <td>Nama Hewan</td>
                                        <td> : </td>
                                        <td><?php echo $c['nama_hewan']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Kingdom</td>
                                        <td> : </td>
                                        <td><?php echo $c['kingdom']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Filum</td>
                                        <td> : </td>
                                        <td><?php echo $c['filum']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Kelas</td>
                                        <td> : </td>
                                        <td><?php echo $c['kelas']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Ordo</td>
                                        <td> : </td>
                                        <td><?php echo $c['ordo']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Famili</td>
                                        <td> : </td>
                                        <td><?php echo $c['famili']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Penjaga</td>
                                        <td> : </td>
                                        <td><?php echo $c['nama_penjaga']; ?></td>
                                    </tr>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="assets/img/merak_biru.jpg" width="800px" alt="..." /></div>
                <div class="col-xl-4 col-lg-5">
                    <div class="featured-text text-center text-lg-left">
                        <h4>Merak Biru</h4>
                        <table border="0" style="margin-left: auto; margin-right: auto; text-align: left;">
                            <tbody>
                                <?php
                                include "koneksi.php";
                                $a = "SELECT nama_hewan, kingdom, filum, kelas, ordo, famili, nama_penjaga FROM daftar_hewan, klasifikasi, penjaga 
                                      where daftar_hewan.klasifikasi_id = klasifikasi.id and daftar_hewan.id_penjaga = penjaga.id AND klasifikasi.id = 5";
                                $b = $koneksi->query($a);
                                while ($c = $b->fetch_array()) { ?>
                                    <tr>
                                    <tr>
                                        <td>Nama Hewan</td>
                                        <td> : </td>
                                        <td><?php echo $c['nama_hewan']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Kingdom</td>
                                        <td> : </td>
                                        <td><?php echo $c['kingdom']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Filum</td>
                                        <td> : </td>
                                        <td><?php echo $c['filum']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Kelas</td>
                                        <td> : </td>
                                        <td><?php echo $c['kelas']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Ordo</td>
                                        <td> : </td>
                                        <td><?php echo $c['ordo']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Famili</td>
                                        <td> : </td>
                                        <td><?php echo $c['famili']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Penjaga</td>
                                        <td> : </td>
                                        <td><?php echo $c['nama_penjaga']; ?></td>
                                    </tr>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Signup-->
    <section class="signup-section" id="signup">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5">
                <div class="col-md-10 col-lg-8 mx-auto text-center">
                    <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                    <h2 class="text-white mb-5">Udah liat hewannya kan, Pesan tiket dengan login terlebih dahulu</h2>
                    <form class="form-signup d-flex flex-column flex-sm-row"></form>
                    <a class="btn btn-primary" href="login.php">Log In</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer bg-black small text-center text-white-50">
        <div class="container px-4 px-lg-5">Copyright &copy; Your Website 2021</div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>