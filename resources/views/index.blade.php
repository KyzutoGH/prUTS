<!DOCTYPE html>
<html lang="en">

<head>
    <script>
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        console.log(csrfToken);
    </script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UTS PWEB Lanjut Kelompok VI</title>
</head>

<body>
    <div class="container py-3">
        <header>
            <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
                <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
                    <span class="fs-4 fw-bold">Kelompok VI Project UTS</span>
                </a>
                <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
                    <a class="me-3 py-2 text-dark text-decoration-none" href="{{ route('index') }}">Home</a>
                    <a class="me-3 py-2 text-dark text-decoration-none" href="{{ route('create') }}">Create</a>
                </nav>
            </div>
            <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
                <h1 class="display-4 fw-normal">Tentang Kelompok VI</h1>
                <p class="fs-5 text-muted">Kami hanyalah pemula.</p>
            </div>
        </header>
        <main>
            <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">Anggota #1</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">Leader</h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>Nama : Muhammad Ikhsan</li>
                                <li>NIM : 22104410004</li>
                                <li>Role : Programmer (Designer/ Class : Index)</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">Anggota #2</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">Member</h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>Nama : Wahyu Nur Ibrahim</li>
                                <li>NIM : 22104410018</li>
                                <li>Role : Support (Laporan)</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">Anggota #3</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">Member</h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>Nama : </li>
                                <li>NIM : 22104410048</li>
                                <li>Role : Programmer (Class : Create)</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">Anggota #4</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">Member</h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>Nama : </li>
                                <li>NIM : 22104410060</li>
                                <li>Role : Programmer (Class : Create)</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">Anggota #5</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">Member</h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>Nama : </li>
                                <li>NIM : 22104410064</li>
                                <li>Role : Support (Laporan)</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">Anggota #6</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">Member</h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>Nama : Nihil</li>
                                <li>NIM : 221044100XX</li>
                                <li>Role : Investor</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <footer class="pt-4 my-md-5 pt-md-5 border-top">

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col">Created By Kelompok 6 TI-A 2022</div>

                    <div class="col text-end">
                        designed by
                        K6 WEBPRO-2 2024 and Bootstrap 5
                    </div>
                </div>
            </div>

        </footer>
    </div>

    <div id="wp-extension" data-id="dpadflhmiohjfhhaehelneimpllfbpcg"></div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var message = "{{ Session::get('kunci') }}";
            if (message && message.length > 0) {
                alert(message);
            }
        });
    </script>

</body>

</html>
