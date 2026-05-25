<!DOCTYPE html>
<html>

<head>
    <title>Formulir</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-4">
        <form action="/formulir/proses" method="post">

            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

            <div class="row mb-3">
                <div class="col-3">
                    Nama :
                </div>
                <div class="col-9">
                    <input class="form-control" type="text" name="nama">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-3">
                    Umur :
                </div>
                <div class="col-9">
                    <input class="form-control" type="number" name="umur">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-3">
                    Alamat :
                </div>
                <div class="col-9">
                    <input class="form-control" type="text" name="alamat">
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <input class="btn btn-primary" type="submit" value="Simpan">
                </div>
            </div>

        </form>
    </div>

</body>

</html>
