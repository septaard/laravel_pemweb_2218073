@extends('layouts.app')

@section('title')
    Transaksi | OpenTrip Admin
@endsection
@section('content')
    <h3>Transaction</h3>
    <button type="button" class="btn btn-tambah">
        <a href="/transaction/cetak">Cetak</a>
    </button>
    <table class="table-data">
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Nama</th>
                <th>Destinasi</th>
                <th>Harga</th>
                <th>Alamat</th>
                <th>No Handphone</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($transactions as $transaction)
                <tr>
                    <td>{{ $transaction->updated_at }}</td>
                    <td>{{ $transaction->nama }}</td>
                    <td>{{ $transaction->category->destinasi}}</td>
                    <td>Rp. {{ number_format($transaction->harga) }}</td>
                    <td>{{ $transaction->alamat }}</td>
                    <td>{{ $transaction->nomorhp }}</td>
                    <td>
                        <button class='btn_detail' data-nomorhp='{{ $transaction->nomorhp }}'
                            onclick='showDetails("{{ $transaction->nama }}", "{{ $transaction->category->destinasi}}", "{{ $transaction->harga }}", "{{ $transaction->alamat }}")'>Detail</button>
                    </td>
                @empty
                <tr>
                    <td colspan="6" align="center">Tidak ada data</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
