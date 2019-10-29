
function controleChamps(formulaire)
{
    console.log(formulaire.nom.value);
    let valide=(formulaire.prenom.value=="seb"?true:false);
   let exp=/^[A-Z][a-zA-Z]*/;
   /*^->let exp=/^[A-Z]+/;->commence part 
   $->let exp=/$[A-Z]+/;->fini part*/
   console.log(formulaire.prenom.value.match(exp));
    return valide;
} 
