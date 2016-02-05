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
<style type="text/css">
.style7 {
	background-color: white;
	margin: 0 auto;
	text-align: center;
}
.style8 {
	font-size: large;
	color: #FFFFFF;
}
.style9 {
	font-size: x-large;
	text-decoration: none;
}
</style>
</head>
<body>
<!--Corpo della pagina-->



<div class="Intestazione" style="width: 100%; height: 20px"><!--Primo blocco:intestazione->Logo ed immagini-->
  </div>
      <div class="style7" style="width: 100%; ">
		<img src="../images/logoalumni.jpg"  />
  </div>

   <div class="Intestazioneunder" style="width: 100%; height: 20px;">
  </div><a name="s" ></a>
<div class="main">
  <div class="header">

  <div class="Immaginiscroll" style="width: 100%;"><img src="../images/unisa.png" style="width: 100%;"/>
  </div>
  <a name="s" ></a>
 <div class="menu_nav" style="width: 100%;"><!--Menu principale con i collegamenti alle varie pagine/funzionalità del sito-->
	<ul style="width: 100%; background-color:#DF4B49;  top: 0px;">
	<li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </li>
          <li><a href="../GUISito.php#s"><span>Home Page</span></a></li>
          <li class="active"><a href="../GUI_LC/GUIStorie.php#s"><span>Storie</span></a></li>
          <li><a href="../GUI_LC/GUIGruppi.php#s"><span>Gruppi</span></a></li>
  		  <li><a ><span>Salvadanaio</span></a>
          <ul>
          		<li><a href="../GUI_AO/GUIEffettuaDonazione.html#s">Effettua una donazione</a></li>
          		<li><a href="../GUI_AO/GUIVisualizzaRaccoltaFondi.php#s">Visualizza raccolta fondi</a></li>
            </ul>
		  </li>
          <li><a href="../GUI_LC/GUIEventi.php"><span>Eventi</span></a></li>
          <li><a href="../GUI_LC/GUIDiscussioni.php"><span>Questions</span></a></li>
        </ul>
  </div>
  <div>&nbsp;</div>

  
  <div class="content"><!--Contenitore principale delle funzionalità della pagina corrente-->
    <div class="content_resize" style="width: 1301px; ">

      
<div class="sidebar" style="right: 50px; top: -14px" ><!--Pannello laterale, inerente allo specifico utente loggato ed alle sue funzionalità  -->

  
          <div class="searchform"><!--Funzionalità di ricerca-->
          <form id="formsearch" name="formsearch" method="post" action="../Alumni/GUI_CP/GUICercaAlumno.php">
            <span>
            <input name="ricerca" class="editbox_search" id="editbox_search" maxlength="80" placeholder="Cerca Alumno:" type="text" />
            </span>
            <input name="button_search" src="../images/search.gif" class="button_search" type="image" />
          </form>
        </div>
        <div class="clr"></div>
        
        <div class="gadget">
          <h2 class="star"><span>Login</span> </h2><!--Funzionalità di Login-->
          <ul class="sb_menu">
            <li><form name="alumno" method="post" action="../GUI_AO/GUILogin.php">
   			 	<input type="hidden" name="valore" value="alumno" />
   			 	<a href="javascript:document.forms['alumno'].submit()">Alumno</a>
				</form></li>
            <li><form name="docente" method="post" action="../GUI_AO/GUILogin.php">
   			 	<input type="hidden" name="valore" value="docente" />
   			 	<a href="javascript:document.forms['docente'].submit()">Docente</a>
				</form> </li>
            <li><form name="moderatore" method="post" action="../GUI_AO/GUILogin.php">
   			 	<input type="hidden" name="valore" value="moderatore" />
   			 	<a href="javascript:document.forms['moderatore'].submit()">Moderatore</a>
				</form></li>
            <li><form name="amministratore" method="post" action="../GUI_AO/GUILogin.php">
   			 	<input type="hidden" name="valore" value="amministratore" />
   			 	<a href="javascript:document.forms['amministratore'].submit()">Amministratore</a>
				</form></li>
                      </ul>
        </div>

        
        <div class="gadget">
          <h2 class="style6"><span><a href="../GUI_CP/GUIRegistrazioneAlumno.php" class="style9">
			<span class="style8">Registrazione Alumno</span></a></span></h2><!--Funzionalità registrazione Alumno-->
          <div class="clr"></div>
                  </div>
      </div>

      
      <div class="mainbar" ><!--Pannello della funzionalità principale-->
        <div class="article">
          <h2>Esperienza Alumno</h2>
          <div class="clr"></div>
          <div class="post_content">
            <p>
			
			<div id='mod107'></div>
</p>
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
