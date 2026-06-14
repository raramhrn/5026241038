<!-- Menghubungkan dengan view template -->
@extends('template')

@section('title', 'Data Keyboard')
@section('konten')
    <center>
        <br />

        <p>Cari Data Keyboard :</p>
        <form action="/keyboardcari" method="GET">
            <input type="text" name="cari" placeholder="Cari Keyboard .." class="form-control">
            <input type="submit" value="CARI" class="btn btn-secondary">
        </form>

        <br />

        <table class="table table-striped table-hover">
            <tr>
                <th>Kode Keyboard</th>
                <th>Merk Keyboard</th>
                <th>Stock</th>
                <th>Tersedia</th>
                <th>Opsi</th>
            </tr>
            @foreach ($keyboard as $k)
                <tr>
                    <td>{{ $k->kodekeyboard}}</td>
                    <td>{{ $k->merkkeyboard}}</td>
                    <td>{{ $k->stockkeyboard}}</td>
                    <td>
                        @if($k->stockkeyboard == 0)
                            T
                        @else($k->stockkeyboard > 0)
                            Y
                        @endif
                    </td>
                    <td>
                        <a href="/keyboardhapus/{{ $k->kodekeyboard }}" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </table>
        <a href="/tambahkeyboard" class="btn btn-primary">Tambah Data Keyboard Baru</a>

    </center>

@endsection