const hamburgerBtn = document.getElementById("hamburgerBtn");
const hamburgerContainer = document.getElementById("hamburger-container");

function hideElement(element) {
    element.classList.toggle("hidden");
}

hamburgerBtn.addEventListener("click", () => {
    hideElement(hamburgerContainer)
})
