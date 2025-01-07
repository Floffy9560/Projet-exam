<header>

  <div class="smartphone-header">
    <div class="header-container">
      <div class="headerDiv">
        <a href="headerDivindex.php"><img src="assets/img/logo-magasin.png" alt="shop logo" id="logo" /></a>
      </div>
      <div class="headerDiv">
        <i class="bi bi-list" id="bi-list"></i>
      </div>
      <div class="headerDiv">
        <a href="kart.php"><i class="bi bi-basket3-fill" id="kart"></i></a>
      </div>
    </div>
    <div class="burger-menu">
      <a href="agenda.php">Prendre rendez-vous</a>
      <a href="glasses.php">Guide pratique</a>
      <a href="shop.php">Le magasin</a>
      <a href="glasses.php">Recherche</a>
      <a href="frams.php">Lunettes</a>
      <a href="contactLenses.php">lentilles</a>
      <a href="glasses.php">Compte</a>

    </div>
  </div>

  <div class="menuContainer">
    <div id="containerLogo">
      <a href="index.php"><img src="assets/img/logo-magasin.png" alt="shop logo" id="logo" /></a>
    </div>
    <div class="containerMenu">
      <div class="menu">
        <nav class="spans">
          <a href="shop.php" class="navLink">Le magasin</a>
          <a href="agenda.php" class="navLink">Rendez-vous</a>
          <a href="glasses.php" class="navLink"> Guide pratique</a>
          <a href="frams.php" class="navLink">Lunettes</a>
          <a href="contactLenses.php" class="navLink"> Lentilles</a>
        </nav>
        <div class="searchAccount">
          <div class="account">
            <div class="searchContainer">
              <div class="searchContainerLogo">
                <a href="inscription.php"><img
                    src="assets/img/icons8-personne-homme-40.png"
                    alt="logo"
                    class="logoNav" /></a>
                <a href="kart.php"><img
                    src="assets/img/icons8-panier-40.png"
                    alt="cart"
                    id="kart"
                    class="logoNav" /></a>
              </div>
              <div class="searchContainerBtn">
                <input
                  type="search"
                  id="site-search"
                  name="rechercher"
                  placeholder="Rechercher...." />
                <button class="searchButton">
                  <img
                    src="assets/img/icons8-loupe-40.png"
                    alt="shop logo"
                    class="searchLogo" />
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    const biList = document.getElementById("bi-list");
    const burgerMenu = document.querySelector(".burger-menu");

    burgerMenu.addEventListener('scroll', (e) => {
      console.log('tu scroll!!');

    })

    biList.addEventListener("click", () => {
      biList.classList.toggle("open");
      burgerMenu.classList.toggle("open");
    });
  </script>
</header>