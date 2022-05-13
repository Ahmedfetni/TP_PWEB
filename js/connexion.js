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
let form = document.forms['connexion'];
form.onsubmit = function(event){
   
    effacerErreur();
    //validation de l'email
    if(form.email.value == ""){
        afficherErreur("email-erreur", "vous deveze introduire votre adresse email valid");
        document.querySelector(".email-text-input").classList.add(".text-field-erreur");
        event.preventDefault();
        return false;
    }
    
    //validation du mot de passe 
    if(form.password.value == ""){
        afficherErreur("password-erreur", "vous deveze introduire votre mot de passe ");
        document.querySelector(".password-text-input").classList.add(".text-field-erreur");
        event.preventDefault();
        return false;
    }
   
    return true;
}