@extends('layouts.admin')

@section ('content')

<div class="col-12 col-md-12 col-sm-12 col-lg-10">
    <h5>EDIT REKENING</h5>
    <hr>

    <form method="POST" action="{{ route('admin.rekeningupdate') }}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" id="id" name="id" value="{{ $rekening->id  }}" >
        <div class="row ">

            <div class="col-12">
                <label for="atas_nama" class="">Atas Nama Rekening</label>
                <div class="form-group">
                    <div>
                        <input id="atas_nama" value="{{ $rekening->atas_nama  }}" type="text" class="form-control @error('atas_nama') is-invalid @enderror" name="atas_nama" value="{{ old('atas_nama') }}"  autofocus>
                        @error('atas_nama')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>

              <div class="col-12">
                <label for="no_rekening" class="">Nomor Rekening</label>
                <div class="form-group">
                    <div>
                        <input id="no_rekening" value="{{ $rekening->no_rekening  }}" type="text" class="form-control @error('no_rekening') is-invalid @enderror" name="no_rekening" value="{{ old('no_rekening') }}"  autofocus>
                        @error('no_rekening')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>

              <div class="col-12">
                <label for="bank" class="">Bank</label>
                <div class="form-group">
                    <div>
                        <input id="bank" value="{{ $rekening->bank  }}" type="text" class="form-control @error('bank') is-invalid @enderror" name="bank" value="{{ old('bank') }}"  autofocus>
                        @error('bank')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>

        

          


            
            


        </div>
        
        <button type="submit" class="btn btn-success w-100">UPDATE REKENING</button>
    
    </form>

</div>
    
@endsection