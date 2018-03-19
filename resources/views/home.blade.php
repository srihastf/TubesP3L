@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Selamat Datang</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Hello {{Auth::user()->name}} <br/>
                    Email Anda : {{Auth::user()->email}} <br/>
                    Username Anda : {{Auth::user()->username}} <br/>
                    @if(Auth::user()->status=='customer')
                        Anda sebagai customer
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
