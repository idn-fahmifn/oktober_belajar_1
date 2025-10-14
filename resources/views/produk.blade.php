<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-4">
        <div class="card p-4">
            <div class="card-body">
                <div class="card-title h4">List Data Produk</div>

                <div class="table-responsive mt-4">
                    <table class="table table-hover table-striped">
                        <thead>
                            <th>Nama Produk</th>
                            <th>Harga</th>
                            <th>Stok</th>
                        </thead>
                        <tbody>
                            @forelse ( $data as $row )
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

            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
