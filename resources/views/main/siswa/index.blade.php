@extends('layouts.layout_main')
@section('content')
    <div class="container-fluid" style="padding-left: 1%;">
        @auth
            @if (auth()->user()->user_jab_id == 1)
                <a href="{{ url('main/siswa/create') }}" class="btn btn-primary">Create</a>
            @else
            @endif
        @endauth
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
                                        <th>NIS Siswa</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Agama</th>
                                        <th>Kelas</th>
                                        <th>Status</th>
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
                                            <td>{{ $row->nis }}</td>
                                            <td>{{ $row->nama }}</td>
                                            <td>{{ $row->sex }}</td>
                                            <td>{{ $row->agama->nama_agama }}</td>
                                            <td>{{ $row->kelas->nama_kelas }}</td>
                                            <td>{{ $row->status }}</td>
                                            @auth
                                                @if (auth()->user()->user_jab_id == 1)
                                                    <td>
                                                        <a href="/main/siswa/{{ $row->siswa_id }}" class="btn btn-primary"><i
                                                                class="fa fa-eye"></i></a>
                                                        <a href="/main/siswa/{{ $row->siswa_id }}/edit"
                                                            class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                        <form action="{{ route('siswa.destroy', $row->siswa_id) }}"
                                                            method="POST" class="d-inline">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit" class="btn btn-danger border-0"
                                                                onclick="return confirm('Are you sure?'); return false;"><i
                                                                    class="fa fa-trash"></i></button>
                                                        </form>
                                                    </td>
                                                @else
                                                    <td>
                                                        <a href="/main/siswa/{{ $row->siswa_id }}" class="btn btn-primary"><i
                                                                class="fa fa-eye"></i></a>
                                                    </td>
                                                @endif
                                            @endauth
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
