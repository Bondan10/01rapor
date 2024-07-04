@extends('layouts.layout_main')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <!-- Detail Box -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">{{ $title }}</h3>
                        </div>
                        <div class="card-body">

                            <table style="width: 60%" border="0">
                                <tr>
                                    <td>NIS</td>
                                    <td>:</td>
                                    <td>{{ $siswa->nis }}</td>
                                </tr>
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td>{{ $siswa->nama }}</td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin</td>
                                    <td>:</td>
                                    <td>{{ $siswa->sex }}</td>
                                </tr>
                                <tr>
                                    <td>Tempat Lahir</td>
                                    <td>:</td>
                                    <td>{{ $siswa->tempat_lahir }}</td>
                                </tr>
                                <tr>
                                    <td>Tanggal Lahir</td>
                                    <td>:</td>
                                    <td>{{ $siswa->tanggal_lahir }}</td>
                                </tr>
                                <tr>
                                    <td>Agama</td>
                                    <td>:</td>
                                    <td>{{ $siswa->agama->nama_agama }}</td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td>:</td>
                                    <td>{{ $siswa->status }}</td>
                                </tr>
                                <tr>
                                    <td>Anak Ke</td>
                                    <td>:</td>
                                    <td>{{ $siswa->anak_ke }}</td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td>{{ $siswa->alamat }}</td>
                                </tr>
                                <tr>
                                    <td>Sekolah Asal</td>
                                    <td>:</td>
                                    <td>{{ $siswa->sekolah_asal }}</td>
                                </tr>
                                <tr>
                                    <td>Kelas ID</td>
                                    <td>:</td>
                                    <td>{{ $siswa->kelas->nama_kelas }}</td>
                                </tr>
                                <tr>
                                    <td>Tanggal Masuk</td>
                                    <td>:</td>
                                    <td>{{ $siswa->tanggal_masuk }}</td>
                                </tr>
                                <tr>
                                    <td>Nama Ayah</td>
                                    <td>:</td>
                                    <td>{{ $siswa->ayah }}</td>
                                </tr>
                                <tr>
                                    <td>Nama Ibu</td>
                                    <td>:</td>
                                    <td>{{ $siswa->ibu }}</td>
                                </tr>
                                <tr>
                                    <td>Pekerjaan Ayah</td>
                                    <td>:</td>
                                    <td>{{ $siswa->pekerja_ayah }}</td>
                                </tr>
                                <tr>
                                    <td>Pekerjaan Ibu</td>
                                    <td>:</td>
                                    <td>{{ $siswa->pekerja_ibu }}</td>
                                </tr>
                            </table>

                        </div>
                        <hr>
                        <a href="{{ url('main/siswa') }}" class="btn btn-danger">Kembali</a>
                    </div>
                    <!-- Detail Box -->
                </div>
            </div>
        </div>
    </section>
@endsection
