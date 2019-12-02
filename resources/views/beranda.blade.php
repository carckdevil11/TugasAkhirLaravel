<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Kritik & Saran FTI</title>
</head>
<body>

    <div class="beranda">
        <div class="container">
            <div class="header">
                <div class="col-lg-12 text-center">
                    <h1>Silahkan Memilih Jenis User</h1>
                </div>
            </div>
            <div class="isi">
                <div class="row">

                    <div class="col-lg-4 text-center">
                        <div class="box-mahasiswa">
                            <div class="imgBx">
                                <img src="image/covermahasiswa.jpg" width="300px" height="450px">
                            </div>
                            <form  method="POST" action="/form">
                                @csrf
                                <h3>MAHASISWA</h3>
                                <br>
                                <p>Nama</p>
                                <input type="text" class="form-control" name="namamahasiswa">
                                <br>
                                <p>NIM</p>
                                <input type="integer" class="form-control" name="NIM">
                                <input type="hidden" class="form-control" name="topik" value="1 ">
                                <input type="hidden" class="form-control" name="kritik" value="1 ">
                                <input type="hidden" class="form-control" name="saran" value=" 1">
                                <br>
                                <button type="submit" class="btn btn-outline-dark">Menuju Form</button>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-4 text-center">
                        <div class="box-civitas">
                            <div class="imgBx">
                                <img src="image/covercivitas.jpg" width="300px" height="450px">
                            </div>
                            <form  method="POST" action="/form">
                                @csrf
                                <h3>CIVITAS UKSW</h3>
                                <br>
                                <p>Nama</p>
                                <input type="text" class="form-control" name="namacivitas">
                                <br>
                                <p>Nomor Pegawai</p>
                                <input type="text" class="form-control" name="nomorpegawai">
                                <br>
                                <p>Jabatan</p>
                                <input type="text" class="form-control" name="jabatan">
                                <input type="hidden" class="form-control" name="topik" value="1 ">
                                <input type="hidden" class="form-control" name="kritik" value="1 ">
                                <input type="hidden" class="form-control" name="saran" value=" 1">
                                <br>
                                <button type="submit" class="btn btn-outline-dark">Menuju Form</button>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-4 text-center">
                        <div class="box-masyarakat">
                            <div class="imgBx">
                                <img src="image/covermasyarakat.jpg" width="300px" height="450px">
                            </div>
                            <form  method="POST" action="/form">
                                @csrf
                                <h3>MASYARAKAT</h3>
                                <br>
                                <p>Nama</p>
                                <input type="text" class="form-control" name="namamasyarakat">
                                <br>
                                <p>Nomor Telepon</p>
                                <input type="text" class="form-control" name="nomortelepon">
                                <br>
                                <p>Asal Daerah</p>
                                <input type="text" class="form-control" name="asaldaerah">
                                <input type="hidden" class="form-control" name="topik" value="1 ">
                                <input type="hidden" class="form-control" name="kritik" value="1 ">
                                <input type="hidden" class="form-control" name="saran" value=" 1">
                                <br>
                                <button type="submit" class="btn btn-outline-dark">Menuju Form</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="kembali text-center">
        <a href="/">
            <button type="button" class="btn btn-outline-primary">Kembali</button>
        </a>
    </div>


  <!-- FOOTER -->

  <footer>
    <div class="container text-center">
      <div class="row">
        <div class="col-lg-12 ">
          <p> &copy; copyright 2019 | build by FTI UKSW</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- END FOOTER -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>