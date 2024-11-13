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
            <div class="container w-25 p-0"><a class="navbar-brand" href="#" class="w-25"><img src="../../../assets/img/heroesLogo.png" alt="" class="img-fluid"></a></div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item ">
                        <a  class="nav-link text-white" href="insert.php">Crear una criatura</a>
                    </li>
                </ul>
            </div>  
        </nav>
        
        <main>
            <div class="container">
                <div class="row mt-5 mb-5">
                    <div class="col-lg-6">
                        <img src="../../../assets/img/heroesPortada.jpg" class="img-fluid rounded">
                    </div>
                    <div class="col-lg-6">
                        <h4>Comunidad de usuarios de Heroes</h4>
                        <p>La aventura comienza aquí, en tu navegador</p>
                        <button type="button" class="btn btn-primary">Juega ahora!</button>
                    </div>
                </div>
                
                <hr class="mb-5">
                
                <div class="row mb-5">
                    <div class="col-lg-4">
                        <div class="card">
                            <h3 class="card-title">Nombre de la Criatura</h3>
                            <div class="row card-body">
                                <div class="col-6"><img src="../../../assets/img/creatureSample.jpg" class="img-fluid"></div>
                                <div class="col-6"><p class="card-text">Descripicón criatura de ejemplo</p>
                            </div>
                            <div class="card-footer bg-white d-flex justify-content-around mt-2">
                                <button type="button" class="btn btn-secondary">Más info</button>
                                <button type="button" class="btn btn-success">Modificar</button>
                                <button type="button" class="btn btn-danger">Eliminar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        
        
        <!-- Bootstrap Script -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    </body>
</html>