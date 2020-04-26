<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = "apu@yritys.com";
$subject = "Yhteydenottopyyntö";
$txt = "Nimi: $name, Email: $email, Viesti: $message";
$headers = "From: webmaster@yritys.com";

mail($to,$subject,$txt,$headers);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Summit Studios</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Abang%20Regular.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee">
    <link rel="stylesheet" href="assets/css/carton_sixregular.css">
    <link rel="stylesheet" href="assets/css/granstander_cleanregular.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Article-Clean.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Footer-Clean.css">
    <link rel="stylesheet" href="assets/css/Highlight-Blue.css">
    <link rel="stylesheet" href="assets/css/Highlight-Clean.css">
    <link rel="stylesheet" href="assets/css/Highlight-Phone.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <link rel="stylesheet" href="assets/css/Lightbox-Gallery.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>


<body>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean">
        <div class="container"><a class="navbar-brand" href="#" style="font-family: 'Abang Regular';font-size: 24px;">Summit Studios</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="contact.html" style="font-family: ABeeZee, sans-serif;">Ota Yhteyttä</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.html" style="font-family: ABeeZee, sans-serif;">Koti</a></li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#" style="font-family: ABeeZee, sans-serif;">Pelit</a>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item text-truncate text-break text-center" role="presentation" href="games/rednecklawnmowerrace.html">Redneck Lawnmower Racing</a></div>
                    </li>
                </ul>
        </div>
        </div>
    </nav>
    <div class="text-center highlight-clean">
        <div class="container">
            <div class="intro">
                <h2 class="text-center" style="width: 500;font-size: 32px;font-family: ABeeZee, sans-serif;">Yhteydenottopyyntösi on vastaanotettu!</h2>
                <p class="text-center" style="font-family: ABeeZee, sans-serif;line-height: 26px;">Vastaamme tyypillisesti 1-3 arkipäivän kuluessa.&nbsp;</p>
                <p class="text-center" style="font-family: ABeeZee, sans-serif;line-height: 26px;">Ohjaamme sinut takaisin kotisivulle 5 sekunnin kuluttua.</p><a class="btn btn-primary" role="button" href="index.html" style="font-family: ABeeZee, sans-serif;line-height: 26px;">Palaa nyt</a></div>
        </div>
    </div>
    <div class="text-center footer-basic">
        <footer>
            <div class="social"><a href="https://github.com/SamuelSalo/"><i class="icon ion-social-github"></i></a><a href="https://play.google.com/store/apps/developer?id=Samuel+Salo"><i class="fab fa-google-play"></i></a><a href="https://samuel-salo.itch.io/"><i class="fas fa-gamepad"></i></a></div>
            <ul
                class="list-inline">
                <li class="list-inline-item"><a href="/SummitStudios-web/index.html" style="font-family: ABeeZee, sans-serif;">Koti</a></li>
                <li class="list-inline-item"><a href="/SummitStudios-web/games.html" style="font-family: ABeeZee, sans-serif;">Pelit</a></li>
                <li class="list-inline-item" style="font-family: ABeeZee, sans-serif;"><a href="/SummitStudios-web/contact.html" style="font-family: ABeeZee, sans-serif;">Ota Yhteyttä</a></li>
                </ul>
                <p class="copyright" style="font-family: ABeeZee, sans-serif;">Summit Studios © 2020</p>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
</body>
<script type="text/javascript">   
    function Redirect() 
    {  
        window.location="/SummitStudios-web/index.html"; 
    } 
    setTimeout('Redirect()', 5000);   
</script>
</html>