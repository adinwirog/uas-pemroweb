<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title><?= $data['judul']; ?></title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="<?= BASEURL; ?>/assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?= BASEURL; ?>/css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
            <div class="container px-5">
                <a class="navbar-brand" href="<?= BASEURL; ?>">Pelayanan Bantuan Desa Pagiyanten</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#features">Informasi</a></li>
                        <li class="nav-item"><a class="nav-link" href="#persyaratan">Persyaratan</a></li>
                        <li class="nav-item"><a class="nav-link" href="#ceknik">Cek NIK</a></li>
                        <li class="nav-item"><a class="btn btn-primary" href="<?= BASEURL; ?>/home/login">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="jumbotron big-banner py-5">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center my-5">
                            <h1 class="display-5 fw-bolder text-white mb-2">Selamat Datang Di Website Pelayanan Bantuan Desa Pagiyanten</h1>
                            <p class="lead text-white-50 mb-4">Website Ini ditujukan untuk melayani bantuan kepada masyarakat Desa Pagiyanten demi mempermudah untuk mencapai masyarakat desa yang makmur</p>
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                                <a class="btn btn-outline-light btn-lg px-4" href="#features">Pelajari Lebih Lanjut</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Features section-->
        <section class="py-5 border-bottom" id="features">
            <div class="container px-5 my-5">
                <div class="row gx-5">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-cash-stack"></i></div>
                        <h2 class="h4 fw-bolder">BLT (Bantuan Langsung Tunai)</h2>
                        <p>BLT merupakan bantuan langsung tunai yang bersumber dari dana desa dan ditujukan kepada masyarakat desa yang kurang mampu dengan nominal uang tunai dengan metode dan mekanismenya diatur dalam Permendes 6/2020.</p>
                        <!-- <a class="text-decoration-none" href="#!">
                            Call to action
                            <i class="bi bi-arrow-right"></i>
                        </a> -->
                    </div>
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-egg-fried"></i></div>
                        <h2 class="h4 fw-bolder">BPNT (Bantuan Pangan Non Tunai)</h2>
                        <p>BPNT adalah bantuan pangan non tunai adalah bantuan sosial pangan dalam bentuk non tunai dari pemerintah yang diberikan kepada keluarga yang miskin setiap bulannya melalui mekanisme akun elektronik yang digunakan hanya untuk membeli bahan pangan di pedagang bahan pangan/e-warong yang bekerjasama dengan bank</p>
                        <!-- <a class="text-decoration-none" href="#!">
                            Call to action
                            <i class="bi bi-arrow-right"></i>
                        </a> -->
                    </div>
                    <div class="col-lg-4">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-people-fill"></i></div>
                        <h2 class="h4 fw-bolder">PKH (Program Keluarga Harapan)</h2>
                        <p>PKH program keluarga harapan adalah program pemberian bantuan sosial bersyarat kepada Keluarga Miskin (KM) yang ditetapkan sebagai keluarga penerima manfaat PKH dengan membuka akses keluarga miskin terutama ibu hamil dan anak untuk memanfaatkan berbagai fasilitas layanan kesehatan (faskes) dan fasilitas layanan pendidikan (fasdik) yang tersedia di sekitar mereka. </p>
                        <!-- <a class="text-decoration-none" href="#!">
                            Call to action
                            <i class="bi bi-arrow-right"></i>
                        </a> -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Pricing section-->
        <section class="jumbotron big-banner2 py-5 border-bottom" id="persyaratan">
            <div class="container px-5 my-5">
                <div class="text-center mb-5">
                    <h2 class="fw-bolder">Persyaratan Masyarakat Penerima Bantuan</h2>
                    <p class="lead mb-0">Berikut adalah persyaratan masyarakat yang berhak mendapat bantuan</p>
                </div>
                <div class="row gx-5 justify-content-center">
                    <!-- Pricing card free-->
                    <div class="col-lg-6 col-xl-4">
                        <div class="card mb-5 mb-xl-0">
                            <div class="card-body p-5">
                                <div class="small text-uppercase fw-bold text-muted">BLT (Bantuan Langsung Tunai)</div>
                                <div class="mb-3">
                                    <span class="display-4 fw-bold">BLT</span>
                                </div>
                                <ul class="list-unstyled mb-4">
                                    <li class="mb-2">
                                        <i class="bi bi-check text-primary"></i>
                                        <strong>Warga Negara Indonesia</strong>
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-check text-primary"></i>
                                        Berpenghasilan < 1.000.000/bulan
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-check text-primary"></i>
                                        Memiliki Kartu KIP
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-check text-primary"></i>
                                        Terdaftar dalam golongan masyarakat miskin
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Pricing card pro-->
                    <div class="col-lg-6 col-xl-4">
                        <div class="card mb-5 mb-xl-0">
                            <div class="card-body p-5">
                                <div class="small text-uppercase fw-bold text-muted">
                                    <!-- <i class="bi bi-star-fill text-warning"></i> -->
                                    BPNT (Bantuan Pangan Non Tunai)
                                </div>
                                <div class="mb-3">
                                    <span class="display-4 fw-bold">BPNT</span>
                                </div>
                                <ul class="list-unstyled mb-4">
                                    <li class="mb-2">
                                        <i class="bi bi-check text-primary"></i>
                                        <strong>Warga Negara Indonesia</strong>
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-check text-primary"></i>
                                        Berpenghasilan < 500.000/bulan
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-check text-primary"></i>
                                        Memiliki Kartu KIP
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-check text-primary"></i>
                                        Terdaftar dalam golongan masyarakat miskin
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Pricing card enterprise-->
                    <div class="col-lg-6 col-xl-4">
                        <div class="card">
                            <div class="card-body p-5">
                                <div class="small text-uppercase fw-bold text-muted">PKH (Program Keluarga Harapan)</div>
                                <div class="mb-3">
                                    <span class="display-4 fw-bold">PKH</span>
                                </div>
                                <ul class="list-unstyled mb-4">
                                    <li class="mb-2">
                                        <i class="bi bi-check text-primary"></i>
                                        <strong>Warga Negara Indonesia</strong>
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-check text-primary"></i>
                                        Anak usia dini sebanyak-banyaknya dua anak di dalam keluarga PKH
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-check text-primary"></i>
                                        Ibu hamil/nifas dibatasi maksimal kehamilan kedua di dalam keluarga PKH
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-check text-primary"></i>
                                        Memiliki kartu KIP
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-check text-primary"></i>
                                        Anak usia sekolah SD/sederajat -SMA/sederajat sebanyak-banyaknya 1 anak dalam keluarga PKH
                                    </li>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonials section-->
        <section class="py-5 border-bottom">
            <div class="container px-5 my-5 px-5">
                <div class="text-center mb-5">
                    <h2 class="fw-bolder">Pemimpin Desa Berbicara</h2>
                    <p class="lead mb-0">Ini adalah pernyataan dari para Kepala Desa Pagiyanten dan Camat Adiwerna</p>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">
                        <!-- Testimonial 1-->
                        <div class="card mb-4">
                            <div class="card-body p-4">
                                <div class="d-flex">
                                    <div class="flex-shrink-0"><i class="bi bi-chat-right-quote-fill text-primary fs-1"></i></div>
                                    <div class="ms-4">
                                        <p class="mb-1">Dengan adanya sistem informasi ini, kami mengharapkan bantuan yang disalurkan agar tepat sasaran kepada masyarakat yang benar-benar membutuhkan.</p>
                                        <div class="small text-muted">- Seger, Kepala Desa Pagiyanten</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Testimonial 2-->
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="d-flex">
                                    <div class="flex-shrink-0"><i class="bi bi-chat-right-quote-fill text-primary fs-1"></i></div>
                                    <div class="ms-4">
                                        <p class="mb-1">Ini merupakan langkah awal untuk mengubah sistem penyaluran bantuan kepada masyarakat agar lebih tepat sasaran dan yang benar-benar membutuhkan.</p>
                                        <div class="small text-muted">- Mokhammad Natsir S.Sos, Camat Adiwerna</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact section-->
        <section class="bg-light py-5" id="ceknik">
            <div class="container px-5 my-5 px-5">
                <div class="text-center mb-5">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                    <h2 class="fw-bolder">CEK NIK</h2>
                    <p class="lead mb-0">Cek nik anda di sini untuk mengetahui kelayakkan mendapat bantuan</p>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">
                    <?php if($data['status'] == 'BPNT') : ?>
                        <div class="alert alert-success " role="alert">
                            <h4 class="alert-heading">Selamat!</h4>
                            <p>Atas nama <strong><?= $data['pend']['nama']; ?></strong>.<br> Dengan NIK <strong><?= $data['pend']['id']; ?></strong>.<br> Berhak Mendapat Bantuan BPNT (Bantuan Pangan Non Tunai).<br> Mohon untuk segera ajukan ke Balai Desa Pagiyanten untuk penerimaan bantuan.</p>
                        </div>
                    <?php elseif($data['status'] == 'BLT') : ?>
                        <div class="alert alert-success " role="alert">
                            <h4 class="alert-heading">Selamat!</h4>
                            <p>Atas nama <strong><?= $data['pend']['nama']; ?></strong>.<br> Dengan NIK <strong><?= $data['pend']['id']; ?></strong>.<br> Berhak Mendapat Bantuan BLT (Bantuan Langsung Tunai).<br> Mohon untuk segera ajukan ke Balai Desa Pagiyanten untuk penerimaan bantuan.</p>
                        </div>
                    <?php elseif($data['status'] == 'PKH') : ?>
                        <div class="alert alert-success " role="alert">
                            <h4 class="alert-heading">Selamat!</h4>
                            <p>Atas nama <strong><?= $data['pend']['nama']; ?></strong>.<br> Dengan NIK <strong><?= $data['pend']['id']; ?></strong>.<br> Berhak Mendapat Bantuan PKH (Program Keluarga Harapan).<br> Mohon untuk segera ajukan ke Balai Desa Pagiyanten untuk penerimaan bantuan.</p>
                        </div>
                    <?php elseif($data['status'] == 'No') : ?>
                        <div class="alert alert-danger " role="alert">
                            <h4 class="alert-heading">Mohon Maaf</h4>
                            <p>Atas nama <strong><?= $data['pend']['nama']; ?></strong>.<br> Dengan NIK <strong><?= $data['pend']['id']; ?></strong>.<br> Sudah tidak berhak menerima bantuan apapun.</p>
                        </div>
                    <?php elseif($data['status'] == 'Error') : ?>
                        <div class="alert alert-danger " role="alert">
                            <h4 class="alert-heading">Kesalahan Input NIK</h4>
                            <p>NIK yang anda masukkan tidak terdaftar atau salah mengisi NIK.<br> Silahkan cek terlebih dahulu NIK anda atau segera konfirmasi ke Balai Desa Pagiyanten. </p>
                        </div>
                    <?php endif; ?>
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form id="contactForm" action="<?= BASEURL; ?>/#ceknik" method="POST">
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="nik" name="nik" type="text" placeholder="nik" data-sb-validations="required" />
                                <label for="nik">NIK</label>
                            </div>
                            <!-- Submit Button-->
                            <div class="d-grid"><button class="btn btn-primary btn-lg" id="submitButton" type="submit" name="submit">Submit</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container px-5"><p class="m-0 text-center text-white">Copyright &copy; Desa Pagiyanten 2021</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?= BASEURL; ?>/js/script.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
