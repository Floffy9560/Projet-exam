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

//---------------------------------------------------------//
//------------recherche des labels------------------//
//-------------------------------------------------------//

const labelMailCustomer = document.getElementById("label-customer-mail");

const labelPassword = document.getElementById("labelPassword");

const labelFirstname = document.getElementById("labelFirstname");

const labelLastname = document.getElementById("labelLastname");

const labelTel = document.getElementById("labelTel");

const labelEmail = document.getElementById("labelEmail");

const labelAdress = document.getElementById("adress");

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
      "Veuillez saisir un mot de passe qui contient au moin 8 caractères dont : 1 majuscule, un caractére spécial et un chiffre";
  }
  if (
    emailRegex.test(currentMailValue) &&
    currentPasswordRegex.test(currentPasswordValue)
  ) {
    return true;
  }
});*/

//--------------------------------------------------------------------------------------------------------------//
//------------événement click sur le btn submit pour la verification regex d'un nouveau client-----------------//
//------------------------------------------------------------------------------------------------------------//

btnSubmitNewCustomer.addEventListener("click", () => {
  const lastnameValue = regExLastname.value;
  localStorage.setItem("lastname", lastnameValue);
  if (lastnameRegex.test(lastnameValue)) {
    labelLastname.style.color = "green";
    labelLastname.innerHTML = `<i class="bi bi-check-circle-fill"></i>`;
  } else {
    labelLastname.innerText = "Veillez saisir que des lettres";
    labelLastname.style.color = "red";
  }

  const firstnameValue = regExFirstname.value;
  localStorage.setItem("firstname", firstnameValue);
  if (firstnameRegex.test(firstnameValue)) {
    labelFirstname.style.color = "green";
    labelFirstname.innerHTML = `<i class="bi bi-check-circle-fill"></i>`;
  } else {
    labelFirstname.style.color = "red";
    labelFirstname.innerText = "Veillez saisir que des lettres";
  }

  const telValue = regExTel.value;
  localStorage.setItem("tel", telValue);
  if (telRegex.test(telValue)) {
    labelTel.style.color = "green";
    labelTel.innerHTML = `<i class="bi bi-check-circle-fill"></i>`;
  } else {
    labelTel.style.color = "red";
    labelTel.innerText = "Veillez saisir que des chiffres";
  }

  const emailValue = regExEmail.value;
  localStorage.setItem("email", emailValue);
  if (emailRegex.test(emailValue)) {
    labelEmail.style.color = "green";
    labelEmail.innerHTML = `<i class="bi bi-check-circle-fill"></i>`;
  } else {
    labelEmail.style.color = "red";
    labelEmail.innerText =
      "L'email est invalide ! veuillez saisir le format : exemple@exemple.fr";
  }

  const currentPasswordValue = regExCurrentPassword.value;
  localStorage.setItem("password", currentPasswordValue);
  if (currentPasswordRegex.test(currentPasswordValue)) {
    labelPassword.style.color = "green";
    labelPassword.innerHTML = `<i class="bi bi-check-circle-fill"></i>`;
  } else {
    labelPassword.style.color = "red";
    labelPassword.innerText =
      "Veuillez saisir un mot de passe qui contient au moin 8 caractères dont : 1 majuscule, un caractére spécial et un chiffre";
  }

  const adressValue = regExAdress.value;
  localStorage.setItem("adress", adressValue);
  if (adressRegex.test(adressValue)) {
    labelAdress.style.color = "green";
    labelAdress.innerHTML = `<i class="bi bi-check-circle-fill"></i>`;
  } else {
    labelAdress.style.color = "red";
    labelAdress.innerText = "Veuillez saisir une adresse valide svp";
  }
});
/*if (
    emailRegex.test(currentMailValue) &&
    currentPasswordRegex.test(currentPasswordValue)
  ) {
    return true;
  }
});*/

let eye = document.getElementById("eye");
console.log(eye);

let closeEye = document.getElementById("closeEye");
console.log(closeEye);
