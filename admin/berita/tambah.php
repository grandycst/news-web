
<!DOCTYPE html>
<html lang="en">


    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Form Basics</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Forms</li>
              <li class="breadcrumb-item active" aria-current="page">Form Basics</li>
            </ol>
          </div>

          <div class="row">
            <div class="col-lg-6">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Form Basic</h6>
                </div>
                <div class="card-body">
                <form action="?page=berita/proses-tambah" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="id_kategori" class="form-label">ID Kategori</label>
                <select name="id_kategori" id="id_kategori" class="form-select" required>
                    <option value="">Pilih Kategori</option>
                    <?php
                    // Include koneksi database
                    include "../koneksi.php";

                    // Ambil data kategori dari tabel `kategori`
                    $query = mysqli_query($koneksi, "SELECT * FROM kategori");

                    // Tampilkan opsi kategori
                    while ($row = mysqli_fetch_array($query)) {
                        echo '<option value="' . $row['id_kategori'] . '">' . $row['nama_kategori'] . '</option>';
                    }
                    ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="judul_berita" class="form-label">Judul Berita</label>
                <input type="text" class="form-control" id="judul_berita" name="judul_berita" required>
            </div>

            <div class="mb-3">
                <label for="tgl_berita" class="form-label">Tanggal Berita</label>
                <input type="date" class="form-control" id="tgl_berita" name="tgl_berita" required>
            </div>

            <div class="mb-3">
                <label for="isi_berita" class="form-label">Isi Berita</label>
                <textarea class="form-control" id="isi_berita" name="isi_berita" rows="5" required></textarea>
            </div>

            <div class="mb-3">
                <label for="gambar_berita" class="form-label">Gambar Berita</label>
                <input type="file" class="form-control" id="gambar_berita" name="gambar_berita" accept="image/*" required>
            </div>

            <button type="submit" class="btn btn-primary">Tambah Berita</button>
    
</form>

                </div>
              </div>

             

             

           
             
          <!--Row-->

          <!-- Documentation Link -->
          <div class="row">
            <div class="col-lg-12 text-center">
              <p>For more documentations you can visit<a href="https://getbootstrap.com/docs/4.3/components/forms/"
                  target="_blank">
                  bootstrap forms documentations.</a> and <a
                  href="https://getbootstrap.com/docs/4.3/components/input-group/" target="_blank">bootstrap input
                  groups documentations</a></p>
            </div>
          </div>

          <!-- Modal Logout -->
          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Are you sure you want to logout?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                  <a href="login.html" class="btn btn-primary">Logout</a>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!---Container Fluid-->
      </div>
     