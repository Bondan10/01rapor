@extends('layouts.layout_main')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">

                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        {!! implode('', $errors->all('<li>:message</li>')) !!}
                    </div>
                @endif
                <!-- left column -->
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title"> {{ $title }}</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->

                        <form action="{{ route('siswa.store') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nis">NIS (minimal 6 angka)</label>
                                    <input type="text" name="nis" id="nis" class="form-control"
                                        placeholder="NIS" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password : Otomatis di ambil dari NIS</label>
                                    <input type="password" name="password" id="password" class="form-control"
                                        placeholder="Password" required readonly>
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama siswa</label>
                                    <input type="text" name="nama" class="form-control" placeholder="Nama siswa"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="agama_id">Agama</label>
                                    <select name="agama_id" id="agama_id" class="form-control" required>
                                        <option value="">-</option>
                                        @foreach ($agama as $item)
                                            <option value="{{ $item->agama_id }}">{{ $item->nama_agama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="sex">Jenis Kelamin</label>
                                    <select name="sex" id="sex" class="form-control" required>
                                        <option value="L">Laki-laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="tempat_lahir">Tempat Lahir</label>
                                    <input type="text" name="tempat_lahir" class="form-control"
                                        placeholder="Tempat Lahir" required>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_lahir">Tanggal Lahir</label>
                                    <input type="date" name="tanggal_lahir" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select name="status" id="status" class="form-control" required>
                                        <option value="Aktif">Aktif</option>
                                        <option value="Nonaktif">Nonaktif</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="anak_ke">Anak Ke</label>
                                    <input type="text" name="anak_ke" class="form-control" placeholder="Anak Ke"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" name="alamat" class="form-control" placeholder="Alamat" required>
                                </div>
                                <div class="form-group">
                                    <label for="sekolah_asal">Sekolah Asal</label>
                                    <input type="text" name="sekolah_asal" class="form-control"
                                        placeholder="Sekolah Asal" required>
                                </div>
                                <div class="form-group">
                                    <label for="kelas_id">Kelas</label>
                                    <select name="kelas_id" id="kelas_id" class="form-control" required>
                                        <option value="">-</option>
                                        @foreach ($kelas as $item)
                                            <option value="{{ $item->kelas_id }}">{{ $item->nama_kelas }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_masuk">Tanggal Masuk</label>
                                    <input type="date" name="tanggal_masuk" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="ayah">Nama Ayah</label>
                                    <input type="text" name="ayah" class="form-control" placeholder="Nama Ayah"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="ibu">Nama Ibu</label>
                                    <input type="text" name="ibu" class="form-control" placeholder="Nama Ibu"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="pekerja_ayah">Pekerjaan Ayah</label>
                                    <input type="text" name="pekerja_ayah" class="form-control"
                                        placeholder="Pekerjaan Ayah" required>
                                </div>
                                <div class="form-group">
                                    <label for="pekerja_ibu">Pekerjaan Ibu</label>
                                    <input type="text" name="pekerja_ibu" class="form-control"
                                        placeholder="Pekerjaan Ibu" required>
                                </div>
                            </div>

                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{ url('main/siswa') }}" class="btn btn-danger">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        const nis = document.querySelector("#nis");
        const password = document.querySelector("#password");

        nis.addEventListener("keyup", function() {
            let preslug = nis.value;
            preslug = preslug.replace(/ /g, "-");
            password.value = preslug.toLowerCase();
        });
    </script>
@endsection
