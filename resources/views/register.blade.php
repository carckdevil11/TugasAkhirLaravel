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
            <div class="col-lg-12 text-center">
                <hr>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <h1>Daftar Admin</h1>
            </div>
            <div class="isianinput">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <form action="{{ url('/registerPost') }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                            <div class="form-group">
                                <label for="alamat">Password:</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <div class="form-group">
                                <label for="alamat">Password Confirmation:</label>
                                <input type="password" class="form-control" id="confirmation" name="confirmation">
                            </div>
                            <div class="form-group">
                                <label for="alamat">Name:</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="form-group">
                                <label for="alamat">bagian:</label>
                                <select id="bagian" name="bagian" class="form-control">
                                    <option value="All">All</option>
                                    <option value="Fasilitas">Fasilitas</option>
                                    <option value="Perkuliahan">Perkuliahan</option>
                                    <option value="Lembaga Kemahasiswaan">Lembaga Kemahasiswaan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-md btn-primary">Submit</button>
                                <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
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