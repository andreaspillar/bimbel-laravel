@extends('app')
@section('apps')
<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Kelas</h3> <a class="float-right btn btn-primary btn-xs" href="{{route('kelas.create')}}"> Buat Kelas</a>
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
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($kelas as $g)
                        <tr>
                            <td>{{$g->id_kelas}}</td>
                            <td>{{$g->nama_mapel}}</td>
                            <td>{{$g->nama_siswa}}</td>
                            <?php
                                $nilai = App\Absensi::where('absensis.id_kelas',$g->id_kelas)->join('kelas', 'kelas.id_kelas', '=', 'absensis.id_kelas')
                                                ->sum('nilai');
                                         
                            ?>
                            <td>{{$nilai}}</td>
                            <td>{{ $nilai < 100? 'Level 1':($nilai < 200 ? 'Level 2' : 'Level 3')}}</td>
                            <td><a href="{{route('mapel.edit', $g->id_kelas)}}">Edit</a>&nbsp&nbsp&nbsp&nbsp<a href="{{route('absen.nilai', $g->id_kelas)}}">Nilai</a></td>
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
