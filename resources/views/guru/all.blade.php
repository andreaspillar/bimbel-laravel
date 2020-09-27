@extends('app')
@section('apps')
<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Guru</h3> <a class="float-right btn btn-primary btn-xs" href="{{route('guru.create')}}"> Buat Data Guru</a>
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
                    @foreach ($guru as $g)
                        <tr>
                            <td>{{$g->id_guru}}</td>
                            <td>{{$g->nama_guru}}</td>
                            <td>{{$g->nomor_handphone}}</td>
                            <td>{{$g->alamat}}</td>
                            <td><a href="{{route('guru.edit', $g->id_guru)}}">Edit</a></td>
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
