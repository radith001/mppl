<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Alumni - {{ $record->nama }}</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 12px;
            line-height: 1.6;
            color: #000;
            margin: 20px;
        }

        h1 {
            text-align: center;
            font-size: 20px;
            margin-bottom: 20px;
        }

        .section {
            margin-bottom: 15px;
        }

        .label {
            font-weight: bold;
            width: 150px;
            display: inline-block;
        }

        .value {
            display: inline-block;
        }

        .image {
            text-align: center;
            margin-top: 20px;
        }

        .image img {
            width: 100px;
            height: auto;
            border-radius: 8px;
        }

        .box {
            border: 1px solid #444;
            padding: 15px;
        }
    </style>
</head>
<body>
    <h1>Data Alumni Universitas Metro Rajeg</h1>

    <div class="box">
        <div class="section"><span class="label">Nama:</span> <span class="value">{{ $record->nama }}</span></div>
        <div class="section"><span class="label">NIM:</span> <span class="value">{{ $record->nim }}</span></div>
        <div class="section"><span class="label">Program Studi:</span> <span class="value">{{ $record->prodi }}</span></div>
        <div class="section"><span class="label">Tahun Masuk:</span> <span class="value">{{ $record->tahun_masuk }}</span></div>
        <div class="section"><span class="label">Tahun Lulus:</span> <span class="value">{{ $record->tahun_lulus ?? '-' }}</span></div>
        <div class="section"><span class="label">IPK:</span> <span class="value">{{ $record->IPK ?? '-' }}</span></div>
        <div class="section"><span class="label">Email:</span> <span class="value">{{ $record->email ?? '-' }}</span></div>
        <div class="section"><span class="label">No HP:</span> <span class="value">{{ $record->no_hp ?? '-' }}</span></div>
        <div class="section"><span class="label">Pekerjaan:</span> <span class="value">{{ $record->pekerjaan ?? '-' }}</span></div>
        <div class="section"><span class="label">Instansi:</span> <span class="value">{{ $record->instansi ?? '-' }}</span></div>
        <div class="section"><span class="label">Alamat:</span> <span class="value">{{ $record->alamat ?? '-' }}</span></div>
    </div>

    @if($record->image)
    <div class="image">
        <p>Foto Alumni:</p>
        <img src="{{ public_path('storage/' . $record->image) }}" alt="Foto Alumni">
    </div>
    @endif
</body>
</html>
