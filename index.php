<?php
require __DIR__.'/data/db.php';


?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PHP Movie</title>

   <!-- Bootstrap -->
   <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css' integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==' crossorigin='anonymous'/>
</head>
<body>
   <div class="container-sm">
      <header class="py-3">
         <h1 class="text-center">My movies - PHP</h1>
      </header>
      <main>
         <ul class="list-unstyled row row-cols-2">
            <?php foreach($movies as $movie) : ?>
               <li class="col">
               <div class="card m-auto " style="width: 18rem;">
                 <div class="card-body">
                   <h5 class="card-title text-info"><?= $movie->title ?></h5>
                   <hr>
                   <h6 class="card-subtitle mb-2 text-body-secondary"><span class="text-danger">Director:</span> <?= $movie->director->getFullName() ?></h6>
                   <h6 class="text-danger">Cast:</h6>
                   <ul> 
                      <?php foreach($movie->cast as $actor):?>
                     <li><?= $actor->getFullName() ?></li>
                      <?php endforeach?>
                   </ul>
                   <hr>
                   <p class="card-text text-warning "><?= $movie->plot ?></p>
                 </div>
               </div>
               </li>
               <?php endforeach ?>
         </ul>
      </main>
   </div>
   
</body>
</html>