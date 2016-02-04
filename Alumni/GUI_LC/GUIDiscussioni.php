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
<body><!--Corpo della pagina-->

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
          <li><a href="../GUISito.php#s"><span>Home Page</span></a></li>
          <li><a href="GUIStorie.php#s"><span>Storie</span></a></li>
          <li><a href="GUIGruppi.php#s"><span>Gruppi</span></a></li>
  		  <li><a ><span>Salvadanaio</span></a>
          <ul>
          		<li><a href="../GUI_AO/GUIEffettuaDonazione.html#s">Effettua una donazione</a></li>
          		<li><a href="../GUI_AO/GUIVisualizzaRaccoltaFondi.php#s">Visualizza raccolta fondi</a></li>
            </ul>
		  </li>
          <li><a href="GUIEventi.php#s"><span>Eventi</span></a></li>
          <li class="active"><a href="GUIDiscussioni.php#s"><span>Questions</span></a></li>
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
          <h2>Category Questions </h2>
          <?php 
                   require_once("../GUI_MG/connessione.php");
          if(!isset($_POST['valore'])){ 
          $queryDG = mysql_query("SELECT COUNT('TITOLO') FROM `discussione` WHERE LIVELLO = 'DG' and TITOLO is NOT NULL");
           $discussDG = mysql_fetch_array($queryDG);
           $queryDG2 = mysql_query("SELECT COUNT('TITOLO') FROM `discussione` WHERE LIVELLO = 'DG' and TITOLO is NULL");
           $rispDG = mysql_fetch_array($queryDG2);
           
           $queryOL = mysql_query("SELECT COUNT('TITOLO') FROM `discussione` WHERE LIVELLO = 'OL' and TITOLO is NOT NULL");
           $discussOL = mysql_fetch_array($queryOL);
           $queryOL2 = mysql_query("SELECT COUNT('TITOLO') FROM `discussione` WHERE LIVELLO = 'OL' and TITOLO is NULL");
           $rispOL = mysql_fetch_array($queryOL2);
           
           $queryCO = mysql_query("SELECT COUNT('TITOLO') FROM `discussione` WHERE LIVELLO = 'CO' and TITOLO is NOT NULL");
           $discussCO = mysql_fetch_array($queryCO);
           $queryCO2 = mysql_query("SELECT COUNT('TITOLO') FROM `discussione` WHERE LIVELLO = 'CO' and TITOLO is NULL");
           $rispCO = mysql_fetch_array($queryCO2);
           
           $querySB = mysql_query("SELECT COUNT('TITOLO') FROM `discussione` WHERE LIVELLO = 'SB' and TITOLO is NOT NULL");
           $discussSB = mysql_fetch_array($querySB);
           $querySB2 = mysql_query("SELECT COUNT('TITOLO') FROM `discussione` WHERE LIVELLO = 'SB' and TITOLO is NULL");
           $rispSB = mysql_fetch_array($querySB2);
           
           $queryEI = mysql_query("SELECT COUNT('TITOLO') FROM `discussione` WHERE LIVELLO = 'EI' and TITOLO is NOT NULL");
           $discussEI = mysql_fetch_array($queryEI);
           $queryEI2 = mysql_query("SELECT COUNT('TITOLO') FROM `discussione` WHERE LIVELLO = 'EI' and TITOLO is NULL");
           $rispEI = mysql_fetch_array($queryEI2);
           
           $queryPS = mysql_query("SELECT COUNT('TITOLO') FROM `discussione` WHERE LIVELLO = 'PS' and TITOLO is NOT NULL");
           $discussPS = mysql_fetch_array($queryPS);
           $queryPS2 = mysql_query("SELECT COUNT('TITOLO') FROM `discussione` WHERE LIVELLO = 'PS' and TITOLO is NULL");
           $rispPS = mysql_fetch_array($queryPS2);
           
           $queryPP = mysql_query("SELECT COUNT('TITOLO') FROM `discussione` WHERE LIVELLO = 'PP' and TITOLO is NOT NULL");
           $discussPP = mysql_fetch_array($queryPP);
           $queryPP2 = mysql_query("SELECT COUNT('TITOLO') FROM `discussione` WHERE LIVELLO = 'PP' and TITOLO is NULL");
           $rispPP = mysql_fetch_array($queryPP2);
          
          echo"<p class='infopost' style='height: 1px'>&nbsp;</p>
          
          <div class='post_content'>
         	 <h3>
         	 <form name='DG' method='post' action='GUIDiscussioni.php#s'>
   			 	<input type='hidden' name='valore' value='DG' />
   			 	<a href='javascript:document.forms[&#96;DG&#96;].submit()'>
				<span class='style11'><img src='../images/f_icon_read.png' /></span>
				<span class='style11'>Domande di carattere generico</span></a>
				</form></h3>
         	 <h5>breve descrizione</h5>
          </div>
          <div class='post_content' style='width: 371px'>
                   	 <h4 class='style10'><br>Discussioni:".$discussDG[0]."<br>Risposte:".$rispDG[0]."
         	 </h4>
          </div>

          <div class='clr'></div>
          <p class='infopost' style='height: 1px'>&nbsp;</p>
          <div class='post_content'>
          	 <h3>
         	 <form name='OL' method='post' action='GUIDiscussioni.php#s'>
   			 	<input type='hidden' name='valore' value='OL' />
   			 	<a href='javascript:document.forms[&#96;OL&#96;].submit()'>
				<span class='style11'><img src='../images/f_icon_read.png' /></span>
				<span class='style11'>Offerte di lavoro</span></a>
				</form></h3>
          	<h5>breve descrizione</h5>
          </div>
          <div class='post_content' style='width: 460px'>
         	 <h4 class='style10'><br>Discussioni:".$discussOL[0]."<br>Risposte:".$rispOL[0]."
         	 </h4>
          </div>

         
          
          <div class='clr'></div>
          <p class='infopost' style='height: 1px'>&nbsp;</p>
		  <div class='post_content'>
          	 <h3>
         	 <form name='CO' method='post' action='GUIDiscussioni.php#s'>
   			 	<input type='hidden' name='valore' value='CO' />
   			 	<a href='javascript:document.forms[&#96;CO&#96;].submit()'>
				<span class='style11'><img src='../images/f_icon_read.png' /></span>
				<span class='style11'>Collaborazioni esterne</span></a>
				</form></h3>
          	<h5>breve descrizione</h5>
          </div>
          <div class='post_content' style='width: 420px'>
         	 <h4 class='style10'><br>Discussioni:".$discussCO[0]."<br>Risposte:".$rispCO[0]."
         	 </h4>
          </div>

          <div class='clr'></div>
 		  <p class='infopost' style='height: 1px'>&nbsp;</p>
		  <div class='post_content'>
          	 <h3>
         	 <form name='SB' method='post' action='GUIDiscussioni.php#s'>
   			 	<input type='hidden' name='valore' value='SB' />
   			 	<a href='javascript:document.forms[&#96;SB&#96;].submit()'>
				<span class='style11'><img src='../images/f_icon_read.png' /></span>
				<span class='style11'>Sbocchi professionali</span></a>
				</form></h3>
          	<h5>breve descrizione</h5>
          </div>
          <div class='post_content' style='width: 420px'>
         	 <h4 class='style10'><br>Discussioni:".$discussSB[0]."<br>Risposte:".$rispSB[0]."
         	 </h4>
          </div>

          
          <div class='clr'></div>
 		  <p class='infopost' style='height: 1px'>&nbsp;</p>
		  <div class='post_content'>
          	 <h3>
         	 <form name='EI' method='post' action='GUIDiscussioni.php#s'>
   			 	<input type='hidden' name='valore' value='EI' />
   			 	<a href='javascript:document.forms[&#96;EI&#96;].submit()'>
				<span class='style11'><img src='../images/f_icon_read.png' /></span>
				<span class='style11'>Eventi internazionali</span></a>
				</form></h3>
          	<h5>breve descrizione</h5>
          </div>
          <div class='post_content' style='width: 420px'>
         	<h4 class='style10'><br>Discussioni:".$discussEI[0]."<br>Risposte:".$rispEI[0]."
         	 </h4>
          </div>

          
          <div class='clr'></div>
 		  <p class='infopost' style='height: 1px'>&nbsp;</p>
		  <div class='post_content'>
          	 <h3>
         	 <form name='PS' method='post' action='GUIDiscussioni.php#s'>
   			 	<input type='hidden' name='valore' value='PS' />
   			 	<a href='javascript:document.forms[&#96;PS&#96;].submit()'>
				<span class='style11'><img src='../images/f_icon_read.png' /></span>
				<span class='style11'>Problemi software</span></a>
				</form></h3>
          	<h5>breve descrizione</h5>
          </div>
          <div class='post_content' style='width: 440px'>
         	 <h4 class='style10'><br>Discussioni:".$discussPS[0]."<br>Risposte:".$rispPS[0]."
         	 </h4>
          </div>

          
          <div class='clr'></div>
 		  <p class='infopost' style='height: 1px'>&nbsp;</p>
		  <div class='post_content'>
          	 <h3>
         	 <form name='PP' method='post' action='GUIDiscussioni.php#s'>
   			 	<input type='hidden' name='valore' value='PP' />
   			 	<a href='javascript:document.forms[&#96;PP&#96;].submit()'>
				<span class='style11'><img src='../images/f_icon_read.png' /></span>
				<span class='style11'>Problemi piattaforma</span></a>
				</form></h3>
          	<h5>breve descrizione</h5>
          </div>
          <div class='post_content' style='width: 420px'>
         	 <h4 class='style10'><br>Discussioni:".$discussPP[0]."<br>Risposte:".$rispPP[0]."
         	 </h4>
          </div>";}
          else{
          	$bob=$_POST['valore'];
            switch($bob){
                  case 'DG':
                    $sez='Domande di carattere generico';
                    break;
                   case 'OL':
                    $sez='Offerte di lavoro';
                    break;
                  case 'CO':
                    $sez='Collaborazioni esterne';
                    break;
                  case 'SB':
                    $sez='Sbocchi professionali';
                    break;
                  case 'EI':
                    $sez='Eventi internazionali';
                    break;
                  case 'PS':
                    $sez='Problemi software';
                    break;
                  case 'PP':
                    $sez='Problemi piattaforma';
                    break;
                }

                echo "<h2>Sezione: $sez</h2>";
 			 $query="select TITOLO, ID_ATTORE, ATTORE, ID from discussione where LIVELLO='$bob' AND TITOLO IS NOT NULL";			 
 			 $q=mysql_query($query);
			 
			 while($row = mysql_fetch_array($q, MYSQL_NUM)){
        $ii="ID";
			 switch($row[2]){
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
								
			 $query2="select NOME, COGNOME from $row[2] where $ii='$row[1]'";			 
 			 $q2=mysql_query($query2);

			 $row2 = mysql_fetch_array($q2, MYSQL_NUM);
			 
             $queryRisp = mysql_query("SELECT COUNT('TITOLO') FROM `discussione` WHERE LIVELLO = '$bob' and TITOLO is NULL and ID=$row[3]");
             $risp = mysql_fetch_array($queryRisp); 
             echo"<p class='infopost' style='height: 1px'>&nbsp;</p>
          
          <div class='post_content'>
         	 <h3>
         	 <form name='livello.$row[3]' method='post' action='../GUI_AO/GUIDiscussione.php#s'>
   			 	<input type='hidden' name='valore' value=$row[3] />
   			 	<a href='javascript:document.forms[&#96;livello.$row[3]&#96;].submit()'>
				<span class='style11'>".strtoupper($row[2])."<br><img class='gal' src='$cartella/uploads/$row[1].jpg' width='75' height='75' onerror=this.src='../images/userpic.gif'></img> </span>
				<span class='style11'>Titolo: ".$row[0]."</span></a>
				</form></h3>
         	 <h5>$row2[0] $row2[1]</h5>
          </div>
          <div class='post_content' style='width: 371px'>
                   	 <h4 class='style10'><br>Risposte:".$risp[0]."
         	 </h4>
          </div>

          <div class='clr'></div>";}


          }
?>
          
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