
@extends('template')
@section('content')

<nav class="navbar navbar-dark bg-primary no-print mb-4">
    <form action="/home" method="GET" class="d-flex flex-wrap align-items-center mb-0">
        <button type="submit" class="btn btn-link text-white text-decoration-none" formaction="/home">Home</button>
        <button type="submit" class="btn btn-link text-white text-decoration-none" formaction="/karyawan">Karyawan</button>
        <button type="submit" class="btn btn-link text-white text-decoration-none" formaction="/pelanggan">Pelanggan</button>
        <button type="submit" class="btn btn-link text-white text-decoration-none" formaction="/tkry">Tambah Karyawan</button>
        <button type="submit" class="btn btn-link text-white text-decoration-none" formaction="/tplg">Tambah Pelanggan</button>
        <button type="submit" class="btn btn-light btn-sm ms-auto" formaction="/logout">Logout</button>
    </form>
</nav>

<h1 class="no-print">Welcome to the dashboard <?php echo session('u') ?></h1><br>
<h1 class="print-title">Data Pengguna</h1>

<form class="no-print" action="{{ url('/home') }}" method="GET">
    <label for="from">Dari Tanggal:</label>
    <input type="date" id="from" name="from" value="{{ request('from') }}">

    <label for="to">Sampai Tanggal:</label>
    <input type="date" id="to" name="to" value="{{ request('to') }}">

    <button type="submit" class="btn btn-secondary">Filter</button>
    <a href="/home" class="btn btn-secondary">Reset</a>
</form>

<p class="no-print">
    <a href="/users/export/excel?from={{ request('from') }}&to={{ request('to') }}">
        <button type="button" class="btn btn-secondary">Export Excel</button>
    </a>
    <a href="/users/export/pdf?from={{ request('from') }}&to={{ request('to') }}" target="_blank">
        <button type="button" class="btn btn-secondary">Export PDF</button>
    </a>
    <button type="button" onclick="window.print()" class="btn btn-secondary">Print</button>
</p>

<br>

<table id="users-table" class="table table-bordered table-striped table-hover align-middle">
    <tr>
        <th>No</th>
        <th>Username</th>
        <th>Email</th>
        <th>Level</th>
        <th>Aksi</th>
    </tr>

    <?php
    $no=1;
    foreach ($data as $key => $value) {
    ?>

    <tr>
        <td><?= $no++ ?></td>
        <td><?= $value->username ?></td>
        <td><?= $value->email ?></td>
        <td><?= $value->level ?></td>
        <td>
            <form action="/edit/<?= $value->id_user ?>" method="GET" style="display:inline;">
                <button type="submit" class="btn btn-warning btn-sm">Edit</button>
            </form>

            <form action="/delete/<?= $value->id_user ?>" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
            </form>
        </td>
    </tr>

    <?php
    }
    ?>

</table>

<br>

@endsection
