<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>War Game</title>
    <link href="../css/contact.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body class="Site">
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.php">War Game</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="../index.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-warning" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="connexion.php">Connexion</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" href="admin.php">Administration</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="deconnexion.php">Deconnexion</a>
                    </li>
                    
                </ul>
               
            </div>
            
        </div>
    </nav>
</header>
<main class="Site-content">
  
    
        <div class="container">
            <h1>Formulaire de contact</h1>
            <form action="comment.php?request=add" method="GET">
                <label for="fname">Nom & prénom</label>
                <input type="text" id="fname" name="firstname" placeholder="Votre nom et prénom">

                <label for="sujet">Sujet</label>
                <input type="text" id="sujet" name="subject" placeholder="L'objet de votre message">

                <label for="emailAddress">Email</label>
                <input id="emailAddress" type="email" name="email" placeholder="Votre email">


                <label for="subject">Message</label>
                <textarea id="subject" name="message" placeholder="Votre message" style="height:200px"></textarea>

                <input type="submit" value="Envoyer">
            </form>
        </div>

</main>

<footer>
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2022 Copyright: Thomas Guillet & Clément Charrier - M2 Cybersécurité ISEN Nantes

    </div>
</footer>

</body>
</html>