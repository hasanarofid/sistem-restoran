@extends('layouts.admin')

@section ('content')

<div class="col-10 col-md-10 col-sm-10 col-lg-10">
    <div class="card" style="width: 800px">
        <div class="card-header">
            <h5>PROFILE MARKET LIST</h5>
         
            <a href="{{ route('admin.rekeningtambah')    }}" class="btn btn-sm btn-info">TAMBAH REKENING</a>
        </div>
          @if(Session::has('success'))
    <div class="row">
      <div class="col-12">
        <div id="charge-message" class="alert alert-success">
          {{ Session::get('success') }}
        </div>
      </div>
    </div>
    @endif
        <div class="card-body" style="width: 800px">
            <table class="table table-striped table-responsive">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">ATAS NAMA</th>
                    <th scope="col">NO REKENING</th>
                    <th scope="col">BANK</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($rekening as $item)
                    
          
                  <tr>
                    <td scope="row">{{ $no++ }}</td>
                      <td>{{ $item->atas_nama }}</td>
                    <td>{{ $item->no_rekening }}</td>
                    <td>{{ $item->bank }}</td>
                    <td>{{ $item->status }}</td>
                    <td>
                     <a href="{{ route('admin.rekeningedit',['id'=>$item->id]) }}" class="btn btn-sm btn-success"> Edit</a> | 
                     <a href="{{ route('admin.disableedit',['id'=>$item->id]) }}" class="btn btn-sm btn-danger"> {{ ($item->status == 'aktif') ? 'Non Aktifkan' : 'Aktifkan'   }}  </a> | 
                    <a href="{{ route('admin.rekeninghapus',['id'=>$item->id]) }}" class="btn btn-sm btn-warning"> Hapus</a>
                      </td>
                  </tr>
                        @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
    
@endsection