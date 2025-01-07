<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>La lunetterie Senlisienne</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="assets/css/headerFooter.css" />
  <link rel="stylesheet" href="assets/css/index.css" />
</head>

<body>
  <?php include('header.php') ?>
  <div class="name">
    <h1>La lunetterie Senlisienne</h1>
  </div>

  <!---------------------------------------- section main sous le header avec 3 photos * nom du de l'enseigne--------------------->

  <main>
    <section>
      <div class="container_guide">
        <div class="guide_pict">
          <img
            src="assets/img/ametropie22.jpg"
            alt="amétropie"
            class="guide_img" />
          <p id="guide">
            <a href="amétropia.php">Les différentes amétropie</a>
          </p>
        </div>
        <div class="guide_pict">
          <img
            src="assets/img/entretien-lunettes.jpg"
            alt="Bien choisir ses lunettes"
            class="guide_img" />
          <p id="guide"><a href="glasses.php">Guide pratique</a></p>
        </div>
        <div class="guide_pict">
          <img
            src="assets/img/examun.jpg"
            alt="examen_de_vue"
            class="guide_img" />
          <p id="guide"><a href="custom_made.php">Le sur-mesure</a></p>
        </div>
      </div>
    </section>
    <!--- -------------1ere section : offer------------ --->
    <section class="container-offre">
      <h2><a href="offers.php">Offre du magasin</a></h2>

      <div class="offres">
        <img
          src="assets/img/offre-TT-Classique.jpg"
          alt="offre"
          class="photo_offre" />
      </div>
    </section>
    <!--- -------------2e section : les marques ------------ --->
    <section>
      <h2><a href="brands.php" id="brands_link">Nos marques</a></h2>
      <div class="container-section">
        <div class="brands">
          <p>
            Mesdames et Messieurs, Plongeons ensemble dans l'univers fascinant
            de la lunetterie haut de gamme, où design, innovation et
            authenticité s'unissent pour offrir bien plus que de simples
            accessoires : de véritables œuvres d'art fonctionnelles.
            Aujourd'hui, je vous invite à découvrir cinq marques d'exception
            qui redéfinissent les standards de l'élégance et du style.
          </p>
        </div>
        <div class="grid_container">
          <div class="grid">
            <div class="photos" id="friendly_frenchy">
              <img
                src="assets/img/friendly-frenchy.png"
                alt="friendly_frenchy" />
            </div>
            <div class="photos" id="woodys">
              <img src="assets/img/woodys.png" alt="woodys" />
            </div>
            <div class="photos" id="brique">
              <img src="assets/img/brique-et-violette.jpg" alt="brique" />
            </div>
            <div class="photos" id="sunday">
              <img src="assets/img/ss-3.jpg" alt="sunday-somewhere">
            </div>
            <div class="photos" id="ic_berlin">
              <img src="assets/img/ic-berlin.jpg" alt="ic_berlin" />
            </div>
            <div class="photos" id="brett">
              <img src="assets/img/brett-color.jpg" alt="brett" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--- -------------3e section : le sur mesrure------------ --->
    <section>
      <h2><a href="custom_made.php">Le sur-mesure</a></h2>
      <div class="container-section">
        <div class="custom_made_img">
          <div class="custom_img">
            <img src="assets/img/sur-mesure.jpg" alt="gab's atelier" />
          </div>
        </div>
        <div class="custom_made_text">
          <p>
            Le sur-mesure, est l'art de rendre un objet unique. L’alliance de
            savoir faire et de technicité dont la finalité est la conception
            d’un produit aux propriétés exclusives. Du visagisme à la
            fabrication, en passant par des mesures précises, du dessin, des
            échanges, nos lunettes sont le fruit d’un travail conjoint entre
            l’artisan et le porteur.
          </p>
        </div>
      </div>
    </section>
  </main>
  <script>
    const biList = document.getElementById("bi-list");
    const burgerMenu = document.querySelector(".burger-menu");

    biList.addEventListener("click", () => {
      biList.classList.toggle("open");
      burgerMenu.classList.toggle("open");
    });
  </script>
</body>
<?php include('footer.php') ?>

</html>