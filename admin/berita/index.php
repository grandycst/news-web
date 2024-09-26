<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">DataTables</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./">Home</a></li>
      <li class="breadcrumb-item">Tables</li>
      <li class="breadcrumb-item active" aria-current="page">DataTables</li>
    </ol>
  </div>

  <!-- Row -->
  <div class="row">
    <!-- Datatables -->
   
    <div class="col-lg-12">
    <a href="?page=berita/tambah" class="btn btn-primary mb-3  mt-3"><i class="fas fa-plus"></i> Tambah Data </a>
      <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">DataTables</h6>
        </div>
        
        <div class="table-responsive p-3">
          <table class="table align-items-center table-flush" id="dataTable">
          <thead class="thead-light">
                      <tr>
                      <th>no</th>
                <th>id berita</th>
                <th>id kategori</th>
                <th>judul berita</th>
                <th>tanggal berita</th>
                <th>isi berita</th>
                <th>Gambar berita</th>
                <th>Action</th>
                      </tr>
                    </thead>
                    <?php
        
            $no = 1;
            $query = mysqli_query($koneksi, "SELECT berita.*, kategori.nama_kategori FROM berita JOIN kategori ON berita.id_kategori = kategori.id_kategori");

            while ($data = mysqli_fetch_array($query)) {
            ?>
                    <tbody>
                      <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data['id_berita']; ?></td>
                    <td><?php echo $data['nama_kategori']; ?></td>
                    <td><?php echo $data['judul_berita']; ?></td>
                    <td><?php echo date('d-m-y', strtotime($data['tgl_berita'])); ?></td>
                    <td><?php echo substr($data['isi_berita'], 0, 50); ?></td>
                    <td>
                         <img src="uploads/<?php echo $data['gambar_berita']; ?>" alt="Gambar Berita" class="img-thumbnail" style="max-width: 100px;">
                    </td>
                    <td>
                    <div class="d-flex justify-content-center ">
                                        <a href="?page=berita/ubah&id_berita=<?= $data['id_berita'] ?>"
                                            class="btn btn-success mr-3"><i class="fa fa-pencil-alt"></i> Ubah</a>
                             
                    <a href="?page=berita/hapus&id_kategori=<?=$data['id_kategori'];?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus berita ini?')"> <i class="fas fa-trash"></i>Hapus</a>
                    </td>
                      </tr>
                      
                    </tbody>
                    <?php } ?>
                  </table>
                </div>
              </div>
            </div>
            <!-- DataTable with Hover -->
          
            

            
          </table>
        </div>
      </div>
    </div>
  </div>
</div>