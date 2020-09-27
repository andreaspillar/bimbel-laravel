@extends('app')
@section('apps')
<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Edit Data Guru</h3>
            </div>
            <div class="card-body p-0">
                @foreach ($teacher as $s)
                <form action="{{route('guru.update',['guru' => $s->id_guru])}}" method="POST">
                  <input type="hidden" name="_method" value="PATCH">
                    @csrf
                    <div class="card-body">
                      <div class="form-group">
                        <label for="nama-guru">Nama Guru</label>
                        <input type="text" class="form-control" id="nama_guru" name="nama_guru" placeholder="Nama Guru" value="{{$s->nama_guru}}">
                      </div>
                      <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" value="{{$s->alamat}}">
                      </div>
                      <div class="form-group">
                        <label for="no-phone">Nomor Handphone</label>
                        <input type="text" class="form-control" id="nomor_handphone" name="nomor_handphone" placeholder="Nomor Handphone" value="{{$s->nomor_handphone}}">
                      </div>
                      <div class="form-group">
                        <label for="tanggal-lahir">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir" value="{{$s->tanggal_lahir}}">
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