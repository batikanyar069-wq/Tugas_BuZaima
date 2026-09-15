<?php
include "config/koneksi.php";

class DaftarHadir
{
    public function tampilData()
    {
        global $conn;

        $sql = "SELECT daftar_hadir.*, siswa.nama_siswa
                FROM daftar_hadir
                INNER JOIN siswa
                ON daftar_hadir.id_siswa = siswa.id";

        $query = mysqli_query($conn, $sql);

        if (!$query) {
            die("SQL Error: " . mysqli_error($conn));
        }

        return $query;
    }

    public function update($id_siswa, $hari, $status)
    {
        global $conn;

        $kolom = "tgl" . $hari;

        $sql = "UPDATE daftar_hadir
                SET $kolom = '$status'
                WHERE id_siswa = '$id_siswa'";

        return mysqli_query($conn, $sql);
    }
}
?>