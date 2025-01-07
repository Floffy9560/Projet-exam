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
  <link rel="stylesheet" href="assets/css/shop.css" />
</head>

<body>
  <?php include('header.php') ?>
  <main>
    <div class="containerShop">
      <div class="containerHourly">
        <h2>Les Horaires</h2>
        <table>
          <tr>
            <th>lundi</th>
            <td>10h00-12h30</td>
            <td>14h30-19h00</td>
          </tr>
          <tr>
            <th>mardi</th>
            <td>10h00-12h30</td>
            <td>14h30-19h00</td>
          </tr>
          <tr>
            <th>mercredi</th>
            <td>10h00-12h30</td>
            <td>14h30-19h00</td>
          </tr>
          <tr>
            <th>jeudi</th>
            <td>10h00-12h30</td>
            <td>14h30-19h00</td>
          </tr>
          <tr>
            <th>vendredi</th>
            <td>10h00-12h30</td>
            <td>14h30-19h00</td>
          </tr>
          <tr>
            <th>samedi</th>
            <td>10h00-12h30</td>
            <td>14h30-19h00</td>
          </tr>
        </table>
        <button><a href="agenda.php">Prendre rendez-vous</a></button>
      </div>
      <div class="containerLocalisation">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2606.7424060830185!2d2.582741!3d49.205445999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e631d235fc8975%3A0x12d563c88a68ed24!2sOpticien%20Senlis%20-%20La%20Lunetterie%20Senlisienne!5e0!3m2!1sfr!2sfr!4v1735427994106!5m2!1sfr!2sfr"
          allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="googleMaps" id="googleMaps"></iframe>
        <div class="informations">

          <p>11 Rue de l'Apport au Pain, 60300 Senlis</p>
          <p>03 44 72 89 07</p>

        </div>
      </div>
    </div>
  </main>
  <?php include('footer.php') ?>
  <script>
    const google = document.getElementById(`googleMaps`)
    google.addEventListener(`load`, () => {
      google.classList.add('rotate')
    })
  </script>
</body>

</html>