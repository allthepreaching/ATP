window.onload = function () {
  const modalNewSearch = document.getElementById("modal-new-search");
  const span = document.getElementsByClassName("modal-new-search-close")[0];

  // When the page loads, open the modalNewSearch if the user hasn't closed it before
  if (!localStorage.getItem("modalNewSearchClosed")) {
    modalNewSearch.style.display = "block";
  }

  // When the user clicks on <span> (x), close the modalNewSearch and set the flag in localStorage
  span.onclick = function () {
    modalNewSearch.style.display = "none";
    localStorage.setItem("modalNewSearchClosed", "true");
  };

  // When the user presses the escape key, close the modalNewSearch and set the flag in localStorage
  window.onkeydown = function (event) {
    if (event.key === "Escape") {
      modalNewSearch.style.display = "none";
      localStorage.setItem("modalNewSearchClosed", "true");
    }
  };
};
