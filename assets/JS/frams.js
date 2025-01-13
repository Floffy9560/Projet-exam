/*--------------------------------------------------------------------------------------------------*/
/*-----------------------------------------------frams----------------------------------------------*/
/*--------------------------------------------------------------------------------------------------*/

const buttonSearch = document.getElementById("buttonSearch");
const menuSearch = document.getElementById("menuSearch");
const overlay = document.getElementById("overlay");

buttonSearch.addEventListener("click", () => {
  buttonSearch.classList.toggle("open");
  menuSearch.classList.toggle("open");
  overlay.classList.toggle("open");
});

overlay.addEventListener("click", () => {
  buttonSearch.classList.remove("open");
  menuSearch.classList.remove("open");
  overlay.classList.remove("open");
});
//-----------------------------------------------------
//           Charger les données JSON
//-----------------------------------------------------

fetch("glasses.json")
  .then((response) => response.json()) // Convertir la réponse en JSON
  .then((glasses) => {
    const container = document.querySelector(".containerCards");

    //-----------------------------------------------
    // Parcourir et afficher chaque paire de lunettes
    //-----------------------------------------------

    glasses.forEach((glass) => {
      const glassCard = document.createElement("div");
      glassCard.classList.add(`cards`);

      glassCard.innerHTML = `
        <img src="${glass.image}" alt="${glass.name}" style="width: 100%; height: 200px;">
        <h3>${glass.name}</h3>
        <p>Prix : ${glass.price} </p>
        <p>Couleur : ${glass.color}</p>
        <p>Matière : ${glass.matiere} </p>
        <i class="bi bi-heart-fill"></i>
        <button class="buttonPushKart">Ajouté au panier</button>
      `;

      container.appendChild(glassCard);
    });
    heartChoice();
  })

  .catch((error) =>
    console.error("Erreur lors du chargement des données :", error)
  );

//-----------------------------------------------------
// Fonction creer par chat GPT + moi ^^ qui fonctionne qu'à moitié ^^
//-----------------------------------------------------

function keepHeart() {
  let cards = document.querySelectorAll(".cards");
  let heart = document.querySelector(".bi-heart-fill");

  cards.forEach((card, index) => {
    let currentCard = cards[index].outerHTML;
    console.log(`current cards = ${currentCard}`);
    let currentJSON = JSON.parse(currentCard);
    console.log(currentJSON);
    localStorage.setItem("cards", JSON.parse(currentCard));
    alert(localStorage);
  });
}

// code a effectuer
// recuperer la liste des 'card' recuperer dans le json
// recuperer le logo coeur de chaque 'card'et ajouter un evenement 'click'
// l'evenement change la couleur du coeur de noir en rouge et vice versa plus enregister la 'card' dans le localstorage
// inserer dans le json la 'card' selectionnée grace au coeur rouge ('heart')
// Fonction pour afficher les cartes sauvegardées

function heartChoice() {
  let cards = document.querySelectorAll(".cards");
  let hearts = document.querySelectorAll(".bi-heart-fill");

  hearts.forEach((heart, index) => {
    heart.addEventListener("click", () => {
      heart.style.color = heart.style.color === "red" ? "black" : "red"; // Basculer la couleur du cœur

      let tableau = JSON.parse(localStorage.getItem("cards")) || [];

      let currentCard = cards[index].outerHTML; // Récupérer le contenu de la carte associée

      if (heart.style.color === "red") {
        !tableau.includes(currentCard);
        tableau.push(currentCard);
      } else {
        // Retirer la carte du tableau si elle est désélectionnée
        tableau = tableau.filter((card) => card !== currentCard);
      }

      localStorage.setItem("cards", JSON.stringify(tableau));
      console.log(tableau);
    });
  });
}
