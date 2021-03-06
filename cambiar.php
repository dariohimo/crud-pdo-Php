<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Cambiar</title>
</head>
<body class="py-3">
    <main class="container">

    <div class="row">
        <div class="col">
            <h1>Editar productos</h1>
        </div>
    </div>
    <div class="row py-3">
        <div class="col">

            <form class="row g-3" action="edit.php" method="POST" autocomplete="off">

            
                <div class="colmd-4">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" required autofocus>
                </div>
                <div class="colmd-4">
                    <label for="precio" class="form-label">Precio</label>
                    <input type="text" name="precio" id="precio" class="form-control" required autofocus>
                </div>
                <div class="col-md-12">
                    <a class="btn btn-secondary" href="index.php" >Atrás</a>
                    <button class="btn btn-warning" type="submit" >Editar</button>
                </div>

            </form>
   
        </div>
    </div>

    </main>
    
                    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>