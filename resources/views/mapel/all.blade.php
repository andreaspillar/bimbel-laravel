@extends('app')
@section('apps')
<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Mata Pelajaran</h3> <a class="float-right btn btn-primary btn-xs" href="{{route('mapel.create')}}"> Buat Mata Pelajaran</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Mata Pelajaran</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($mapel as $g)
                        <tr>
                            <td>{{$g->id_mapel}}</td>
                            <td>{{$g->nama_mapel}}</td>
                            <td><a href="{{route('mapel.edit', $g->id_mapel)}}">Edit</a></td>
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
