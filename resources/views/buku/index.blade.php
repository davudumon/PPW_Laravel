<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Blurry Cafe')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>


<body>
    <table class="table-stripped">
    <thead>
        <tr>
            <th>Nomor</th>
            <th>ID</th>
            <th>Judul Buku</th>
            <th>Penulis</th>
            <th>Harga</th>
            <th>Tanggal Terbit</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data_buku as $index => $buku)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $buku->id }}</td>
            <td>{{ $buku->judul }}</td>
            <td>{{ $buku->penulis }}</td>
            <td>{{ "Rp. ".number_format($buku->harga, 2, ',', '.') }}</td>
            <td>{{ $buku->tgl_terbit }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</body>
