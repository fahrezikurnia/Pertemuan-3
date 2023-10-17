<?= $this->extend('v_layout') ?> <!-- Mengambil template dari v_layout.php -->

<?= $this->section('content') ?> <!-- Mengambil content dari v_layout.php -->

<section>
    <h1><?= $judul ?></h1>
    <div class="about-container">
        <div class="about-picture">
            <img src="<?= base_url() ?>/img/fkd.jpg" alt="profile">
        </div>
        <div class="about-description">
            <div class="typography">
                <p align="justify">
                    Nama saya Fahrezi Kurnia Dani, saya adalah seorang mahasiswa Web Programmer. Saat ini saya sedang
                    belajar di Universitas Bina Sarana Informatika, Fakultas Teknik Informatika, Jurusan
                    Rekayasa Perangkat Lunak. Saya ingin sekali mengetahui banyak hal di dunia pemrograman!
                </p>
                <p align="justify">
                    Alamat rumah saya di Gg.Gotong royong, Pabuaran, Cibinong, Kab.Bogor.<br>
                    Tempat lahir saya di Cibinong, Bogor.<br>
                    Olahraga yang saya sukai adalah Sepak Bola.<br>
                </p>
                <p align="justify">
                    Bahasa pemrograman yang saya sukai adalah PHP, karena saya merasa PHP sangat mudah untuk
                    dipelajari dan dipahami. Selain itu, PHP juga memiliki banyak framework yang dapat
                    mempermudah pekerjaan seorang programmer. Framework PHP yang saya sukai adalah Laravel 8+.
                </p> 
            </div>
            <ul class="social-media">
                <li>
                    <a href="https://github.com/fahrezikurnia" target="_blank">
                        Github
                    </a>
                </li>
                <li>
                    <a href="https://instagram.com/fahrezikurnia_" target="_blank">
                        Instagram
                    </a>
                </li>
            </ul>
        </div>
    </div>
</section>

<?= $this->endSection() ?> <!-- Mengakhiri content dari v_layout.php -->