<?php
$batuan = [
    [
        "nama" => "Diamond",
        "deskripsi" => "berlian sendiri merupakan batu permata yang paling keras, solid, dan kualitas fisiknya terbaik dibandingkan batu mulia lainnya.",
        "harga" => "+- 3 milyar",
        "image" => "https://blogpictures.99.co/batu-mulia-diamond.jpg"
    ],
    [
        "nama" => "Sapphire",
        "deskripsi" => "Batu mulia safir di Indonesia juga disebut dengan batu nilam.
        Safir memiliki tingkat soliditas yang sangat tinggi.",
        "harga" => "+- 300 jt",
        "image" => "https://blogpictures.99.co/batu-mulia-safir.jpg"
    ]

];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>List Batu Berharga</title>
</head>
<body>
    
    <h1>Daftar nama nama batu berharga</h1>
    <div class="list-group">
        <?php foreach ($batuan as $batu){ ?>
            <a href="latihan2.php?nama=<?php echo $batu["nama"] ?>&deskripsi=<?php echo $batu["deskripsi"] ?>&harga=<?php echo $batu["harga"] ?>&image=<?php echo $batu["image"] ?>&" class="list-group-item list-group-item-action"><?php echo ($batu["nama"]); ?></a>
        <?php }; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"><script>
</body>
</html>