<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Bootstrap-XD">
    <meta name="generator" content="Bootstrap-XD">
    <title>Top crytpo-monnaies à détenir en 2024 !</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

<meta name="theme-color" content="#0d6efd">


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

      #results {
        list-style: none;
        padding: 0;
        margin: 0;
      }

      #results li {
        margin-bottom: 10px;
      }

    </style>

    
  </head>
  <body>
    
    <?php
// Appel du bloc Header et du Menu>
require 'header.php';
?>

<main>
  <section class="py-5 text-center container">
        <div style="display: flex;">
          <label class="btn btn-outline-primary" style="display: flex; align-items: center; margin-right: 10px; cursor: default;">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
              <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>
          </label>
        <input class="form-control me-2" type="search" id="searchInput" placeholder="Rechercher..." aria-label="Search">
        <ol id="results"></ol>
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
      echo '<ol>'.$value['crypto_nom'] . '';
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
        echo '</ol>';
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
    <script type="text/javascript">
      const searchInput = document.getElementById("searchInput");
      const results = document.getElementById("results");

      searchInput.addEventListener("input", function(event) {
        const searchTerm = event.target.value.toLowerCase();
        const items = document.getElementsByTagName("ol");
        
        for (let i = 0; i < items.length; i++) {
          const text = items[i].textContent.toLowerCase();
          if (text.includes(searchTerm)) {
            items[i].style.display = "block";
          } else {
            items[i].style.display = "none";
          }
        }
      });
    </script>

      
  </body>
</html>