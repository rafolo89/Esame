var xmlHttp

function stampa(str,nomefile, nomediv)
{
      var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function() {
             if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
             var valore=xmlhttp.responseText;
             if(valore.charAt(0)!=1){
                 document.getElementById(nomediv).innerHTML = valore;}
                 else{
                 alert(valore.substring(1,valore.length));
                 }
             }
         }
         xmlhttp.open("GET", nomefile+"?valore="+str, false);
         xmlhttp.send();
     }

