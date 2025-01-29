<footer>
  <div class="container-footer">
    <div class="contact">
      <i class="bi bi-telephone-forward-fill"></i>
      <p class="popupTel" id="popupTel">06.15.23.53.98</p>
      <i class="bi bi-envelope-at-fill" id="mail"></i>
      <p class="popupMail" id="popupMail">LaLunetterieSenlisienne@gmail.com</p>
    </div>
    <div class="links-footer">
      <a href="frams.php" class="navLink">Lunettes</a>
      <a href="contactLenses.php" class="navLink">Lentilles</a>
      <a href="agenda.php" class="navLink">Prendre RDV</a>
    </div>
    <div class="container-follow">
      <div class="follow">
        <a href="https://www.instagram.com/la_lunetterie_senlisienne/" target="_blank"> <img src="assets/img/icons8-insta-50.png" alt="insta" class="logoFollow" /></a>
        <a href="https://www.facebook.com/people/La-Lunetterie-Senlisienne/61566471328072/?_rdr" target="_blank"><img
            src="assets/img/icons8-facebook-nouveau-50.png"
            alt="facebook" class="logoFollow" /></a>
      </div>
      <div class="copyright">
        <img
          src="assets/img/icons8-copyright-40.png"
          alt="copyright"
          class="copyrightLogo" />
        <a href="mentionsLegales.php" class="navLink">Mentions légales</a>
      </div>
    </div>
  </div>
  <script>
    let telFooter = document.getElementById('tel')
    let popupTel = document.getElementById('popupTel')
    telFooter.addEventListener('click', () => {
      popupTel.classList.toggle('open')
      telFooter.classList.toggle('open')
    })


    let mailFooter = document.getElementById('mail')
    let popupMail = document.getElementById('popupMail')
    mailFooter.addEventListener('click', () => {
      popupMail.classList.toggle('open')
      mailFooter.classList.toggle('open')
    })
  </script>
</footer>