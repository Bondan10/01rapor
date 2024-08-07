@extends('layouts.layout_main')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title"> {{ $title }}</h3>
                        </div>

                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger" role="alert">
                                {!! implode('', $errors->all('<li>:message</li>')) !!}
                            </div>
                        @endif
                        <!-- /.card-header -->
                        <!-- form start -->

                        <form action="{{ route('mapel.store') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Guru</label>
                                    <select name="user_id" id="user_id" class="form-control" required>
                                        <option value="">-</option>
                                        @foreach ($user as $item)
                                            <option value="{{ $item->user_id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Nama mapel</label>
                                    <input type="text" name="nama_mapel" class="form-control" placeholder="Nama mapel"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label>SKS</label>
                                    <input type="text" name="sks" class="form-control" placeholder="SKS" required>
                                </div>
                                <div class="form-group">
                                    <label>Kelompok</label>
                                    <select name="kelompok_id" id="kelompok_id" class="form-control" required>
                                        <option value="">-</option>
                                        @foreach ($kelompok as $item)
                                            <option value="{{ $item->kelompok_id }}">{{ $item->nama_kelompok }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{ url('main/mapel') }}" class="btn btn-danger">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
