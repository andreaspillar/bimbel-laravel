@extends('app')
@section('apps')
<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Edit Data Mata Pelajaran</h3>
            </div>
            <div class="card-body p-0">
                @foreach ($mapel as $s)
                <form action="{{route('mapel.update',['mapel' => $s->id_mapel])}}" method="POST">
                  <input type="hidden" name="_method" value="PATCH">
                    @csrf
                    <div class="card-body">
                      <div class="form-group">
                        <label for="nama-mapel">Nama Mata Pelajaran</label>
                        <input type="text" class="form-control" id="nama_mapel" name="nama_mapel" placeholder="Nama Mata Pelajaran" value="{{$s->nama_mapel}}">
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