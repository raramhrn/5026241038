@extends('template')
@section('title', 'Kode Soal tagihan_air')
@section('konten')

    <BR><BR>

    <h2>Data Tagihan Air</h2>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <a href="{{ route('tagihan_air.create') }}" class="btn btn-primary">Tambah Tagihan Air</a>

    <br><br>

    <table class="table table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>No Meteran</th>
            <th>Meter Awal</th>
            <th>Meter Akhir</th>
            <th>Penggunaan (m³)</th>
            <th>Total Tagihan</th>
        </tr>

        @forelse($tagihan as $row)
            <tr>
                <td>{{ $row->id }}</td>
                <td>{{ $row->nometeran }}</td>
                <td>{{ number_format($row->meterawal, 0, ',', '.') }}</td>
                <td>{{ number_format($row->meterakhir, 0, ',', '.') }}</td>
                <td>{{ number_format($row->meterakhir - $row->meterawal, 0, ',', '.') }}</td>
                <td>{{ number_format(($row->meterakhir - $row->meterawal) * 5000, 0, ',', '.') }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="4">Belum ada data tagihan air.</td>
            </tr>
        @endforelse
    </table>
<BR><BR>

@endsection

