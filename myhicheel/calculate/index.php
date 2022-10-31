<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
</head>
<body>
     <?php include 'helpers.php'; ?>
    <H1>
         <?php include 'formhvleenavalt.php';?>
    </H1>
    bnbn
    <div class="container">
        <div class="row">
            <div class="row-12">
                <?php include 'inputs.php'; ?>
                <form action="index.php?haanaas=index" method="POST">
                <input type="password" name="password"/>
                <?php hr(); ?>
                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                        <label for="vehicle1"> I have a bike</label><br>
                        <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                        <label for="vehicle2"> I have a car</label><br>
                        <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                        <label for="vehicle3"> I have a boat</label><br>
                         

                <?php hr(); ?>
                <div class="form-check">
                    <input type="form-check-input" type="radio" name="huis" id=flexradio1 value="male">
                    <label class="form-check-label" for=flexradio1>
                        male
                    </label>
                    </div>
                
                    <div class="form-check">
                    <input type="form-check-input" type="radio" name="huis" id=flexradio2 value="female" checked>
                    <label class="form-check-label" for=flexradio2>
                        female
                    </label>
                </div>
                <?php hr(); ?>
                <label for="customRange1" class="form-label">Example range</label>
                <input type="range" name="range" class="form-range" id="customRange1" min="0" max="10" step="0.5">

                <?php hr(); ?>
                <input type="haanaas" value="index.php" type="hidden"> 
                <input type="submit">

                
                </form>

            </div>

        </div>

    </div>
</body>
</html>