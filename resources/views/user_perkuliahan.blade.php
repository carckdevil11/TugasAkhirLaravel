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




    <div class="isian">
        <div class="container">
            @if(\Session::has('alert'))
            <div class="alert alert-danger">
                <div>{{Session::get('alert')}}</div>
            </div>
            @endif
            @if(\Session::has('alert-success'))
            <div class="alert alert-success">
                <div>{{Session::get('alert-success')}}</div>
            </div>
            @endif
            <div class="col-lg-12 text-center">
                <h1>Hallo, {{Session::get('name')}}. Apakabar?</h1>
            </div>
            <div class="isianinput">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <h2>* Email kamu : {{Session::get('email')}}</h2>
                        <h2>* Bagian kamu : Perkuliahan</h2>
                        <h2>* Status Login : {{Session::get('login')}}</h2>
                        <a href="/logout" class="btn btn-primary btn-lg">Logout</a>
                    </div>
                </div>
                <br>
                @foreach($user_mahasiswa_perkuliahan as $user_mahasiswa)
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                            <h4>Mahasiswa</h4>
                            <small class="text-muted">{{ $user_mahasiswa->Waktu }}</small>
                        </div>
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Nama : {{ $user_mahasiswa->Nama }}</h5>
                            <h5 class="mb-1">{{ $user_mahasiswa-> NIM}}</h5>
                        </div>
                        <h4>Topik : {{ $user_mahasiswa->Topik}}</h4>
                        <small class="text-muted">Kritik :</small>
                        <p class="mb-1">{{ $user_mahasiswa->Kritik }}</p>
                        <small class="text-muted">Saran : </small>
                        <p class="mb-1">{{ $user_mahasiswa->Saran }}</p>
                    </a>
                </div>
                @endforeach
                @foreach($user_civitas_perkuliahan as $user_civitas)
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                            <h4>Civitas</h4>
                            <small class="text-muted">{{ $user_civitas->Waktu }}</small>
                        </div>
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Nama : {{ $user_civitas->Nama }}</h5>
                            <h5 class="mb-1">{{ $user_civitas->Nomor_Pegawai}}</h5>
                        </div>
                        <h5 class="mb-1">Jabatan : {{ $user_civitas->Jabatan }}</h5>
                        <h4>Topik : {{ $user_civitas->Topik}}</h4>
                        <small class="text-muted">Kritik :</small>
                        <p class="mb-1">{{ $user_civitas->Kritik }}</p>
                        <small class="text-muted">Saran :</small>
                        <p class="mb-1">{{ $user_civitas->Saran }}</p>
                    </a>
                </div>
                @endforeach
                @foreach($user_masyarakat_perkuliahan as $user_masyarakat)
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                            <h4>Masyarakat</h4>
                            <small class="text-muted">{{ $user_masyarakat->Waktu }}</small>
                        </div>
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Nama : {{ $user_masyarakat->Nama }}</h5>
                            <h5 class="mb-1">{{ $user_masyarakat-> Asal_Daerah}}</h5>
                        </div>
                        <h5 class="mb-1">Nomor Telepon : {{ $user_masyarakat->Nomor_Telepon }}</h5>
                        <h4>Topik : {{ $user_masyarakat->Topik}}</h4>
                        <small class="text-muted">Kritik :</small>
                        <p class="mb-1">{{ $user_masyarakat->Kritik }}</p>
                        <small class="text-muted">Saran : </small>
                        <p class="mb-1">{{ $user_masyarakat->Saran }}</p>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>