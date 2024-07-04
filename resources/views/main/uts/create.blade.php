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

                        <form action="{{ route('uts.store') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Tahun Akademik</label>
                                    <select name="tahun_akademik_id" id="tahun_akademik_id" class="form-control tahun"
                                        style="width: 100%;" required>
                                        <option value=""></option>
                                        @foreach ($tahun_akademik as $tahun_akademik)
                                            <option value="{{ $tahun_akademik->tahun_akademik_id }}">
                                                {{ $tahun_akademik->nama_tahun }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Semester</label>
                                    <select name="semester_id" id="semester_id" class="form-control semester"
                                        style="width: 100%;" required>
                                        <option value=""></option>
                                        @foreach ($semester as $semester)
                                            <option value="{{ $semester->semester_id }}">
                                                {{ $semester->nama_semester }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Guru</label>
                                    <input type="hidden" class="form-control" name="user_id"
                                        value="{{ auth()->user()->user_id }}">
                                    <input type="text" class="form-control" value="{{ auth()->user()->name }}" readonly>

                                </div>
                                <div class="form-group">
                                    <label>Mapel</label>
                                    <select name="mapel_id" id="mapel_id" class="form-control" required>
                                        {{-- <option value="">-</option> --}}
                                        @foreach ($mapel as $mapel)
                                            @if ($mapel->user_id == auth()->user()->user_id)
                                                <option value="{{ $mapel->mapel_id }}">{{ $mapel->nama_mapel }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Siswa</label>
                                    <select name="siswa_id" id="siswa_id" class="form-control select2bs4"
                                        style="width: 100%;" required>
                                        <option value=""></option>
                                        @foreach ($siswa as $siswa)
                                            <option value="{{ $siswa->siswa_id }}">{{ $siswa->nama }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Nilai</label>
                                    <input type="number" name="nilai" class="form-control" placeholder="nilai" required>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{ url('main/uts') }}" class="btn btn-danger">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
