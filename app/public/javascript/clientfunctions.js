const postContent = document.querySelectorAll(".postContent");
const contentFormContainer = document.querySelectorAll('.content-form-container');
const tx = document.querySelectorAll("textarea");
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
    const target = e.target;
    const targetValue = target.value.length;
    const getRelatedDomCounter = target.closest(".content-form-container").children[1].children[0];
    getRelatedDomCounter.textContent = 260 - targetValue;
}

Array.from(postContent).forEach(e => {
    e.addEventListener("click", extendText);
});

for (let i = 0; i < tx.length; i++) {
 
}

tx.forEach(tx => {
    tx.addEventListener('keyup', (e) => {
        countCharacters(e)
    }, false);
});

togglePostFormBtn.addEventListener("click", () => {
    hideElement(postFormContainer)
}, false);

closePostFormBtn.addEventListener("click", () => {
    hideElement(postFormContainer)
}, false);