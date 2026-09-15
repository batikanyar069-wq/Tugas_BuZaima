<?php
include "models/DaftarHadir.php";

$model = new DaftarHadir();

if(isset($_POST['ubah'])){

    $model->update(
        $_POST['id_siswa'],
        $_POST['hari'],
        $_POST['status']
    );

}

$data = $model->tampilData();

include "views/daftar_hadir.php";
?>