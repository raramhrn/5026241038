<!-- Menghubungkan dengan view template master -->
@extends('template')

@section('title', 'Tambah Data Keyboard')
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
    <center>


        <br />
        <br />

        <div class="card">
            <div class="card-header">
                Form Tambah Data Keyboard
            </div>

            <div class="card-body">
                <form action="/storekeyboard" method="post">
                    {{ csrf_field() }}

                    <div class="row mb-3">
                        <label for="merkkeyboard" class="col-sm-2 col-form-label">Merk Keyboard</label>
                        <div class="col-sm-10">
                            <input type="text" name="merkkeyboard" id="merkkeyboard" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="stockkeyboard" class="col-sm-2 col-form-label">Stock</label>
                        <div class="col-sm-10">
                            <input type="number" name="stockkeyboard" id="stockkeyboard" class="form-control" required>
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
        <a href="/keyboard" class="btn btn-info"> Kembali</a>
    </center>
@endsection