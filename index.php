<?php
$url = file_get_contents('https://data.covid19.go.id/public/api/update.json#');
$data = json_decode($url, true);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data COVID-19</title>
    <link rel="shortcut icon" href="indo.ico" type="image/x-icon">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <div class="nav navbar-nav">
            <a class="nav-item nav-link active" href="#"><i class="fa fa-fw fa-home"> </i>Home<span class="sr-only">(current)</span></a>
        </div>
    </nav>

    <div class="container">
        <div class="row mt-4">
            <div class="alert alert-primary" role="alert">
                <strong>Update</strong> Data Virus Corona di Indonesia!
            </div>

            <div class="col-md-3">
                <div class="card p-3 mb-5 shadow rounded text-light positif" style="background-color: #00B4D8;">
                    <div class="card-body">
                        <h4 class="card-title text-center"><i class="fa fa-frown-open"> </i> Positif</h4>
                        <p class="card-text text-center"> <?= $data['update']['total']['jumlah_positif']; ?> </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 sembuh">
                <div class="card p-3 mb-5 shadow rounded text-light sembuh" style="background-color: #8BDB81;"> 
                    <div class="card-body">
                        <h4 class="card-title text-center"><i class="fa fa-smile"> </i> Sembuh</h4>
                        <p class="card-text text-center">  <?= $data['update']['total']['jumlah_sembuh']; ?> </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card p-3 mb-5 shadow rounded text-light" style="background-color: #DA1212;">
                    <div class="card-body">
                        <h4 class="card-title text-center"><i class="fa fa-sad-cry"> </i> Meninggal</h4>
                        <p class="card-text text-center"> <?= $data['update']['total']['jumlah_meninggal']; ?> </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card p-3 mb-5 shadow rounded text-light"  style="background-color: #FCCF14;">
                    <div class="card-body">
                        <h4 class="card-title text-center"><i class="fa fa-smile-beam"> </i> Dirawat</h4>
                        <p class="card-text text-center"> <?= $data['update']['total']['jumlah_dirawat']; ?> </p>
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>

</html>