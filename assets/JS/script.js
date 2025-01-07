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
//-------------------------
// Charger les données JSON
//-------------------------

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
        <i class="bi bi-heart-fill" id="bi-heart-fill"></i>
      `;

      container.appendChild(glassCard);

      const heart = document.getElementById("bi-heart-fill");

      heart.addEventListener("click", () => {
        heart.style.color = "red";
      });

      console.log(heart);
    });
  })
  .catch((error) =>
    console.error("Erreur lors du chargement des données :", error)
  );

/*const heart = document.querySelectorAll(".cards");

document.addEventListener("click", (event) => {
  if (event.target.classList.contains("bi-heart-fill")) {
    console.log("Icône cœur cliquée !");
    event.target.classList.toggle("active"); // Exemple de comportement
  }
});*/

/*document.addEventListener("click", (event) => {
  if (event.target.classList.contains("bi-heart-fill")) {
    StylePropertyMap.color = "red";
    document.getElementById("bi-heart-fill").addEventListener("click", () => {
      // Redirige vers page2.html avec un paramètre
      window.location.href = "kart.php?createDiv=true";
    });
  }
  // Extraire les paramètres de l'URL
  const params = new URLSearchParams(window.location.search);
  const createDiv = params.get("createDiv");

  if (createDiv === "true") {
    // Crée une nouvelle div
    const newDiv = document.createElement("div");
    newDiv.className = "new-div";
    newDiv.textContent = "Ceci est une div créée via l'URL !";

    // Ajoute la div au contenu principal
    document.getElementById("glassesChoice").appendChild(newDiv);
  }
});*/
