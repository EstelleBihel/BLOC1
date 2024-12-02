// Exercice 1: Changer la couleur de fond
function changeBackgroundColor() {
  document.body.style.backgroundColor = "pink";
}
document.addEventListener("DOMContentLoaded", () => {
  const changeColorButton = document.getElementById("changeColorButton");
  if (changeColorButton) {
    changeColorButton.onclick = changeBackgroundColor;
  }
});

// Exercice 2: Ajouter un élément à une liste
function addItem() {
  const itemInput = document.getElementById("itemInput");
  const itemList = document.getElementById("itemList");
  if (itemInput && itemList) {
    const li = document.createElement("li");
    li.textContent = itemInput.value;
    itemList.appendChild(li);
    itemInput.value = "";
  }
}

// Exercice 3: Calculer une somme
document.addEventListener("DOMContentLoaded", () => {
  const calculerButton = document.getElementById("calculer");
  if (calculerButton) {
    calculerButton.addEventListener("click", () => {
      const nombre1 = parseFloat(document.getElementById("nombre1").value);
      const nombre2 = parseFloat(document.getElementById("nombre2").value);
      const resultat = document.getElementById("resultat");
      if (isNaN(nombre1) || isNaN(nombre2)) {
        resultat.textContent = "Entrez des nombres valides";
      } else {
        resultat.textContent = "La somme est : " + (nombre1 + nombre2);
      }
    });
  }
});

// Exercice 4: Sélectionner une image
document.addEventListener("DOMContentLoaded", () => {
  const imageSelector = document.getElementById("imageSelector");
  const displayImage = document.getElementById("displayImage");
  if (imageSelector && displayImage) {
    imageSelector.addEventListener("change", () => {
      const images = {
        image1: "../../assets/images/chat.png",
        image2: "../../assets/images/chien.png",
        image3: "../../assets/images/lapin.png",
      };
      const selectedValue = imageSelector.value;
      displayImage.src = images[selectedValue] || "";
      displayImage.style.display = selectedValue ? "block" : "none";
    });
  }
});

// Exercice 5: Survoler le bouton
document.addEventListener("DOMContentLoaded", () => {
  const alertButton = document.getElementById("alertButton");
  if (alertButton) {
    alertButton.addEventListener("mouseover", () => {
      alert("Vous avez survolé le bouton !");
    });
  }
});

// Exercice 6: Horloge
function updateClock() {
  const now = new Date();
  const hours = String(now.getHours()).padStart(2, "0");
  const minutes = String(now.getMinutes()).padStart(2, "0");
  const seconds = String(now.getSeconds()).padStart(2, "0");
  document.getElementById(
    "clock"
  ).textContent = `${hours}:${minutes}:${seconds}`;
}
document.addEventListener("DOMContentLoaded", () => {
  setInterval(updateClock, 1000);
  updateClock();
});

// Exercice 7: Suppression d'un élément
document.addEventListener("DOMContentLoaded", () => {
  const deleteButton = document.getElementById("deleteButton");
  const itemToDelete = document.getElementById("itemToDelete");
  if (deleteButton && itemToDelete) {
    deleteButton.addEventListener("click", () => {
      const confirmDelete = confirm(
        "Voulez-vous vraiment supprimer cet élément ?"
      );
      if (confirmDelete) {
        itemToDelete.remove();
      }
    });
  }
});

// Exercice 8: Afficher ou cacher un élément
document.addEventListener("DOMContentLoaded", () => {
  const toggleCheckbox = document.getElementById("toggleCheckbox");
  const elementToToggle = document.getElementById("elementToToggle");
  if (toggleCheckbox && elementToToggle) {
    toggleCheckbox.addEventListener("change", () => {
      elementToToggle.style.display = toggleCheckbox.checked ? "block" : "none";
    });
  }
});

// Exercice 9: Gestion du formulaire de contact
document.addEventListener("DOMContentLoaded", () => {
  const contactForm = document.getElementById("contactForm");

  if (contactForm) {
    contactForm.addEventListener("submit", (event) => {
      // Empêcher le comportement par défaut de soumission du formulaire
      event.preventDefault();

      // Récupérer les valeurs saisies
      const name = document.getElementById("name").value;
      const email = document.getElementById("email").value;
      const message = document.getElementById("message").value;

      // Afficher les valeurs dans la console
      console.log("Nom :", name);
      console.log("Email :", email);
      console.log("Message :", message);
    });
  }
});
