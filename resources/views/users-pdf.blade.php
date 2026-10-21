<h1>Data Pengguna</h1>

<table border="1" cellpadding="4">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Level</th>
    </tr>

    <?php
    $no = 1;
    foreach ($data as $user) {
    ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $user->username ?></td>
        <td><?= $user->email ?></td>
        <td><?= $user->level ?></td>
    </tr>
    <?php
    }
    ?>
</table>
