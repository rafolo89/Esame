﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
<!--Inizio della pagina-->
<title>AlumniUnisa</title>
<!--Caricamento collegamenti esterni per stili e script-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../../css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="../../css/coin-slider.css" />
<script type="text/javascript" src="../../js/cufon-yui.js"></script>
<script type="text/javascript" src="../../js/cufon-titillium-250.js"></script>
<script type="text/javascript" src="../../js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="../../js/script.js"></script>
<script type="text/javascript" src="../../js/coin-slider.min.js"></script>
<script LANGUAGE="JavaScript">
    <!-- 
    function openWindow()
    {
        open ("../../GUI_LC/selezioneImmagine.html","new","height=500,width=680,scrollbars=0,resizable=0,status=1,menubar=0,toolbar=0,location")
    //settando i parametri a 1, le barre vengono visualizzate, a 0 no.
    }
    -->
  </script>
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
		font-size: large;

}
.style9 {
	text-decoration: none;
		font-size: x-large;

}
.style10 {
	text-align: right;
	color: #585757;
}
.style11 {
	color: #000000;
}
</style>

</head>
<body>
<!--Corpo della pagina-->

<?php

		  			 require_once("../../GUI_MG/connessione.php");
			
 
       if (!isset($_COOKIE['id_utente']) && !isset($_COOKIE['tipo_utente']) && $_COOKIE['tipo_utente']!="alumno"){
      header("location: ../../GUISito.php#s"); 
      }
    

	?>

<div class="Intestazione" style="width: 100%; height: 20px"><!--Primo blocco:intestazione->Logo ed immagini-->
  </div>
      <div class="style7" style="width: 100%; ">
		<img src="../../images/logoalumni.jpg" />
  </div>

   <div class="Intestazioneunder" style="width: 100%; height: 20px;">
  </div>
<div class="main">
  <div class="header">

  <div class="Immaginiscroll" style="width: 100%;"><img src="../../images/unisa.png" style="width: 100%;"/>
  </div>
  <a name="s"></a>
 <div class="menu_nav" style="width: 100%;"><!--Menu principale con i collegamenti alle varie pagine/funzionalità del sito-->
	<ul style="width: 100%; background-color:#DF4B49;  top: 0px;">
	<li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </li>
          <li ><a href="GUISito.php#s"><span>Home Page</span> <a name="s"></a></a></li>
          <li><a href="GUIStorie.php#s"><span>Storie</span></a></li>
          <li><a href="GUIGruppi.php#s"><span>Gruppi</span></a></li>
  		  <li><a ><span>Salvadanaio</span></a>
          <ul>
          		<li><a href="GUIEffettuaDonazione.php#s">Effettua una donazione</a></li>
          		<li><a href="GUIVisualizzaRaccoltaFondi.php#s">Visualizza raccolta fondi</a></li>
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
        <div class="clr"></div>
        <div class="gadget">
        <div><div><strong><span class="style9">AMMINISTRATORE<A NAME="s" ></a></span></strong><br /><br />
         <?php 
              $immagine = "../uploads/".$_COOKIE['id_utente'].".jpg";
              echo "<a href='JavaScript:openWindow()' ><img src=$immagine alt='BO'  height='100' width='100' style = 'float : left' onerror=this.src='../../images/userpic.gif'></img></a>";
              
              ?>
<br />
          <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
          <?php 
 			 $id = $_COOKIE['id_utente'];
 			 $tipo = $_COOKIE['tipo_utente'];
  			 require_once("../../GUI_MG/connessione.php");			 $query="select nome, cognome from $tipo where ID='$id' ";
			 $q=mysql_query($query);
			 $row = mysql_fetch_array($q, MYSQL_NUM);
			 echo $row[0]; ?><br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row[1]; ?><br /></strong><br /><br /><br /><br />
			</div> 
			</div>
         <h2 class="star"><span class="style8">Autenticazione</span> </h2>
          <ul class="sb_menu">
            <li>
   			 	<a href="../../GUI_LC/GUILogoutAmministratore.php#s">Logout</a><!--Funzionalità di logout-->
				</li>
				</ul>
				<h2 class="star"><span class="style8">Gestione Docente </span></h2>
          <ul class="sb_menu">


           <li>
   			 	<a href="../GUIinserisciDocente.php"><span class="style10">
				Inserisci docente</span></a>
				</li>          			 		
             <li><form name="modificadocente" method="post" action="../../GUI_LC/GUICercaDocente.php#s">
   			 		<input type="hidden" name="docente" value="0" >
   			 		<a href="javascript:document.forms['modificadocente'].submit()">Modifica docente</a>
				</form>
			</li>
 			<li><form name="cancelladocente" method="post" action="../../GUI_LC/GUICercaDocente.php">
   			 		<input type="hidden" name="docente" value="wiloco" >
   			 		<a href="javascript:document.forms['cancelladocente'].submit()">Cancella docente</a>
				</form>
			</li>
			<li>
   			 	<a href="../../GUI_LC/GUICercaDocente.php#s"><span class="style10">
				Cerca docente</span></a>
			</li>

				</ul>
				
        </div>
        
      </div>
<div class="sidebar2" style="right: 25px; top: 0px">
        <div class="clr"></div>
      </div>

      <div class="mainbar" ><!--Pannello della funzionalità principale-->
          <div class="article">
          <h2><?php if(isset($_POST['valore'])){
			$accacche=$_POST['valore'];
			$ii="ID";
			if(isset($_POST['testo'])){
								$h=$_POST['testo'];
							    $livello=$_POST['livello'];
							    $utente=$_COOKIE['tipo_utente'];
							    $f=$_COOKIE['id_utente'];
							 	mysql_query("INSERT INTO discussione(ID, DESCRIZIONE, ID_ATTORE, LIVELLO, ATTORE) VALUES('$accacche','$h','$f','$livello','$utente')");
			 				}
			 $query="select ID_ATTORE, ATTORE, DESCRIZIONE, TITOLO from discussione where ID=$accacche AND TITOLO IS NOT NULL";			 
 			 $q=mysql_query($query); 
			 $contatore=0;
			 while($row = mysql_fetch_array($q, MYSQL_NUM)){
			 	$ii="ID";
			 		 switch($row[1]){
									case 'alumno':
										$cartella='../../GUI_CP';
										break;
									case 'docente':
										$cartella='../';
										$ii="CF";
										break;
									case 'moderatore':
										$cartella='../../GUI_LC';
										break;
									case 'amministratore':
										$cartella='../../GUI_AO';
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
         	 	  <h5>$row[1]</h5>
         	 	  <h3>
						<span class='style11'><img class='gal' src='$cartella/uploads/$row[0].jpg' width='75' height='75' onerror=this.src='../../images/userpic.gif'></img> </span>
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
			 	}
			 	$livello=$_POST['livello'];
			 	echo"<p><form name='evento' method='post' action='GUIDiscussione.php#s'>
           			 <input type='hidden' name='valore' value=$accacche />
           			 <input type='hidden' name='livello' value=$livello />
					 <textarea name='testo' style='width: 100%; height: 77px;'></textarea>
            		 <p class='spec'> <input type='submit' id='submit'  value='Invia' />
					 </p>
          			 </form></p>";

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
