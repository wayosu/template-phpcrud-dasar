<?php
include 'database/koneksi.php';
include 'post/user.php';
include 'layout/header.php';
include 'layout/navbar.php';
?>

<section class="py-4">
    <div class="container">
        <div class="row">
            <div class="col">

                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <h4 class="my-0">Data Members</h4>
                            <a href="create_member.php" class="btn btn-sm btn-primary">Create new member</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="table_id" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th width="5%">#</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $result = $mysqli->query("SELECT * FROM member");
                                    $no = 1;
                                    while($row = $result->fetch_object()){
                                        echo"
                                            <tr>
                                                <td>$no</td>
                                                <td>$row->nama</td>
                                                <td>$row->alamat</td>
                                                <td>$row->status</td>
                                                <td>
                                        ";
                                            ?>
                                                    <form action="" method="POST">
                                                        <a href="edit_member.php?id=<?= $row->id; ?>" class="btn btn-warning">Edit</a>
                                                        <input type="hidden" name="id" value="<?= $row->id; ?>">
                                                        <button type="submit" name="hapus_data" class="btn btn-danger" onclick="return confirm('Anda yakin menghapus data ini?')">Hapus</button>
                                                    </form>
                                            <?php
                                        echo"
                                                </td>
                                            </tr>
                                        ";
                                        $no++;
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<?php include 'layout/footer.php'; ?>