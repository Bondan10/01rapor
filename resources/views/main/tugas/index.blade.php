@extends('layouts.layout_main')
@section('content')
    <div class="container-fluid" style="padding-left: 1%;">
        <a href="{{ url('main/tugas/create') }}" class="btn btn-primary">Create Data</a>
    </div>
    <br>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- /.card -->

                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger" role="alert">
                            {!! implode('', $errors->all('<li>:message</li>')) !!}
                        </div>
                    @endif

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">DataTable {{ $title }}</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tahun Akademik</th>
                                        <th>Semester</th>
                                        <th>Mapel</th>
                                        <th>Nama Siswa</th>
                                        <th>Nama Guru</th>
                                        <th>Nilai</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $urutan = 1;
                                    @endphp
                                    @foreach ($result as $row)
                                        <tr>
                                            <td>{{ $urutan++ }}</td>
                                            <td>{{ $row->tahun_akademik->nama_tahun }}</td>
                                            <td>{{ $row->semester->nama_semester }}</td>
                                            <td>{{ $row->mapel->nama_mapel }}</td>
                                            <td>{{ $row->siswa->nama }}</td>
                                            <td>{{ $row->user->name }}</td>
                                            <td>{{ $row->nilai }}</td>
                                            <td>
                                                <a href="/main/tugas/{{ $row->tugas_id }}/edit" class="btn btn-warning"><i
                                                        class="fa fa-edit"></i></a>
                                                <form action="{{ route('tugas.destroy', $row->tugas_id) }}" method="POST"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-danger border-0"
                                                        onclick="return confirm('Are you sure?'); return false;"><i
                                                            class="fa fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
@endsection
