function alterElementVisibility(elem) {
    elem.classList.toggle("hidden");
}

const loginPartialContainer = document.getElementById("loginPartialContainer");
const closeLoginPartialContainer = document.getElementById("closeLoginPartialContainer")
const tempDeny = document.querySelectorAll("a, button");

tempDeny.forEach(e => {
    e.addEventListener("click", (e) => {
        alterElementVisibility(loginPartialContainer)
    })
})

closeLoginPartialContainer.addEventListener("click", () => {
    alterElementVisibility(loginPartialContainer)
})