function validateform() { 
	//récupération de la valeur contenue dans l’input « nom » 
	var nom = document.forms["myForm"]["nom"].value; 
	var prenom = document.forms["myForm"]["prenom"].value;
	var email = document.forms["myForm"]["email"].value; 
	var mess ="";
	if (nom!=null && nom!="" && prenom!=null && prenom!="" && email!=null && email!=""){
		alert("Votre nom est "+nom+"Votre prenom est "+prenom+"Votre email est "+email)
		return true;		
	}
	else{
	//si l’utilisateur n’a rien saisi, affichage d’une alerte
		if (nom==null || nom=="") {
			mess +="votre nom"
		} 
		if(prenom==null || prenom==""){
			mess+=" votre prenom"
		}
		if(email==null || email==""){
			mess+=" votre email"
		};
		alert(" Vous devez saisir "+mess+" Votre message est vide"); 
		return false; 
	}
}