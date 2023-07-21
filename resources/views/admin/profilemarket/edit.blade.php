@extends('layouts.admin')

@section ('content')

<div class="col-12 col-md-12 col-sm-12 col-lg-10">
    <h5>EDIT PROFILE MARKET</h5>
    <hr>

    <form method="POST" action="{{ route('admin.profileupdate') }}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" id="id" name="id" value="{{ $profile->id  }}" >
        <div class="row ">

            <div class="col-12">
                <label for="title" class="">Nama Profile</label>
                <div class="form-group">
                    <div>
                        <input id="title" value="{{ $profile->title  }}" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}"  autocomplete="title" autofocus>
                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="col-12">
                <label for="diskripsi" class="">Sub Judul Profile</label>
                <div class="form-group">
                    <div>
                        <input id="diskripsi" value="{{ $profile->diskripsi  }}" type="text" class="form-control @error('diskripsi') is-invalid @enderror" name="diskripsi" value="{{ old('diskripsi')  }}"  autocomplete="diskripsi" autofocus>
                        @error('diskripsi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="col-12">
                <label for="address" class="">Alamat</label>
                <div class="form-group">
                    <div>
                        <input id="address" value="{{ $profile->address  }}" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address')  }}"  autocomplete="address" autofocus>
                        @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
                 <div class="col-12">
                <label for="kota" class="">Kota</label>
                <div class="form-group">
                    <div>
                        <input id="kota" value="{{ $profile->kota  }}" type="text" class="form-control @error('kota') is-invalid @enderror" name="kota" value="{{ old('kota')  }}"  autocomplete="kota" autofocus>
                        @error('kota')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="col-12">
                <label for="zipcode" class="">Kode Pos</label>
                <div class="form-group">
                    <div>
                        <input id="zipcode" value="{{ $profile->zipcode  }}" type="text" class="form-control @error('zipcode') is-invalid @enderror" name="zipcode" value="{{ old('zipcode')  }}"  autocomplete="zipcode" autofocus>
                        @error('zipcode')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="col-12">
                <label for="telpon" class="">Telpon</label>
                <div class="form-group">
                    <div>
                        <input id="telpon" value="{{ $profile->telpon  }}" type="text" class="form-control @error('telpon') is-invalid @enderror" name="telpon" value="{{ old('telpon')  }}"  autocomplete="telpon" autofocus>
                        @error('telpon')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="col-12">
                <label for="email" class="">Email</label>
                <div class="form-group">
                    <div>
                        <input id="email" value="{{ $profile->email  }}" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email')  }}"  autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="col-12">
                <label for="social1" class="">Url Facebook Market</label>
                <div class="form-group">
                    <div>
                        <input id="social1" value="{{ $profile->social1  }}" type="text" class="form-control @error('social1') is-invalid @enderror" name="social1" value="{{ old('social1')  }}"  autocomplete="social1" autofocus>
                        @error('social1')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="col-12">
                <label for="social2" class="">Url Instagram Market</label>
                <div class="form-group">
                    <div>
                        <input id="social2" value="{{ $profile->social2  }}" type="text" class="form-control @error('social2') is-invalid @enderror" name="social2" value="{{ old('social2')  }}"  autocomplete="social2" autofocus>
                        @error('social2')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>



          

            <div class="col-12">
                <div class="form-group">
                    <label for="image" class="">Logo</label>
                    <input type="file" class="form-control" id="logo" name="logo">
                    @error('image')

                    <div style="color:red; font-weight:bold; font-size:0.7rem;">{{ $message }}</div>

                    @enderror
                </div>
            </div>

            <div class="col-12">
                <div class="form-group">
                    <label for="image" class="">Favicon</label>
                    <input type="file" class="form-control" id="favicon" name="favicon">
                    @error('image')

                    <div style="color:red; font-weight:bold; font-size:0.7rem;">{{ $message }}</div>

                    @enderror
                </div>
            </div>

            
            


        </div>
        
        <button type="submit" class="btn btn-success w-100">UPDATE PROFILE</button>
    
    </form>

</div>
    
@endsection