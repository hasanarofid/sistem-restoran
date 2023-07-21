@extends('layouts.app')

@section ('content')

<div class="container">
    <div class="row">
        <div class="col-7 mx-auto">
            <h3>CHECKOUT</h3>
            <hr>
            
            <form action="{{ route('checkout') }}" method="POST" id="checkout-form">
                @csrf
                <div class="row ">
                    
                    <div class="col-12">
                        <h5>SHIPPING DETAILS</h5>
                    </div>

                    <div class="col-12">
                        <label for="name" class="">{{ __('Name') }}</label>
                        <div class="form-group">
                            <div>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') ?? $user->name ??'' }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="phonenumber" class="">{{ __('Phone Number') }}</label>
                        <div class="form-group">
                            <div>
                                <input id="phonenumber" type="text" class="form-control @error('phonenumber') is-invalid @enderror" name="phonenumber" value="{{ old('phonenumber') ?? $user->profile->phonenumber ??'' }}" required autocomplete="phonenumber" autofocus>
                                @error('phonenumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="country" class="">{{ __('Country') }}</label>
                        <div class="form-group">
                            <div>
                                <input id="country" type="text" class="form-control @error('country') is-invalid @enderror" name="country" value="{{ old('country') ?? $user->profile->country ??'' }}" required autocomplete="country" autofocus>
                                @error('country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="city" class="">{{ __('City') }}</label>
                        <div class="form-group">
                            <div>
                                <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') ?? $user->profile->city ??'' }}" required autocomplete="city" autofocus>
                                @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="address" class="">{{ __('Address') }}</label>
                        <div class="form-group">
                            <div>
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') ?? $user->profile->address ??'' }}" required autocomplete="address" autofocus>
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="zipcode" class="">{{ __('Zipcode') }}</label>
                        <div class="form-group">
                            <div>
                                <input id="zipcode" type="text" class="form-control @error('zipcode') is-invalid @enderror" name="zipcode" value="{{ old('zipcode') ?? $user->profile->zipcode ??'' }}" required autocomplete="zipcode" autofocus>
                                @error('zipcode')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <hr>
                        <h5>Rekening kami </h5>
                    </div>
            <div class="col-12">        
                <div class="alert alert-success" role="alert">
                    @foreach ($rekening as $item)
                        <p>{{  $item->atas_nama  }}</p>
                        <p class="right-side-header"  id="no_rekening" >{{  $item->no_rekening  }}  <a href="javascript: void(0)" onclick="copyToClipboard('no_rekening' )" id="clipboard_a"><i class="fa fa-clipboard"></i>    </a> </p>
                          <p>{{  $item->bank  }}</p>
                    @endforeach
                </div>

                </div>          


                </div>
                
                <button type="submit" class="button-primary w-100">Konfirmasi Pembayaran Anda</button>
            
            </form>
        </div>
    </div>
</div>

@endsection


    <script>
  function copyToClipboard(elementId) {

  // Create a "hidden" input
  var aux = document.createElement("input");

  // Assign it the value of the specified element
  aux.setAttribute("value", document.getElementById(elementId).innerHTML);

  // Append it to the body
  document.body.appendChild(aux);

  // Highlight its content
  aux.select();

  // Copy the highlighted text
  document.execCommand("copy");

  // Remove it from the body
  document.body.removeChild(aux);
   $("a#clipboard_a").attr('data-original-title', 'Copied');
    // $("a#clipboard_a").tooltip('show');

}
    </script>
