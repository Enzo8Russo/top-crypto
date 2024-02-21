<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Album example · Bootstrap v5.3</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
  </head>
  <body>
    
    <?php
// Appel du bloc Header et du Menu>
require 'header.php';
?>

<main>

  <section class="py-5 text-center container" style="background: url('../images/fond-2.jpg'); background-repeat: no-repeat; background-size: cover;">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light" style="color: white;">CATALOGUE</h1>
        <p class="lead text-muted" style="color: white !important;">"Chaque jour où vous n'investissez pas est un jour perdu pour gagner des rendements potentiels sur votre argent."</p>
        <p>
          <a href="../form_recherche.php" class="btn btn-primary my-2">Recherche</a>
          <a href="../index.php" class="btn btn-secondary my-2">Accueil</a>
        </p>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

      <?php
$mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'policeWW123.');
$mabd->query('SET NAMES utf8;');
$req = "SELECT * FROM crypto INNER JOIN createur ON crypto._auteur_id = createur.createur_id";
$resultat = $mabd->query($req);

foreach ($resultat as $value) {
        echo '<div class="col">';
          echo '<div class="card shadow-sm">';
            echo '<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Bitcoin" preserveAspectRatio="xMidYMid slice" focusable="false">';
              echo '<title>'.$value['crypto_nom'] . '</title>';
              echo '<rect width="100%" height="100%" fill="#000000"/>';
              echo '<image href="../images/uploads/'.$value['crypto_img'] . '" width="100%" height="100%"/>';
              echo '<rect width="100%" height="100%" fill="#000000" opacity="0.1"/>';
            echo '</svg>';
            echo '<div class="card-body">';
            echo '<h2>'.$value['crypto_nom'] . '</h2>';
              echo '<p class="card-text">'.$value['crypto_resumer'] . '</p>';
              echo '<div class="d-flex justify-content-between align-items-center">';
                echo '<div class="btn-group">';
                  echo '<button type="button" class="btn btn-sm btn-outline-secondary">'.$value['crypto_volume_totale'] . '</button>';
                  echo '<button type="button" class="btn btn-sm btn-outline-secondary">'.$value['createur_nom'] . '</button>';
                echo '</div>';
                echo '<small class="text-muted">'.$value['crypto_prix'] . ' $</small>';
              echo '</div>';
            echo '</div>';
          echo '</div>';
        echo '</div>';
        }
        ?>
      </div>
    </div>
  </div>
</main>

  <?php
// Appel du Pied de Page
require 'footer.php';
?>


    <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

      
  </body>
</html>





