@extends('layouts.main')

@section('container')
    {{$replacement->kode}} <br>
    {{$replacement->nama}} <br>
    {{$replacement->tanggal}} <br>
    {{$replacement->perusahaan}} <br>
    {{$replacement->produksi}} <br>

    <a href="/replacement/all">back</a>
@endsection