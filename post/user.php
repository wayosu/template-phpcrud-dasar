<?php
    if(isset($_POST['simpan_data'])) {
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $status = $_POST['status'];

        $sql = $mysqli->query("INSERT INTO member(nama,alamat,status) VALUES ('$nama','$alamat','$status')");
        if($sql){
            ?>
                <script>
                    alert("Data berhasil disimpan.");
                </script>
            <?php
        }
    }

    if(isset($_POST['hapus_data'])) {
        $id = $_POST['id'];
        
        $sql = $mysqli->query("DELETE FROM member WHERE id='$id'");
        if($sql){
            ?>
                <script>
                    alert("Data berhasil dihapus.");
                </script>
            <?php
        }
    }

    if(isset($_POST['edit_data'])) {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $status = $_POST['status'];

        $sql = $mysqli->query("UPDATE member SET nama='$nama',alamat='$alamat',status='$status' WHERE id='$id'");
        if($sql){
            ?>
                <script>
                    alert("Data berhasil diedit.");
                </script>
            <?php
        }
    }
?>