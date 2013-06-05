function changestyle () {
	var cssEnCours = document.getElementById("css").href;
	if (cssEnCours.match("style2") == "style2") {
		document.getElementById("css").href="../pages/style.css";
	}
	else{
		document.getElementById("css").href="../pages/style2.css";
	};
	
}