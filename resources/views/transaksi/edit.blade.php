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
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>03/18/2021</td>
                    <td>Runaskin</td>
                    <td>5</td>
                    <td>15.000</td>
                    <td>75.000</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>02/01/2021</td>
                    <td>Beautetox</td>
                    <td>10</td>
                    <td>15.000</td>
                    <td>150.000</td>
                  </tr>
                <tr>
                  <td colspan="5">
                    <b>Total</b>
                  </td>
                  <td class="text-right">
                    <b>275.000</b>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer">
          <a href="{{ route('transaksi.index') }}" class="btn btn-sm btn-danger">Kembali</a>
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
              <form action="">
              <tbody>
                <tr>
                  <td>Total</td>
                  <td>
                    <input type="text" name="total" id="total" class="form-control" value="275.000">
                  </td>
                </tr>
                <tr>
                  <td>Ongkir</td>
                  <td>
                    <input type="text" name="ongkir" id="ongkir" class="form-control" value="12.000">
                  </td>
                </tr>
                <tr>
                  <td>Ekspedisi</td>
                  <td>
                    <input type="text" name="ekspedisi" id="ekspedisi" class="form-control" value="JNT">
                  </td>
                </tr>
                <tr>
                  <td>No. Resi</td>
                  <td>
                    <input type="text" name="no_resi" id="no_resi" class="form-control" value="JP054312887">
                  </td>
                </tr>
                <tr>
                  <td>Status Pembayaran</td>
                  <td>
                    <select name="status_pembayaran" id="status_pembayaran" class="form-control">
                      <option value="sudah">Sudah Dibayar</option>
                      <option value="belum">Belum Dibayar</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td>Status</td>
                  <td>
                    <select name="status" id="status" class="form-control">
                      <option value="checkout">Checkout</option>
                      <option value="diproses">Diproses</option>
                      <option value="dikirim">Dikirim</option>
                      <option value="diterima">Diterima</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td>
                  </td>
                  <td>
                    <button type="submit" class="btn btn-primary">Update</button>
                  </td>
                </tr>
              </tbody>
              </form>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection