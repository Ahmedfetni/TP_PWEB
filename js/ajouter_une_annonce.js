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
let forum = document.getElementById("annonce");
forum.onsubmit = function(event){
   
    effacerErreur();
    //validation de l'email
    if(forum.titre.value == ""){
        afficherErreur("titre-erreur", "vous devez introduire un titre");
        event.preventDefault();
        return false;
    }
    //
    if(forum.body.value == ""){
        afficherErreur("body-erreur", "vous devez introduire une discreption");
        
        event.preventDefault();
        return false;
    }
    //e 
    if(forum.type.value == ""){
        afficherErreur("type-erreur", "vous devez introduire un type");
        event.preventDefault();
        return false;
    }
    //
    if(forum.prix.value == ""){
        afficherErreur("prix-erreur", "vous devez introduire le prix ");
        event.preventDefault();
        return false;
    }
    //
    if(forum.adresse.value == ""){
        afficherErreur("lieu-erreur", "vous devez introduire une adresse");
        event.preventDefault();
        return false;
    }
    //
    if(forum.wilaya.value == ""){
        afficherErreur("lieu-erreur", "vous devez introduire une wilaya");
        event.preventDefault();
        return false;
    }
    
    //
    if(forum.nbrpiece.value == ""){
        afficherErreur("nbrpiece-erreur", "introduire le nombre des pieces ");
        event.preventDefault();
        return false;
    }
    //
    if(forum.tlp.value == ""){
        afficherErreur("tlp-erreur", "introduire votre adresse mail");
        event.preventDefault();
        return false;
    }
    return true;
}