<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glimma Twitter</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link  rel="stylesheet" type="text/css" href="css/glimworks_css/main.css"/> -->
    <link  rel="stylesheet" type="text/css" href="css/main.min.css"/>
</head>

<body>
    <!-- <h2>Header:</h2> -->


    <h2>Profile:</h2>
    <?=
    $this->include("/partials/profileBig");
?>

<p>WORK WORK WORK...</p>
<h2>Profile small!:</h2>
    <?=
    $this->include("/partials/profileSmall");
?>

    <h2>Posts:</h2>
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

    <!-- <script src="../../public/js/test.js"></script> -->
    
    
    <script>
const alterPostContent = document.getElementById("alterPostContent");

function extendText() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    alterPostContent.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    alterPostContent.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}

alterPostContent.addEventListener("click", extendText)
</script>

</body>

</html>