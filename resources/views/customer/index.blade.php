@extends('product.app')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">
            Data Customer
          </h3>
        </div>
        <div class="card-body">
          <form action="#">
            <div class="row">
              <div class="col">
                <input type="text" name="keyword" id="keyword" class="form-control" placeholder="">
              </div>
              <div class="col-auto">
                <button class="btn btn-primary">
                  Cari
                </button>
              </div>
            </div>
          </form>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Email</th>
                  <th>No Tlp</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Budi</td>
                  <td>Jl. Jend Sudirman no.1, Semarang</td>
                  <td>budi@gmail.com</td>
                  <td>085852527575</td>
                  <td>
                    <a href="{{ route('customer.edit', 1) }}" class="btn btn-sm btn-primary">Edit</a>
                  </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Doremi</td>
                    <td>Jl. Teuku Umar no.12, Bojonegoro</td>
                    <td>doremi@gmail.com</td>
                    <td>085855179642</td>
                  <td>
                    <a href="{{ route('customer.edit', 2) }}" class="btn btn-sm btn-primary">Edit</a>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Syifa</td>
                  <td>Jl. Sudirman no.75, Surabaya</td>
                  <td>syifa@gmail.com</td>
                  <td>081578613487</td>
                  <td>
                    <a href="{{ route('customer.edit', 3) }}" class="btn btn-sm btn-primary">Edit</a>
                  </td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Mustika</td>
                  <td>Jl. Diponegoro no.151, Samarinda</td>
                  <td>mustika@gmail.com</td>
                  <td>082145697851</td>
                  <td>
                    <a href="{{ route('customer.edit', 4) }}" class="btn btn-sm btn-primary">Edit</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection