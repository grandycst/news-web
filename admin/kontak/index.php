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
    <a href="?page=kontak/tambah" class="btn btn-primary mb-3  mt-3"><i class="fas fa-plus"></i> Tambah Data </a>
      <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Data Kontak</h6>
        </div>
        
        <div class="table-responsive p-3">
          <table class="table align-items-center table-flush" id="dataTable">
            <thead class="thead-light">
            <tr>
                      <th>no</th>
                <th>nama</th>
                <th>email</th>
                <th>facebook</th>
                <th>instagram</th>
               
                <th>Telp</th>
                <th>Alamat</th>
                <th>Action</th>
                      </tr>
            <?php
                
                $no = 1;
                $query = mysqli_query($koneksi, "SELECT * FROM kontak ORDER BY id_kontak DESC");

                // Menggunakan loop untuk menampilkan semua data
                while ($data = mysqli_fetch_array($query)) {
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo htmlspecialchars($data['nama_kontak']); ?></td>
                        <td><?php echo htmlspecialchars($data['email']); ?></td>
                        <td><?php echo htmlspecialchars($data['facebook']); ?></td>
                        <td><?php echo htmlspecialchars($data['instagram']); ?></td>
                        <td><?php echo htmlspecialchars($data['no_telp']); ?></td>
                        <td><?php echo htmlspecialchars($data['alamat']); ?></td>
                        <td>
                        <div class="d-flex justify-content-center ">
                                        <a href="?page=kontak/ubah&id_kontak=<?= $data['id_kontak'] ?>"
                                            class="btn btn-success mr-3"><i class="fa fa-pencil-alt"></i> Ubah</a>
                            <a href="?page=kontak/hapus&id_kontak=<?=$data['id_kontak'];?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?');"><i class="fas fa-trash"></i>Hapus</a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
              </tbody>
             

              </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>