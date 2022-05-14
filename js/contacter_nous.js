//Une fonction qui ajout une class qui premer de change le style et d'afficher l'erreur
function afficherErreur(element ,message){
    let htmlElement = document.querySelector("."+ element);
    htmlElement.classList.add("afficher-erreur");
    htmlElement.innerHTML = message;
}
//Une fonction qui premet de cacher les messages d'erreur 
function effacerErreur(){
    let erreurs = document.querySelectorAll(".erreur");
    for(let erreur of erreurs){
        erreur.classList.remove("afficher-erreur");

    }
}
//L'ajout d'un fonction qui verfier les champs de text avent la requet POST
let form  = document.forms['contact'];
form.onsubmit = function (event){
    effacerErreur();
    //validation de l'email
    if(form.email.value == ""){
        afficherErreur("email-erreur", "vous deveze introduire une adresse email valid");
        document.querySelector(".email-text-input").classList.add(".text-field-erreur");
        event.preventDefault();
        return false;
    }
    //validation du nom d'utilisateure
    if(form.name.value == ""){
        afficherErreur("nom-erreur", "vous deveze introduire un nom d'utilisateur");
        document.querySelector(".nom-text-input").classList.add(".text-field-erreur");
        event.preventDefault();
        return false;
    }
      //validation du nom d'utilisateure
      let body =  document.getElementById("body");
      if(body.value == ""){
        afficherErreur("body-erreur", "vous deveze introduire un nom d'utilisateur");
        body.classList.add(".text-field-erreur");
        event.preventDefault();
        return false;
    }
    return true;
}