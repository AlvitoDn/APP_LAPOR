<?= $this->extend('layouts/UserLayouts') ?>
<?= $this->section('content') ?>
<div class="tm-section-wrap">
    <div class="tm-parallax" data-parallax="scroll" data-image-src="<?= base_url() ?>/masyarakat/img/img-01.jpg"></div>
    <section id="home" class="tm-section">
        <?php if (!empty(session()->getFlashdata('message'))) : ?>

            <div class="alert alert-success">
                <?php echo session()->getFlashdata('message'); ?>
            </div>

        <?php endif ?>
        <h2 class="tm-text-primary">Welcome to APP Pengaduan Masyarakat</h2>
        <hr class="mb-5">
        <div class="row">
            <div class="col-lg-12 tm-col-home mb-4">
                <div class="tm-text-container">
                    <p>
                        Selamat datang di App Pengaduan Masyarakat. Disini anda bisa melaporkan berbagai macam keluhan kepada kami dan akan kami usahakan yang terbaik untuk menaggapinya.
                    </p>
                </div>
            </div>
        </div>
        <hr class="tm-hr-short mb-5">
        <div class="row tm-row-home">
            <div class="tm-col-home tm-col-home-l">
                <div class="media mb-4">
                    <i class="fas fa-scroll fa-4x tm-post-icon tm-text-primary"></i>
                    <div class="media-body">
                        <a href="#" class="d-block mb-2 tm-text-primary tm-post-link">Trust Us!</a>
                        <p>
                            Kami selalu berusaha untuk menanggapi berbagai laporan dengan sigap, cepat, dan terpercaya.</p>
                    </div>
                </div>
                <div class="media mt-4">
                    <i class="fas fa-cloud-sun fa-4x tm-post-icon tm-text-primary"></i>
                    <div class="media-body">
                        <a href="#" class="d-block mb-2 tm-text-primary tm-post-link">Sedia Setiap Saat!</a>
                        <p>
                            Bersedia melakukan pelayanan selama 24/7 kepada masyarakat.
                        </p>
                    </div>
                </div>
                <div class="media mt-4">
                    <i class="fas fa-user-shield fa-4x tm-post-icon tm-text-primary"></i>
                    <div class="media-body">
                        <a href="#" class="d-block mb-2 tm-text-primary tm-post-link">Aman & Terpercaya!</a>
                        <p>
                            Solusi terbaik selalu menjadi prioritas kami & sudah menjadi kepercayaan oleh berbagai masyarakat.
                        </p>
                    </div>
                </div>
            </div>
            <div class="tm-col-home mr-0 ml-auto">
                <div class="tm-img-home-container"></div>
            </div>
        </div>
    </section>
</div>
<div class="tm-section-wrap">
    <div class="tm-parallax" data-parallax="scroll" data-image-src="<?= base_url() ?>/masyarakat/img/img-04.jpg"></div>
    <div id="contact" class="tm-section">
        <h2 class="tm-text-primary">Laporkan Keluhan Anda Kepada Kami</h2>
        <hr class="mb-5">
        <div class="row">
            <div class="col-xl-6 tm-contact-col-l mb-4">
                <form id="formlapor" action="/spengaduan" method="POST" class="tm-contact-form">
                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <input type="text" name="nik" id="nik" class="form-control rounded-0" placeholder="NIK" required />
                    </div>
                    <div class="form-group">
                        <label for="isi_laporan">Isi Laporan</label>
                        <textarea rows="8" name="isi_laporan" class="form-control rounded-0" placeholder="Laporan yang ingin di sampaikan" required></textarea>
                    </div>
                    <div class="form-group tm-text-right">
                        <button type="submit" class="btn btn-primary">Send</button>
                    </div>
                    <ul class="tm-contact-links mb-4">
                        <li class="mb-2">
                            <a href="tel:085895777915">
                                <i class="fas fa-phone mr-2 tm-contact-link-icon"></i>
                                Tel: 085895777915
                            </a>
                        </li>
                        <li>
                            <a href="apppengaduan@email.com">
                                <i class="fas fa-at mr-2 tm-contact-link-icon"></i>
                                Email: apppengaduan@email.com
                            </a>
                        </li>
                    </ul>
                    <ul class="tm-contact-social">
                        <li><a href="https://fb.com" class="tm-social-link"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com" class="tm-social-link"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="https://instagram.com" class="tm-social-link"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="https://youtube.com" class="tm-social-link"><i class="fab fa-youtube"></i></a></li>
                    </ul>
            </div>
            <div class="col-xl-6 tm-contact-col-r">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control rounded-0" placeholder="Nama" required />
                </div>
                <div class="form-group">
                    <label for="foto">Sertakan Foto</label>
                    <input type="file" name="foto" id="foto" class="form-control rounded-0" placeholder="Sertakan Gambar Pengaduan" />
                </div>

                </form>


                <!-- Links -->

            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>