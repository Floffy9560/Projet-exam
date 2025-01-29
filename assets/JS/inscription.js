//---------------------------------------------------------//
//-----récupération du boutton submit et des inputs-------//
//-------------------------------------------------------//

const btnSubmitNewCustomer = document.getElementById("submitNewCustomer");

const btnSubmitCustomer = document.getElementById("SubmitCustomer");

const regExCurrentMail = document.querySelector("#currentMail");

let regExCurrentPassword = document.getElementById("currentPassword");

let regExLastname = document.getElementById("lastname");

let regExFirstname = document.getElementById("firstname");

let regExEmail = document.getElementById("email");

let regExPassword = document.getElementById("password");

let regExAdress = document.getElementById("adressT");

let regExTel = document.getElementById("tel");

//------------------------------------------------------------------------//
//------------recherche des labels + logo de validation------------------//
//----------------------------------------------------------------------//

const labelMailCustomer = document.getElementById("label-customer-mail");

const labelPassword = document.getElementById("labelPassword");
const passwordTcheck = document.getElementById("password-tcheck");

const labelFirstname = document.getElementById("labelFirstname");
const labelFirstnameTcheck = document.getElementById("labelFirstname-tcheck");

const labelLastname = document.getElementById("labelLastname");
const labelLastnameTcheck = document.getElementById("labelLastname-tcheck");

const labelTel = document.getElementById("labelTel");
const telTcheck = document.getElementById("tel-tcheck");

const labelEmail = document.getElementById("labelEmail");
const emailTcheck = document.getElementById("email-tcheck");

const labelAdress = document.getElementById("adress");
const postalAdressTcheck = document.getElementById("postal-adress-tcheck");

//--------------------------------------------------------------------------------------------------//
//---------------------------email and password customer controle----------------------------------//
//------------------------------------------------------------------------------------------------//

//---------------------------------------------------------//
//------------mise en variable des regex------------------//
//-------------------------------------------------------//

const emailRegex = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/i;

const currentPasswordRegex =
  /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*(),.?":{}|<>])[A-Za-z\d!@#$%^&*(),.?":{}|<>]{8,}$/;

const firstnameRegex = /^[A-Za-z\s-]{2,15}$/i;

const lastnameRegex = /^[A-Za-z\s-]{2,15}$/i;

const telRegex = /^(?:\+33|0)(?:\s|-|\.)?[1-9](?:\s|-|\.|\d){8}$/;

const adressRegex =
  /^\s*(\d{1,5})\s+(bis|ter|quater)?\s*(rue|avenue|boulevard|chemin|place|quai|allée|square|impasse|passage)?\s+([\w\sèéàîï\-']+){3,}\s*(\d{5})?\s*([\w\s\-']+)?\s*$/;

//---------------------------------------------------------------------------------------------------------------//
//------------événement click sur le btn submit pour la verification regex d'un client éxistant-----------------//
//-------------------------------------------------------------------------------------------------------------//

/*btnSubmitCustomer.addEventListener("click", (event) => {
  event.preventDefault();
  const currentMailValue = regExCurrentMail.value;

  if (emailRegex.test(currentMailValue)) {
    labelMailCustomer.innerHTML = `<i class="bi bi-check-circle-fill"></i>`;
  } else {
    labelMailCustomer.innerText =
      "L'email est invalide ! veuillez saisir le format : exemple@exemple.fr";
    labelMailCustomer.style.color = "red";
  }

  const currentPasswordValue = regExCurrentPassword.value;

  if (currentPasswordRegex.test(currentPasswordValue)) {
    labelPassworsCustomer.innerHTML = `<i class="bi bi-check-circle-fill"></i>`;
  } else {
    labelPassworsCustomer.style.color = "red";
    labelPassworsCustomer.innerText =
      "Veuillez saisir un mot de passe qui contient au moins 8 caractères dont : 1 majuscule, un caractére spécial et un chiffre";
  }
  if (
    emailRegex.test(currentMailValue) &&
    currentPasswordRegex.test(currentPasswordValue)
  ) {
    return true;
  }
});*/

//--------------------------------------------------------------------------------------------------------------//
//------------événement click sur l'oeil afin d'afficher ou de masquer le mot de passe-------------------------//
//------------------------------------------------------------------------------------------------------------//

const eye = document.getElementById("eye");
const currentPassword = document.getElementById("currentPassword");
const closeEye = document.getElementById("closeEye");

eye.addEventListener("click", () => {
  console.log("eye CLIKER");
  if (currentPassword.type === "password") {
    currentPassword.type = "text";
  }
  eye.classList.toggle("open");
  closeEye.classList.toggle("open");
});
eye.addEventListener("click", () => {
  console.log("closeEye CLIKER");
  if (currentPassword.type === "text") {
    currentPassword.type = "password";
  }
  eye.classList.toggle("open");
  closeEye.classList.toggle("open");
});

//--------------------------------------------------------------------------------------------------------------//
//------------événement click sur le btn submit pour la verification regex d'un nouveau client-----------------//
//------------------------------------------------------------------------------------------------------------//

btnSubmitNewCustomer.addEventListener("click", () => {
  const lastnameValue = regExLastname.value;
  localStorage.setItem("lastname", lastnameValue);

  if (lastnameRegex.test(lastnameValue)) {
    labelLastnameTcheck.classList.add("open");
    labelLastname.innerText = "";
  } else {
    labelLastname.innerText = "Veuillez ne saisir que des lettres";
    labelLastnameTcheck.innerHTML = "";
  }

  const firstnameValue = regExFirstname.value;
  localStorage.setItem("firstname", firstnameValue);
  if (firstnameRegex.test(firstnameValue)) {
    labelFirstnameTcheck.classList.add("open");
    labelFirstname.innerText = "";
  } else {
    labelFirstname.innerText = "Veuillez saisir que des lettres";
    labelFirstnameTcheck.innerHTML = "";
  }

  const telValue = regExTel.value;
  localStorage.setItem("tel", telValue);
  if (telRegex.test(telValue)) {
    telTcheck.classList.add("open");
    labelTel.innerText = "";
  } else {
    labelTel.innerText = "Veuillez saisir que des chiffres";
    telTcheck.innerHTML = "";
  }

  const emailValue = regExEmail.value;
  localStorage.setItem("email", emailValue);
  if (emailRegex.test(emailValue)) {
    emailTcheck.classList.add("open");
    labelEmail.innerText = "";
  } else {
    labelEmail.innerText =
      "L'email est invalide ! veuillez saisir le format : exemple@exemple.fr";
    emailTcheck.innerHTML = "";
  }

  const currentPasswordValue = regExCurrentPassword.value;
  localStorage.setItem("password", currentPasswordValue);
  if (currentPasswordRegex.test(currentPasswordValue)) {
    passwordTcheck.classList.add("open");
    labelPassword.innerText = "";
  } else {
    labelPassword.innerText =
      "Veuillez saisir un mot de passe qui contient au moins 8 caractères dont : 1 majuscule, un caractére spécial et un chiffre";
    passwordTcheck.innerHTML = "";
  }

  const adressValue = regExAdress.value;
  localStorage.setItem("adress", adressValue);
  if (adressRegex.test(adressValue)) {
    postalAdressTcheck.classList.add("open");
    labelAdress.innerText = "";
  } else {
    labelAdress.innerText = "Veuillez saisir une adresse valide svp";
    postalAdressTcheck.innerHTML = "";
  }
});
/*if (
    emailRegex.test(currentMailValue) &&
    currentPasswordRegex.test(currentPasswordValue)
  ) {
    return true;
  }
});*/
