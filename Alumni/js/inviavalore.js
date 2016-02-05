var xmlHttp

function stampa(str,nomefile, nomediv)
{
      var xmlhttp = new XMLHttpRequest();
         xmlhttp.onreadystatechange = function() {
             if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                 document.getElementById(nomediv).innerHTML = xmlhttp.responseText;
             }
         }
         xmlhttp.open("POST", nomefile+"?valore="+str, true);
         xmlhttp.send();
     }

