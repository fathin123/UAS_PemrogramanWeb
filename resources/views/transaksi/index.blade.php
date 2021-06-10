@extends('product.app')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">
            Data Transaksi
          </h3>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Tanggal</th>
                  <th>Nama</th>
                  <th>Jumlah</th>
                  <th>Harga</th>
                  <th>Total</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>01/05/2021</td>
                  <td>Camille</td> 
                  <td>2</td>
                  <td>25.000</td>
                  <td>50.000</td>
                  <td>
                    <a href="{{ route('transaksi.show', 1) }}" class="btn btn-sm btn-info mb-2">
                      Detail
                    </a>
                    <a href="{{ route('transaksi.edit', 1) }}" class="btn btn-sm btn-primary mb-2">
                      Edit
                    </a>
                  </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>03/18/2021</td>
                    <td>Runaskin</td> 
                    <td>5</td>
                    <td>15.000</td>
                    <td>75.000</td>
                    <td>
                      <a href="{{ route('transaksi.show', 1) }}" class="btn btn-sm btn-info mb-2">
                        Detail
                      </a>
                      <a href="{{ route('transaksi.edit', 1) }}" class="btn btn-sm btn-primary mb-2">
                        Edit
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>02/01/2021</td>
                    <td>Beautetox</td> 
                    <td>10</td>
                    <td>15.000</td>
                    <td>150.000</td>
                    <td>
                      <a href="{{ route('transaksi.show', 1) }}" class="btn btn-sm btn-info mb-2">
                        Detail
                      </a>
                      <a href="{{ route('transaksi.edit', 1) }}" class="btn btn-sm btn-primary mb-2">
                        Edit
                      </a>
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