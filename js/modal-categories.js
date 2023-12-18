// Get all the links inside the modal
const modalLinks = document.querySelectorAll(".modal-link"); // Get the modal

const modalCategories = document.getElementById("modal-categories");

// When the user clicks the button, open the modal
function openModal() {
  modalCategories.style.display = "block";
  modalCategories.classList.add("fade-in");
}

// When the user clicks on <span> (x), close the modal
function closeModal() {
  modalCategories.classList.add("fade-out");
}

modalCategories.addEventListener("animationend", function () {
  if (modalCategories.classList.contains("fade-out")) {
    modalCategories.style.display = "none";
    modalCategories.classList.remove("fade-out");
  }
});

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
  if (event.target == modalCategories) {
    modalCategories.style.display = "none";
  }
};

// When the user presses the escape key, close the modalCategories and set the flag in localStorage
window.addEventListener("keydown", function (event) {
  if (event.code === "Escape") {
    modalCategories.style.display = "none";
    localStorage.setItem("modalCategoriesClosed", "true");
  }
});

// Add an event listener to each link
modalLinks.forEach((link) => {
  link.addEventListener("click", function () {
    closeModal();
  });
});
