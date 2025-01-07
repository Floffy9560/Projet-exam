const regExNom = (value) => {
  return /^(?:\+33|0)(?:\s|-|\.)?[1-9](?:\s|-|\.|\d){8}$/.test(value);
};
const regExPrenom = (value) => {
  return /^(?:\+33|0)(?:\s|-|\.)?[1-9](?:\s|-|\.|\d){8}$/.test(value);
};
const regExEmail = (value) => {
  return /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(value);
};
const regExTel = (value) => {
  return /^(?=.*[A-Za-z])(?=.*\d)(?=.*[&-+!*$@%_])([&-+!*$@%_\w]{8,15})$/.test(
    value
  );
};
console.log(regExTel);

let tel = document.querySelector("form input");
let btn = document.querySelector("button");
btn.addEventListener("click", (e) => {
  e.preventDefault;
});
