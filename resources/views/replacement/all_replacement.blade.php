@extends('layouts.main')

@section('container')
    <!-- tempat content -->
    <h1>ini adalah halaman produk pengganti</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">kode</th>
            <th scope="col">nama</th>
            <th scope="col">perusahaan</th>
            <th scope="col">action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($replacements as $replacement)
          <tr>
            <td>{{$replacement["id"]}}</td>
            <td>{{$replacement["nama"]}}</td>
            <td>{{$replacement["perusahaan"]}}</td>
            <td>
              <!-- Tombol Detail -->
              <a type="button" class="btn btn-primary" href="/replacement/detail/{{$replacement->id}}">Detail</a>
              <!-- Tombol Edit -->
              <a type="button" class="btn btn-warning">Edit</a>
              <!-- Tombol Delete -->
              <a type="button" class="btn btn-danger">Detele</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
@endsection