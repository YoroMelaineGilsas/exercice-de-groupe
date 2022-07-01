<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 5 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">~
  <link rel="stylesheet" href="style.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container-fluid p-5 bg-primary text-white text-center">
  <h1><strong>DUC RESTAURANT</strong> </h1>
  <p>Notre satisfastion vous donnez un sourire après chaque repas !</p> 
</div>
<div class="container mt-3">
  <h2>ALLOCO</h2>
  <p>Menu:</p>
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="index.php?page=3">Alloco Burger</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index.php?page=4">Brochette d'Alloco Et Bouletre</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index.php?page=5">Poulet Braise Et Alloco</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index.php?page=6">Poulet Roti Et alloco</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index.php?page=7">Alloco Frit</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index.php?page=8">Alloco Poisson Braisé</a>
    </li>
    <li class="nav-item">
      <a class="nav-link accueil" href="index.php">Accueil</a>
    </li>
  </ul>
</div>

   
</body>
</html>

<?php
if(isset($_GET["page"])) {// s'il y a des éléments 
    $page=$_GET["page"]; //$_GET permet d'envoyer des infos mais ce n'est pas sécurisé
if($page == 1){
    echo"<h1 style='color:green'>les favoris de Ciela</h1> <br> <h1>Les codes</h1>";
}else if($page == 2){
    echo"<h1 style='color:pink'> Les loisirs de Ciela</h1><br> <h1 style='color:purple'> Manger, Dormir, apprendre les technos</h1>";
}else if($page == 3){ 
  // alloco_burger
  include("alloco_burger.php");
  ?>
  <?php
  ?>

  <?php

  echo"<h1 style='color:pink'>ALLOCO BURGER</h1><br> <h1 style='color:purple'> Vous Donnez un Sourire Après Chaque Repas !</h1>";
}
else if($page == 4){ 
  // brochette d'alloco et bouletre
  include("brochette_d'alloco_et_bouletre.php")
  ?>
  <?php
  ?>

  <?php

  echo"<h1 style='color:pink'>Brochette d'Alloco Et Bouletre</h1><br> <h1 style='color:purple'> Vous Donnez un Sourire Après Chaque Repas !</h1>";
}
elseif($page == 5){ 
  // alloco poulet braise
  include("alloco_poulet_braise.php");
  echo"info";
  ?>
  <?php
  ?>


  <?php

  echo"<h1 style='color:pink'>Poulet Braise Et Alloco</h1><br> <h1 style='color:purple'> Vous Donnez un Sourire Après Chaque Repas !</h1>";
}
elseif($page == 6){ 
  // poulet roti et alloco
  include("poulet_roti_et_alloco.php");
  echo"info";
  ?>
  <?php
  ?>

  <?php

  echo"<h1 style='color:pink'>Poulet Roti Et alloco</h1><br> <h1 style='color:purple'> Vous Donnez un Sourire Après Chaque Repas !</h1>";
}
elseif($page == 7){ 
  // alloco frit
  include("alloco_frit.php");
  echo"info";
  ?>
  <?php
  ?>

  <?php

  echo"<h1 style='color:pink'>Alloco Frit</h1><br> <h1 style='color:purple'> Vous Donnez un Sourire Après Chaque Repas !</h1>";
}
elseif($page == 8){ 
  // alloco poisson braisé
  include("alloco_poisson_braisé.php")
  ?>
  <?php
  ?>


  <?php

  echo"<h1 style='color:pink'>Alloco Poisson Braisé</h1><br> <h1 style='color:purple'> Vous Donnez un Sourire Après Chaque Repas !</h1>";
}
}
else{

?>
<?php
//page d'accueil

?>
<div class="container mt-5">
  <div class="row">
    <div class="col-sm-4">
      <h3>1 Bananes plantain caramélisées : </h3>
      <p>J’ai découvert il n’y a pas si longtemps les bananes plantains et j’en suis devenu accroc ! 
        Sucrées et bourrées de fibres, elles combinent merveilleusement avec des plats salés, 
        du fait qu’elles contiennent moins de sucre et plus d’amidon que les “bananes traditionnelles”.</p>
      <p>Si vous la découvrez, on va commencer tout doux avec cette petite recette très simple qui n’implique que deux ingrédients. 
        Ne manquez pas également cette salade sucré épicé à base de ces délicieuses bananes plantains !</p>
    </div>
    <div class="col-sm-4">
      <h3>2 Ingrédients pour des bananes plantains à la poêl:</h3>
      <p>•	2 Belles bananes plantains bien mûres (les jaunes avec des tâches brunes)
      <p>• 	Un peu d’huile de coco</p>
      <p>Quelle différence entre les plantains jaunes et vertes ? Les bananes jaunes sont simplement plus sucrées, 
        c’est celle que l’on va privilégier pour cette cuisson à la poêle (et même au four). Si vous ne pouvez en trouver que des vertes, 
        faites-les murir chez vous simplement en les laissant sur le comptoir de la cuisine ou dans un endroit chaud. A l’inverse,
         placez-les dans le frigo pour ralentir le processus de mûrissement.</p>
    </div>
    <div class="col-sm-4">
      <h3>3 Cuisson de vos bananes plantain</h3>        
      <p>Rien de plus simple :</p>
      <p>•	Commencez par couper chaque extrémité de vos bananes, puis retirez la peau après avoir fait une mince entaille dans la longueur du fruit.
      <p>•	Coupez les bananes en lamelles mais en adoptant un angle afin d’avoir des tranches en diagonales (voir la vidéo ci-dessous).
      <p>•	Faites fondre une noix d’huile de coco dans votre poêle chaude puis placez y les bananes pour une cuisson de quelques minutes de chaque côté.
      <p>•	Les deux faces des plantains doivent être bien caramélisées.
      <p>•	Réservez sur un sopalin afin d’enlever, éventuellement, les résidus d’huile, puis parsemez de fleur de sel.
      <p>•	Dégustez ainsi ou agrémentez d’une sauce.
</p>
<img src="image/TT.jpg" alt="">
    </div>
  </div>
</div>


<?php
}
?>