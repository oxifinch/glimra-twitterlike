<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glimma Twitter</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link  rel="stylesheet" type="text/css" href="css/glimworks_css/main.css"/> -->
    <link  rel="stylesheet" type="text/css" href="/css/main.min.css"/>
</head>

<body>
<?=
    $this->include("/partials/header");
?>

    <?=
    $this->include("/partials/profileBig");
?>

    <?=
    $this->include("/partials/profileSmall");
?>

    <?=
   $this->include("/partials/post");
?>

    <?=
   $this->include("/partials/postForm");
?>


    <div id="loginPartialContainer" class="hidden">
        <section>
            <p>You need to log in! <span id="closeLoginPartialContainer">X</span></p>
            <?= $this->include("/partials/loginPartial"); ?>
        </section>
    </div>

    
    <script>
const postContent = document.getElementById("postContent");
const hamburgerBtn = document.getElementById("hamburgerBtn");
const hamburgerContainer = document.getElementById("hamburger-container")
const closeHamburgerBtn = document.getElementById("closeHamburgerBtn")

function hideElement(element) {
    element.classList.toggle("hidden");
}

function extendText() {

  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

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

postContent.addEventListener("click", extendText);
hamburgerBtn.addEventListener("click", () => {
    hideElement(hamburgerContainer)
})
closeHamburgerBtn.addEventListener("click", () => {
    hideElement(hamburgerContainer)
})

</script>

</body>

</html>