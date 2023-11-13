@extends('layouts.main')

@section('container')
    {{$product->nama}} <br>
    {{$product->tanggal}} <br>
    {{$product->perusahaan}} <br>
    {{$product->produksi}} <br>

    <a href="/product/all">back</a>
@endsection