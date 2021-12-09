const postContent = document.getElementById("postContent");
const hamburgerBtn = document.getElementById("hamburgerBtn");
const hamburgerContainer = document.getElementById("hamburger-container")
const closeHamburgerBtn = document.getElementById("closeHamburgerBtn")
const textArea = document.getElementById('textArea');
const tx = document.getElementsByTagName("textarea");

function hideElement(element) {
    element.classList.toggle("hidden");
}

function extendText() {

    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");

    if (dots.style.display === "none") {
        dots.style.display = "inline";
        postContent.innerHTML = "Read more";
        moreText.style.display = "none";
    } else {
        dots.style.display = "none";
        postContent.innerHTML = "Read less";
        moreText.style.display = "inline";
    }
}

for (let i = 0; i < tx.length; i++) {
    const txHeight = 16;
    if (tx[i].value == '') {
        tx[i].setAttribute("style", "height:" + txHeight + "px;overflow-y:hidden;");
    } else {
        tx[i].setAttribute("style", "height:" + (tx[i].scrollHeight) + "px;overflow-y:hidden;");
    }
    tx[i].addEventListener("input", OnInput, false);
}

function OnInput(e) {
    this.style.height = "auto";
    this.style.height = (this.scrollHeight) + "px";
}

function countCharacters(e) {
    let textTyped = document.getElementById('textArea').value;
    countRemaining = document.getElementById('charactersRemaining');
    countRemaining.textContent = 260 - textTyped.length;
}

postContent.addEventListener("click", extendText);
hamburgerBtn.addEventListener("click", () => {
    hideElement(hamburgerContainer)
})
closeHamburgerBtn.addEventListener("click", () => {
    hideElement(hamburgerContainer)
})
textArea.addEventListener('keydown', countCharacters, false);