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
.style5 {
	color: #FFFFFF;
	font-size: x-large;
	text-align: center;
	font-family:  Helvetica, sans-serif;
}
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
</style>
</head>
<body>
<!--Corpo della pagina-->
 <?php
     
        if(isset($_POST["inputnome"])){
            $a = $_POST["inputnome"];
            $b = $_POST["inputcognome"];
            $c = $_POST["inputdata"];
            $d = $_POST["inputluogo"];
            $e = $_POST["inputlavoro"];
            $f = $_POST["inputanno"];
            $g = $_POST["inputemail"];
            $h = $_POST["inputpassword"];
            $i = $_POST["inputcpw"];

      }  
      
        
    ?>
<div class="Intestazione" style="width: 100%; height: 20px"><!--Primo blocco:intestazione->Logo ed immagini-->
  </div>
      <div class="style7" style="width: 100%; ">
		<img alt="" src="../images/logoalumni.jpg"  />
  </div>

   <div class="Intestazioneunder" style="width: 100%; height: 20px;">
  </div><a name="s" ></a>
<div class="main">
  <div class="header">

  <div class="Immaginiscroll" style="width: 100%;"><img src="../images/unisa.png" style="width: 100%;" />
  </div>
  <a name="s" ></a>
 <div class="menu_nav" style="width: 100%;"><!--Menu principale con i collegamenti alle varie pagine/funzionalità del sito-->
	<ul style="width: 100%; background-color:#DF4B49;  top: 0px;">
	<li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </li>
          <li><a href="../GUISito.php#s"><span>Home Page</span></a></li>
          <li><a href="../GUI_LC/GUIStorie.php#s"><span>Storie</span></a></li>
          <li><a href="../GUI_LC/GUIGruppi.php#s"><span>Gruppi</span></a></li>
  		  <li><a ><span>Salvadanaio</span></a>
          <ul>
          		<li><a href="../GUI_AO/GUIEffettuaDonazione.html#s">Effettua una donazione</a></li>
          		<li><a href="../GUI_AO/GUIVisualizzaRaccoltaFondi.php#s">Visualizza raccolta fondi</a></li>
            </ul>
		  </li>
          <li><a href="../GUI_LC/GUIEventi.php#s"><span>Eventi</span></a></li>
          <li><a href="../GUI_LC/GUIDiscussioni.php#s"><span>Questions</span></a></li>
        </ul>
  </div>
  <div>&nbsp</div>
  <div class="content"><!--Contenitore principale delle funzionalità della pagina corrente-->
    <div class="content_resize" style="width: 1301px; ">

      <div class="sidebar" style="right: 50px; top: -14px" ><!--Pannello laterale, inerente allo specifico utente loggato ed alle sue funzionalità  -->
        <div class="searchform"><!--Funzionalità di ricerca-->
          <form id="formsearch" name="formsearch" method="post" action="#">
            <span>
            <input name="editbox_search" class="editbox_search" id="editbox_search" maxlength="80" placeholder="Cerca Alumno:" type="text" />
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
          <h2 class="style6"><span><a href="GUIRegistrazioneAlumno.php#s"  class="style9">
			<span class="style8">Registrazione Alumno</span></a></span></h2><!--Funzionalità registrazione Alumno-->
          <div class="clr"></div>
                  </div>
      </div>
      
      <div class="mainbar" style="width: 784px" >
        <div class="article">
        
          <h2>Registrazione Alumno</h2>
          <p class="infopost"><strong>Inserisci le credenziali:</strong></p>
          <div class="clr"></div>
          <div class="post_content" style="width: 750px; margin-right: 38px">
			<form  method="post" action="GUIRegistrazioneAlumno.php">
			<input type="hidden" name="valore" value="<?php echo $_POST['valore']; ?>" />
			<table border="0" cellspacing="5" cellpadding="5" style="width: 740px">
			<tr>
			<td style="height: 37px; width: 103px;">Nome:</td>
			<td style="height: 37px; width: 224px;"><input type="text" name="inputnome" size="35" maxlength="40" value="" required autofocus /></td><td id="tdnome" style=" color:red; height: 37px"></td>
			</tr>
			<tr>
			<td style="width: 103px">Cognome:</td><td style="width: 224px"><input type="text" name="inputcognome" size="35" maxlength="40" value="" required autofocus /> </td><td id="tdcognome" style=" color:red; height: 37px"></td>
			</tr>
			<tr>
			<td style="height: 37px; width: 103px;">Data di nascita:</td>
			<td style="height: 37px; width: 224px;"><input type="text" name="inputdata" size="35" maxlength="40" value="" required autofocus /></td> <td id="tdandiamo" style=" color:red; height: 37px"></td>
			</tr>
			<tr>
			<td style="width: 103px">Luogo di nascita:</td>
			<td style="width: 224px"><input type="text" name="inputluogo" size="35" maxlength="40" value="" required autofocus /> </td><td id="tdluogo" style=" color:red; height: 37px"></td>
			</tr>
			<tr>
			<td style="height: 37px; width: 103px;">Lavoro:</td>
			<td style="height: 37px; width: 224px;"><input type="text" name="inputlavoro" size="35" maxlength="40" value="" required autofocus /></td><td id="tdlavoro" style=" color:red; height: 37px"></td>
			</tr>
			<tr>
			<td style="width: 103px">Anno di Laurea:</td>
			<td style="width: 224px"><input type="text" name="inputanno" size="35" maxlength="40" value="" required autofocus /> </td><td id="tdanno" style=" color:red; height: 37px"></td>
			</tr>
			<tr>
			<td style="height: 37px; width: 103px;">Email:</td>
			<td style="height: 37px; width: 224px;"><input type="text" name="inputemail" size="35" maxlength="40" value="" required autofocus /></td><td id="tdemail" style=" color:red; height: 37px"></td>
			</tr>
			<tr>
			<td style="width: 103px">Password:</td><td style="width: 224px"><input type="password" name="inputpassword" size="35" maxlength="40" value="" required autofocus /> </td><td id="tdpassword" style=" color:red; height: 37px"></td>
			</tr>
<tr>
			<td style="height: 37px; width: 103px;">Conferma password:</td>
			<td style="height: 37px; width: 224px;"><input type="password" name="inputcpw" size="35" maxlength="40" value="" required autofocus /></td><td id="tdcfw" style=" color:red; height: 37px"></td>
			</tr>
			
			<tr>
			<td style="width: 103px"></td><td style="width: 224px"><input type="submit" id="submit"  value="Registrati" /></td>
			</tr>
			</table>
			
        </form>
<?php  
			if(isset($a)){
			$numero=0;
				if((strlen($a) < 4) || (strlen($a) >11 )) {
					$numero++;
      				echo "<script language='JavaScript' type='text/javascript'> document.getElementById('tdnome').innerHTML='Il campo nome deve contenere una stringa compresa tra 4 e 11 caratteri';</script>";           		 
           		 }
           		 if((strlen($b) < 4) || (strlen($b) >11 )) {
           		 	 $numero++;
     				 echo "<script language='JavaScript' type='text/javascript'> document.getElementById('tdcognome').innerHTML='Il campo cognome deve contenere una stringa compresa tra 4 e 11 caratteri';</script>";           		 
            	 }
           	 	 if(strlen($c) > 11) {
           	 	 	$numero++;
     				 echo "<script language='JavaScript' type='text/javascript'> document.getElementById('tdandiamo').innerHTML='Il campo data deve contenere 11 caratteri';</script>";           		 
            	 }
             	 if((strlen($d) < 4) || (strlen($d) >21 )) {
             	 	  $numero++;
     		 		  echo "<script language='JavaScript' type='text/javascript'> document.getElementById('tdluogo').innerHTML='Il campo luogo deve contenere una stringa compresa tra 4 e 21 caratteri';</script>";           		 
            	 }
            	 if((strlen($e) < 4) || (strlen($e) >21 )) {
            	 	  $numero++;
     		 		  echo "<script language='JavaScript' type='text/javascript'> document.getElementById('tdlavoro').innerHTML='Il campo lavoro deve contenere una stringa compresa tra 4 e 21 caratteri';</script>";           		 
            	 }
            	 if(strlen($f) != 4) {
            	  	  $numero++;
     		 		  echo "<script language='JavaScript' type='text/javascript'> document.getElementById('tdanno').innerHTML='Il campo anno deve contenere una stringa cnella forma AAAA ';</script>";           		 
            	 }
            	 if(!(preg_match('/@/i', $g))) {
            	  	  $numero++;
     		 		  echo "<script language='JavaScript' type='text/javascript'> document.getElementById('tdemail').innerHTML='Il campo e-mail non è valido';</script>";           		 
            	 }
            	 if((strlen($h)> 9) || (strlen($h)<4)) {
            	  	  $numero++;
     		 		  echo "<script language='JavaScript' type='text/javascript'> document.getElementById('tdpassword').innerHTML='Il campo password deve contenere massimo 9 e minimo 4 caratteri';</script>";           		 
            	 }
            	 if( (strlen($i)> 9) || (strlen($i)<4) || ($h != $i) ) {
            	  	  $numero++;
   		 		      echo "<script language='JavaScript' type='text/javascript'> document.getElementById('tdcfw').innerHTML='Le password non corrispondono';</script>";           		 
            	 }
            	 if($numero==0){
            	       
           			  require_once("../GUI_MG/connessione.php");
            		  mysql_query("INSERT INTO alumno(NOME, COGNOME, DATA_DI_NASCITA,LUOGO_DI_NASCITA, ANNO_DI_LAUREA, LAVORO, EMAIL, PW) VALUES('$a','$b','$c','$d','$f','$e','$g','$h')");
                      echo "<script type='text/javascript'>alert('Sei stato inserito nel database ti abbiamo inviato un email contenente i dati per l accesso.'); </script>";	
                      $IDMail = mysqli_insert_id(mysqli_connect("localhost", "root", "", "my_alumniunisa");
                      if(!(mail($g, "Registrazione avvenuta con successo", "Gentile utente,\nti ringraziamo per esserti registrato ad AlumniUnisa. Le tue credenziali per l'accesso sono: \n\n\"ID\" = '$IDMail' \n\"password\" = '$h' \n\nCordiali Saluti AlumniUnisa."))){
                      	echo "<script type='text/javascript'>alert('Email non inviata per problemi tecnici!')</script>";
                  	  }
                  }
            	}
        	?>
            
       
          </div>
          <div class="clr"></div>
        </div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="fbg">
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