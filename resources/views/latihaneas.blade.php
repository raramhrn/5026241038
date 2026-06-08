@extends('template')

@section('title', 'Latihan EAS')

@section('konten')

<center>
        <br />

        <p>Data Nilai Kuliah</p>

        <br />

        <table class="table table-striped table-hover">
            <tr>
                <th>ID</th>
                <th>NRP</th>
                <th>Nilai Angka</th>
                <th>SKS</th>
                <th>Nilai Huruf</th>
                <th>Bobot</th>
            </tr>
            @foreach ($nilaikuliah as $n)
                <tr>
                    <td>{{ $n->id }}</td>
                    <td>{{ $n->nrp }}</td>
                    <td>{{ $n->nilaiangka }}</td>
                    <td>{{ $n->sks }}</td>
                    <td>
                        @if($n->nilaiangka <= 40)
                            D
                        @elseif($n->nilaiangka <= 60)
                            C
                        @elseif($n->nilaiangka <= 80)
                            B
                        @else
                            A
                        @endif
                    </td>
                    <td>{{ $n->nilaiangka * $n->sks }}</td>
                </tr>
            @endforeach
        </table>
        <a href="/tambahnilai" class="btn btn-primary">Tambah Data</a>

    </center>

@endsection