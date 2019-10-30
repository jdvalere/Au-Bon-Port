<?php
set_include_path("D:\wamp\bin\php\php5.5.12\pear");
require_once "Mail.php";
require_once "Mail\mime.php";

date_default_timezone_set("Europe/Paris"); 
try
{
//on se connecte à MySQL 
	$db = new PDO ("mysql:host=127.0.0.1;dbname=expernet","root","");
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}
try //on regarde si le mail exist deja dans la bdd
{
    $requete= $db->prepare('SELECT mail from account WHERE mail=:mail');
    $requete->bindParam(':mail', $_POST['mail']);
    $requete->setFetchMode(PDO::FETCH_ASSOC);
    $requete->execute();
    $resultat=$requete->fetch();
    
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}
//variable pour l'envoie du mail de confirmation
           // $email = $_POST['email'];
           // $login = $_POST['login'];
            //création de la clé d'activation pour la création de mail

            $cle = md5(microtime(TRUE)*100000);

            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $dateNaissance = $_POST['date'];
            $pseudo = $_POST['pseudo'];
            $tel = $_POST['tel'];
            $mail = $_POST['mail'];
            $passw = $_POST['passw'];
            $cpassw = $_POST['cpassw'];
            $question1=$_POST['question1'];
            $question2=$_POST['question2'];
            $reponse1=$_POST['reponse1'];
            $reponse2=$_POST['reponse2'];
            if($resultat==NULL){
                

        //****************MAIL*********************
                    
           // $smtp = Mail::factory('smtp', array ('host' => 'smtp.orange.fr', 'port' => 25, 'auth' => true, 'username' => 'admin', 'password' => 'AdminABP974', 'debug' => false) );
            // Insertion des paramètre rentrer par l'utilisateur dans la bdd
            $req = $db->prepare('INSERT INTO account(nom,prenom,dateNaissance,pseudo,tel,mail,passw,question1,reponse1,question2,reponse2) VALUES(:nom,:prenom,:dateNaissance,:pseudo,:tel,:mail,:passw,:question1,:reponse1,:question2,:reponse2)');
            $req->execute(array(
                'nom' => $nom,
                'prenom' => $prenom,
                'dateNaissance'=> $dateNaissance,
                'pseudo' => $pseudo,
                'tel' => $tel,
                'mail' => $mail,
                'passw' => $passw,
                'question1'=>$question1,
                'reponse1'=>$reponse1,
                'question2'=>$question2,
                'reponse2'=>$reponse2
                ));
            // Insertion de la clé de validation de mail dans la base de données 
            $req = $db->prepare("UPDATE account SET cle=:cle WHERE mail like :mail");
           // $req = $db->prepare("UPDATE account SET cle=: WHERE mail like : mail");
            $req->bindParam(':cle', $cle);
            //$req->bindParam(':mail', $mail);
            $req->bindParam(':mail', $mail);
            $req->execute();
            
            // Préparation du mail contenant le lien d'activation
            $destinataire = $mail;
            $sujet = "Activer votre compte" ;
            $entete["From"]= "admin_ABP@orange.com" ;
 
            // Le lien d'activation est composé du login(log) et de la clé(cle)
            $message = 'Bienvenue dans notre restaurant traditionnel Au bon port
 
            Pour activer votre compte, veuillez cliquer sur le lien ci dessous
            ou copier/coller dans votre navigateur internet.
            
            http://localhost/Nouveau%20dossier/validation_account.php?log='.urlencode($passw).'&cle='.urlencode($cle).'
            
            ---------------
            Ceci est un mail automatique, Merci de ne pas y répondre.';
            
            $smtp = Mail::factory('smtp', array ('host' => 'ssl://smtp.gmail.com', 'port' => '465', 'auth' => 'plain', 'username' => 'abp97424@gmail.com', 'password' => 'uroufcllyrfcfarx', 'debug' => false) );
            $mailenvoie =$smtp->send($destinataire,$entete,$message);
            //mail($destinataire, $sujet, $message, $entete) ; // Envoi du mail
            //http://votresite.com/validation_account.php?log='.urlencode($mail).'&cle='.urlencode($cle).'
            if(PEAR::isError($mailenvoie)){
                echo("<p>". $mailenvoie->getMessage() ."</p>");
            }
            
            
			echo'Votre inscription a bien été prise en compte';
            //$resultat=   mail($destinataire, $sujet, $message, $entete) ; // Envoi du mail
            echo "mail=".$resultat;
            echo $mail;

        }
        else{
            echo'adresse mail existante';
        }
		
    ?>
    
    <!-- message pour dire que la demande a bien ete prise en compte -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


        <title>ACCOUNT</title>
        <link rel="stylesheet" href="css/account.css">
        <title>Au Bon Port</title>
    
        <link href="css/landing-page.css" rel="stylesheet">
    </head>
    
    <body>
            <body background="img/background.jpg"> 
      <meta name="viewport" content="width=device-width"/>
        <!-- Partie de la Navigation -->
        
        <!-- Bandeau d'en t�te -->
        <a name="about"></a>
        <div class="intro-header"> 
            <div class="container"> 
                    <div class="col-lg-12">
                        <div style="position: left";class="intro-message">
                            <h1>Au Bon Port</h1>
                            <hr class="intro-divider">
                            <ul class="list-inline intro-social-buttons">
                            </ul>     
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fin de l'en-t�te -->
    
        <!-- Page -->
        
        <center>
        <html lang="fr" dir="ltr">
        
         <form class="box" action='connexion_account.php' method="post" onsubmit="return verifChamps(this)">
                <script src="js/controleChamps.js"></script>
                

                <!-- <form action="" method="get" onsbmit="return controleChamps(this)">  -->
                <!--champsjs:
               function controlleChamps(){
                    return false;
                }     -->
                <h1>Au Bon Port</h1>
                <h2> Crée un compte</h2>

                <div align="center">
            
       

                <p>Autre enregistrement <a href="Account.php">cliquer ici</a> pour revenir à la page formulaire.php.</p>
       
            
            <!--<a href="formulaire.php" style="color:white"> Vous n'etes pas encore inscrit? Cliquez ici </a></p>-->
            <p>Pour revenir à la page d'accueil<a href="Accueil.php">cliquez ici </a>.</p>
            <input type="submit" name="Valider" value="Valider">
            </div>
           
        
             

        </form>
            
        
        </html>
        </center>
    
    </body>

