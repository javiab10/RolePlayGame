<?php
    //ACORDARME DE LAS RUTAS
    require_once(dirname(__FILE__).'/../../../controllers/CreatureController.php');
    $_creatureController = new CreatureController();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($_POST["type"] == "create"){
            $_creatureController->createAction();
            echo "<p>Petidión hecha</p>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>RolePlayGame</title>
        <!-- Bootstrap Core CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>

    <body>
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-dark h-50">
            <div class="container w-25 p-0"><a class="navbar-brand" href="#" class="w-25"><img src="../../../../assets/img/heroesLogo.png" alt="" class="img-fluid"></a></div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a  class="nav-link text-white" href="../../public/index.php">Inicio</a>
                    </li>
                </ul>
            </div>  
        </nav>
        
        <div class="container-fluid" id="formInsert">
    
        <form action="" class="mt-5" id="formCreature" method="post" action="insert.php">
            <input type="hidden" id="type" name="type" value="create">
            <div class="container-fluid">
                <div class="mb-3 row">
                    <label for="name" class="col-sm-2 col-form-label">
                        Nombre
                    </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="description" class="col-sm-2 col-form-label">
                        Description
                    </label>
                    <div class="col-10">
                        <input type="text" class="form-control" id="description" name="description" placeholder="Description">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="avatar" class="col-sm-2 col-form-label">
                        Avatar
                    </label>
                    <div class="col-10">
                        <input type="text" class="form-control" id="avatar" name="avatar" placeholder="Avatar">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="attackPower" class="col-sm-2 col-form-label">
                        Attack Power
                    </label>
                    <div class="col-10">
                        <input type="text" class="form-control" id="attackPower" name="attackPower" placeholder="Attack Power"></input>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="lifeLevel" class="col-sm-2 col-form-label">
                        Life level
                    </label>
                    <div class="col-10">
                        <input type="text" class="form-control" id="lifeLevel" name="lifeLevel" placeholder="Life Level"></input>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="weapon" class="col-sm-2 col-form-label">
                        Weapon
                    </label>
                    <div class="col-10">
                        <input type="text" class="form-control" id="weapon" name="weapon" placeholder="Weapon"></input>
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-success" id="btnCrear">Crear</button>
                    </div>
                </div>
            </div>
        </form>
        
    </body>
</html>