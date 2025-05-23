<?php
session_start();
include "koneksi.php";

//check jika sudah ada user yang login arahkan ke halaman admin
if (isset($_SESSION['username'])) { 
	header("location:admin.php"); 
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['user'];
  
  //menggunakan fungsi enkripsi md5 supaya sama dengan password  yang tersimpan di database
  $password = md5($_POST['pass']);

	//prepared statement
  $stmt = $conn->prepare("SELECT username 
                          FROM user 
                          WHERE username=? AND password=?");

	//parameter binding 
  $stmt->bind_param("ss", $username, $password);//username string dan password string
  
  //database executes the statement
  $stmt->execute();
  
  //menampung hasil eksekusi
  $hasil = $stmt->get_result();
  
  //mengambil baris dari hasil sebagai array asosiatif
  $row = $hasil->fetch_array(MYSQLI_ASSOC);

  //check apakah ada baris hasil data user yang cocok
  if (!empty($row)) {
    //jika ada, simpan variable username pada session
    $_SESSION['username'] = $row['username'];

    //mengalihkan ke halaman admin
    header("location:admin.php");
  } else {
	  //jika tidak ada (gagal), alihkan kembali ke halaman login
    header("location:login.php");
  }

	//menutup koneksi database
  $stmt->close();
  $conn->close();
} else {
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KitaGaruda - Login</title>
    <link rel="icon" href="img/icone.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  </head>
  <body class="bg-secondary bg-opacity-10">
    <div class="container mt-5 pt-5">
      <div class="row">
        <div class="col-12 col-sm-8 col-md-6 m-auto">
          <div class="card border-0 shadow rounded-5">
            <div class="card-body">
              <div class="text-center mb-3">
                <img src="https://garuda-id.pssi.org/assets/garuda-logo.svg">
                <p class="h4">Selamat Datang Kembali</p>
                <h6 class="text-secondary">Silahkan masukkan username & password <br> Anda untuk masuk.</h6>
                <hr />
              </div>
              <form action="" method="post">
                <input
                  type="text"
                  name="user"
                  class="form-control my-4 py-2"
                  placeholder="Username"
                  required
                />
                <input
                  type="password"
                  name="pass"
                  class="form-control my-4 py-2"
                  placeholder="Password"
                  required
                />
                <p class="text-end"><a href="" class="text-decoration-none text-danger">Lupa Kata Sandi</a></p>
                <div class="text-center my-3 d-grid">
                  <button type="submit" class="btn btn-danger rounded-5 fw-medium">Login</button>
                </div>
                <p class="text-center">Belum punya akun? <a href="" class="text-decoration-none text-danger">Daftar</a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
<?php
}
?>