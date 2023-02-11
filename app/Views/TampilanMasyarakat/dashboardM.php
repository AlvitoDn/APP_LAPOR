<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>LaporSkuyy</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="<?= base_url() ?>/../assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?= base_url() ?>/../css/styles.css" rel="stylesheet" />
</head>
<style>
    input[type=file]::file-selector-button {
  margin-right: 20px;
  margin-left: 20px;
  border: none;
  background: #084cdf;
  padding: 10px 20px;
  border-radius: 10px;
  color: #fff;
  cursor: pointer;
  transition: background .2s ease-in-out;
}

input[type=file]::file-selector-button:hover {
  background: black;
}
</style>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top">Lapor Skuyy!!</a>
            <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#Lapor">Lapor</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/balasan">Balasan </a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/logout">Log Out</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead bg-primary text-white text-center" >
        <div class="container d-flex align-items-center flex-column">
            <!-- Masthead Avatar Image-->
            <img class="masthead-avatar mb-5" src="../assets/img/avataaars.svg" alt="..." />
            <!-- Masthead Heading-->
            <h1 class="masthead-heading text-uppercase mb-0">APP Pengaduan Masyarakat</h1>
            <!-- Masthead Subheading--> <br>
            <p class="masthead-subheading font-weight-light mb-0">Tempat untuk mengajukan berbagai macam keluhan kepada kami. Mulai dari keluhan Fasilitas umum hingga melaporkan berbagai kejadian yang terjadi agar bisa kami tangani secepatnya.</p>

            <br>
            <br>
            <br>
        </div>
    </header>
    <!-- Contact Section-->
    <section class="page-section" id="Lapor">
        <div class="container">
            <!-- Contact Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Lapor Sekarang!</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Contact Section Form-->
            <div class="row justify-content-center mt-5 mb-5">
                <div class="col-lg-8 col-xl-10  ">
                    <div class="card">
                        <form id="form" action="spengaduan" method="POST" enctype="multipart/form-data">
                        <div class="card-body rounded">
                                <!-- Name input-->
                                <div class="form-floating mb-3">
                                    <input autocomplete="off" class="form-control" id="nama" name="nama" type="text" placeholder="Enter your name..." required />
                                    <label for="name">Nama Lengkap</label>
                                    <div class="invalid-feedback" data-sb-feedback="name:required">Nama perlu diisi.</div>
                                </div>
                                <!-- Email address input-->
                                <div class="form-floating mb-3">
                                    <input autocomplete="off" class="form-control" id="nik" name="nik" type="text" placeholder="NIK" required />
                                    <label for="nik">Nomor NIK</label>
                                    <div class="invalid-feedback" data-sb-feedback="nik:required">Nomor NIK perlu diisi.</div>
                                </div>
                                <!-- Phone number input-->
                                <div class="form-floating mb-3">
                                    <input autocomplete="off" class="form-control" id="telp" type="tel" placeholder="(123) 456-7890" required />
                                    <label for="telp">Nomor Telepon</label>
                                    <div class="invalid-feedback" data-sb-feedback="telp:required">No. Telepon perlu diisi.</div>
                                </div>
                                <!-- Addres Input -->
                                <div class="form-floating mb-3">
                                    <input autocomplete="off" class="form-control" id="alamat" type="text" placeholder="Address" />
                                    <label for="alamat">Alamat </label>
                                    <div class="invalid-feedback" data-sb-feedback="telp:required"> Alamat perlu diisi.</div>
                                </div>
                                <!-- Message input-->
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" id="isi_laporan" name="isi_laporan" type="text" placeholder="Enter your message here..." style="height: 20rem" required></textarea>
                                    <label for="isi_laporan">Laporan</label>
                                    <div class="invalid-feedback" data-sb-feedback="lapor:required">Laporan perlu diisi.</div>
                                </div>
                                <div class="form-floating mb-3">
                                    <input autocomplete="off" type="file" class="form-control" id="foto" name="foto" placeholder="Images" data-sb-validations="required">
                                    <label for="foto">Foto</label>
                                </div>
                                <!-- Submit success message-->
                                <!---->
                                <!-- This is what your users will see when the form-->
                                <!-- has successfully submitted-->
                                <div class="d-none" id="submitSuccessMessage">
                                    <div class="text-center mb-3">
                                        <div class="fw-bolder">Form submission successful!</div>
                                        To activate this form, sign up at
                                        <br />
                                        <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                    </div>
                                </div>
                                <!-- Submit error message-->
                                <!---->
                                <!-- This is what your users will see when there is-->
                                <!-- an error submitting the form-->
                                <div class="d-none" id="submitErrorMessage">
                                    <div class="text-center text-danger mb-3">Error sending message!</div>
                                </div>
                                <!-- Submit Button-->
                                <button class="mt-4 btn btn-primary btn-xl" id="submitButton" type="submit">Send</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer text-center">
        <div class="container">
            <div class="row">
                <!-- Footer Location-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Ponorogo</h4>
                    <p class="lead mb-0">
                    Jl. Jenderal Sudirman No.10, Krajan, Pakunden, Kec. Ponorogo, Kabupaten Ponorogo,
                        <br />
                       Jawa Timur 63416
                    </p>
                </div>
                <!-- Footer Social Icons-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Around the Web</h4>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
                </div>
                <!-- Footer About Text-->
                <div class="col-lg-4">
                    <h4 class="text-uppercase mb-4">About Us</h4>
                    <p class="lead mb-0">
                       Melayani Keluhan Anda Setiap Saat!
                        <a href="http://startbootstrap.com">Hubungi Kami</a>
                        .
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Copyright Section-->
    <div class="copyright py-4 text-center text-white">
        <div class="container"><small>Copyright &copy; Your Website 2022</small></div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="<?= base_url() ?>/../js/scripts.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>