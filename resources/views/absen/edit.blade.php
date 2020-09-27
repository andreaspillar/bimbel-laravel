@extends('app')
@section('apps')
<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Edit Data Siswa</h3>
            </div>
            <div class="card-body p-0">
                @foreach ($absen as $s)
                <form action="{{route('absen.update',['absen' => $s->id_absensi])}}" method="POST">
                  <input type="hidden" name="_method" value="PATCH">
                    @csrf
                    <div class="card-body">
                        <input class="form-control" type="text" name="id_kelas" value="{{$s->id_kelas}}" readonly>                                                
                        <div class="form-group">
                            <label for="tanggal_absen">Tanggal Absen</label>
                            <input class="form-control" type="date" name="tanggal_absen" value="{{$s->tanggal_absen}}" readonly>                    
                        </div>
                        <div class="form-group">
                            <label for="nilai">Nilai</label>
                            <input class="form-control" type="number" name="nilai" value="{{$s->nilai}}" min="0" max="10">                    
                        </div>
                    </div>
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>                        
                </form>
                @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection