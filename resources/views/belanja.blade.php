@extends('template')

@section('title', 'Latihan EAS 2')

@section('konten')

<center>
        <br />

        <p>Data Belanja</p>

        <br />

        <table class="table table-striped table-hover">
            <tr>
                <th>Kode Pembelian</th>
                <th>Kode Barang</th>
                <th>Jumlah Pembelian</th>
                <th>Harga per Item</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
            @foreach ($keranjangbelanja as $n)
                <tr>
                    <td>{{ $n->id }}</td>
                    <td>{{ $n->kodebarang }}</td>
                    <td>{{ $n->jumlah }}</td>
                    <td>{{ number_format($n->harga, 0, ',', '.') }}</td>
                    <td>{{ number_format($n->jumlah * $n->harga, 0, ',', '.') }}</td>
                    <td>
                        <a href="/tambahbelanja/{{ $n->id }}" class="btn btn-primary">Beli</a>
                        <a href="/hapusbelanja/{{ $n->id }}" class="btn btn-danger">Batal</a>
                    </td>
                </tr>
            @endforeach
        </table>
        <a href="/tambahbelanja" class="btn btn-primary">Tambah Data</a>

    </center>

@endsection