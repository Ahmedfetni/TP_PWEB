
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
let forum = document.forms['inscription'];
forum.onsubmit = function(event){
   
    effacerErreur();
    //validation de l'email
    if(forum.email.value == ""){
        afficherErreur("email-erreur", "vous deveze introduire une adresse email valid");
        document.querySelector(".email-text-input").classList.add(".text-field-erreur");
        event.preventDefault();
        return false;
    }
    //validation du nom d'utilisateure
    if(forum.username.value == ""){
        afficherErreur("nom-erreur", "vous deveze introduire un nom d'utilisateur");
        document.querySelector(".nom-text-input").classList.add(".text-field-erreur");
        event.preventDefault();
        return false;
    }
    //validation du mot de passe 
    if(forum.password.value == ""){
        afficherErreur("password-erreur", "vous deveze introduire un mot de passe ");
        document.querySelector(".password-text-input").classList.add(".text-field-erreur");
        event.preventDefault();
        return false;
    }
    //validation que le mot de passe retapper est le meme
    if(forum.cpassword.value !== forum.password.value){
        afficherErreur("cpassword-erreur", "Ne correspond pas au mot de passe ");
        document.querySelector(".password-text-input").classList.add(".text-field-erreur");
        event.preventDefault();
        return false;
    }
    return true;
}

