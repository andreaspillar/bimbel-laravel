@extends('app')
@section('apps')
<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Entry Absen + Nilai</h3>
            </div>
            <div class="card-body p-0">
                <form action="{{route('absen.store')}}" method="POST">
                    @csrf
                    <div class="card-body">
                        <input class="form-control" type="text" name="id_kelas" value="{{$kelas}}" readonly>                                                
                        <div class="form-group">
                            <label for="nama-guru">Tanggal Absen</label>
                            <input class="form-control" type="date" name="tanggal_absen">                    
                        </div>
                        <div class="form-group">
                            <label for="nama-guru">Nilai</label>
                            <input class="form-control" type="number" name="nilai" min="0" max="10">                    
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