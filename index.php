<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>War Game</title>
    <link href="css/accueil.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body class="Site">
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">War Game</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-warning" aria-current="page" href="index.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="php/contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="php/connexion.php">Connexion</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" href="php/admin.php">Administration</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="php/deconnexion.php">Deconnexion</a>
                    </li>
                    
                    
                </ul>
               
            </div>
            
        </div>
    </nav>
</header>

<main class="Site-content">
    <?php 
        session_start();
        if($_SESSION['username'] !== ""){
                    $user = $_SESSION['username'];
                    // afficher un message
                    echo "Bonjour $user ! ";
                };
        if($user== "admin"){
            echo "Bien joué ! votre flag : SecDevOps{AfehbkVKG7vg56jhvhgGJD}";
        }
        ?>
    <div class="jumbotron" id="jumbotron">
        <div class="container">
            <h1 class="display-4">Bienvenue !</h1>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Nunc tincidunt orci augue, id placerat nulla suscipit ac. Ut tempor lorem odio, 
                et dignissim arcu viverra eget. Nullam scelerisque lectus ante, eu vulputate quam 
                tempor a. Aenean posuere nibh tortor, ut posuere odio tincidunt eget. Morbi eros 
                elit, viverra fringilla nunc laoreet, tristique finibus magna. In neque diam, 
                varius non nulla id, venenatis cursus neque. Maecenas quis vehicula arcu. 
                Quisque mi elit, cursus sed massa ac, malesuada tempus enim. 
                Interdum et malesuada fames ac ante ipsum primis in faucibus. 
                Sed vitae volutpat mi. Vivamus suscipit semper dolor sed congue. 
                Praesent sed felis ac risus dictum mattis. Ut pretium nec quam nec tempor. 
                Duis in neque laoreet, interdum nunc eget, ornare purus. Donec eros ligula, 
                rhoncus ac risus ut, bibendum malesuada leo. Nam congue augue ac arcu semper sodales.</p>
            <hr class="my-4">
        </div>
    </div>

    
</main>

<footer>
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2022 Copyright: Thomas Guillet & Clément Charrier - M2 Cybersécurité ISEN Nantes

    </div>
</footer>

</body>
</html>