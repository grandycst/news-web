<?php
include 'koneksi.php';

// Mengambil daftar kategori dari database
$sql_kategori = "SELECT * FROM kategori";
$result_kategori = $koneksi->query($sql_kategori);

// Menentukan kategori aktif dari query parameter
$kategori_aktif = isset($_GET['kategori']) ? $_GET['kategori'] : '';

// Mengambil berita dari database, filter berdasarkan kategori jika diperlukan
$sql_berita = "SELECT b.id_berita, b.judul_berita, b.isi_berita, b.gambar_berita, b.tgl_berita, k.nama_kategori 
               FROM berita b
               LEFT JOIN kategori k ON b.id_kategori = k.id_kategori";
if ($kategori_aktif) {
    $sql_berita .= " WHERE b.id_kategori = '$kategori_aktif'";
}
$sql_berita .= " ORDER BY b.tgl_berita DESC";
$result_berita = $koneksi->query($sql_berita);

// Mengambil data kontak
$query_kontak = "SELECT * FROM kontak ORDER BY id_kontak";
$result_kontak = $koneksi->query($query_kontak);
$kontak = $result_kontak->fetch_assoc();

// Mengambil data tim dari database
$sql_tim = "SELECT * FROM tim";
$result_tim = $koneksi->query($sql_tim);
if (!$result_tim) {
    die("Error: " . $koneksi->error);
}
?>


<!-- Features Start -->
<div class="container-fluid features mb-5">
    <div class="container py-5">
        <div class="row g-4">
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="row g-4 align-items-center features-item">
                    <div class="col-4">
                        <div class="rounded-circle position-relative">
                            <div class="overflow-hidden rounded-circle">
                                <img src="assest/img/features-sports-1.jpg"
                                    class="img-zoomin img-fluid rounded-circle w-100" alt="">
                            </div>
                            <span
                                class="rounded-circle border border-2 border-white bg-primary btn-sm-square text-white position-absolute"
                                style="top: 10%; right: -10px;">3</span>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="features-content d-flex flex-column">
                            <p class="text-uppercase mb-2">Sports</p>
                            <a href="#" class="h6">
                                Get the best speak market, news.
                            </a>
                            <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> December 9,
                                2024</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="row g-4 align-items-center features-item">
                    <div class="col-4">
                        <div class="rounded-circle position-relative">
                            <div class="overflow-hidden rounded-circle">
                                <img src="assest/img/features-technology.jpg"
                                    class="img-zoomin img-fluid rounded-circle w-100" alt="">
                            </div>
                            <span
                                class="rounded-circle border border-2 border-white bg-primary btn-sm-square text-white position-absolute"
                                style="top: 10%; right: -10px;">3</span>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="features-content d-flex flex-column">
                            <p class="text-uppercase mb-2">Technology</p>
                            <a href="#" class="h6">
                                Get the best speak market, news.
                            </a>
                            <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> December 9,
                                2024</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="row g-4 align-items-center features-item">
                    <div class="col-4">
                        <div class="rounded-circle position-relative">
                            <div class="overflow-hidden rounded-circle">
                                <img src="assest/img/features-fashion.jpg"
                                    class="img-zoomin img-fluid rounded-circle w-100" alt="">
                            </div>
                            <span
                                class="rounded-circle border border-2 border-white bg-primary btn-sm-square text-white position-absolute"
                                style="top: 10%; right: -10px;">3</span>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="features-content d-flex flex-column">
                            <p class="text-uppercase mb-2">Fashion</p>
                            <a href="#" class="h6">
                                Get the best speak market, news.
                            </a>
                            <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> December 9,
                                2024</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="row g-4 align-items-center features-item">
                    <div class="col-4">
                        <div class="rounded-circle position-relative">
                            <div class="overflow-hidden rounded-circle">
                                <img src="assest/img/features-life-style.jpg"
                                    class="img-zoomin img-fluid rounded-circle w-100" alt="">
                            </div>
                            <span
                                class="rounded-circle border border-2 border-white bg-primary btn-sm-square text-white position-absolute"
                                style="top: 10%; right: -10px;">3</span>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="features-content d-flex flex-column">
                            <p class="text-uppercase mb-2">Life Style</p>
                            <a href="#" class="h6">
                                Get the best speak market, news.
                            </a>
                            <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> December 9,
                                2024</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features End -->


<!-- Main Post Section Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row g-4">
            <div class="col-lg-7 col-xl-8 mt-0">
                <div class="position-relative overflow-hidden rounded">
                    <img src="assest/img/news-1.jpg" class="img-fluid rounded img-zoomin w-100" alt="">
                    <div class="d-flex justify-content-center px-4 position-absolute flex-wrap"
                        style="bottom: 10px; left: 0;">
                        <a href="#" class="text-white me-3 link-hover"><i class="fa fa-clock"></i> 06 minute read</a>
                        <a href="#" class="text-white me-3 link-hover"><i class="fa fa-eye"></i> 3.5k Views</a>
                        <a href="#" class="text-white me-3 link-hover"><i class="fa fa-comment-dots"></i> 05 Comment</a>
                        <a href="#" class="text-white link-hover"><i class="fa fa-arrow-up"></i> 1.5k Share</a>
                    </div>
                </div>
                <div class="border-bottom py-3">
                    <a href="#" class="display-4 text-dark mb-0 link-hover">Lorem Ipsum is simply dummy text of the
                        printing</a>
                </div>
                <p class="mt-3 mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took
                    a galley standard dummy text ever since the 1500s, when an unknown printer took a galley...
                </p>
                <div class="bg-light p-4 rounded">
    <div class="news-2">
        <h3 class="mb-4">Top Story</h3>
    </div>
    <?php
        if (isset($_POST['cari'])) {
            $keyword = $_POST['keyword'];
            $berita = mysqli_query($koneksi, "SELECT * FROM berita WHERE judul_berita LIKE '%$keyword%'");
        } else {
            $berita = mysqli_query($koneksi, "SELECT * FROM berita");
        }

        if ($berita) {
            while ($b = mysqli_fetch_assoc($berita)) {
    ?>
                <div class="row g-4 align-items-center">
                    <div class="col-md-6">
                        <div class="rounded overflow-hidden">
                            <img src="<?php echo 'admin/uploads/' . $b['gambar_berita']; ?>" class="img-fluid rounded img-zoomin w-100" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex flex-column">
                            <a href="?page=detail_berita&id=<?= $b['id_berita'] ?>" class="h3"><?php echo $b['judul_berita']; ?></a>
                            <p class="mb-0 fs-5"><i class="fa fa-clock"> 06 minute read</i></p>
                            <p class="mb-0 fs-5"><i class="fa fa-eye"> 3.5k Views</i></p>
                        </div>
                    </div>
                </div>
    <?php
            }
        } else {
            echo "<p>Error fetching news: " . mysqli_error($koneksi) . "</p>";
        }
    ?>
</div>

            </div>
            <div class="col-lg-5 col-xl-4">
                <div class="bg-light rounded p-4 pt-0">
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="rounded overflow-hidden">
                                <img src="assest/img/news-3.jpg" class="img-fluid rounded img-zoomin w-100" alt="">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex flex-column">
                                <a href="#" class="h4 mb-2">Get the best speak market, news.</a>
                                <p class="fs-5 mb-0"><i class="fa fa-clock"> 06 minute read</i> </p>
                                <p class="fs-5 mb-0"><i class="fa fa-eye"> 3.5k Views</i></p>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row g-4 align-items-center">
                                <div class="col-5">
                                    <div class="overflow-hidden rounded">
                                        <img src="assest/img/news-3.jpg" class="img-zoomin img-fluid rounded w-100"
                                            alt="">
                                    </div>
                                </div>
                                <div class="col-7">
                                    <div class="features-content d-flex flex-column">
                                        <a href="#" class="h6">Get the best speak market, news.</a>
                                        <small><i class="fa fa-clock"> 06 minute read</i> </small>
                                        <small><i class="fa fa-eye"> 3.5k Views</i></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row g-4 align-items-center">
                                <div class="col-5">
                                    <div class="overflow-hidden rounded">
                                        <img src="assest/img/news-4.jpg" class="img-zoomin img-fluid rounded w-100"
                                            alt="">
                                    </div>
                                </div>
                                <div class="col-7">
                                    <div class="features-content d-flex flex-column">
                                        <a href="#" class="h6">Get the best speak market, news.</a>
                                        <small><i class="fa fa-clock"> 06 minute read</i> </small>
                                        <small><i class="fa fa-eye"> 3.5k Views</i></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row g-4 align-items-center">
                                <div class="col-5">
                                    <div class="overflow-hidden rounded">
                                        <img src="assest/img/news-5.jpg" class="img-zoomin img-fluid rounded w-100"
                                            alt="">
                                    </div>
                                </div>
                                <div class="col-7">
                                    <div class="features-content d-flex flex-column">
                                        <a href="#" class="h6">Get the best speak market, news.</a>
                                        <small><i class="fa fa-clock"> 06 minute read</i> </small>
                                        <small><i class="fa fa-eye"> 3.5k Views</i></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row g-4 align-items-center">
                                <div class="col-5">
                                    <div class="overflow-hidden rounded">
                                        <img src="assest/img/news-6.jpg" class="img-zoomin img-fluid rounded w-100"
                                            alt="">
                                    </div>
                                </div>
                                <div class="col-7">
                                    <div class="features-content d-flex flex-column">
                                        <a href="#" class="h6">Get the best speak market, news.</a>
                                        <small><i class="fa fa-clock"> 06 minute read</i> </small>
                                        <small><i class="fa fa-eye"> 3.5k Views</i></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row g-4 align-items-center">
                                <div class="col-5">
                                    <div class="overflow-hidden rounded">
                                        <img src="assest/img/news-7.jpg" class="img-zoomin img-fluid rounded w-100"
                                            alt="">
                                    </div>
                                </div>
                                <div class="col-7">
                                    <div class="features-content d-flex flex-column">
                                        <a href="#" class="h6">Get the best speak market, news.</a>
                                        <small><i class="fa fa-clock"> 06 minute read</i> </small>
                                        <small><i class="fa fa-eye"> 3.5k Views</i></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row g-4 align-items-center">
                                <div class="col-5">
                                    <div class="overflow-hidden rounded">
                                        <img src="assest/img/news-7.jpg" class="img-zoomin img-fluid rounded w-100"
                                            alt="">
                                    </div>
                                </div>
                                <div class="col-7">
                                    <div class="features-content d-flex flex-column">
                                        <a href="#" class="h6">Get the best speak market, news.</a>
                                        <small><i class="fa fa-clock"> 06 minute read</i> </small>
                                        <small><i class="fa fa-eye"> 3.5k Views</i></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Post Section End -->


<!-- Banner Start -->
<div class="container-fluid py-5 my-5"
    style="background: linear-gradient(rgba(202, 203, 185, 1), rgba(202, 203, 185, 1));">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-lg-7">
                <h1 class="mb-4 text-primary">Newsers</h1>
                <h1 class="mb-4">Get Every Weekly Updates</h1>
                <p class="text-dark mb-4 pb-2">Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                    unknown printer took a galley
                </p>
                <div class="position-relative mx-auto">
                    <input class="form-control w-100 py-3 rounded-pill" type="email" placeholder="Your Busines Email">
                    <button type="submit"
                        class="btn btn-primary py-3 px-5 position-absolute rounded-pill text-white h-100"
                        style="top: 0; right: 0;">Subscribe Now</button>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="rounded">
                    <img src="assest/img/banner-img.jpg" class="img-fluid rounded w-100 rounded" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner End -->


<!-- Latest News Start -->
<div class="container-fluid latest-news py-5">
    <div class="container py-5">
        <h2 class="mb-4">Latest News</h2>
        <div class="latest-news-carousel owl-carousel">
            <?php
          if (isset($_GET["nama_kategori"])) {
              $nama_kategori = $_GET['nama_kategori'];
              $latest = mysqli_query($koneksi, "SELECT * FROM berita
                  JOIN kategori ON berita.id_kategori = kategori.id_kategori 
                  WHERE nama_kategori = '$nama_kategori'
                  ORDER BY id_berita DESC");
          } else {
              $latest = mysqli_query($koneksi, "SELECT * FROM berita
                  JOIN kategori ON berita.id_kategori = kategori.id_kategori
                  ORDER BY id_berita DESC");
          }
          
          if ($latest) {
              while ($m = mysqli_fetch_array($latest)) {
                  ?>
            <div class="latest-news-item">
                <div class="bg-light rounded">
                    <div class="rounded-top overflow-hidden">
                        <img src="<?php echo 'admin/uploads/' . $m['gambar_berita']; ?>"
                            class="img-zoomin img-fluid rounded-top w-100" alt="">
                    </div>
                    <div class="d-flex flex-column p-4">
                        <a href="?page=detail_berita&id=<?= $m['id_berita'] ?>" class="h4"><?php echo $m['judul_berita']?>;</a>
                        <div class="d-flex justify-content-between">
                            <a href="#" class="small text-body link-hover"><?php echo $m['nama_kategori']?>;</a>
                            <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i>
                                <?php echo $m['tgl_berita']?>;</small>
                        </div>
                    </div>
                </div>
            </div>
            <?php
              }
          } else {
              echo "<p>Error fetching news: " . mysqli_error($koneksi) . "</p>";
          }
          ?>
        </div>
    </div>
</div>
<!-- Latest News End -->


<!-- Most Populer News Start -->
<div class="container-fluid populer-news py-5">
    <div class="container py-5">
        <div class="tab-class mb-4">
            <div class="row g-4">
                <div class="col-lg-8 col-xl-9">
                    <div class="d-flex flex-column flex-md-row justify-content-md-between border-bottom mb-4">
                        <h1 class="mb-4">What’s New</h1>
                        <ul class="nav nav-pills d-inline-flex text-center">
                            <li class="nav-item mb-3">
                                <a class="d-flex py-2 bg-light rounded-pill active me-2" data-bs-toggle="pill"
                                    href="#tab-1">
                                    <span class="text-dark" style="width: 100px;">Sports</span>
                                </a>
                            </li>

                            <?php while($row_kategori = $result_kategori->fetch_assoc()): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="?kategori=<?php echo $row_kategori['id_kategori']; ?>">
                                    <?php echo $row_kategori['nama_kategori']; ?>
                                </a>
                            </li>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                    <div class="tab-content mb-4">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <div class="col-lg-8">
                                    <div class="position-relative rounded overflow-hidden">
                                        <img src="assest/img/news-1.jpg" class="img-zoomin img-fluid rounded w-100"
                                            alt="">
                                        <div class="position-absolute text-white px-4 py-2 bg-primary rounded"
                                            style="top: 20px; right: 20px;">
                                            Sports
                                        </div>
                                    </div>
                                    <div class="my-4">
                                        <a href="#" class="h4">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry.</a>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <a href="#" class="text-dark link-hover me-3"><i class="fa fa-clock"></i> 06
                                            minute read</a>
                                        <a href="#" class="text-dark link-hover me-3"><i class="fa fa-eye"></i> 3.5k
                                            Views</a>
                                        <a href="#" class="text-dark link-hover me-3"><i class="fa fa-comment-dots"></i>
                                            05 Comment</a>
                                        <a href="#" class="text-dark link-hover"><i class="fa fa-arrow-up"></i> 1.5k
                                            Share</a>
                                    </div>
                                    <p class="my-4">Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry. Lorem Ipsum has been the industry's standard dummy Lorem Ipsum has
                                        been the industry's standard dummy..
                                    </p>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row g-4">
                                        <div class="col-12">
                                            <div class="row g-4 align-items-center">
                                                <div class="col-5">
                                                    <div class="overflow-hidden rounded">
                                                        <img src="assest/img/news-3.jpg"
                                                            class="img-zoomin img-fluid rounded w-100" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-7">
                                                    <div class="features-content d-flex flex-column">
                                                        <p class="text-uppercase mb-2">Sports</p>
                                                        <a href="#" class="h6">Get the best speak market, news.</a>
                                                        <small class="text-body d-block"><i
                                                                class="fas fa-calendar-alt me-1"></i> Dec 9,
                                                            2024</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row g-4 align-items-center">
                                                <div class="col-5">
                                                    <div class="overflow-hidden rounded">
                                                        <img src="assest/img/news-4.jpg"
                                                            class="img-zoomin img-fluid rounded w-100" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-7">
                                                    <div class="features-content d-flex flex-column">
                                                        <p class="text-uppercase mb-2">Sports</p>
                                                        <a href="#" class="h6">Get the best speak market, news.</a>
                                                        <small class="text-body d-block"><i
                                                                class="fas fa-calendar-alt me-1"></i> Dec 9,
                                                            2024</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row g-4 align-items-center">
                                                <div class="col-5">
                                                    <div class="overflow-hidden rounded">
                                                        <img src="assest/img/news-5.jpg"
                                                            class="img-zoomin img-fluid rounded w-100" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-7">
                                                    <div class="features-content d-flex flex-column">
                                                        <p class="text-uppercase mb-2">Sports</p>
                                                        <a href="#" class="h6">Get the best speak market, news.</a>
                                                        <small class="text-body d-block"><i
                                                                class="fas fa-calendar-alt me-1"></i> Dec 9,
                                                            2024</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row g-4 align-items-center">
                                                <div class="col-5">
                                                    <div class="overflow-hidden rounded">
                                                        <img src="assest/img/news-6.jpg"
                                                            class="img-zoomin img-fluid rounded w-100" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-7">
                                                    <div class="features-content d-flex flex-column">
                                                        <p class="text-uppercase mb-2">Sports</p>
                                                        <a href="#" class="h6">Get the best speak market, news.</a>
                                                        <small class="text-body d-block"><i
                                                                class="fas fa-calendar-alt me-1"></i> Dec 9,
                                                            2024</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row g-4 align-items-center">
                                                <div class="col-5">
                                                    <div class="overflow-hidden rounded">
                                                        <img src="assest/img/news-7.jpg"
                                                            class="img-zoomin img-fluid rounded w-100" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-7">
                                                    <div class="features-content d-flex flex-column">
                                                        <p class="text-uppercase mb-2">Magazine</p>
                                                        <a href="#" class="h6">Get the best speak market, news.</a>
                                                        <small class="text-body d-block"><i
                                                                class="fas fa-calendar-alt me-1"></i> Dec 9,
                                                            2024</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-8">
                                    <div class="position-relative rounded overflow-hidden">
                                        <img src="assest/img/news-1.jpg" class="img-zoomin img-fluid rounded w-100"
                                            alt="">
                                        <div class="position-absolute text-white px-4 py-2 bg-primary rounded"
                                            style="top: 20px; right: 20px;">
                                            Magazine
                                        </div>
                                    </div>
                                    <div class="my-3">
                                        <a href="#" class="h4">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry.</a>
                                    </div>
                                    <p class="mt-4">Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry. Lorem Ipsum has been the industry's standard dummy Lorem Ipsum has
                                        been the industry's standard dummy..
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <a href="#" class="text-dark link-hover me-3"><i class="fa fa-clock"></i> 06
                                            minute read</a>
                                        <a href="#" class="text-dark link-hover me-3"><i class="fa fa-eye"></i> 3.5k
                                            Views</a>
                                        <a href="#" class="text-dark link-hover me-3"><i class="fa fa-comment-dots"></i>
                                            05 Comment</a>
                                        <a href="#" class="text-dark link-hover"><i class="fa fa-arrow-up"></i> 1.5k
                                            Share</a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row g-4">
                                        <div class="col-12">
                                            <div class="row g-4 align-items-center">
                                                <div class="col-5">
                                                    <div class="overflow-hidden rounded">
                                                        <img src="assest/img/news-3.jpg"
                                                            class="img-zoomin img-fluid rounded w-100" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-7">
                                                    <div class="features-content d-flex flex-column">
                                                        <p class="text-uppercase mb-2">Magazine</p>
                                                        <a href="#" class="h6">Get the best speak market, news.</a>
                                                        <small class="text-body d-block"><i
                                                                class="fas fa-calendar-alt me-1"></i> Dec 9,
                                                            2024</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row g-4 align-items-center">
                                                <div class="col-5">
                                                    <div class="overflow-hidden rounded">
                                                        <img src="assest/img/news-4.jpg"
                                                            class="img-zoomin img-fluid rounded w-100" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-7">
                                                    <div class="features-content d-flex flex-column">
                                                        <p class="text-uppercase mb-2">Magazine</p>
                                                        <a href="#" class="h6">Get the best speak market, news.</a>
                                                        <small class="text-body d-block"><i
                                                                class="fas fa-calendar-alt me-1"></i> Dec 9,
                                                            2024</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row g-4 align-items-center">
                                                <div class="col-5">
                                                    <div class="overflow-hidden rounded">
                                                        <img src="assest/img/news-5.jpg"
                                                            class="img-zoomin img-fluid rounded w-100" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-7">
                                                    <div class="features-content d-flex flex-column">
                                                        <p class="text-uppercase mb-2">Magazine</p>
                                                        <a href="#" class="h6">Get the best speak market, news.</a>
                                                        <small class="text-body d-block"><i
                                                                class="fas fa-calendar-alt me-1"></i> Dec 9,
                                                            2024</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row g-4 align-items-center">
                                                <div class="col-5">
                                                    <div class="overflow-hidden rounded">
                                                        <img src="assest/img/news-6.jpg"
                                                            class="img-zoomin img-fluid rounded w-100" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-7">
                                                    <div class="features-content d-flex flex-column">
                                                        <p class="text-uppercase mb-2">Magazine</p>
                                                        <a href="#" class="h6">Get the best speak market, news.</a>
                                                        <small class="text-body d-block"><i
                                                                class="fas fa-calendar-alt me-1"></i> Dec 9,
                                                            2024</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row g-4 align-items-center">
                                                <div class="col-5">
                                                    <div class="overflow-hidden rounded">
                                                        <img src="assest/img/news-7.jpg"
                                                            class="img-zoomin img-fluid rounded w-100" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-7">
                                                    <div class="features-content d-flex flex-column">
                                                        <p class="text-uppercase mb-2">Magazine</p>
                                                        <a href="#" class="h6">Get the best speak market, news.</a>
                                                        <small class="text-body d-block"><i
                                                                class="fas fa-calendar-alt me-1"></i> Dec 9,
                                                            2024</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-3" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-8">
                                    <div class="position-relative rounded overflow-hidden">
                                        <img src="assest/img/news-1.jpg" class="img-zoomin img-fluid rounded w-100"
                                            alt="">
                                        <div class="position-absolute text-white px-4 py-2 bg-primary rounded"
                                            style="top: 20px; right: 20px;">
                                            Politics
                                        </div>
                                    </div>
                                    <div class="my-3">
                                        <a href="#" class="h4">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry.</a>
                                    </div>
                                    <p class="mt-4">Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry. Lorem Ipsum has been the industry's standard dummy Lorem Ipsum has
                                        been the industry's standard dummy..
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <a href="#" class="text-dark link-hover me-3"><i class="fa fa-clock"></i> 06
                                            minute read</a>
                                        <a href="#" class="text-dark link-hover me-3"><i class="fa fa-eye"></i> 3.5k
                                            Views</a>
                                        <a href="#" class="text-dark link-hover me-3"><i class="fa fa-comment-dots"></i>
                                            05 Comment</a>
                                        <a href="#" class="text-dark link-hover"><i class="fa fa-arrow-up"></i> 1.5k
                                            Share</a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row g-4">
                                        <div class="col-12">
                                            <div class="row g-4 align-items-center">
                                                <div class="col-5">
                                                    <div class="overflow-hidden rounded">
                                                        <img src="assest/img/news-3.jpg"
                                                            class="img-zoomin img-fluid rounded w-100" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-7">
                                                    <div class="features-content d-flex flex-column">
                                                        <p class="text-uppercase mb-2">Politics</p>
                                                        <a href="#" class="h6">Get the best speak market, news.</a>
                                                        <small class="text-body d-block"><i
                                                                class="fas fa-calendar-alt me-1"></i> Dec 9,
                                                            2024</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row g-4 align-items-center">
                                                <div class="col-5">
                                                    <div class="overflow-hidden rounded">
                                                        <img src="assest/img/news-4.jpg"
                                                            class="img-zoomin img-fluid rounded w-100" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-7">
                                                    <div class="features-content d-flex flex-column">
                                                        <p class="text-uppercase mb-2">Politics</p>
                                                        <a href="#" class="h6">Get the best speak market, news.</a>
                                                        <small class="text-body d-block"><i
                                                                class="fas fa-calendar-alt me-1"></i> Dec 9,
                                                            2024</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row g-4 align-items-center">
                                                <div class="col-5">
                                                    <div class="overflow-hidden rounded">
                                                        <img src="assest/img/news-5.jpg"
                                                            class="img-zoomin img-fluid rounded w-100" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-7">
                                                    <div class="features-content d-flex flex-column">
                                                        <p class="text-uppercase mb-2">Politics</p>
                                                        <a href="#" class="h6">Get the best speak market, news.</a>
                                                        <small class="text-body d-block"><i
                                                                class="fas fa-calendar-alt me-1"></i> Dec 9,
                                                            2024</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row g-4 align-items-center">
                                                <div class="col-5">
                                                    <div class="overflow-hidden rounded">
                                                        <img src="assest/img/news-6.jpg"
                                                            class="img-zoomin img-fluid rounded w-100" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-7">
                                                    <div class="features-content d-flex flex-column">
                                                        <p class="text-uppercase mb-2">Politics</p>
                                                        <a href="#" class="h6">Get the best speak market, news.</a>
                                                        <small class="text-body d-block"><i
                                                                class="fas fa-calendar-alt me-1"></i> Dec 9,
                                                            2024</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row g-4 align-items-center">
                                                <div class="col-5">
                                                    <div class="overflow-hidden rounded">
                                                        <img src="assest/img/news-7.jpg"
                                                            class="img-zoomin img-fluid rounded w-100" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-7">
                                                    <div class="features-content d-flex flex-column">
                                                        <p class="text-uppercase mb-2">Politics</p>
                                                        <a href="#" class="h6">Get the best speak market, news.</a>
                                                        <small class="text-body d-block"><i
                                                                class="fas fa-calendar-alt me-1"></i> Dec 9,
                                                            2024</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-4" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-8">
                                    <div class="position-relative rounded overflow-hidden">
                                        <img src="assest/img/news-1.jpg" class="img-zoomin img-fluid rounded w-100"
                                            alt="">
                                        <div class="position-absolute text-white px-4 py-2 bg-primary rounded"
                                            style="top: 20px; right: 20px;">
                                            Technology
                                        </div>
                                    </div>
                                    <div class="my-3">
                                        <a href="#" class="h4">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry.</a>
                                    </div>
                                    <p class="mt-4">Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry. Lorem Ipsum has been the industry's standard dummy Lorem Ipsum has
                                        been the industry's standard dummy
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <a href="#" class="text-dark link-hover me-3"><i class="fa fa-clock"></i> 06
                                            minute read</a>
                                        <a href="#" class="text-dark link-hover me-3"><i class="fa fa-eye"></i> 3.5k
                                            Views</a>
                                        <a href="#" class="text-dark link-hover me-3"><i class="fa fa-comment-dots"></i>
                                            05 Comment</a>
                                        <a href="#" class="text-dark link-hover"><i class="fa fa-arrow-up"></i> 1.5k
                                            Share</a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row g-4">
                                        <div class="col-12">
                                            <div class="row g-4 align-items-center">
                                                <div class="col-5">
                                                    <div class="overflow-hidden rounded">
                                                        <img src="assest/img/news-3.jpg"
                                                            class="img-zoomin img-fluid rounded w-100" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-7">
                                                    <div class="features-content d-flex flex-column">
                                                        <p class="text-uppercase mb-2">Technology</p>
                                                        <a href="#" class="h6">Get the best speak market, news.</a>
                                                        <small class="text-body d-block"><i
                                                                class="fas fa-calendar-alt me-1"></i> Dec 9,
                                                            2024</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row g-4 align-items-center">
                                                <div class="col-5">
                                                    <div class="overflow-hidden rounded">
                                                        <img src="assest/img/news-4.jpg"
                                                            class="img-zoomin img-fluid rounded w-100" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-7">
                                                    <div class="features-content d-flex flex-column">
                                                        <p class="text-uppercase mb-2">Technology</p>
                                                        <a href="#" class="h6">Get the best speak market, news.</a>
                                                        <small class="text-body d-block"><i
                                                                class="fas fa-calendar-alt me-1"></i> Dec 9,
                                                            2024</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row g-4 align-items-center">
                                                <div class="col-5">
                                                    <div class="overflow-hidden rounded">
                                                        <img src="assest/img/news-5.jpg"
                                                            class="img-zoomin img-fluid rounded w-100" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-7">
                                                    <div class="features-content d-flex flex-column">
                                                        <p class="text-uppercase mb-2">Technology</p>
                                                        <a href="#" class="h6">Get the best speak market, news.</a>
                                                        <small class="text-body d-block"><i
                                                                class="fas fa-calendar-alt me-1"></i> Dec 9,
                                                            2024</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row g-4 align-items-center">
                                                <div class="col-5">
                                                    <div class="overflow-hidden rounded">
                                                        <img src="assest/img/news-6.jpg"
                                                            class="img-zoomin img-fluid rounded w-100" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-7">
                                                    <div class="features-content d-flex flex-column">
                                                        <p class="text-uppercase mb-2">Technology</p>
                                                        <a href="#" class="h6">Get the best speak market, news.</a>
                                                        <small class="text-body d-block"><i
                                                                class="fas fa-calendar-alt me-1"></i> Dec 9,
                                                            2024</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row g-4 align-items-center">
                                                <div class="col-5">
                                                    <div class="overflow-hidden rounded">
                                                        <img src="assest/img/news-7.jpg"
                                                            class="img-zoomin img-fluid rounded w-100" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-7">
                                                    <div class="features-content d-flex flex-column">
                                                        <p class="text-uppercase mb-2">Technology</p>
                                                        <a href="#" class="h6">Get the best speak market, news.</a>
                                                        <small class="text-body d-block"><i
                                                                class="fas fa-calendar-alt me-1"></i> Dec 9,
                                                            2024</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-5" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-8">
                                    <div class="position-relative rounded overflow-hidden">
                                        <img src="assest/img/news-1.jpg" class="img-zoomin img-fluid rounded w-100"
                                            alt="">
                                        <div class="position-absolute text-white px-4 py-2 bg-primary rounded"
                                            style="top: 20px; right: 20px;">
                                            Fashion
                                        </div>
                                    </div>
                                    <div class="my-3">
                                        <a href="#" class="h4">World Happiness Report 2023: What's the highway to
                                            happiness?</a>
                                    </div>
                                    <p class="mt-4">Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry. Lorem Ipsum has been the industry's standard dummy Lorem Ipsum has
                                        been the industry's standard dummy
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <a href="#" class="text-dark link-hover me-3"><i class="fa fa-clock"></i> 06
                                            minute read</a>
                                        <a href="#" class="text-dark link-hover me-3"><i class="fa fa-eye"></i> 3.5k
                                            Views</a>
                                        <a href="#" class="text-dark link-hover me-3"><i class="fa fa-comment-dots"></i>
                                            05 Comment</a>
                                        <a href="#" class="text-dark link-hover"><i class="fa fa-arrow-up"></i> 1.5k
                                            Share</a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row g-4">
                                        <div class="col-12">
                                            <div class="row g-4 align-items-center">
                                                <div class="col-5">
                                                    <div class="overflow-hidden rounded">
                                                        <img src="assest/img/news-3.jpg"
                                                            class="img-zoomin img-fluid rounded w-100" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-7">
                                                    <div class="features-content d-flex flex-column">
                                                        <p class="text-uppercase mb-2">Fashion</p>
                                                        <a href="#" class="h6">Get the best speak market, news.</a>
                                                        <small class="text-body d-block"><i
                                                                class="fas fa-calendar-alt me-1"></i> Dec 9,
                                                            2024</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row g-4 align-items-center">
                                                <div class="col-5">
                                                    <div class="overflow-hidden rounded">
                                                        <img src="assest/img/news-4.jpg"
                                                            class="img-zoomin img-fluid rounded w-100" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-7">
                                                    <div class="features-content d-flex flex-column">
                                                        <p class="text-uppercase mb-2">Fashion</p>
                                                        <a href="#" class="h6">Get the best speak market, news.</a>
                                                        <small class="text-body d-block"><i
                                                                class="fas fa-calendar-alt me-1"></i> Dec 9,
                                                            2024</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row g-4 align-items-center">
                                                <div class="col-5">
                                                    <div class="overflow-hidden rounded">
                                                        <img src="assest/img/news-5.jpg"
                                                            class="img-zoomin img-fluid rounded w-100" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-7">
                                                    <div class="features-content d-flex flex-column">
                                                        <p class="text-uppercase mb-2">Fashion</p>
                                                        <a href="#" class="h6">Get the best speak market, news.</a>
                                                        <small class="text-body d-block"><i
                                                                class="fas fa-calendar-alt me-1"></i> Dec 9,
                                                            2024</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row g-4 align-items-center">
                                                <div class="col-5">
                                                    <div class="overflow-hidden rounded">
                                                        <img src="assest/img/news-6.jpg"
                                                            class="img-zoomin img-fluid rounded w-100" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-7">
                                                    <div class="features-content d-flex flex-column">
                                                        <p class="text-uppercase mb-2">Fashion</p>
                                                        <a href="#" class="h6">Get the best speak market, news.</a>
                                                        <small class="text-body d-block"><i
                                                                class="fas fa-calendar-alt me-1"></i> Dec 9,
                                                            2024</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row g-4 align-items-center">
                                                <div class="col-5">
                                                    <div class="overflow-hidden rounded">
                                                        <img src="assest/img/news-7.jpg"
                                                            class="img-zoomin img-fluid rounded w-100" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-7">
                                                    <div class="features-content d-flex flex-column">
                                                        <p class="text-uppercase mb-2">Fashion</p>
                                                        <a href="#" class="h6">Get the best speak market, news.</a>
                                                        <small class="text-body d-block"><i
                                                                class="fas fa-calendar-alt me-1"></i> Dec 9,
                                                            2024</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="border-bottom mb-4">
                        <h2 class="my-4">Most Views News</h2>
                    </div>

                    <div class="whats-carousel owl-carousel">
                    <?php   
$most = mysqli_query($koneksi, "SELECT * FROM berita
    JOIN kategori ON berita.id_kategori = kategori.id_kategori
    ORDER BY id_berita DESC");

if ($most) {
    while ($h = mysqli_fetch_array($most)) {
?>
        <div class="whats-item">
            <div class="bg-light rounded">
                <div class="rounded-top overflow-hidden">
                    <img src="<?php echo 'admin/uploads/' . $h['gambar_berita']; ?>"
                        class="card-img-top news-thumbnail"
                        alt="<?php echo $h['judul_berita']; ?>">
                </div>
                <div class="d-flex flex-column p-4">
                    <a href="?page=detail_berita&id=<?= $h['id_berita'] ?>" class="h4"><?php echo $h['judul_berita']; ?></a>
                    <div class="d-flex justify-content-between">
                        <a href="#" class="small text-body link-hover"><?php echo $h['nama_kategori']; ?></a>
                        <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> <small class="text-muted"><?php echo $h['tgl_berita']; ?></small></small>
                    </div>
                </div>
            </div>
        </div>
<?php 
    }
} else {
    echo "<p>Error fetching news: " . mysqli_error($koneksi) . "</p>";
}
?>

                    </div>
                    <div class="mt-5 lifestyle">
                        <div class="border-bottom mb-4">
                            <h1 class="mb-4">Life Style</h1>
                        </div>
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="lifestyle-item rounded">
                                    <img src="assest/img/lifestyle-1.jpg" class="img-fluid w-100 rounded" alt="">
                                    <div class="lifestyle-content">
                                        <div class="mt-auto">
                                            <a href="#" class="h4 text-white link-hover">There are many variations of
                                                passages of Lorem Ipsum available,</a>
                                            <div class="d-flex justify-content-between mt-4">
                                                <a href="#" class="small text-white link-hover">By Willium Smith</a>
                                                <small class="text-white d-block"><i
                                                        class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="lifestyle-item rounded">
                                    <img src="assest/img/lifestyle-2.jpg" class="img-fluid w-100 rounded" alt="">
                                    <div class="lifestyle-content">
                                        <div class="mt-auto">
                                            <a href="#" class="h4 text-white link-hover">There are many variations of
                                                passages of Lorem Ipsum available,</a>
                                            <div class="d-flex justify-content-between mt-4">
                                                <a href="#" class="small text-white link-hover">By Willium Smith</a>
                                                <small class="text-white d-block"><i
                                                        class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3">
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="p-3 rounded border">
                                <h4 class="mb-4">Stay Connected</h4>
                                <div class="row g-4">
                                    <div class="col-12">
                                        <a href="#"
                                            class="w-100 rounded btn btn-primary d-flex align-items-center p-3 mb-2">
                                            <i
                                                class="fab fa-facebook-f btn btn-light btn-square rounded-circle me-3"></i>
                                            <span class="text-white">13,977 Fans</span>
                                        </a>
                                        <a href="#"
                                            class="w-100 rounded btn btn-danger d-flex align-items-center p-3 mb-2">
                                            <i class="fab fa-twitter btn btn-light btn-square rounded-circle me-3"></i>
                                            <span class="text-white">21,798 Follower</span>
                                        </a>
                                        <a href="#"
                                            class="w-100 rounded btn btn-warning d-flex align-items-center p-3 mb-2">
                                            <i class="fab fa-youtube btn btn-light btn-square rounded-circle me-3"></i>
                                            <span class="text-white">7,999 Subscriber</span>
                                        </a>
                                        <a href="#"
                                            class="w-100 rounded btn btn-dark d-flex align-items-center p-3 mb-2">
                                            <i
                                                class="fab fa-instagram btn btn-light btn-square rounded-circle me-3"></i>
                                            <span class="text-white">19,764 Follower</span>
                                        </a>
                                        <a href="#"
                                            class="w-100 rounded btn btn-secondary d-flex align-items-center p-3 mb-2">
                                            <i class="bi-cloud btn btn-light btn-square rounded-circle me-3"></i>
                                            <span class="text-white">31,999 Subscriber</span>
                                        </a>
                                        <a href="#"
                                            class="w-100 rounded btn btn-warning d-flex align-items-center p-3 mb-4">
                                            <i class="fab fa-dribbble btn btn-light btn-square rounded-circle me-3"></i>
                                            <span class="text-white">37,999 Subscriber</span>
                                        </a>
                                    </div>
                                </div>
                                <h4 class="my-4">Popular News</h4>
                                <div class="row g-4">
                                    <div class="col-12">
                                        <div class="row g-4 align-items-center features-item">
                                            <div class="col-4">
                                                <div class="rounded-circle position-relative">
                                                    <div class="overflow-hidden rounded-circle">
                                                        <img src="assest/img/features-sports-1.jpg"
                                                            class="img-zoomin img-fluid rounded-circle w-100" alt="">
                                                    </div>
                                                    <span
                                                        class="rounded-circle border border-2 border-white bg-primary btn-sm-square text-white position-absolute"
                                                        style="top: 10%; right: -10px;">3</span>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="features-content d-flex flex-column">
                                                    <p class="text-uppercase mb-2">Sports</p>
                                                    <a href="#" class="h6">
                                                        Get the best speak market, news.
                                                    </a>
                                                    <small class="text-body d-block"><i
                                                            class="fas fa-calendar-alt me-1"></i> December 9,
                                                        2024</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row g-4 align-items-center features-item">
                                            <div class="col-4">
                                                <div class="rounded-circle position-relative">
                                                    <div class="overflow-hidden rounded-circle">
                                                        <img src="assest/img/features-technology.jpg"
                                                            class="img-zoomin img-fluid rounded-circle w-100" alt="">
                                                    </div>
                                                    <span
                                                        class="rounded-circle border border-2 border-white bg-primary btn-sm-square text-white position-absolute"
                                                        style="top: 10%; right: -10px;">3</span>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="features-content d-flex flex-column">
                                                    <p class="text-uppercase mb-2">Technology</p>
                                                    <a href="#" class="h6">
                                                        Get the best speak market, news.
                                                    </a>
                                                    <small class="text-body d-block"><i
                                                            class="fas fa-calendar-alt me-1"></i> December 9,
                                                        2024</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row g-4 align-items-center features-item">
                                            <div class="col-4">
                                                <div class="rounded-circle position-relative">
                                                    <div class="overflow-hidden rounded-circle">
                                                        <img src="assest/img/features-fashion.jpg"
                                                            class="img-zoomin img-fluid rounded-circle w-100" alt="">
                                                    </div>
                                                    <span
                                                        class="rounded-circle border border-2 border-white bg-primary btn-sm-square text-white position-absolute"
                                                        style="top: 10%; right: -10px;">3</span>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="features-content d-flex flex-column">
                                                    <p class="text-uppercase mb-2">Fashion</p>
                                                    <a href="#" class="h6">
                                                        Get the best speak market, news.
                                                    </a>
                                                    <small class="text-body d-block"><i
                                                            class="fas fa-calendar-alt me-1"></i> December 9,
                                                        2024</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row g-4 align-items-center features-item">
                                            <div class="col-4">
                                                <div class="rounded-circle position-relative">
                                                    <div class="overflow-hidden rounded-circle">
                                                        <img src="assest/img/features-life-style.jpg"
                                                            class="img-zoomin img-fluid rounded-circle w-100" alt="">
                                                    </div>
                                                    <span
                                                        class="rounded-circle border border-2 border-white bg-primary btn-sm-square text-white position-absolute"
                                                        style="top: 10%; right: -10px;">3</span>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="features-content d-flex flex-column">
                                                    <p class="text-uppercase mb-2">Life Style</p>
                                                    <a href="#" class="h6">
                                                        Get the best speak market, news.
                                                    </a>
                                                    <small class="text-body d-block"><i
                                                            class="fas fa-calendar-alt me-1"></i> December 9,
                                                        2024</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <a href="#"
                                            class="link-hover btn border border-primary rounded-pill text-dark w-100 py-3 mb-4">View
                                            More</a>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="border-bottom my-3 pb-3">
                                            <h4 class="mb-0">Trending Tags</h4>
                                        </div>
                                        <ul class="nav nav-pills d-inline-flex text-center mb-4">
                                            <li class="nav-item mb-3">
                                                <a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
                                                    <span class="text-dark link-hover"
                                                        style="width: 90px;">Lifestyle</span>
                                                </a>
                                            </li>
                                            <li class="nav-item mb-3">
                                                <a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
                                                    <span class="text-dark link-hover"
                                                        style="width: 90px;">Sports</span>
                                                </a>
                                            </li>
                                            <li class="nav-item mb-3">
                                                <a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
                                                    <span class="text-dark link-hover"
                                                        style="width: 90px;">Politics</span>
                                                </a>
                                            </li>
                                            <li class="nav-item mb-3">
                                                <a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
                                                    <span class="text-dark link-hover"
                                                        style="width: 90px;">Magazine</span>
                                                </a>
                                            </li>
                                            <li class="nav-item mb-3">
                                                <a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
                                                    <span class="text-dark link-hover" style="width: 90px;">Game</span>
                                                </a>
                                            </li>
                                            <li class="nav-item mb-3">
                                                <a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
                                                    <span class="text-dark link-hover" style="width: 90px;">Movie</span>
                                                </a>
                                            </li>
                                            <li class="nav-item mb-3">
                                                <a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
                                                    <span class="text-dark link-hover"
                                                        style="width: 90px;">Travel</span>
                                                </a>
                                            </li>
                                            <li class="nav-item mb-3">
                                                <a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
                                                    <span class="text-dark link-hover" style="width: 90px;">World</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="position-relative banner-2">
                                            <img src="assest/img/banner-2.jpg" class="img-fluid w-100 rounded" alt="">
                                            <div class="text-center banner-content-2">
                                                <h6 class="mb-2">The Most Populer</h6>
                                                <p class="text-white mb-2">News & Magazine WP Theme</p>
                                                <a href="#" class="btn btn-primary text-white px-4">Shop Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Most Populer News End -->