@extends('layout/main')

@section('judul', 'Home')

@section('isi_utama')
    <div>
        <h1>Welcome to my Channel</h1>
        <img src="{{asset('images/pic.png')}}"/>
    </div>
@endsection