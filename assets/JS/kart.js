const btnMore = document.getElementsByClassName("more");

const btnLess = document.getElementsByClassName("less");

let total = document.getElementById("total");

let price = document.querySelectorAll(".price");

//---------------------------------------------------------------------------------------
//    Mise en place du prix total des articles / Setting up the total price of items
//---------------------------------------------------------------------------------------

function totalPrice() {
  let totalPrice = 0; // Initialiser le total

  price.forEach((p) => {
    // Convertir le texte en nombre et l'ajouter au total
    const currentPrice = parseFloat(p.textContent); // Convertir en nombre (float)

    if (!isNaN(currentPrice)) {
      // Vérifier que ce n'est pas NaN
      totalPrice += currentPrice;
    }
  });

  return "Prix total :", totalPrice;
}
total.innerHTML = totalPrice();

//----------------------------------------------------------
//        Evenement sur bouton + / Event on + button
//----------------------------------------------------------

btnMore.addEventListener("click", () => {
  console.log("tu as clicker");
});
