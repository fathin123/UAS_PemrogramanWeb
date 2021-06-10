@extends('product.app')
  
@section('content')

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Detail Data Masker Organik
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Id: </b>{{$products->id}}</li>
                    <li class="list-group-item"><b>Foto: </b>{{$products->foto}}</li>
                    <li class="list-group-item"><b>Nama: </b>{{$products->nama}}</li>
                    <li class="list-group-item"><b>Stok: </b>{{$products->stok}}</li>
                    <li class="list-group-item"><b>Harga: </b>{{$products->harga}}</li>
                    <li class="list-group-item"><b>Deskripsi: </b>{{$products->deskripsi}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="{{ route('products.index') }}">Kembali</a>    
        </div>
    </div>
</div>
@endsection
