@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Selamat Datang</div>
                <div class="card-header">
                    <!-- menu-->
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{ route('c_customer.create') }}"><button type="button">Tambah Customer</button></a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <td>No</td>
                            <td>Id</td>
                            <td>Nama</td>
                            <td>Alamat</td>
                            <td>Aksi</td>
                        </tr>
                        @foreach($data as $d)
                        <tr>
                            <td>{{$d->Id_Keluhan}}</td>
                            <td>{{$d->Id_Customer}}</td>
                            <td>{{$d->Nama_Customer}}</td>
                            <td>{{$d->Alamat}}</td>
                            <td><a href="{{ route('c_customer.show', ['customer'=>$d->Id_Customer]) }}"><button type="button">Detail</button></a></td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
