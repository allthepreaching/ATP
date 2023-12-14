window.onload = function () {
  const modal = document.getElementById("myModal");
  const span = document.getElementsByClassName("close")[0];

  // When the page loads, open the modal if the user hasn't closed it before
  if (!localStorage.getItem("modalClosed")) {
    modal.style.display = "block";
  }

  // When the user clicks on <span> (x), close the modal and set the flag in localStorage
  span.onclick = function () {
    modal.style.display = "none";
    localStorage.setItem("modalClosed", "true");
  };

  // When the user presses the escape key, close the modal and set the flag in localStorage
  window.onkeydown = function (event) {
    if (event.key === "Escape") {
      modal.style.display = "none";
      localStorage.setItem("modalClosed", "true");
    }
  };
};
