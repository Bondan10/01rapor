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
                        <form action="{{ route('mapel.update', $result->mapel_id) }}" method="POST">
                            @method('put')
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Nama mapel</label>
                                    <input type="text" name="nama_mapel" class="form-control" placeholder="Nama mapel"
                                        value="{{ $result->nama_mapel }}" required>
                                </div>
                                <div class="form-group">
                                    <label>SKS</label>
                                    <input type="text" name="sks" class="form-control" placeholder="SKS"
                                        value="{{ $result->sks }}" required>
                                </div>
                                <div class="form-group">
                                    <label>Guru</label>
                                    <select name="user_id" id="user_id" class="form-control">
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
                                    <label>Kelompok</label>
                                    <select name="kelompok_id" id="kelompok_id" class="form-control">
                                        <option value="">-</option>
                                        @foreach ($kelompok as $row)
                                            <option value="{{ $row->kelompok_id }}"
                                                {{ old('kelompok_id', $result->kelompok_id) == $row->kelompok_id ? 'selected' : '' }}>
                                                {{ $row->nama_kelompok }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                <a href="{{ url('main/mapel') }}" class="btn btn-danger">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
