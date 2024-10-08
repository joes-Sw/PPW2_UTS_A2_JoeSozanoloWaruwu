@extends('layouts.main')

@section('content')
    

    
   <table class="table table-stripped">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Pemain</th>
            <th>Nomor Punggung</th>
            <th>Posisi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data_pemain as $index => $pemain)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $pemain->nama_pemain }}</td>
                <td>{{ $pemain->no_punggung }}</td>
                <td>{{ $pemain->posisi }}</td>
            </tr>
        @endforeach
    </tbody>
   </table>
@endsection
