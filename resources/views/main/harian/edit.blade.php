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
                        <form action="{{ route('nilai_harian.update', $result->nilai_harian_id) }}" method="POST">
                            @method('put')
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Mapel</label>
                                    <select name="mapel_id" id="mapel_id" class="form-control" required>
                                        <option value="">-</option>
                                        @foreach ($mapel as $mapel)
                                            <option value="{{ $mapel->mapel_id }}"
                                                {{ old('mapel_id', $result->mapel_id) == $mapel->mapel_id ? 'selected' : '' }}>
                                                {{ $mapel->nama_mapel }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Guru</label>
                                    <select name="user_id" id="user_id" class="form-control" required>
                                        <option value="">-</option>
                                        @foreach ($user as $guru)
                                            <option value="{{ $guru->user_id }}"
                                                {{ old('user_id', $result->user_id) == $guru->user_id ? 'selected' : '' }}>
                                                {{ $guru->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Siswa</label>
                                    <select name="siswa_id" id="siswa_id" class="form-control">
                                        <option value="">-</option>
                                        @foreach ($siswa as $siswa)
                                            <option value="{{ $siswa->siswa_id }}"
                                                {{ old('siswa_id', $result->siswa_id) == $siswa->siswa_id ? 'selected' : '' }}>
                                                {{ $siswa->nama }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Pertemuan</label>
                                    <input type="text" name="pertemuan" class="form-control" placeholder="pertemuan"
                                        value="{{ $result->pertemuan }}" required>
                                </div>
                                <div class="form-group">
                                    <label>Nilai</label>
                                    <input type="text" name="nilai" class="form-control" placeholder="nilai"
                                        value="{{ $result->nilai }}" required>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                <a href="{{ url('main/nilai_harian') }}" class="btn btn-danger">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
