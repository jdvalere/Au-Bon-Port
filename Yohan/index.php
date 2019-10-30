<?php
require 'Réservation.php'; 
/*$seb = new Personne();
$identite = new Utilisateur();

$seb->setNom("CASTELLI");
$seb->setPrenom("Jérémy");
var_dump($seb);

$identite->setUsername("Zag");
$identite->setPwd("123456789"); 
$identite->setNom("CASTELLI");
$identite->setPrenom("Jérémy");
echo $identite ; 
*/

?>
    <!doctype html>
    <html lang="en">
      <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      </head>
      <body>
          <div class="container">
          <form class="box" action ='creer_reservation.php' method="post">
                  <div class="form-group row">
                      <label for="inputName" class="col-sm-1-12 col-form-label">Nom</label>
                      <div class="col-sm-1-12">
                          <input type="text" class="form-control" name="nom" id="nom" placeholder="">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="inputName" class="col-sm-1-12 col-form-label">Prénom</label>
                      <div class="col-sm-1-12">
                          <input type="text" class="form-control" name="prenom" id="prenom" placeholder="">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="inputName" class="col-sm-1-12 col-form-label">Numéro de téléphone</label>
                      <div class="col-sm-1-12">
                          <input type="tel" class="form-control" name="numtel" id="numtel" placeholder="">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="text" class="col-sm-1-12 col-form-label">Type de service</label>
                      <div class="col-sm-1-12">
                          <input type=text list=browsers class="form-control" name="typeService" id="typeService" placeholder="">
<datalist id=browsers>
    <option> Sur Place
    <option> A Emporter
        <option> Livraison
            <option> Evenementiel
</datalist>                      
                        </div>
                  </div>
                  <div class="form-group row">
                      <label for="inputName" class="col-sm-1-12 col-form-label">Heure de réservation</label>
                      <div class="col-sm-1-12">
                          <input type="time" class="form-control" name="heure" id="heure" placeholder="">
                      </div>
                      <div class="form-group row">
                      <label for="inputName" class="col-sm-1-12 col-form-label">Numéro de table</label>
                      <div class="col-sm-1-12">
                          <input type="text" class="form-control" name="numtable" id="numtable" placeholder="">
                      </div>
                      <div class="form-group row">
                      <label for="inputName" class="col-sm-1-12 col-form-label">Nbr de Couverts</label>
                      <div class="col-sm-1-12">
                          <input type="text" class="form-control" name="nbrCouverts" id="nbrCouverts" placeholder="">
                      </div>
                  </div>
                      <button type="submit" name="Valider" value="">Action</button>
                      </div>
                  </div>
              </form>
          </div>









          </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      </body>
    </html>
</body>
</html>