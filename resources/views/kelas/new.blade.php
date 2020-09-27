@extends('app')
@section('apps')
<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Entry Kelas</h3>
            </div>
            <div class="card-body p-0">
                <form action="{{route('kelas.store')}}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama-guru">Mata Pelajaran</label>
                            <select class="form-control" name="id_mapel" id="id_mapel">
                                <?php use App\MataPelajaran;
                                $mapel = MataPelajaran::all(); ?>
                                @foreach($mapel as $m)
                                <option value="{{$m->id_mapel}}">{{$m->nama_mapel}}</option>
                                @endforeach
                              </select>
                        </div>
                        <div class="form-group">
                            <label for="nama-guru">Nama Siswa</label>
                            <select class="form-control" name="id_siswa" id="id_siswa">
                                <?php use App\Siswa;
                                $siswa = Siswa::all(); ?>
                                @foreach($siswa as $s)
                                <option value="{{$s->id_siswa}}">{{$s->nama_siswa}}</option>
                                @endforeach
                              </select>
                        </div>                    
                    </div>
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection