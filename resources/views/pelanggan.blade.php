
<!DOCTYPE html>
<html lang="en">
<head>
    <title>DATA PELANGGAN</title>
</head>
<body>

<h1>Data Pelanggan</h1>

<a href="/tplg"><button>Tambah Pelanggan</button></a>


<table border="1">
    <tr>
        <th>No</th>
        <th>Nama Pelanggan</th>
        <th>Alamat</th>
        <th>No HP</th>
    </tr>

    <?php
    $no=1;
    foreach ($pelanggan as $key => $value) {
    ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $value->nama_plg ?></td>
        <td><?= $value->alamat_plg ?></td>
        <td><?= $value->no_hp ?></td>
    </tr>
    <?php
    }
    ?>
</table>


<a href="/home"><button>Kembali ke Dashboard</button></a>

</body>
</html>
