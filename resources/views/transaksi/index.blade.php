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
                <?php $no=1; ?>
                @foreach ($transaksi as $Transaksi)
                <tr>
                  <td>{{ $no++ }}</td>
                  <td>{{ $Transaksi->tanggal }}</td>
                  <td>{{ $Transaksi->nama }}</td> 
                  <td>{{ $Transaksi->jumlah }}</td>
                  <td>{{ $Transaksi->harga }}</td>
                  <td>{{ $Transaksi->total }}</td>
                  <td>
                    <a href="{{ route('transaksi.show', 1) }}" class="btn btn-sm btn-info mb-2">
                      Detail
                    </a>
                    <a href="{{ route('transaksi.edit', 1) }}" class="btn btn-sm btn-primary mb-2">
                      Edit
                    </a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection