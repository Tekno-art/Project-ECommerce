<?php

    if(!isset($_GET["nama"]) ||
        !isset($_GET["deskripsi"]) ||
        !isset($_GET["harga"]) ||
        !isset($_GET["image"]))
    {
        header("Location:latihan.php");
        exit;
    };

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>List Batu Berharga</title>
    <title>Detail Batuan</title>
</head>
<body>
    <div class="container text-center mt-5">
        <div class="row">
            <div class="col-12 text-center">
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $_GET["image"] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title"><?php echo $_GET["nama"] ?></h5>
                      <p class="card-text"><?php echo $_GET["deskripsi"] ?></p>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item"><?php echo $_GET["harga"] ?></li>
                    </ul>
                    <div class="card-body">
                      <a href="latihan.php" class="card-link">Kembali</a>
                      <a href="#" class="card-link">Tambah Ke Favorit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"><script>
</body>
</html>