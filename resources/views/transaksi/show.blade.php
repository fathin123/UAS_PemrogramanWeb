@extends('product.app')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col col-lg-8 col-md-8 mb-2">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Item</h3>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Tanggal</th>
                  <th>Nama</th>
                  <th>Harga</th>
                  <th>Jumlah</th>
                  <th>Total
                  </th>
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
                </tr>
                @endforeach
                <tr>
                  <td colspan="5">
                    <b>Total</b>
                  </td>
                  <td class="text-right">
                    <b>110.000</b>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer">
          <a href="{{ route('transaksi.index') }}" class="btn btn-sm btn-danger">Kembali</a>
          <a href="{{ route('transaksi.index') }}" class="btn btn-sm btn-danger">Cetak PDF</a>
        </div>
      </div>
    </div>
    <div class="col col-lg-4 col-md-4">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Ringkasan</h3>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <tbody>
                <tr>
                  <td>Total</td>
                  <td>123.000</td>
                </tr>
                <tr>
                  <td>Ongkir</td>
                  <td>12.000</td>
                </tr>
                <tr>
                  <td>Ekspedisi</td>
                  <td>J&T</td>
                </tr>
                <tr>
                  <td>No. Resi</td>
                  <td>JP001254224</td>
                </tr>
                <tr>
                  <td>Status Pembayaran</td>
                  <td>Sudah dibayar</td>
                </tr>
                <tr>
                  <td>Status</td>
                  <td>Dikirim
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