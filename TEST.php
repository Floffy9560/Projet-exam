<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <style>
        body {
            display: flex;
            height: 100vh;
            box-sizing: border-box;

        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
            justify-content: space-between;
            width: 500px;
            margin: auto;
            border: 1px solid;
            padding: 15px;
            background-color: teal;
        }

        input {
            padding: 10px;
            height: 30px;
            border: 2px solid;
        }

        #eye {
            display: block;
        }

        #eye.open {
            display: none;
        }

        #closeEye {
            display: none;
        }

        #closeEye.open {
            display: block;
        }
    </style>
</head>

<body>
    <form method="post">

        <label for="currentMail" id="labelMail"></label>
        <input
            type="email"
            id="currentMail"
            name="currentMail"
            placeholder="Adresse mail"
            class="input" required />


        <label for="currentPasswordCustomer" id="labelPassword"></label>
        <input
            type="current-password"
            id="currentPasswordCustomer"
            name="currentPassword"
            placeholder="Mot de passe"
            class="input"
            pattern="^(?=.*[A-Za-z])(?=.*\d)(?=.*[&-+!*$@%_])([&-+!*$@%_\w]{8,15})$" required />
        <i class='bi bi-eye-slash-fill' id="closeEye"></i>
        <i class="bi bi-eye-fill" id="eye"></i>




        <a href="#" id="passwordLost">Mot de passe oublié?</a>

        <div class="button">
            <button type="submit" class="btnSubmit" id="SubmitCustomer">Se connecter</button>
        </div>
        </div>
    </form>
    <script>
        // Récupération des éléments
        const passwordInput = document.getElementById('currentPasswordCustomer');

        const closeEye = document.getElementById('closeEye');
        const eye = document.getElementById('eye');


        // Ecouteur d'événement pour afficher/masquer le mot de passe

        eye.addEventListener('click', function() {

            console.log('eye clicked');

            passwordInput.type = passwordInput.type === 'text' ? 'password' : 'text';
            eye.classList.toggle('open');
            closeEye.classList.toggle('open');

        });

        closeEye.addEventListener('click', function() {
            console.log('closeEye clicked');
            passwordInput.type = passwordInput.type === 'password' ? 'text' : 'password';
            closeEye.classList.toggle('open');
            eye.classList.toggle('open');
        });


        document.getElementById('currentPasswordCustomer').addEventListener('input', function() {
            var password = document.getElementById('currentPasswordCustomer').value;
            var regex = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[&-+!*$@%_])([&-+!*$@%_\w]{8,15})$/;
            document.getElementById('labelPassword').textContent = regex.test(password) ? "Mot de passe valide" : "Mot de passe invalide";
        });
    </script>
</body>

</html>