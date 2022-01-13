const hamburgerBtn = document.getElementById("hamburgerBtn");
const hamburgerContainer = document.getElementById("hamburger-container");
const blockerBackground = document.getElementById("blocker-background");
const openHamburgerBtn = document.getElementById("open-hamburger-btn");
const closeHamburgerBtn = document.getElementById("close-hamburger-btn");

function hideElement(element) {
    element.classList.toggle("hidden");
}

blockerBackground.addEventListener("click", (e) => {
    if (e.target.id === "blocker-background") {
        hideElement(hamburgerContainer);
        hideElement(blockerBackground);
        hideElement(openHamburgerBtn)
        hideElement(closeHamburgerBtn)
    }
    return;
}, false);

hamburgerBtn.addEventListener("click", () => {
    hideElement(hamburgerContainer);
    hideElement(blockerBackground);
    hideElement(openHamburgerBtn)
    hideElement(closeHamburgerBtn)
})
