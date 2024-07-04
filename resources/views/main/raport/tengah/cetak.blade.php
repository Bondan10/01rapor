<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raport {{ $title }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            margin: 20px;
        }

        .card {
            border: none;
            margin-bottom: 20px;
        }

        .card-header {
            background-color: #f4f6f9;
            padding: 10px;
            border-bottom: 1px solid #dcdcdc;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid #ccc;
            padding: 8px;
        }

        th {
            background-color: #f4f4f4;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        h3 {
            margin: 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <center>
                    <p><img width="15%" src="{{ url('garuda.png') }}" alt=""></p>
                    <h2>KUMPULAN NILAI TENGAH SEMESTER</h2>
                </center>
                <h3>Raport {{ $siswa->nama }}</h3>
                <p>Kelas: {{ $siswa->kelas->nama_kelas }}</p>
                <p>Agama: {{ $siswa->agama->nama_agama }}</p>
                <p>Tahun Pelajaran: {{ $tahun->tahun_akademik->nama_tahun }}</p>
                <p>Semester: {{ $tahun->semester->nama_semester }}</p>
                <table style="width: 100%; border: 0;">
                    <tr>
                        <td style="width: 30%;">Nama Sekolah</td>
                        <td style="width: 1%;">:</td>
                        <td style="width: 30%;">SMA Negeri 1 Amabi Efeto</td>
                        <td style="width: 15%;"></td>
                        <td style="width: 10%;">Kelas</td>
                        <td style="width: 1%;">:</td>
                        <td style="width: 30%;">{{ $siswa->kelas->nama_kelas }}</td>
                    </tr>
                    <tr>
                        <td style="width: 30%;">Alamat</td>
                        <td style="width: 1%;">:</td>
                        <td style="width: 30%;">Jl. Dusun V Hunaek Desa Fatukanutu</td>
                        <td style="width: 15%;"></td>
                        <td style="width: 10%;">Semester</td>
                        <td style="width: 1%;">:</td>
                        <td style="width: 30%;">{{ $tahun->semester->nama_semester }}</td>
                    </tr>
                </table>
            </div>
            <div class="card-body">
                <h4>Nilai Harian</h4>
                <table style="width: 100%">
                    <tr>
                        <th style="width: 90%">Mata Pelajaran</th>
                        <th style="width: 10%">Nilai</th>
                    </tr>
                    @foreach ($nilai_harian as $nilai)
                        <tr>
                            <td>{{ $nilai->mapel->nama_mapel }}</td>
                            <td>{{ $nilai->nilai }}</td>
                        </tr>
                    @endforeach
                </table>

                <h4>Nilai Tugas</h4>
                <table style="width: 100%">
                    <tr>
                        <th style="width: 90%">Mata Pelajaran</th>
                        <th style="width: 10%">Nilai</th>
                    </tr>
                    @foreach ($nilai_tugas as $nilai)
                        <tr>
                            <td>{{ $nilai->mapel->nama_mapel }}</td>
                            <td>{{ $nilai->nilai }}</td>
                        </tr>
                    @endforeach
                </table>

                <h4>Nilai UTS</h4>
                <table style="width: 100%">
                    <tr>
                        <th style="width: 90%">Mata Pelajaran</th>
                        <th style="width: 10%">Nilai</th>
                    </tr>
                    @foreach ($nilai_uts as $nilai)
                        <tr>
                            <td>{{ $nilai->mapel->nama_mapel }}</td>
                            <td>{{ $nilai->nilai }}</td>
                        </tr>
                    @endforeach
                </table>

                <h4>Nilai UAS</h4>
                <table style="width: 100%">
                    <tr>
                        <th style="width: 90%">Mata Pelajaran</th>
                        <th style="width: 10%">Nilai</th>
                    </tr>
                    @foreach ($nilai_uas as $nilai)
                        <tr>
                            <td>{{ $nilai->mapel->nama_mapel }}</td>
                            <td>{{ $nilai->nilai }}</td>
                        </tr>
                    @endforeach
                </table>

                <h4>Total</h4>
                <table style="width: 100%">
                    <tr>
                        <th style="width: 25%">Total Harian</th>
                        <th style="width: 25%">Total Tugas</th>
                        <th style="width: 25%">Total UTS</th>
                        <th style="width: 25%">Total UAS</th>
                    </tr>
                    <tr>
                        <td>{{ $total_harian }}</td>
                        <td>{{ $total_tugas }}</td>
                        <td>{{ $total_uts }}</td>
                        <td>{{ $total_uas }}</td>
                    </tr>
                </table>

                <h4>Nilai Rata-rata</h4>
                <table style="width: 100%">
                    <tr>
                        <th style="width: 25%">Rata-Rata Harian</th>
                        <th style="width: 25%">Rata-Rata Tugas</th>
                        <th style="width: 25%">Rata-Rata UTS</th>
                        <th style="width: 25%">Rata-Rata UAS</th>
                    </tr>
                    <tr>
                        <td>{{ number_format($rata_rata_harian, 2, ',', '.') }}</td>
                        <td>{{ number_format($rata_rata_tugas, 2, ',', '.') }}</td>
                        <td>{{ number_format($rata_rata_uts, 2, ',', '.') }}</td>
                        <td>{{ number_format($rata_rata_uas, 2, ',', '.') }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>

{{-- <script>
    window.onload = function() {
        window.print();
    }
</script> --}}

</html>
