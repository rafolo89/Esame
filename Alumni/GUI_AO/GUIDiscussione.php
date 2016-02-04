﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
.style6 {
	font-size: large;
}
.style7 {
	background-color: white;
	margin: 0 auto;
	text-align: center;
}
.style8 {
	color: #FFFFFF;
}
.style9 {
	text-decoration: none;
}
.style10 {
	text-align: right;
}
.style11 {
	color: #000000;
}
</style>
</head>
<body>
<!--Corpo della pagina-->

<!--Connessione al server-->
<?php

		  			 require_once("../GUI_MG/connessione.php");

	?>


<div class="Intestazione" style="width: 100%; height: 20px"><!--Primo blocco:intestazione->Logo ed immagini-->
  </div>
      <div class="style7" style="width: 100%; ">
		<img src="../images/logoalumni.jpg" />
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
          <li ><a href="../GUISito.php#s"><span>Home Page</span></a><a name="s"> </a></li>
          <li><a href="../GUI_LC/GUIStorie.php#s"><span>Storie</span></a></li>
          <li><a href="../GUI_LC/GUIGruppi.php#s"><span>Gruppi</span></a></li>
  		  <li><a ><span>Salvadanaio</span></a>
          <ul>
          		<li><a href="GUIEffettuaDonazione.html#s">Effettua una donazione</a></li>
          		<li><a href="GUIVisualizzaRaccoltaFondi.php#s">Visualizza raccolta fondi</a></li>
            </ul>
		  </li>
          <li><a href="../GUI_LC/GUIEventi.php#s"><span>Eventi</span></a></li>
          <li class="active"><a href="../GUI_LC/GUIDiscussioni.php#s"><span>Questions</span></a></li>
        </ul>
  </div>
  <div>&nbsp;</div>

  
  <div class="content"><!--Contenitore principale delle funzionalità della pagina corrente-->
    <div class="content_resize" style="width: 1301px; ">
    <div class="sidebar2" style="right: 25px; top: 0px">
        <div class="clr"></div>
      </div>

    
     <div class="sidebar" style="right: 50px; top: -14px" ><!--Pannello laterale, inerente allo specifico utente loggato ed alle sue funzionalità  -->

      
          <div class="searchform"><!--Funzionalità di ricerca-->
          <form id="formsearch" name="formsearch" method="post" action="../Alumni/GUI_CP/GUICercaAlumno.php#s">
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
           <li><form name="alumno" method="post" action="../GUI_AO/GUILogin.php#s">
   			 	<input type="hidden" name="valore" value="alumno" />
   			 	<a href="javascript:document.forms['alumno'].submit()">Alumno</a>
				</form></li>
            <li><form name="docente" method="post" action="../GUI_AO/GUILogin.php#s">
   			 	<input type="hidden" name="valore" value="docente" />
   			 	<a href="javascript:document.forms['docente'].submit()">Docente</a>
				</form> </li>
            <li><form name="moderatore" method="post" action="../GUI_AO/GUILogin.php#s">
   			 	<input type="hidden" name="valore" value="moderatore" />
   			 	<a href="javascript:document.forms['moderatore'].submit()">Moderatore</a>
				</form></li>
            <li><form name="amministratore" method="post" action="../GUI_AO/GUILogin.php#s">
   			 	<input type="hidden" name="valore" value="amministratore" />
   			 	<a href="javascript:document.forms['amministratore'].submit()">Amministratore</a>
				</form></li>
                      </ul>
        </div>

        
        <div class="gadget">
          <h2 class="style6"><span><a href="../../Alumni/GUI_CP/GUIRegistrazioneAlumno.php#s" class="style9">
			<span class="style8">Registrazione Alumno</span></a></span></h2><!--Funzionalità registrazione Alumno-->
          <div class="clr"></div>
                  </div>
      </div>
      
       
      <div class="mainbar" ><!--Pannello della funzionalità principale-->
          <div class="article">
          <h2><?php if(isset($_POST['valore'])){
			$accacche=$_POST['valore'];
			$ii="ID";
			$query="select ID_ATTORE, ATTORE, DESCRIZIONE, TITOLO from discussione where ID=$accacche AND TITOLO IS NOT NULL";			 
 			 $q=mysql_query($query); 
			 $contatore=0;
			 while($row = mysql_fetch_array($q, MYSQL_NUM)){
			 		 switch($row[1]){
									case 'alumno':
										$cartella='../GUI_CP';
										break;
									case 'docente':
										$cartella='../GUI_MG';
										$ii="CF";
										break;
									case 'moderatore':
										$cartella='GUI_LC';
										break;
									case 'amministratore':
										$cartella='../GUI_AO';
										break;						
								}

			 if($contatore==0){
			 	echo $row[3]."</h2>";
			 	$contatore++;
			 }
			 
			 $query2="select NOME, COGNOME from $row[1] where $ii='$row[0]'";			 
 			 $q2=mysql_query($query2);

			 $row2 = mysql_fetch_array($q2, MYSQL_NUM);
			 echo"<p class='infopost' style='height: 1px'>&nbsp;</p>
          		  <div class='post_content'>
         	 	  <h3>
						<span class='style11'><img class='gal' src='$cartella/uploads/$row[0].jpg' width='75' height='75' onerror=this.src='../images/userpic.gif'></img> </span>
				  				  <span class='style11'>".$row[2]."</span>
				  </h3>
         	 	  <h5>$row2[0] $row2[1]</h5>
            	  </div>
          		 
        	      <div class='clr'></div>";
        	      if($contatore==1){
        	      	$query="select ID_ATTORE, ATTORE, DESCRIZIONE from discussione where ID=$accacche AND TITOLO IS NULL";			 
 			 		$q=mysql_query($query); 
 			 		$contatore++;
        	      }
        	      $ii="ID";
			 	}
			 } ?>

          
          <div class="clr"></div>          
          <div class="clr"></div>
        </div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
 
 
  <div class="footer"><!--Fondo pagina con copyright-->
    <div class="footer_resize">
      <p class="lf">Copyright &copy; AlumniUnisa Salerno All Rights Reserved</p>
    </div>
  </div>
</div>
  </div>

</body>
</html>
