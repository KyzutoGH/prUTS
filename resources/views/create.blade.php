<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <title>Tambah Data</title>
</head>

<body class="bg-light">

    <div class="container">
        <main>
            <div class="py-5 text-center">

                <h2>Tambah Data</h2>
                <p class="lead">Tambahkan data sesuka kalian. Klik tambah untuk tambah data, klik batal untuk kembali
                    ke index.</p>
            </div>

            <div class="row g-5">
                <div class="col-md-12 col-lg-12">
                    <h4 class="mb-3">Form Tambah</h4>
                    <form class="needs-validation" method="POST" action="{{ route('store') }}">
                        @csrf
                        <div class="row g-3">

                            <div class="col-12">
                                <label for="nama" class="form-label">Nama</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="nama" name="nama"
                                        placeholder="Nama" required="required">
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="nim" class="form-label">NIM</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="nim" name="nim"
                                        placeholder="NIM" required="required">
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="jurusan" class="form-label">Jurusan</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="jurusan" name="jurusan"
                                        placeholder="Jurusan" required="required">
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="semester" class="form-label">Semester</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="semester" name="semester"
                                        placeholder="Semester" required="required">
                                </div>
                            </div>
                        </div>

                        <hr class="my-4">
                        <p>
                            <button class="btn btn-primary btn-lg my-2" type="submit">Kirim</button>
                            <a href="{{ route('index') }}" class="btn btn-danger btn-lg">Batal</a>
                        </p>


                    </form>
                </div>
            </div>
        </main>

        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">© 2017–2021 Company Name</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Privacy</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Support</a></li>
            </ul>
        </footer>
    </div>


    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="form-validation.js"></script>


    <!---->
    <div id="wp-extension" data-id="dpadflhmiohjfhhaehelneimpllfbpcg"></div>
</body>

</html>
