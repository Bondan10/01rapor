@extends('layouts.layout_main')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">{{ $title }}</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('siswa.update', $result->siswa_id) }}" method="POST">
                            @method('put')
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>NIS</label>
                                    <input type="text" name="nis" class="form-control" placeholder="nis"
                                        value="{{ $result->nis }}" required readonly>
                                </div>
                                <div class="form-group">
                                    <label>Password </label>
                                    <input type="password" name="password" class="form-control" placeholder="password"
                                        value="{{ $result->password }}" required>
                                </div>
                                <div class="form-group">
                                    <label>Nama siswa</label>
                                    <input type="text" name="nama" class="form-control" placeholder="Nama siswa"
                                        value="{{ $result->nama }}" required>
                                </div>
                                <div class="form-group">
                                    <label>Kelas</label>
                                    <select name="kelas_id" id="kelas_id" class="form-control">
                                        <option value="">-</option>
                                        @foreach ($kelas as $row)
                                            <option value="{{ $row->kelas_id }}"
                                                {{ old('kelas_id', $result->kelas_id) == $row->kelas_id ? 'selected' : '' }}>
                                                {{ $row->nama_kelas }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="sex">Jenis Kelamin</label>
                                    <select name="sex" id="sex" class="form-control" required>
                                        <option value="L" {{ $result->sex == 'L' ? 'selected' : '' }}>
                                            Laki-laki</option>
                                        <option value="P" {{ $result->sex == 'P' ? 'selected' : '' }}>
                                            Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="tempat_lahir">Tempat Lahir</label>
                                    <input type="text" name="tempat_lahir" class="form-control"
                                        placeholder="Tempat Lahir" value="{{ $result->tempat_lahir }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_lahir">Tanggal Lahir</label>
                                    <input type="date" name="tanggal_lahir" class="form-control"
                                        value="{{ $result->tanggal_lahir }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="agama_id">Agama</label>
                                    <select name="agama_id" id="agama_id" class="form-control">
                                        <option value="">-</option>
                                        @foreach ($agama as $row)
                                            <option value="{{ $row->agama_id }}"
                                                {{ old('agama_id', $result->agama_id) == $row->agama_id ? 'selected' : '' }}>
                                                {{ $row->nama_agama }}
                                            </option>
                                        @endforeach
                                    </select>

                                </div>
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select name="status" id="status" class="form-control" required>
                                        <option value="Aktif" {{ $result->status == 'Aktif' ? 'selected' : '' }}>
                                            Aktif</option>
                                        <option value="Nonaktif" {{ $result->status == 'Nonaktif' ? 'selected' : '' }}>
                                            Nonaktif</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="anak_ke">Anak Ke</label>
                                    <input type="text" name="anak_ke" class="form-control" placeholder="Anak Ke"
                                        value="{{ $result->anak_ke }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" name="alamat" class="form-control" placeholder="Alamat"
                                        value="{{ $result->alamat }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="sekolah_asal">Sekolah Asal</label>
                                    <input type="text" name="sekolah_asal" class="form-control"
                                        placeholder="Sekolah Asal" value="{{ $result->sekolah_asal }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_masuk">Tanggal Masuk</label>
                                    <input type="date" name="tanggal_masuk" class="form-control"
                                        value="{{ $result->tanggal_masuk }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="ayah">Nama Ayah</label>
                                    <input type="text" name="ayah" class="form-control" placeholder="Nama Ayah"
                                        value="{{ $result->ayah }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="ibu">Nama Ibu</label>
                                    <input type="text" name="ibu" class="form-control" placeholder="Nama Ibu"
                                        value="{{ $result->ibu }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="pekerja_ayah">Pekerjaan Ayah</label>
                                    <input type="text" name="pekerja_ayah" class="form-control"
                                        placeholder="Pekerjaan Ayah" value="{{ $result->pekerja_ayah }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="pekerja_ibu">Pekerjaan Ibu</label>
                                    <input type="text" name="pekerja_ibu" class="form-control"
                                        placeholder="Pekerjaan Ibu" value="{{ $result->pekerja_ibu }}" required>
                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                <a href="{{ url('main/siswa') }}" class="btn btn-danger">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
