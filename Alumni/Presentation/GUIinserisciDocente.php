<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
<!--Inizio della pagina-->
<title>AlumniUnisa</title>
<!--Caricamento collegamenti esterni per stili e script-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="../css/coin-slider.css" />
<script type="text/javascript" src="../js/cufon-yui.js"></script>
<script type="text/javascript" src="../js/cufon-titillium-250.js"></script>
<script type="text/javascript" src="../js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
<script type="text/javascript" src="../js/coin-slider.min.js"></script>
<script LANGUAGE="JavaScript">
    <!-- 
    function openWindow()
    {
        open ("../GUI_LC/selezioneImmagine.html","new","height=500,width=680,scrollbars=0,resizable=0,status=1,menubar=0,toolbar=0,location")
    
    }
    -->
  </script>

<style type="text/css">
.style7 {
	background-color: white;
	margin: 0 auto;
	text-align: center;
}
.style8 {
	font-size: large;
}
.style9 {
	font-size: x-large;
}
.style10 {
	color: #585757;
}
</style>

</head>
<body>
<!--Corpo della pagina-->



   <div id='mod78'></div>


<div class="Intestazione" style="width: 100%; height: 20px"><!--Primo blocco:intestazione->Logo ed immagini-->
  </div>
      <div class="style7" style="width: 100%; ">
		<img src="../images/logoalumni.jpg"  />
  </div>

   <div class="Intestazioneunder" style="width: 100%; height: 20px;">
  </div>
<div class="main">
  <div class="header">

  <div class="Immaginiscroll" style="width: 100%;"><img src="../images/unisa.png" style="width: 100%;"/>
  </div>

 <a name="s"></a>
 <div class="menu_nav" style="width: 100%;"><!--Menu principale con i collegamenti alle varie pagine/funzionalità del sito-->
	<ul style="width: 100%; background-color:#DF4B49;  top: 0px;">
	<li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </li>
          <li class="active"><a href="loggato/GUISito.php#s"><span>Home Page</span></a></li>
          <li><a href="loggato/GUIStorie.php#s"><span>Storie</span></a></li>
          <li><a href="loggato/GUIGruppi.php#s"><span>Gruppi</span></a></li>
  		  <li><a ><span>Salvadanaio</span></a>
          <ul>
          		<li><a href="loggato/GUIEffettuaDonazione.php#s">Effettua una donazione</a></li>
          		<li><a href="loggato/GUIVisualizzaRaccoltaFondi.php">Visualizza raccolta fondi</a></li>
            </ul>
		  </li>
          <li><a href="loggato/GUIEventi.php#s"><span>Eventi</span></a></li>
          <li><a href="loggato/GUIDiscussioni.php#s"><span>Questions</span></a></li>
        </ul>
  </div>
  <div>&nbsp;</div>

  
  <div class="content"><!--Contenitore principale delle funzionalità della pagina corrente-->
    <div class="content_resize" style="width: 1301px; ">
    
    	
      <div class="sidebar" style="right: 50px; top: -14px" ><!--Pannello laterale, inerente allo specifico utente loggato ed alle sue funzionalità  -->
        <div class="clr"></div>
        <div class="gadget">
        <div><div><strong><span class="style9">AMMINISTRATORE<A NAME="s" ></a></span></strong><br /><br />
        	 <div id='mod79'></div>
<br />
          <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
		          	 <div id='mod80'></div>

          <br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		  
		  		          	 <div id='mod81'></div>
<br /></strong><br /><br /><br /><br />
			</div> 
			</div>
         <h2 class="star"><span class="style8">Autenticazione</span> </h2>
          <ul class="sb_menu">
            <li>
   			 	<a href="GUILogoutAmministratore.php#s">Logout</a><!--Funzionalità di logout-->
				</li>
				</ul>
				<h2 class="star"><span class="style8">Gestione Docente </span></h2>
          <ul class="sb_menu">


           <li>
   			 	<a href="GUIinserisciDocente.php#s"><span class="style10">
				Inserisci docente</span></a>
				</li>          			 		
             <li><form name="modificadocente" method="post" action="../GUI_LC/GUICercaDocente.php#s">
   			 		<input type="hidden" name="docente" value="0" >
   			 		<a href="javascript:document.forms['modificadocente'].submit()">Modifica docente</a>
				</form>
			</li>
 			<li><form name="cancelladocente" method="post" action="../GUI_LC/GUICercaDocente.php">
   			 		<input type="hidden" name="docente" value="wiloco" >
   			 		<a href="javascript:document.forms['cancelladocente'].submit()">Cancella docente</a>
				</form>
			</li>
			<li>
   			 	<a href="../GUI_LC/GUICercaDocente.php#s"><span class="style10">
				Visualizza docente</span></a>
			</li>

				</ul>
				
        </div>
        
      </div>
      
      
      <div class="mainbar" ><!--Pannello della funzionalità principale-->
        <div class="article">
          <h2>Inserisci dati docente</h2>
          <div class="clr"></div><p class="infopost"><strong>Inserisci le credenziali:</strong></p>
          <div class="clr"></div>

          <div class="post_content">
            <form  method="post" action="GUIinserisciDocente.php#s">
			<table border="0" cellspacing="5" cellpadding="5">
			<tr>
			<td>Nome:</td><td><input type="text" name="nome" size="35" maxlength="40" value="" required autofocus/></td><td id="tdnome" style=" color:red; height: 37px"></td>

			</tr><tr>
			<td>Cognome:</td><td><input type="text" name="cognome" size="35" maxlength="40" value="" required autofocus/></td><td id="tdcognome" style=" color:red; height: 37px"></td>

			</tr><tr>
			<td>Data di nascita:</td><td><input type="text" name="datadinascita" size="35" maxlength="40" value="" required autofocus/></td><td id="tddata" style=" color:red; height: 37px"></td>

			</tr><tr>
			<td>Luogo di nascita:</td><td><input type="text" name="luogodinascita" size="35" maxlength="40" value=""required autofocus/></td><td id="tdluogo" style=" color:red; height: 37px"></td>

			</tr><tr>
			<td>Codice Fiscale:</td><td><input type="text" name="codicefiscale" size="35" maxlength="40" value="" required autofocus/></td><td id="tdcf" style=" color:red; height: 37px"></td>

			</tr><tr>
			<td>E-mail:</td><td><input type="text" name="email" size="35" maxlength="40" value="" required autofocus/></td><td id="tdemail" style=" color:red; height: 37px"></td>

			</tr><tr>
			<td>Anno conseguimento laurea:</td><td><input type="text" name="annoconseguimentolaurea" size="35" maxlength="40" value="" required autofocus/></td><td id="tdannoc" style=" color:red; height: 37px"></td>

			</tr><tr>
			<td>Corsi tenuti:</td><td><input type="text" name="corsitenuti" size="35" maxlength="40" value="" required autofocus/></td><td id="tdct" style=" color:red; height: 37px"></td>

			</tr><tr>
			<td>Password:</td><td><input type="password" name="password" size="35" maxlength="40" value="" required autofocus/></td><td id="tdpwd" style=" color:red; height: 37px"></td>

			</tr><tr>
			<td>Conferma Password:</td><td><input type="password" name="confermapassword" size="35" maxlength="40" value="" required autofocus/></td><td id="tdpwd2" style=" color:red; height: 37px"></td>

			</tr><tr>
			<td></td><td><input type="submit"  id="submit" value="Registra"/></td>
			</tr>			</table>
        </form>
		
		<div id='mod82'></div>
          </div>
          <div class="clr"></div>
        </div>
        
      </div>
      <div class="clr"></div>
    </div>
  </div>

  
  <div class="footer"><!--Fondo pagina con copyright-->
    <div class="footer_resize">
      <p class="lf">Copyright © AlumniUnisa Salerno All Rights Reserved</p>
    </div>
  </div>
</div>
  </div>

</body>
</html>
