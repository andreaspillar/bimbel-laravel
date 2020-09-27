@extends('app')
@section('apps')
<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Absensi</h3> <a class="float-right btn btn-primary btn-xs" href="{{route('absen.create')}}"> Nilai Siswa</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Mata Pelajaran</th>
                    <th>Siswa</th>
                    <th>Nilai</th>
                    <th>Tanggal Absen</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($absen as $g)
                        <tr>
                            <td>{{$g->id_kelas}}</td>
                            <td>{{$g->nama_mapel}}</td>
                            <td>{{$g->nama_siswa}}</td>
                            <td>{{$g->nilai}}</td>
                            <td>{{$g->tanggal_absen}}</td>
                            <td><a href="{{route('absen.edit', $g->id_kelas)}}">Edit</a></td>
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
