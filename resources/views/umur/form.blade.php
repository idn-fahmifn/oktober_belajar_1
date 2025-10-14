<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Umur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-4">
        <div class="card p-4">
            <div class="card-body">
                <div class="card-title">Masukan umur kamu dibawah :</div>

                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Wah ada error!</strong>
                        <ol>
                            @foreach ($errors->all() as $row)
                            <li>{{ $row }}</li>
                            @endforeach
                        </ol>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif



                <div class="mt-4">
                    <form action="{{ Route('umur.proses') }}" method="post">
                        @csrf
                        <div class="form-group mt-2">
                            <label for="">Nama Kamu</label>
                            <input type="text" name="name" class="form-control mt-1" required>
                        </div>
                        <div class="form-group mt-2">
                            <label for="">Umur</label>
                            <input type="number" name="age" class="form-control mt-1" required>
                        </div>
                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-success">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
