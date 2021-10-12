<?php
include 'layout/header.php';
include 'layout/navbar.php';
?>

<section id="hero">
    <div class="px-4 py-5 my-5 text-center">
        <h1 class="display-5 fw-bold">PHP CRUD Dasar</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Belajar membuat CRUD (Create, Read, Update, Delete) data dengan PHP dan MySQL.</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <a href="user.php" class="btn btn-primary px-4 gap-3">I'm Ready!</a>
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
                <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
            </div>
        </div>
        <div class="col d-flex align-items-start">
            <div class="icon-square bg-primary text-light flex-shrink-0 me-3">
                <i class="bi bi-wrench"></i>
            </div>
            <div>
                <h2>PHP</h2>
                <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
            </div>
        </div>
        <div class="col d-flex align-items-start">
            <div class="icon-square bg-primary text-light flex-shrink-0 me-3">
                <i class="bi bi-server"></i>
            </div>
            <div>
                <h2>MySQL</h2>
                <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
            </div>
        </div>
        <div class="col d-flex align-items-start">
            <div class="icon-square bg-primary text-light flex-shrink-0 me-3">
                <i class="bi bi-grid-1x2"></i>
            </div>
            <div>
                <h2>Bootstrap</h2>
                <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
            </div>
        </div>
    </div>
</div>


<?php include 'layout/footer.php'; ?>