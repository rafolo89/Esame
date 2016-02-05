var xmlHttp

function stampa(str,nomefile, nomediv)
{
xmlHttp=GetXmlHttpObject()
if (xmlHttp==null)
  {
  alert ("Your browser does not support AJAX!");
  return;
  } 
url=nomefile+"?valore="+str;
//Aggiunge un numero a uocchio per nasconde
url=url+"&sid="+Math.random();
xmlHttp.onreadystatechange=stateChanged;
xmlHttp.open("POST",url,true);
xmlHttp.send(null);
} 

function stateChanged() 
{ 
   if (xmlHttp.readyState==4){ 
       document.getElementById(nomediv).innerHTML=xmlHttp.responseText;
   }
}

function GetXmlHttpObject()
{
var xmlHttp=null;
try
  {
  xmlHttp=new XMLHttpRequest();
  }
catch (e)
  {
  // Internet Explorer
  try
    {
    xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
    }
  catch (e)
    {
    xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
  }
return xmlHttp;
}
