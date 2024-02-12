<?php
include "../koneksi.php";

// Memulai session
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query untuk memeriksa user di database
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($data, $sql);

    if ($result) {
        if (mysqli_num_rows($result) == 1) {
            // Jika login berhasil
            $row = mysqli_fetch_assoc($result);
            $usertype = $row['usertype'];

            // Set session untuk menyimpan informasi pengguna
            $_SESSION['username'] = $username;
            $_SESSION['usertype'] = $usertype;

            // Redirect ke halaman yang sesuai berdasarkan usertype
            if ($usertype === 'user') {
                header("Location: mycard.php");
            } elseif ($usertype === 'admin') {
                header("Location: ../admin/home.php");
            } else {
                // Usertype tidak valid, tambahkan penanganan sesuai kebutuhan
                echo "Usertype tidak valid.";
            }

            exit();
        } else {
            echo "Login gagal. Periksa username dan password Anda.";
        }
    } else {
        echo "Kesalahan query: " . mysqli_error($data);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head lang="en" dir="ltr">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
</head>

<body>
    <?php include "header.php"; ?>
    <div class="container p-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <div class="card card-body">
                    <form action="login.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input type="text" class="form-control" placeholder="Enter username" name="username" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">password</label>
                            <input type="password" class="form-control" placeholder="Enter password" name="password" placeholder="">
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                    <p>belum memiliki akun ? <a href="register.php">register now</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5 p-4 bg-dark text-white text-center">
        <a class="navbar-brand" href="https://www.instagram.com/fawwaz9969/">
            <img src="asset/img/instagram.png" alt="Logo" style="width:60px;">
        </a>
        <h5>JALAN DOANG JADIAN KAGA</h5>
        <img src="asset/img/logo adams putih.png" alt="Logo" style="width:80px;">
    </div>
    <script src="\asset\css/js/bootstrap.bundle.min.js"></script>
</body>

</html>