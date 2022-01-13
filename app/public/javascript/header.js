const hamburgerBtn = document.getElementById("hamburgerBtn");
const hamburgerContainer = document.getElementById("hamburger-container");
const blockerBackground = document.getElementById("blocker-background");

function hideElement(element) {
    element.classList.toggle("hidden");
}

blockerBackground.addEventListener("click", (e) => {
    if (e.target.id === "blocker-background") {
        hideElement(hamburgerContainer);
        hideElement(blockerBackground) 
    }
    return;
}, false);

hamburgerBtn.addEventListener("click", () => {
    hideElement(hamburgerContainer);
    hideElement(blockerBackground);
})
