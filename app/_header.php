<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Gallery's Olmos</title>
</head>

<body>
    <div class="container">
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="/">Image's Gallery</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
    </div>
    <!-- Page Content -->

    <? if (isset($_GET['upload']) && $_GET['upload'] == "success") { ?>
        <div class='container'>
            <div class='alert alert-success alert-dismissible'>
                <h2>Picture Upload</h2>
            </div>
        </div>

    <?php }
    if (isset($_GET['upload']) && $_GET['upload'] == "error") { ?>
        <div class='container'>
            <div class='alert alert-danger' role='alert'>
                <h3><?=$_GET['msg'] ?></h3>
            </div>
        </div>
    <?php } ?>