<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Compte client</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/css/headerFooter.css" />
    <link rel="stylesheet" href="assets/css/account.css" />
</head>

<body>
    <?php include('header.php') ?>
    <main>
        <div class="containerIdentity">
            <div class="identity">
                <div class="nameAccount">
                    <div class="divName">
                        <label for="firstname">Nom</label>
                        <input type="text" id="firstname" class="name" name="firstname" required minlength="4" size="10" />
                    </div>
                    <div class="divName">
                        <label for="lastname">Prénom</label>
                        <input type="text" id="lastname" class="name" name="lastname" required minlength="4" size="10" />
                    </div>
                </div>
                <label for="address">Adresse</label>
                <input type="text" id="address" class="inputAccount" name="address" required minlength="4" size="10" />
                <label for="mail">Mail</label>
                <input type="tel" id="mail" class="inputAccount" name="mail" pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}" size="10" />
                <label for="phone">Numéro de téléphone</label>
                <input type="text" id="phone" class="inputAccount" name="phone" required minlength="10" size="10" />
                <label for="password">Mot de passe</label>
                <input type="text" id="password" class="inputAccount" name="password" required minlength="5" maxlength="12" size="10" />
            </div>
            <div class="glassesChoice" id="glassesChoice">
                <h3>Coup de coeur</h3>
                <i class="bi bi-arrow-left-square-fill"></i>
                <div class="cards"></div>
                <i class="bi bi-arrow-right-square-fill"></i>
            </div>
        </div>

        <div class="containerOrderInProgress ">
            <h3>Vos commandes</h3>
            <div class="orderInProgress"></div>
        </div>
        <div class="containerOrderPlaced">
            <h3>Vos commandes déja livrées</h3>
            <div class="orderPlaced"></div>
        </div>

    </main>
</body>
<?php include('footer.php') ?>

</html>