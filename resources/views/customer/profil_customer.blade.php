@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Profil Saya</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    Hello {{$data->Nama_Customer}} <br/>
                    Email Anda : {{Auth::user()->email}} <br/>
                    Username Anda : {{Auth::user()->username}} <br/>
                    Alamat : {{$data->Alamat}}<br/>
                    @if(Auth::user()->status=='customer')
                        Anda sebagai customer
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
