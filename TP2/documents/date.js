

function affichageDate(){
	var jour = getDate();
	var annee = getFullYear();
	var month = getMonth();
	var heure = getHours();
	var minute = getMinutes();
	var date = jour+"/"+mois+"/"+annee;
	var hour = heure+":"+minute;
	var mess = "Nous sommes le "+date+" il est"+hour+".<br>";
	document.getElementById("date").innerHTML=mess;
}
affichageDate();