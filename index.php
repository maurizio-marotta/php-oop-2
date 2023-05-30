<?php

  require_once  __DIR__ . '/prodotti.php';

  require_once  __DIR__ . '/food.php';
  
  require_once  __DIR__ . '/toys.php';
  
  require_once  __DIR__ . '/accessori.php';
  
  require_once  __DIR__ . '/categoria.php';

  require_once  __DIR__ . '/db/db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <title>Store Animali</title>
</head>
<body>
  <h1 class="text-center">Store Animali <i class="fa-solid fa-bird"></i></h1>  
    <div class="container">
      <div class="row row-cols-2">
        <?php foreach($prodotti as $prodotto): ?>
        <div class="col-4 p-2">
          <div class="card" style="width: 18rem;">
          <img src="<?php echo $prodotto->getImage()?>" class="card-img-top" alt="<?php echo $prodotto->getName()?>">
            <div class="card-body">
            <h5 class="card-title">Nome prodotto: <?php echo $prodotto->getName()?></h5>
            <p class="card-text">Categoria: <?php echo $prodotto->getCategoria()->icone?><?php echo $prodotto->getCategoria()->name?></p>
            <p class="card-text">Prezzo: &euro;<?php echo $prodotto->getPrice()?></p>
            <?php if(get_class($prodotto) === 'Food'):?>
              <p class="card-text">Peso: <?php echo $prodotto->peso?></p>
              <p class="card-text">Ingredienti: <?php echo implode($prodotto->ingredienti)?></p>
            <?php endif; ?>

            <?php if(get_class($prodotto) === 'toys'):?>
              <p class="card-text">Caratteristiche: <?php $prodotto ->features?></p>
              <p class="card-text">Dimensioni: <?php echo $prodotto->size?></p>
            <?php endif; ?>

            <?php if(get_class($prodotto) === 'accessori'):?>
              <p class="card-text">Dimensioni: <?php echo $prodotto->materiale?></p>
              <p class="card-text">Materiale: <?php echo $prodotto->size?></p>
            <?php endif; ?>
            </div>
        </div>
        <?php endforeach ?>
      </div>
    </div>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>