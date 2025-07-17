<?php
include "koneksi.php";

// Pastikan user sudah login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Ambil data user yang sedang login
$username = $_SESSION['username'];
$query = $conn->prepare("SELECT * FROM user WHERE username = ?");
$query->bind_param("s", $username);
$query->execute();
$result = $query->get_result();
$user = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Proses update data
    $password = isset($_POST['password']) && $_POST['password'] !== '' ? md5($_POST['password']) : null;
    $foto = $user['foto']; // Default foto lama

    // Jika user mengupload foto baru
    if (!empty($_FILES['foto']['name'])) {
        $target_dir = "img/";
        $target_file = $target_dir . basename($_FILES["foto"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Validasi file gambar
        $valid_extensions = ["jpg", "jpeg", "png", "gif"];
        if (in_array($imageFileType, $valid_extensions)) {
            move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file);
            $foto = $_FILES["foto"]["name"];
        } else {
            echo "<script>alert('Hanya file JPG, JPEG, PNG, dan GIF yang diperbolehkan.');</script>";
        }
    }

    // Update data user
    if ($password) {
        $stmt = $conn->prepare("UPDATE user SET password = ?, foto = ? WHERE username = ?");
        $stmt->bind_param("sss", $password, $foto, $username);
    } else {
        $stmt = $conn->prepare("UPDATE user SET foto = ? WHERE username = ?");
        $stmt->bind_param("ss", $foto, $username);
    }

    if ($stmt->execute()) {
        echo "<script>alert('Profil berhasil diperbarui!'); window.location='admin.php';</script>";
    } else {
        echo "<script>alert('Gagal memperbarui profil.');</script>";
    }
}
?>

<div class="container bg-white" style="position: relative; top: -16px;"><hr>
    <div class="container mt-4">
      <div class="row">
        <div class="col-12 col-sm-8 col-md-6 m-auto">
          <form method="POST" enctype="multipart/form-data">
            <div class="mb-3 text-center">
              <label for="foto" class="form-label">Foto Profil</label><br>
              <img src="img/<?= $user['foto']; ?>" alt="Foto Profil" width="100" class="mb-2 rounded-circle">
              <input type="file" class="form-control" id="foto" name="foto">
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password Baru</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Kosongkan jika tidak ingin mengubah">
            </div>
            <a href="admin.php" class="btn btn-secondary mb-5 fw-semibold rounded-pill">Batal</a>
            <button type="submit" class="btn btn-success mb-5 fw-semibold rounded-pill">Simpan</button>
          </form>
        </div>
      </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>