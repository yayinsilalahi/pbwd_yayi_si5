<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prodi</title>
</head>
<body>
    <h1>INI HALAMAN PROGRAM STUDI</h1>

    <h4>Halaman Tabel Program Studi</h4>
    <a href="/prodi/create">Tambah Program Studi</a>

<!-- INI CONTOH TABLE -->
    <table border="1" style="border-collapse: collapse;">
        <thead style="background-color: rgba(255, 0, 128, 0.884);">
            <tr>
                <th style="text-align: center">No</th>
                <th style="text-align: center">Nama Prodi</th>
                <th style="text-align: center">Fakultas</th>
                <th style="text-align: center">Kaprodi</th>
                <th style="text-align: center">Sekprodi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($prodi as $p)
            <tr>
                <td style="text-align: center">{{ $p->id}}</td>
                <td style="text-align: center">{{ $p->nama_prodi}}</td>
                <td style="text-align: center">{{ $p->fakultas}}</td>
                <td style="text-align: center">{{ $p->kaprodi}}</td>
                <td style="text-align: center">{{ $p->sekprodi}}</td>
            </tr>
                
            @endforeach
        </tbody>
    </table>
    <form action="" method="get"></form>
</body>
</html>