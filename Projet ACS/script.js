function onImgClick(numPhoto) {
	var nom = "photo" + numPhoto + ".jpg";
	document.getElementById("pleineEcran").src = nom;
	
	var title = document.getElementById("title" + numPhoto).innerHTML;
	document.getElementById("title").innerHTML = title;
	
	var description = document.getElementById("description" + numPhoto).innerHTML;
	document.getElementById("description").innerHTML = description;
}

onImgClick(1);
