function changeimage () {
	var images = document.getElementById("ampoule").src;
	if (images.match("bulboff") == "bulboff") {
		document.getElementById("ampoule").src="../images/bulbon.gif"
	}
	/*alert(images.match("bulboff"));*/
	else if (images.match("bulbon") == "bulbon") {
		document.getElementById("ampoule").src="../images/ampoule3.gif"
	} 
	else if(images.match("ampoule3") == "ampoule3"){
		document.getElementById("ampoule").src="../images/bulboff.gif"
	}
}

