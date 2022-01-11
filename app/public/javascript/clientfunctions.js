const postContent = document.querySelectorAll(".postContent");
const textArea = document.getElementById('textArea');
const tx = document.getElementsByTagName("textarea");
const postFormContainer = document.getElementById('postFormContainer');
const togglePostFormBtn = document.getElementById("togglePostFormBtn");
const closePostFormBtn = document.getElementById("closePostFormBtn");

function extendText() {

    // TODO fix this...!
    var dots = document.querySelectorAll(".dots");
    var moreText = document.querySelectorAll(".more");

    if (dots[0].style.display === "none") {
        dots[0].style.display = "inline";
        postContent.innerHTML = "Read more";
        moreText[0].style.display = "none";
    } else {
        dots[0].style.display = "none";
        postContent.innerHTML = "Read less";
        moreText[0].style.display = "inline";
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

Array.from(postContent).forEach(e => {
    e.addEventListener("click", extendText);
});

textArea.addEventListener('keydown', countCharacters, false);

togglePostFormBtn.addEventListener("click", () => {
    hideElement(postFormContainer)
}, false);

closePostFormBtn.addEventListener("click", () => {
    hideElement(postFormContainer)
}, false);