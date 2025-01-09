//---------------------------------------------------------------------------//
//-----------------email and password customer controle----------------------//
//---------------------------------------------------------------------------//

//-------------------------------------------------------//
//------------mise en variable des regex-----------------//
//-------------------------------------------------------//

const emailRegex = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{1,}$/i; //Liens utiles pour la signification des symboles regex : https://www.tutos.eu/8752

const currentPasswordRegex =
  /^(?=.*[A-Za-z])(?=.*\d)(?=.*[&-+!*$@%_])([&-+!*$@%_\w]{8,15})$/;

//-------------------------------------------------------//
//-----récupération du boutton submit et des inputs------//
//-------------------------------------------------------//

//cas général : const nomDeMaVariable = document.getElementById("id de mon élément")

// exemple :

const btnSubmitCustomer = document.getElementById("SubmitCustomer");
console.log(btnSubmitCustomer);

const regExCurrentMail = document.querySelector("#currentMail");
console.log(regExCurrentMail);

let regExCurrentPassword = document.getElementById("currentPassword");
console.log(regExCurrentPassword);

// Deux méthodes ont été utilisées afin de récupérer nos éléments 'getElementById' et 'querySelector' cela veut dire la même
// chose ( il en existe même d'autres.... à vous de choisir ;) )

//----------------------------------------------------------------------------------------------------//
//-----Créer un événement sur le bouton afin que, lors du clic, une vérification soit effectuée ------//
//----------------------------------------------------------------------------------------------------//

btnSubmitCustomer.addEventListener("click", () => {
  const currentMailValue = regExCurrentMail.value; // création de la variable qui va récuperer ce que le client écrit en email
  console.log(currentMailValue); // (tjrs vérifier avec un console.log()) => une fois que c'est vérifier plus besoin de l'avoir dans le code
  const currentPasswordValue = regExCurrentPassword.value; // création de la variable qui va récuperer ce que le client écrit en mot de passe

  // création de conditions pour vérifier que le regex fonctionne bien
  if (
    emailRegex.test(currentMailValue) &&
    currentPasswordRegex.test(currentPasswordValue)
  ) {
    console.log("L'email et le password sont valides !");
  } else {
    console.log("L'email et le password sont invalide !");
  }

  //conditions pour envoyer les donné vers une autre page internet de son projet

  /*const currentPasswordValue = regExCurrentPassword.value;
  console.log(currentPasswordValue);
  if (
    emailRegex.test(currentMailValue) &&
    currentPasswordRegex.test(currentPasswordValue)
  ) {
    const data = {
      email: currentMailValue,
      password: currentPasswordValue,
    };
    // Construction des paramètres
    url.searchParams.append("nom", data.nom);
    url.searchParams.append("email", data.email);
    // Redirection vers la nouvelle page
    window.location.href = account.php;
  } else {
    console.log("password invalide !");
  }
});*/
