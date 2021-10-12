<?php
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
                            <h4 class="my-0">Data Users</h4>
                            <a href="create_user.php" class="btn btn-sm btn-primary">Create new user</a>
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
                                
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<?php include 'layout/footer.php'; ?>