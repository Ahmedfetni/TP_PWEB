

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
    console.log("i have beeen called");
    effacerErreur();
    if(forum.email.value == ""){
        afficherErreur("email-erreur", "vous deveze entre une adress email valid");
        document.querySelector(".email-text-input").classList.add(".text-field-erreur");
        event.preventDefault();
        return false;
    }
    
    return true;
}