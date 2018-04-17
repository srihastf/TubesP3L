@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Lengkapi Informasi Anda') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{route('c_customer.store')}}"> 
                            @csrf

                            <div class="form-group row"hidden>
                                <label for="id_customer" class="col-sm-4 col-form-label text-md-right">{{ __('Id Customer') }}</label>
                                <div class="col-md-6">
                                    <input id="id_customer" type="text" class="form-control{{ $errors->has('id_customer') ? ' is-invalid' : '' }}" name="id_customer" value="{{ old('id_customer') }}"  autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nama_customer" class="col-sm-4 col-form-label text-md-right">{{ __('Nama Lengkap') }}</label>
                                <div class="col-md-6">
                                <input id="nama_customer" type="text" class="form-control" name="nama_customer"  value="{{Auth::user()->name}}"required autofocus>
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="alamat" class="col-sm-4 col-form-label text-md-right">{{ __('Alamat') }}</label>
                                <div class="col-md-6">
                                     <textarea id="alamat" type="text" class="form-control" name="alamat"  required autofocus>
                                     </textarea> 
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Simpan') }}
                                    </button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
