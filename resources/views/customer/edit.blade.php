@extends('product.app')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col col-lg-4 col-md-4">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">
            Form Edit Customer
          </h3>
          <div class="card-tools">
            <a href="{{ route('customer.index') }}" class="btn btn-sm btn-danger">
              Kembali
            </a>
          </div>
        </div>
        <div class="card-body">
          <table class="table">
            <tbody>
              <tr>
                <td>Nama</td>
                <td>Budi</td>
              </tr>
              <tr>
                <td>Alamat</td>
                <td>Jl. Jend Sudirman no.1, Semarang</td>
              </tr>
              <tr>
                <td>Email</td>
                <td>budi@gmail.com</td>
              </tr>
              <tr>
                <td>No Tlp</td>
                <td>085852527575</td>
              </tr>
              <tr>
                <td>
                  <form action="#" class="form-inline">
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                  </form>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection