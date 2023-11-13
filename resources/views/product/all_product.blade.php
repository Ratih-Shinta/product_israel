@extends('layouts.main')

@section('container')
  <!-- tempat content -->
  <h1>Ini adalah halaman product israel</h1>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">nama</th>
        <th scope="col">perusahaan</th>
        <th scope="col">action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($products as $product)
      <tr>
        <td>{{$product["nama"]}}</td>
        <td>{{$product["perusahaan"]}}</td>
        <td>
          <!-- Tombol Detail -->
          <a type="button" class="btn btn-primary" href="/product/detail/{{$product->id}}">Detail</a>
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