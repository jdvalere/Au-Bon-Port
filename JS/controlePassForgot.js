function verifChampMDP(formulaire,e)
{
let reponseQ1=formulaire.passw.value;
console.log(e.srcElement.controlePassForgotIndex); 
let recup=document.getElementById("reponse1").value=e.srcElement.selectedIndex;



let message=document.getElementById("msgmotdepasse");
            if(reponseQ1 !=recup){
                message.style.visibility="visible";
        return false;
    }
    else {
        message.style.visibility="hidden";
    return true;
    
}