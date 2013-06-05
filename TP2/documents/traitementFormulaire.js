function validateform() { 
	//récupération de la valeur contenue dans l’input « nom » 
	var nom = document.forms["myForm"]["nom"].value; 
	var prenom = document.forms["myForm"]["prenom"].value;
	var email = document.forms["myForm"]["email"].value; 
	var mess ="";
	if (nom==null || nom=="" || prenom==null || prenom=="" || email==null || email==""){
		//si l’utilisateur n’a rien saisi, affichage d’une alerte 
		if (nom==null || nom=="") {
			mess = "votre nom"
		} 
		else if(prenom==null || prenom==""){
			mess+= " votre prenom"
		}
		else if(email==null || email==""){
			mess += " votre email"
		};
		alert(" Vous devez saisir "+mess+" Votre message est vide"); 
		return false; 
	}
}