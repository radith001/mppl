<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Alumni - Bulk</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 12px;
            line-height: 1.6;
            color: #333;
            margin: 30px;
            background-color: #fff;
        }

        h1 {
            text-align: center;
            font-size: 22px;
            margin-bottom: 30px;
            color: #222;
            border-bottom: 2px solid #ccc;
            padding-bottom: 10px;
        }

        .box {
            border: 1px solid #aaa;
            border-radius: 6px;
            padding: 20px;
            background-color: #fefefe;
        }

        .info-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 25px;
        }

        .info-table td {
            padding: 8px 10px;
            vertical-align: top;
        }

        .info-table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .label {
            font-weight: bold;
            width: 180px;
            color: #000;
        }

        .value {
            color: #333;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo {
            width: 150px;
            height: auto;
            margin-bottom: 0px;
            margin-top: -35px;
        }

        .image {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-top: 0px;
            text-align: center;
        }

        .image p {
            margin: 0 0 12px 0;
            font-weight: bold;
            font-size: 14px;
            color: #222;
        }

        .image img {
            width: 120px;
            height: auto;
            border-radius: 8px;
            border: 1px solid #ccc;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .page-break {
            page-break-after: always;
        }
    </style>
</head>
<body>

@foreach ($records as $record)
    <div class="header">
        <img src="{{ public_path('images/umr.png') }}" alt="Logo Kampus" class="logo">
    </div>

    <h1>Data Alumni Universitas Metro Rajeg</h1>

    <div class="box">
        <table class="info-table">
            <tr>
                <td class="label">Nama</td>
                <td class="value">{{ $record->nama }}</td>
            </tr>
            <tr>
                <td class="label">NIM</td>
                <td class="value">{{ $record->nim }}</td>
            </tr>
            <tr>
                <td class="label">Program Studi</td>
                <td class="value">{{ $record->prodi }}</td>
            </tr>
            <tr>
                <td class="label">Tahun Masuk</td>
                <td class="value">{{ $record->tahun_masuk }}</td>
            </tr>
            <tr>
                <td class="label">Tahun Lulus</td>
                <td class="value">{{ $record->tahun_lulus ?? '-' }}</td>
            </tr>
            <tr>
                <td class="label">IPK</td>
                <td class="value">{{ $record->IPK ?? '-' }}</td>
            </tr>
            <tr>
                <td class="label">Email</td>
                <td class="value">{{ $record->email ?? '-' }}</td>
            </tr>
            <tr>
                <td class="label">No HP</td>
                <td class="value">{{ $record->no_hp ?? '-' }}</td>
            </tr>
            <tr>
                <td class="label">Pekerjaan</td>
                <td class="value">{{ $record->pekerjaan ?? '-' }}</td>
            </tr>
            <tr>
                <td class="label">Instansi</td>
                <td class="value">{{ $record->instansi ?? '-' }}</td>
            </tr>
            <tr>
                <td class="label">Alamat</td>
                <td class="value">{{ $record->alamat ?? '-' }}</td>
            </tr>
        </table>
    </div>

    @if ($record->image)
    <div class="image">
        <p>Foto Alumni:</p>
        <img src="{{ public_path('storage/' . $record->image) }}" alt="Foto Alumni">
    </div>
    @endif

    @if (!$loop->last)
        <div class="page-break"></div>
    @endif
@endforeach

</body>
</html>
