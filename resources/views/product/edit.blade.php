@extends('product.app')
  
@section('content')
   
<div class="container mt-5">
   
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Edit Data Masker Organik
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="{{ route('products.update', $products->id) }}" id="myForm">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="id">Id</label>                    
                <input type="text" name="id" class="form-control" id="id" value="{{ $products->id }}" aria-describedby="id" >                
            </div>
            <div class="form-group">
                <label for="foto">Foto</label>                    
                <input type="text" name="foto" class="form-control" id="foto" value="{{ $products->foto }}" aria-describedby="foto" >                
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>                    
                <input type="text" name="nama" class="form-control" id="nama" value="{{ $products->nama }}" aria-describedby="nama" >                
            </div>
            <div class="form-group">
                <label for="email">Stok</label>                    
                <input type="text" name="stok" class="form-control" id="stok" value="{{ $products->stok }}" aria-describedby="stok" >                
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>                    
                <input type="text" name="harga" class="form-control" id="harga" value="{{ $products->harga }}" aria-describedby="harga" >                
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>                    
                <input type="deskripsi" name="deskripsi" class="form-control" id="deskripsi" value="{{ $products->deskripsi }}" aria-describedby="deskripsi" >                
            </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>
</div>
</div>
@endsection