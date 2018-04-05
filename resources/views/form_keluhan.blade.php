@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tambah Keluhan') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{route('c_keluhan.store')}}"> 
                            @csrf

                            <div class="form-group row">
                                <label for="id_keluhan" class="col-sm-4 col-form-label text-md-right">{{ __('Id Keluhan') }}</label>
                                <div class="col-md-6">
                                    <input id="id_keluhan" type="text" class="form-control{{ $errors->has('id_keluhan') ? ' is-invalid' : '' }}" name="id_keluhan" value="{{ old('id_keluhan') }}" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="detail_keluhan" class="col-sm-4 col-form-label text-md-right">{{ __('Detail Keluhan') }}</label>
                                <div class="col-md-6">
                                     <textarea id="detail_keluhan" type="text" class="form-control{{ $errors->has('detail_keluhan') ? ' is-invalid' : '' }}" name="detail_keluhan" value="{{ old('detail_keluhan') }}" required autofocus>
                                     </textarea> 
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="id_customer" class="col-sm-4 col-form-label text-md-right">{{ __('Id Customer') }}</label>
                                <div class="col-md-6">
                                    <input id="id_customer" type="text" class="form-control{{ $errors->has('id_customer') ? ' is-invalid' : '' }}" name="id_customer" value="{{ old('id_customer') }}" required autofocus>
                                </div>
                            </div>
    
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
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
