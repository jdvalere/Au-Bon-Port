<?php
	include 'Au-Bon-Port/requete.php';
?>
<html lang="fr">
<form method="POST" action="Au-Bon-Port/ajout_message.php">

<style>
    option.bravo
    {
        font-style: italic;
    }
</style>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AffichageLRG</title>

    <link rel="stylesheet" href="custom-dropdown custom-dropdown--white.css" />

    <!-- Partie  Bootstrap Core du  CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Partie type Custom du  CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Partie type Custom de  Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,200italic,700italic" rel="stylesheet" type="text/css">  
</head>

<body>
    <!-- Bandeau d'en-tÃªte -->
    <a name="about"></a>
    <div class="intro-header">  
        <div class="container">
            <div class="col-lg-12">
                <div style="position: left";class="intro-message">
                    <h1>Affichage LRG</h1> 
                    <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                            <li>
                                <a href="journal.php" class="btn btn-default btn-lg"> <span class="ajoutMessage">✉ Journal</span></a>
                            </li>
                            <li>
                                <a href="tele.php" class="btn btn-default btn-lg"> <span class="ecranTV">ⓉⓋ Écran TV</span></a>
                            </li>
                            <br><br>
                            <li>
                                <a href="modification.php" class="btn btn-default btn-lg"> <span class="modifier">✎ Modifier  un message<span></a>
                            </li>
                            <li>
                                <a href="suppression.php" class="btn btn-default btn-lg"> <span class="supprimer"> ✘ Supprimer un message</span></a>
                            </li>
                        </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Contenu de la page -->
    <center>
	<a  name="services"></a>
    <div class="content-section-a">
        <div class="container">
            <div class="row">
                <div class="clearfix"></div>                   
                <h2 class="ecrireMessage">Votre requête a bien été prise en compte !</h2>
			</div>
		</div>
	</center>
	<br>
    <center>  
		<a href="journal.php" class="btn btn-default btn-lg">✉ RETOUR A L'ACCUEIL</A>
	</center> 

</body>
</html>
    