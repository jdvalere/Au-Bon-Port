function controleMail(formulaire)
{
    console.log(formulaire.nom.value);
    let valide=(formulaire.prenom.value=="seb"?true:false);
   let exp=/^[A-Z][a-zA-Z]*/;
   /*^->let exp=/^[A-Z]+/;->commence part 
   $->let exp=/$[A-Z]+/;->fini part*/
   console.log(formulaire.prenom.value.match(exp));
    return valide;
}
function verifChampMDP(formulaire)
{
let Mdp=formulaire.passw.value;
let CMdp=formulaire.cpassw.value;
let message=document.getElementById("msgmotdepasse");
            if(Mdp !=CMdp){
                message.style.visibility="visible";
        return false;
    }
    else {
        message.style.visibility="hidden";
    return true;
    
}
}
function verifChampDate(formulaire)
{
    var ladate= new Date();
    let madate=formulaire.date.value;
    console.log(madate.substring(1,4));
    let messagedate=document.getElementById("msgdate");
            if(ladate.getFullYear() < parseInt(madate.substring(0,4))){
                messagedate.style.visibility="visible";
        return false;
    }
    else {
        messagedate.style.visibility="hidden";
    return true;
}
function verifChampsPrenom(formulaire){
let prenom=formulaire.prenom.value;
let exp = /^0-9/ ;


}
}

function verifChampsMail(formulaire){
    var email=formulaire.mail.value;
    let messagemail=document.getElementById("msgmail");
    if (/^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$/.test(email)) {
        messagemail.style.visibility="hidden";
        return true;
    } else {
        messagemail.style.visibility="visible";
        return false;
    }
}

function verifChampsMdp(formulaire){
let messageMdp=document.getElementById("msgMdp");
var pwd = formulaire.passw.value;
  var listRe = [{
    re: /[a-zA-Z]/g,
    count: 4,
    msgMdp: "Votre mot de passe doit avoir au moins 4 lettres"
  }, {
    re: /\d/g,
    count: 1,
    msgMdp: "Votre mot de passe doit avoir au moins 3 chiffres"
  }, {
    re: /[^A-Za-z0-9]/g,
    count: 1,
    msgMdp: "Votre mot de passe doit posséder au moins 1 caractère spécial"
  }];
  for (var i = 0; i < listRe.length; i++) {
    var item = listRe[i];
    var match = pwd.match(item.re);
    if (null === match || match.length < item.count) {
     messageMdp== item.msgMdp;
     messageMdp.style.visibility="visible";
      return false;
    }
    else{
        item.msgMdp.style="hidden";
      return true;
    }
  }
}


function verifChamps(formulaire){
   let resultat1=verifChampMDP(formulaire);
   let resultat2=verifChampDate(formulaire); 
   let resultat3=verifChampsMail(formulaire);
   let resultat4=verifChampsMdp(formulaire);
   return resultat1&&resultat2&&resultat3&&resultat4;
}
