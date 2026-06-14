<!-- Menghubungkan dengan view template master -->
@extends('template')

@section('title', 'Tambah Data Belanja')
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
    <center>


        <br />
        <br />

        <div class="card">
            <div class="card-header">
                Form Tambah Data Belanja
            </div>

            <div class="card-body">
                <form action="/storebelanja" method="post">
                    {{ csrf_field() }}

                    <div class="row mb-3">
                        <label for="kodebarang" class="col-sm-2 col-form-label">Kode Barang</label>
                        <div class="col-sm-10">
                            <input type="number" name="kodebarang" id="kodebarang" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
                        <div class="col-sm-10">
                            <input type="number" name="jumlah" id="jumlah" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="harga" class="col-sm-2 col-form-label">Harga per Item</label>
                        <div class="col-sm-10">
                            <input type="number" name="harga" id="harga" class="form-control" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="offset-sm-2 col-sm-10">
                            <input type="submit" value="Simpan Data" class="btn btn-primary">
                        </div>
                    </div>

                </form>
            </div>
        </div>
        <br />
        <br />
        <a href="/belanja" class="btn btn-info"> Kembali</a>
    </center>
@endsection