<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <h1 class="text-center my-4">Générateur de mot de passe mémorisable</h1>
    <h2 class='text-center'>

    </h2>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
            <form action="validation.php" method="post">
                    <div class="mb-3">
                        <label for="length" class="form-label">Longueur des mots (min 6, max 10)</label>
                        <input type="number" class="form-control" name="length" value='6'>
                    </div>
                    <div class="mb-3">
                        <label for="number" class="form-label">Nombre de mots (min 4, max 10)</label>
                        <input type="number" class="form-control" name="number" value='4'>
                    </div>
                    <div class="mb-3">
                    <label for="complexity" class="form-label">Complexité</label>
                        <select class="form-select" name="complexity">
                            <option selected value="0">Niveau 1</option>
                            <option value="1">Niveau 2</option>
                            <option value="2">Niveau 3</option>
                        </select>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Générer</button>
                    </div>
                </form>
                
                <h2 class="text-center">
                    <?php 
                    
                        if(isset($_GET['password']))
                        {
                            echo $_GET['password'];
                        }
                    
                    ?>
                </h2>

            </div>
        </div>
    </div>


  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>