<?php
include 'layout/header.php';
include 'layout/navbar.php';
?>

<section id="hero" class="overflow-hidden">
    <div class="container py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-12 col-sm-8 col-lg-6">
                <img src="public/img/programming.svg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
            </div>
            <div class="col-md-6">
                <h1 class="display-5 fw-bold lh-1 mb-3">PHP CRUD Dasar</h1>
                <p class="lead">Belajar membuat CRUD (Create, Read, Update, Delete) data dengan PHP dan MySQL.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <a href="member.php" class="btn btn-primary btn-lg px-4 me-md-2">I'm Ready!</a>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container px-4 py-5">
    <h2 class="pb-2 border-bottom">Build with</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-2">
        <div class="col d-flex align-items-start">
            <div class="icon-square bg-primary text-light flex-shrink-0 me-3">
                <i class="bi bi-code-slash"></i>
            </div>
            <div>
                <h2>Code Editor</h2>
                <p>
                    Code editor adalah salah satu jenis dari text editor yang tersedia. Code editor ini merupakan text editor yang dikhususkan untuk menuliskan kode-kode dari perangkat lunak yang sedang dikembangkan.
                </p>
            </div>
        </div>
        <div class="col d-flex align-items-start">
            <div class="icon-square bg-primary text-light flex-shrink-0 me-3">
                <i class="bi bi-wrench"></i>
            </div>
            <div>
                <h2>PHP</h2>
                <p>
                    PHP merupakan bahasa pemrograman server-side, maka script dari PHP nantinya akan diproses di server. Jenis server yang sering digunakan bersama dengan PHP antara lain Apache, Nginx, dan LiteSpeed.
                </p>
            </div>
        </div>
        <div class="col d-flex align-items-start">
            <div class="icon-square bg-primary text-light flex-shrink-0 me-3">
                <i class="bi bi-server"></i>
            </div>
            <div>
                <h2>MySQL</h2>
                <p>
                    MySQL adalah DBMS yang open source dengan dua bentuk lisensi, yaitu Free Software (perangkat lunak bebas) dan Shareware (perangkat lunak berpemilik yang penggunaannya terbatas).
                </p>
            </div>
        </div>
        <div class="col d-flex align-items-start">
            <div class="icon-square bg-primary text-light flex-shrink-0 me-3">
                <i class="bi bi-grid-1x2"></i>
            </div>
            <div>
                <h2>Bootstrap</h2>
                <p>
                    Bootstrap adalah framework front-end gratis. Selain mudah digunakan, framework ini juga mempersingkat pekerjaan developer sehingga tidak perlu menulis sintaks secara manual dan berulang kali.
                </p>
            </div>
        </div>
    </div>
</div>


<?php include 'layout/footer.php'; ?>