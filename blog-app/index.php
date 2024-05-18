<?php

$kategori = array("Macera","Dram","Komedi","Korku");

array_push($kategori,"Fantastik");
sort($kategori);

$filmler = array(
    "1" => array(
        "baslik" => "Paper Lives",
        "aciklama" => "Kağıt toplayarak geçinen ve sağlığı giderek kötüleşen Mehmet terk edilmiş bir çocuk bulur. Birden hayatına giren küçük Ali, onu kendi çocukluğuyla yüzleştirecektir. (18 yaş ve üzeri için uygundur)",
        "resim" => "1.jpeg",
        "yorumSayisi" => "Yorum: 55",
        "begeniSayisi" => "Beğeni: 85",
        "vizyon" => "Viyonda: Evet"
    ),
    "2" => array(
        "baslik" => "Walking Dead",
        "aciklama" => "Zombi kıyametinin ardından hayatta kalanlar, birlikte verdikleri ölüm kalım mücadelesinde insanlığa karşı duydukları umuda tutunur.",
        "resim" => "2.jpeg",
        "yorumSayisi" => "Yorum: 55",
        "begeniSayisi" => "Beğeni: 85",
        "vizyon" => "Viyonda: Evet"
    )
);

$yeni_film = array(
    "baslik" => "Lucifer",
    "aciklama" => "Zombi kıyametinin ardından hayatta kalanlar, birlikte verdikleri ölüm kalım mücadelesinde insanlığa karşı duydukları umuda tutunur.",
    "resim" => "3.jpeg",
    "yorumSayisi" => "Yorum: 55",
    "begeniSayisi" => "Beğeni: 85",
    "vizyon" => "Viyonda: Evet"
);

$filmler["0"] = $yeni_film;

//1. ve 2.madde
function formatAciklama($aciklama) {
    $kisaAciklama = substr(ucfirst(strtolower($aciklama)), 0, 50);
    return $kisaAciklama . "...";
}

//3.madde
function createUrl($title) {
    $url = strtolower($title);
    $url = str_replace(' ', '-', $url); 
    $url = urlencode($url); 
    return "film.php?title=" . $url; 
}

//4.madde
define('BASLIK', 'Film Kategorileri');


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container my-3">
        <div class="row">
            <div class="col-12">
                <h1><?php echo BASLIK; ?></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <ul class="list-group">
                    <li class="list-group-item"><?php echo $kategori[0]?></li>
                    <li class="list-group-item"><?php echo $kategori[1]?></li>
                    <li class="list-group-item"><?php echo $kategori[2]?></li>
                    <li class="list-group-item"><?php echo $kategori[3]?></li>
                    <li class="list-group-item"><?php echo $kategori[4]?></li>
                </ul>
            </div>
            <div class="col-9">
                <?php
                foreach ($filmler as $film) {
                    ?>
                    <div class="card mb-3">
                        <div class="row">
                            <div class="col-3">
                                <img class="img-fluid" src="img/<?php echo $film["resim"]; ?>">
                            </div>
                            <div class="col-9">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <a href="<?php echo createUrl($film["baslik"]); ?>" style="text-decoration: none; color: inherit;">
                                            <?php echo $film["baslik"]; ?>
                                        </a>
                                    </h5>
                                    <p class="card-text">
                                        <?php echo formatAciklama($film["aciklama"]); ?>
                                    </p>
                                    <div>
                                        <span class="badge bg-success">Yapım Tarihi: 03.12.2021</span>
                                        <span class="badge bg-success"><?php echo $film["yorumSayisi"]; ?></span>
                                        <span class="badge bg-success"><?php echo $film["begeniSayisi"]; ?></span>
                                        <span class="badge bg-success"><?php echo $film["vizyon"]; ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
