var xmlHttp


function ricerca(campi){
	
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
			
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				var valore=xmlhttp.responseText;
				
				
				
			}
			
		}	
		string=nomefile+"?valore%5B%5D=";
		i=0;
		while(i< campi.length-1){
			string=string + campi[i] +  "&valore%5B%5D=";
			i++;
		}
		string=string + campi[i] ;
		xmlhttp.open("GET", string, false);
		xmlhttp.send();
	
}