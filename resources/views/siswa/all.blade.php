@extends('app')
@section('apps')
<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Siswa</h3><a class="float-right btn btn-primary btn-xs" href="{{route('siswa.create')}}"> Buat Data Siswa</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Nama</th>
                    <th>Nomor HP</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($students as $s)
                        <tr>
                            <td>{{$s->id_siswa}}</td>
                            <td>{{$s->nama_siswa}}</td>
                            <td>{{$s->nomor_handphone}}</td>
                            <td>{{$s->alamat}}</td>
                            <td><a href="{{route('siswa.edit', $s->id_siswa)}}" class="button">Edit</a></td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>
  </section>
@endsection
