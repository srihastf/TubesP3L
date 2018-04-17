@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Selamat Datang</div>
                <div class="card-header">
                    @if(Auth::user()->status=='customer')
                        <a href="{{URL('home')}}">Dashboard</a> <span> | </span>
                        <a href="{{URL('c_keluhan')}}">Keluhan</a> <span> | </span>
                        <a href='#'>Profil</a> <span> | </span>
                    @endif
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{ route('c_keluhan.create', [Auth::user()->name]) }}"><button type="button">Tambah Keluhan</button></a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <td>No</td>
                            <td>Keluhan</td>
                            <td>Tanggal</td>
                            <td>Diterima</td>
                            <td>Aksi</td>
                        </tr>
                        @foreach($data as $d)
                        <tr>
                            <td>{{$d->Id_Keluhan}}</td>
                            <td>{{$d->Detail_Keluhan}}</td>
                            <td>{{$d->created_at}}</td>
                            <td>{{$d->Id_WorkOrder}}</td>
                            <td><a href="{{ route('c_keluhan.show', ['keluhan'=>$d->id]) }}"><button type="button">Detail</button></a></td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
