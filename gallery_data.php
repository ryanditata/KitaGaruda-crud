<table class="table table-hover">
    <thead class="table-dark">
        <tr>
            <th>No</th>
              <th class="w-75">Tanggal</th>
              <th class="w-25">Gambar</th>
              <th class="w-50">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include "koneksi.php";

        $hlm = (isset($_POST['hlm'])) ? $_POST['hlm'] : 1;
        $limit = 6;
        $limit_start = ($hlm - 1) * $limit;
        $no = $limit_start + 1;

        $sql = "SELECT * FROM gallery ORDER BY tanggal DESC LIMIT $limit_start, $limit";
        $hasil = $conn->query($sql);

        while ($row = $hasil->fetch_assoc()) {
        ?>
        <tr>
            <td><?= $no++ ?></td>
            <td>
                pada : <?= $row["tanggal"] ?><br>
                oleh : <?= $row["username"] ?>
            </td>
            <td>
              <?php
              if ($row["gambar"] != '') {
              if (file_exists('img/' . $row["gambar"] . '')) {
              ?>
              <img src="img/<?= $row["gambar"] ?>" class="img-fluid">
              <?php
                }
              }
              ?>
            </td>
            <td>
              <a href="#" title="Edit" class="text-success fs-4" data-bs-toggle="modal" data-bs-target="#modalEdit<?= $row["id"] ?>"><i class="bi bi-pencil-square"></i></a>
              <a href="#" title="Delete" class="text-danger fs-4" data-bs-toggle="modal" data-bs-target="#modalHapus<?= $row["id"] ?>"><i class="bi bi-x-circle"></i></a>

    <!-- Awal Modal Edit -->
    <div class="modal fade" id="modalEdit<?= $row["id"] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Gallery</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post" action="" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Ganti Gambar</label>
                        <input type="hidden" name="id" value="<?= $row["id"] ?>">
                        <input type="file" class="form-control" name="gambar">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput3" class="form-label">Gambar Lama</label>
                        <?php
                        if ($row["gambar"] != '') {
                            if (file_exists('img/' . $row["gambar"] . '')) {
                        ?>
                                <br><img src="img/<?= $row["gambar"] ?>" class="img-fluid">
                        <?php
                            }
                        }
                        ?>
                        <input type="hidden" name="gambar_lama" value="<?= $row["gambar"] ?>">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary fw-semibold rounded-pill" data-bs-dismiss="modal">Batal</button>
                    <input type="submit" value="Simpan" name="simpan" class="btn btn-success fw-semibold rounded-pill">
                </div>
            </form>
        </div>
    </div>
    </div>
    <!-- Akhir Modal Edit -->

    <!-- Awal Modal Hapus -->
    <div class="modal fade" id="modalHapus<?= $row["id"] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Konfirmasi Hapus Gallery</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post" action="" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Apakah Anda yakin ingin menghapus foto ini?</label>
                        <?php
                        if ($row["gambar"] != '') {
                            if (file_exists('img/' . $row["gambar"] . '')) {
                        ?>
                                <br><img src="img/<?= $row["gambar"] ?>" class="img-fluid">
                        <?php
                            }
                        }
                        ?>
                        <input type="hidden" name="gambar_lama" value="<?= $row["gambar"] ?>">
                        <input type="hidden" name="id" value="<?= $row["id"] ?>">
                        <input type="hidden" name="gambar" value="<?= $row["gambar"] ?>">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary fw-semibold rounded-pill" data-bs-dismiss="modal">Batal</button>
                    <input type="submit" value="Hapus" name="hapus" class="btn btn-danger fw-semibold rounded-pill">
                </div>
            </form>
        </div>
    </div>
    </div>
    <!-- Akhir Modal Hapus -->
                </td>
                <td>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>

<?php 
$sql1 = "SELECT * FROM gallery";
$hasil1 = $conn->query($sql1); 
$total_records = $hasil1->num_rows;
?>
<p class="text-secondary fw-semibold">Total Gallery : <?php echo $total_records; ?></p>
<nav class="mb-5">
    <ul class="pagination justify-content-center">
    <?php
        $jumlah_page = ceil($total_records / $limit);
        $jumlah_number = 1; //jumlah halaman ke kanan dan kiri dari halaman yang aktif
        $start_number = ($hlm > $jumlah_number)? $hlm - $jumlah_number : 1;
        $end_number = ($hlm < ($jumlah_page - $jumlah_number))? $hlm + $jumlah_number : $jumlah_page;

        if($hlm == 1){
            echo '<li class="page-item disabled"><a class="page-link" href="#">First</a></li>';
            echo '<li class="page-item disabled"><a class="page-link" href="#"><span aria-hidden="true">&laquo;</span></a></li>';
        } else {
            $link_prev = ($hlm > 1)? $hlm - 1 : 1;
            echo '<li class="page-item halaman" id="1"><a class="page-link" href="#">First</a></li>';
            echo '<li class="page-item halaman" id="'.$link_prev.'"><a class="page-link" href="#"><span aria-hidden="true">&laquo;</span></a></li>';
        }

        for($i = $start_number; $i <= $end_number; $i++){
            $link_active = ($hlm == $i)? ' active' : '';
            echo '<li class="page-item halaman '.$link_active.'" id="'.$i.'"><a class="page-link" href="#">'.$i.'</a></li>';
        }

        if($hlm == $jumlah_page){
            echo '<li class="page-item disabled"><a class="page-link" href="#"><span aria-hidden="true">&raquo;</span></a></li>';
            echo '<li class="page-item disabled"><a class="page-link" href="#">Last</a></li>';
        } else {
        $link_next = ($hlm < $jumlah_page)? $hlm + 1 : $jumlah_page;
            echo '<li class="page-item halaman" id="'.$link_next.'"><a class="page-link" href="#"><span aria-hidden="true">&raquo;</span></a></li>';
            echo '<li class="page-item halaman" id="'.$jumlah_page.'"><a class="page-link" href="#">Last</a></li>';
        }
    ?>
    </ul>
</nav>

<style>
.pagination .page-item.active .page-link {
    background-color: black;
    border-color: black;
    color: #fff;
}

.pagination .page-link {
    color: black;
}

.pagination .page-link:hover {
    color: black;
}
</style>