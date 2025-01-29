<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Inscription/connexion</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="assets/css/headerFooter.css" />
  <link rel="stylesheet" href="assets/css/inscription.css" />
</head>


<body>
  <?php include('header.php') ?>
  <!-- ------------------------------------------------------>
  <!--------------- formulaire d'inscription----------------->
  <!-- ------------------------------------------------------>

  <main>
    <div class="formulaire">
      <div class="connection">
        <h2>Déja client ?</h2>

        <!-- ----------------------------------------------------------------------------------------->
        <!-- ------------------ Si client : proposer de rentré ses identifiant------------------------>
        <!-- ----------------------------------------------------------------------------------------->

        <form method="post">
          <div class="form_connection">
            <label for="currentMail" id="label-customer-mail"></label>
            <input
              type="email"
              id="currentMail"
              name="currentMail"
              placeholder="Adresse mail"
              class="input" required />

            <div class="label-passwors-customer">
              <label for="currentPasswordCustomer" id="r"></label>
              <input
                type="current-password"
                id="currentPasswordCustomer"
                name="currentPassword"
                placeholder="Mot de passe"
                class="input"
                pattern="^(?=.*[A-Za-z])(?=.*\d)(?=.*[&-+!*$@%_])([&-+!*$@%_\w]{8,15})$" required />
              <i class='bi bi-eye-slash-fill' id="closeEye"></i>
              <i class="bi bi-eye-fill" id="eye"></i>
            </div>

          </div>

          <a href="#" id="passwordLost">Mot de passe oublié?</a>

          <div class="button">
            <button type="submit" class="btnSubmit" id="SubmitCustomer">Se connecter</button>
          </div>
      </div>
      </form>
      <div class="inscription">
        <h2>Nouveau client ?</h2>
        <!-- --------------------------------------------------------------------------------------->
        <!-- -------------------- Si pas client proposer une inscription---------------------------->
        <!-- --------------------------------------------------------------------------------------->
        <form action="account.php" method="post">
          <div class="form_inscription">

            <div class="civility_container">

              <h3>Civilité :</h3>
              <div class="civility_choice">
                <input
                  type="radio"
                  name="civility"
                  value="Mme"
                  class="civility" id="civilityMme" required />
                <label for="civility">Mme</label>

              </div>
              <div class="civility_choice">
                <input
                  type="radio"
                  name="civility"
                  value="Mr"
                  class="civility" id="civilityMr" required />
                <label for="civility">Mr</label>
              </div>
              <div class="civility_choice">
                <input
                  type="radio"
                  name="civility"
                  id="other"
                  class="civility" id="civilityOther" required />
                <label for="civility">Autre</label>
              </div>
            </div>

            <div class="containerIdentity">

              <div class="lastname">
                <p id='labelLastname-tcheck'><i class="bi bi-check-circle-fill"></i></p>
                <label for="lastname" id='labelLastname'></label>
                <input
                  type="text"
                  name="lastname"
                  placeholder="Nom"
                  class="inputCivilityName"
                  id="lastname"
                  pattern="[A-Za-z]{3,}" minlength="2" required />
              </div>

              <div class="firstname">
                <p id='labelFirstname-tcheck'><i class="bi bi-check-circle-fill"></i></p>
                <label for="firstname" id='labelFirstname'></label>
                <input
                  type="text"
                  name="firstname"
                  placeholder="Prénom"
                  class="inputCivilityName"
                  id="firstname"
                  pattern="[A-Za-z]{3,}" minlength="2" required />
              </div>

            </div>

            <div class="email">
              <p id="email-tcheck"><i class="bi bi-check-circle-fill"></i></p>
              <label for="email" id="labelEmail"></label>
              <input
                type="email"
                name="email"
                placeholder="Adresse mail"
                class="input"
                id="email"
                pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$"
                minlength="2" title="Veuillez renseigner un email valide" required />
            </div>

            <div class="postal-adress">
              <p id="postal-adress-tcheck"><i class="bi bi-check-circle-fill"></i></p>
              <label for="adressT" id="labelAdress"></label>
              <textarea
                name="postal_adress"
                placeholder="Adresse postale"
                class="input"
                id="adressT"
                required></textarea>
            </div>

            <div class="password">
              <p id="password-tcheck"><i class="bi bi-check-circle-fill"></i></p>
              <label for="currentPassword" id="labelPassword"></label>
              <input
                type="password"
                name="currentPassword"
                placeholder="Mot de passe"
                class="input"
                id="currentPassword"
                pattern="^(?=.*[A-Za-z])(?=.*\d)(?=.*[&-+!*$@%_])([&-+!*$@%_\w]{8,15})$" required />
              <i class='bi bi-eye-slash-fill' id="closeEye"></i>
              <i class="bi bi-eye-fill" id="eye"></i>
            </div>

            <div>
              <select name="days" id="days" required>
                <option value="">Jours</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
              </select>
              <select name="month" id="month" required>
                <option value="">Mois</option>
                <option value="janvier">janvier</option>
                <option value="février">février</option>
                <option value="mars">mars</option>
                <option value="avril">avril</option>
                <option value="mais">mais</option>
                <option value="juin">juin</option>
                <option value="juillet">juillet</option>
                <option value="aout">aout</option>
                <option value="septembre">septembre</option>
                <option value="octobre">octobre</option>
                <option value="novembre">novembre</option>
                <option value="décembre">décembre</option>
              </select>
              <select name="year" id="year" required>
                <option value="">Années</option>
                <option value="1924">1924</option>
                <option value="1925">1925</option>
                <option value="1926">1926</option>
                <option value="1927">1927</option>
                <option value="1928">1928</option>
                <option value="1929">1929</option>
                <option value="1930">1930</option>
                <option value="1931">1931</option>
                <option value="1932">1932</option>
                <option value="1933">1933</option>
                <option value="1934">1934</option>
                <option value="1935">1935</option>
                <option value="1936">1936</option>
                <option value="1937">1937</option>
                <option value="1938">1938</option>
                <option value="1939">1939</option>
                <option value="1940">1940</option>
                <option value="1941">1941</option>
                <option value="1942">1942</option>
                <option value="1943">1943</option>
                <option value="1944">1944</option>
                <option value="1945">1945</option>
                <option value="1946">1946</option>
                <option value="1947">1947</option>
                <option value="1948">1948</option>
                <option value="1949">1949</option>
                <option value="1950">1950</option>
                <option value="1951">1951</option>
                <option value="1952">1952</option>
                <option value="1953">1953</option>
                <option value="1954">1954</option>
                <option value="1955">1955</option>
                <option value="1956">1956</option>
                <option value="1957">1957</option>
                <option value="1958">1958</option>
                <option value="1959">1959</option>
                <option value="1960">1960</option>
                <option value="1961">1961</option>
                <option value="1962">1962</option>
                <option value="1963">1963</option>
                <option value="1964">1964</option>
                <option value="1965">1965</option>
                <option value="1966">1966</option>
                <option value="1967">1967</option>
                <option value="1968">1968</option>
                <option value="1969">1969</option>
                <option value="1970">1970</option>
                <option value="1971">1971</option>
                <option value="1972">1972</option>
                <option value="1973">1973</option>
                <option value="1974">1974</option>
                <option value="1975">1975</option>
                <option value="1976">1976</option>
                <option value="1977">1977</option>
                <option value="1978">1978</option>
                <option value="1979">1979</option>
                <option value="1980">1980</option>
                <option value="1981">1981</option>
                <option value="1982">1982</option>
                <option value="1983">1983</option>
                <option value="1984">1984</option>
                <option value="1985">1985</option>
                <option value="1986">1986</option>
                <option value="1987">1987</option>
                <option value="1988">1988</option>
                <option value="1989">1989</option>
                <option value="1990">1990</option>
                <option value="1991">1991</option>
                <option value="1992">1992</option>
                <option value="1993">1993</option>
                <option value="1994">1994</option>
                <option value="1995">1995</option>
                <option value="1996">1996</option>
                <option value="1997">1997</option>
                <option value="1998">1998</option>
                <option value="1999">1999</option>
                <option value="2000">2000</option>
                <option value="2001">2001</option>
                <option value="2002">2002</option>
                <option value="2003">2003</option>
                <option value="2004">2004</option>
                <option value="2005">2005</option>
                <option value="2006">2006</option>
                <option value="2007">2007</option>
                <option value="2008">2008</option>
                <option value="2009">2009</option>
                <option value="2010">2010</option>
                <option value="2011">2011</option>
                <option value="2012">2012</option>
                <option value="2013">2013</option>
                <option value="2014">2014</option>
                <option value="2015">2015</option>
                <option value="2016">2016</option>
                <option value="2017">2017</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
                <option value="2024">2024</option>
                <option value="2025">2025</option>
              </select>
            </div>

            <h5>À quel numéro de téléphone le transporteur peut-il vous contacter ?</i></h5>
            <div class="tel">
              <p id="tel-tcheck"><i class="bi bi-check-circle-fill"></i></p>
              <label for="tel" id='labelTel'></label>
              <input
                type="tel"
                id="tel"
                name="tel"
                placeholder="N° de téléphone"
                class="inputTel"
                pattern="^(?:\+33|0)(?:\s|-|\.)?[1-9](?:\s|-|\.|\d){8}$"
                title="Ne saisir que des numéros" required />
            </div>

          </div>
          <div class="confirmation_container">
            <div class="confirmation_container_div">
              <input
                type="checkbox"
                name="confidentiality"
                value="confidentiality"
                class="confirmation" />
              <p> En cochant cette case, je confirme avoir pris connaissance de la
                <a href="#">politique de confidentialité</a> et accepter les
                <a href="#">CGV *</a>
              </p>

            </div>
            <div class="confirmation_container_div">
              <input
                type="checkbox"
                name="confidentiality"
                value="confidentiality"
                class="confirmation" />
              <p>J’accepte de recevoir de la part de <span>lunetterie Senlisienne</span>,
                des offres commerciales par mail et par sms portant sur des
                produits et/ou services d’optique et de contactologie.</p>
            </div>
            <div class="confirmation_container_div">
              <input
                type="checkbox"
                name="commercial_offers"
                value="commercial_offers"
                class="confirmation" />
              <p>J’accepte de recevoir de la part de
                <span>lunetterie Senlisienne</span> des offres commerciales par mail et
                par sms portant sur des produits d’optique, de contactologie et
                d’audiologie.
              </p>

            </div>
          </div>
          <p>
            En créant un compte en ligne, vous êtes informé(e) que
            <span>lunetterie Senlisienne</span>, en tant que responsable de
            traitement, traite les données recueillies sur ce formulaire afin
            notamment de créer votre compte, gérer vos commandes et si vous y
            avez spécifiquement consenti, vous adresser des offres
            personnalisées. Pour en savoir plus sur la gestion de vos données
            personnelles et pour exercer vos droits, reportez-vous à notre
            politique de confidentialité.
          </p>
          <p>
            *La communication des informations marquées d’un astérisque est
            obligatoire, à défaut vous ne pourrez pas valider le formulaire. En
            créant un compte en ligne, vous êtes informé(e) que
            <b>lunetterie Senlisienne</b>, en tant que responsable de
            traitement, traite les données recueillies sur ce formulaire afin
            notamment de créer votre compte, gérer vos commandes et si vous y
            avez spécifiquement consenti, vous adresser des offres
            personnalisées. Pour en savoir plus sur la gestion de vos données
            personnelles et pour exercer vos droits, reportez-vous à notre
            politique de confidentialité.
          </p>
          <div class="button">
            <button type="submit" class="btnSubmit" id="submitNewCustomer">S'inscrire</button>
          </div>
        </form>
      </div>
    </div>
  </main>
  <?php include('footer.php') ?>
  <script src="assets/JS/inscription.js" defer></script>
</body>

</html>