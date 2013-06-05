

function affichageDate(){
	var fdate = new Date();
	var jour = fdate.getDate();
	var annee = fdate.getFullYear();
	var mois = fdate.getMonth();
	var heure = fdate.getHours();
	var minute = fdate.getMinutes();
	var seconde = fdate.getSeconds();
	var date = jour+"/"+mois+"/"+annee;
	var hour = heure+":"+minute+":"+seconde;
	var mess = "Nous sommes le "+date+" il est"+hour+".<br>";
	document.getElementById('date').innerHTML=mess;
	setTimeout(affichageDate,1000);
}
affichageDate();