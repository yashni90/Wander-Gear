function checkPassword(){
	if(document.getElementById("psw").value!=document.getElementById("repsw").value){
		alert("Password do not match !");
		return false;
	}
	else{
		alert("Success");
		return true;
	}
}