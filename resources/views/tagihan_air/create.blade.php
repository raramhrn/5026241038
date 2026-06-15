@extends('template')
@section('title', 'Kode Soal tagihan_air')
@section('konten')

    <h2>Tambah Tagihan Air</h2>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('tagihan_air.store') }}" method="POST" onsubmit="return validasiForm()">
        @csrf

        <p>
            <label>Nomer Meteran</label><br>
            <input type="text" name="nometeran" id="nometeran" maxlength="6" value="{{ old('nometeran') }}">
        </p>

        <p>
            <label>Meter Awal</label><br>
            <input type="text" name="meterawal" id="meterawal" maxlength="20" value="{{ old('meterawal') }}">
        </p>

        <p>
            <label>Meter Akhir</label><br>
            <input type="text" name="meterakhir" id="meterakhir" maxlength="20" value="{{ old('meterakhir') }}">
        </p>
        
        <button type="submit">Simpan</button>
        <a href="{{ route('tagihan_air.index') }}">Kembali</a>
    </form>

    <script>
        function validasiForm() {
            let nometeran = document.getElementById('nometeran').value.trim();
            let meterawal = document.getElementById('meterawal').value.trim();
            let meterakhir = document.getElementById('meterakhir').value.trim();

            if (nometeran === '') {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Nomer Meteran wajib diisi",
                    icon: "error"
                });
                return false;
            }

            if (nometeran.length > 6) {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Nomer Meteran maksimal 6 karakter",
                    icon: "error"
                });
                return false;
            }

            if (meterawal <= (meterakhir + 20)) {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Meter Akhir harus minimal 20 lebih besar dari Meter Awal",
                    icon: "error"
                });
                return false;
            }

            return true;
        }
    </script>
@endsection
