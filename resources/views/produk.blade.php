@extends('template.template')

@section('judul')
    Data Produk
@endsection


@section('sub-title')
    Daftar nama produk yang ada di toko ini.
@endsection


@section('content')
    <div class="table-responsive mt-4">
        <table id="example" class="table table-hover table-striped">
            <thead>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Stok</th>
            </thead>
            <tbody>
                @forelse ($data as $row)
                    <tr>
                        <td>{{ $row->nama_produk }}</td>
                        <td> IDR. {{ number_format($row->harga) }}</td>
                        <td>{{ $row->stok }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">Data tidak ditemukan</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
