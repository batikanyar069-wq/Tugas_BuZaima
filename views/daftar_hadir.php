<!DOCTYPE html>

<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Hadir</title>


<style>
    body{
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 25px;
        background: #eeeeee;
    }

    .container{
        width: 95%;
        margin: auto;
        background: white;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    h2{
        text-align: center;
        margin-top: 0;
        margin-bottom: 20px;
        color: #333;
    }

    .info{
        background: #f7f7f7;
        border: 1px solid #ddd;
        padding: 12px 15px;
        margin-bottom: 20px;
        border-radius: 5px;
    }

    .info p{
        margin: 6px 0;
        color: #333;
    }

    table{
        width: 100%;
        border-collapse: collapse;
        background: white;
        font-size: 13px;
    }

    th{
        background: #2196F3;
        color: white;
        padding: 9px 5px;
        border: 1px solid #ccc;
    }

    td{
        border: 1px solid #ccc;
        padding: 5px;
        text-align: center;
    }

    tr:nth-child(even){
        background: #fafafa;
    }

    tr:hover{
        background: #f1f8ff;
    }

    td:nth-child(2){
        text-align: left;
        padding-left: 10px;
        font-weight: bold;
    }

    select{
        width: 70px;
        padding: 3px;
        border: 1px solid #bbb;
        border-radius: 3px;
        background: white;
        cursor: pointer;
    }

    .table-wrapper{
        overflow-x: auto;
    }

    .footer{
        margin-top: 15px;
        text-align: right;
        color: #777;
        font-size: 12px;
    }
</style>


</head>

<body>

<div class="container">

<h2>DAFTAR HADIR MURID</h2>

<div class="info">
    <p><b>Mata Pelajaran :</b> Rekayasa Perangkat Lunak</p>
    <p><b>Kelas :</b> XII RPL 3</p>
    <p><b>Nama Guru :</b> Bu Zaima</p>
    <p><b>Bulan :</b> Juli</p>
</div>

<div class="table-wrapper">

    <table>

        <tr>
            <th>No</th>
            <th>Nama Murid</th>

            <?php
            for($i=1; $i<=30; $i++){
                echo "<th>$i</th>";
            }
            ?>

        </tr>

        <?php
        $no = 1;

        while($row = mysqli_fetch_assoc($data)){
        ?>

        <tr>

            <td><?= $no++; ?></td>

            <td><?= $row['nama_siswa']; ?></td>

            <?php
            for($i=1; $i<=30; $i++){
            ?>

            <td>

                <form method="post">

                    <input type="hidden"
                           name="id_siswa"
                           value="<?= $row['id_siswa']; ?>">

                    <input type="hidden"
                           name="hari"
                           value="<?= $i; ?>">

                    <select name="status" onchange="this.form.submit()">

                        <option value="Hadir"
                            <?= $row["tgl$i"]=="Hadir" ? "selected" : ""; ?>>
                            Hadir
                        </option>

                        <option value="Izin"
                            <?= $row["tgl$i"]=="Izin" ? "selected" : ""; ?>>
                            Izin
                        </option>

                        <option value="Sakit"
                            <?= $row["tgl$i"]=="Sakit" ? "selected" : ""; ?>>
                            Sakit
                        </option>

                        <option value="Alfa"
                            <?= $row["tgl$i"]=="Alfa" ? "selected" : ""; ?>>
                            Alfa
                        </option>

                    </select>

                    <input type="hidden" name="ubah" value="1">

                </form>

            </td>

            <?php
            }
            ?>

        </tr>

        <?php
        }
        ?>

    </table>

</div>

<div class="footer">
    Daftar Hadir - XII RPL 3
</div>
```

</div>

</body>
</html>
