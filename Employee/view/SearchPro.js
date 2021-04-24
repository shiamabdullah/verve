"use strict"
function ajax()
{
    const data = document.getElementById('name').value;
	const xhttp = new XMLHttpRequest();
    xhttp.open('POST', 'searchcheckpro.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			document.getElementById('result').innerHTML = this.responseText;
		}
	}
	xhttp.send('name='+data);
}