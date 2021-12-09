const hamburgerBtn = document.getElementById("hamburgerBtn");
const hamburgerContainer = document.getElementById("hamburger-container")
const closeHamburgerBtn = document.getElementById("closeHamburgerBtn")

function hideElement(element) {
    element.classList.toggle("hidden");
}

hamburgerBtn.addEventListener("click", () => {
    hideElement(hamburgerContainer)
})
closeHamburgerBtn.addEventListener("click", () => {
    hideElement(hamburgerContainer)
})