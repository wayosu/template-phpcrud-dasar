<?php
include 'database/koneksi.php';
include 'post/user.php';
include 'layout/header.php';
include 'layout/navbar.php';

$result = $mysqli->query("SELECT * FROM member WHERE id='$_GET[id]'");
$row = $result->fetch_object();
?>

<section class="py-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">

                <div class="card">
                    <div class="card-header">
                        <h4 class="my-0">Form Edit Member</h4>
                    </div>
                    <form action="" method="POST">
                        <div class="card-body">
                            <div class="form-group pb-2">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" name="nama" id="nama" value="<?= $row->nama; ?>">
                            </div>
                            <div class="form-group pb-2">
                                <label for="alamat">Alamat</label>
                                <textarea class="form-control" id="alamat" name="alamat" rows="3"><?= $row->alamat; ?></textarea>
                            </div>
                            <div class="form-group pb-2">
                                <label for="status">Status</label>
                                <input type="text" class="form-control" name="status" id="status" value="<?= $row->status; ?>">
                            </div>
                        </div>
                        <div class="card-footer bg-white"> 
                            <a href="member.php" class="btn btn-sm btn-secondary">Kembali</a>   
                            <input type="hidden" name="id" value="<?= $row->id; ?>">  
                            <button type="submit" name="edit_data" class="btn btn-sm btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>

<?php include 'layout/footer.php'; ?>