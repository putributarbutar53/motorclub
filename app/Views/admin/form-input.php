<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data Mahasiswa</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand mx-auto" href="#">
                <img src="favicon.ico" alt="Logo" width="30" height="30" class="d-inline-block align-top mr-2" />
                Form Input Data Mahasiswa
            </a>
        </div>
    </nav>

    <div class="container mt-5">
        <form action="simpan.php" method="post">
            <table class="table">
                <tr>
                    <td>NIM</td>
                    <td><input type="text" onkeyup="isi_otomatis()" name="nim" class="form-control"></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" class="form-control"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="lk" value="L">
                            <label class="form-check-label" for="lk">
                                Laki-Laki
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="pr" value="P">
                            <label class="form-check-label" for="pr">
                                Perempuan
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>
                        <select name="jurusan" id="jurusan" class="form-control">
                            <option value="TEKNIK INFORMATIKA">TEKNIK INFORMATIKA</option>
                            <option value="TEKNIK MESIN">TEKNIK MESIN</option>
                            <option value="TEKNIK KIMIA">TEKNIK KIMIA</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat" class="form-control"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>

    <footer class="footer mt-auto py-3 bg-light">
        <div class="container text-center">
            <span class="text-muted">&copy; 2024 Putri Butarbutar. All rights reserved.</span>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>