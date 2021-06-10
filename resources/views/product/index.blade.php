@extends('product.app')

@section('content')
<div class="container-fluid">
    <figure class="text-center">
        <blockquote class="blockquote">
          <p>Welcome to Our Store</p>
        </blockquote>
        <figcaption class="blockquote-footer">
          Shopping for organic mask safely and reliably<br>
          All product are BPOM Approved!
        </figcaption>
      </figure>

      <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-right my-2">
                <a class="btn btn-success" href="{{ route('products.create') }}"> Tambah Data </a>
            </div>
        </div>
    </div>

    <form class="form" method="get" action="/search">
        <div class="form-group w-50 mb-3">
            <input type="search" name="search" class="form-control w-75 d-inline" id="search" placeholder="">
            <button type="submit" class="btn btn-primary mb-1">Cari</button>
        </div>
    </form>

      @if ($message = Session::get('success'))
      <div class="alert alert-success">
          <p>{{ $message }}</p>
      </div>
      @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Foto</th>
            <th>Nama</th>
            <th>Stok</th>
            <th>Harga</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
        </tr>
        <?php $no=1; ?>
        @foreach ($products as $Product)
            <tr>
                <td>{{ $no++ }}</td>
                <td><img src="assets/img/{{$Product->foto}}" width="100px" alt="Image" class="img-fluid tm-gallery-img" /></td>
                <td>{{ $Product ->nama }}</td>
                <td>{{ $Product ->stok }}</td>
                <td>{{ $Product ->harga }}</td>
                <td>{{ $Product ->deskripsi }}</td>
                <td>
                    <form action="{{ route('products.destroy', $Product->id) }}" method="POST">
   
                        <a class="btn btn-info" href="{{ route('products.show',$Product->id) }}">Show</a>
    
                        <a class="btn btn-primary" href="{{ route('products.edit',$Product->id) }}">Edit</a>
    
                        @csrf
                        @method('DELETE')
    
                        <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                </td>
                
            </tr>
        @endforeach
    </table>

</div>

@endsection