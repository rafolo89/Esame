<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
<?php

		  			 require_once("../../GUI_MG/connessione.php");			
 
       if (!isset($_COOKIE['id_utente']) && !isset($_COOKIE['tipo_utente']) && $_COOKIE['tipo_utente']!="alumno"){
      header("location: ../../GUISito.php#s"); 
      }
    

	?>

<div class="Intestazione" style="width: 100%; height: 20px"><!--Primo blocco:intestazione->Logo ed immagini-->
  </div>
      <div class="style7" style="width: 100%; ">
		<img src="../../images/logoalumni.jpg"  />
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
          <li class="active"><a href="GUISito.php#s"><span>Home Page</span></a></li>
          <li><a href="GUIStorie.php#s"><span>Storie</span></a></li>
          <li><a href="GUIGruppi.php#s"><span>Gruppi</span></a></li>
  		  <li><a ><span>Salvadanaio</span></a>
          <ul>
          		<li><a href="GUIEffettuaDonazione.php#s">Effettua una donazione</a></li>
          		<li><a href="GUIVisualizzaRaccoltaFondi.php#s">Visualizza raccolta fondi</a></li>
            </ul>
		  </li>
          <li><a href="GUIEventi.php#s"><span>Eventi</span></a></li>
          <li><a href="GUIDiscussioni.php#s"><span>Questions</span></a></li>
        </ul>
  </div>
  <div>&nbsp</div>
  <div class="content"><!--Contenitore principale delle funzionalità della pagina corrente-->
    <div class="content_resize" style="width: 1301px; ">
    <div class="sidebar2" style="right: 25px; top: 0px">
        <div class="clr"></div>
        <div class="gadget">
          <h2 class="e"><span>Prossimi</span> eventi </h2>
          <table cellpadding="15" cellspacing="5">
          <?php 
          		

          		$query3 = "SELECT NOME_EVENTO, DATA_EVENTO, ID FROM evento ORDER BY evento.DATA_EVENTO DESC  ";
				$ro = mysql_query($query3);
				$i=0;
				while(($row=mysql_fetch_array($ro))&&($i<3)){
				$i++;
				$da=substr($row[1], 0, 2);
				$dat=substr($row[1], 3, 2);
				$dat--;
				$dat=strtotime("+".$dat." Months");
				$dat=date("M",$dat);
            	echo ("<tr><td bgcolor='#DF4B49' class='style5'><span class='style5'>$da</span><br />$dat</td><td><form name=' invio' method='post' action='GUIVisualizzaEvento.php#s'>
   			 	<input type='hidden' name='valore' value='$row[2]' />
   			 	<a href='javascript:document.forms[&#39 invio&#39].submit()'>$row[0]</a>
				</form></td></tr>");
				}            ?>
                     </table>
        </div>
      </div>

    <div class="content"><!--Contenitore principale delle funzionalità della pagina corrente-->
    <div class="content_resize" style="width: 1301px; ">
<div class="sidebar" style="right: 50px; top: -14px" ><!--Pannello laterale, inerente allo specifico utente loggato ed alle sue funzionalità  -->
        <div class="clr"></div>
        <div class="gadget">
        <div><div><strong><span class="style9">DOCENTE<A NAME="s" ></a></span></strong><br /><br />
         <?php 
              $immagine = "../uploads/".$_COOKIE['id_utente'].".jpg";
              echo "<a href='JavaScript:openWindow()' ><img src=$immagine alt='BO'  height='100' width='100' style = 'float : left' onerror=this.src='../../images/userpic.gif'></img></a>";
              
              ?>
<br />
          <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
          <?php 
 			 $id = $_COOKIE['id_utente'];
 			 $tipo = $_COOKIE['tipo_utente'];
  			 require_once("../connessione.php");
  			 $query="select nome, cognome from $tipo where CF='$id' ";
			 $q=mysql_query($query);
			 $row = mysql_fetch_array($q, MYSQL_NUM);
			 echo $row[0]; ?><br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row[1]; ?><br /></strong><br /><br /><br /><br />
			</div> 
			</div>
          <h2 class="star"><span class="style8">Autenticazione</span> </h2>
          <ul class="sb_menu">
            <li>
   			 	<a href="../GUILogoutDocente.php#s">Logout</a><!--Funzionalità di logout-->
				</li>
				</ul>
				<h2 class="star"><span class="style8">Gestione Eventi</span></h2>
          <ul class="sb_menu">
            <li>
   			 		<a href="../GUIOrganizzaEvento.php#s"><span class="style10">
				Organizza evento</span></a>
			 </li>
             <li><form name="modificaevento" method="post" action="../GUICercaEvento.php#s">
   			 		<input type="hidden" name="docente" value="0" >
   			 		<a href="javascript:document.forms['modificaevento'].submit()">Modifica evento</a>
				</form>
			</li>
 			<li><form name="cancellaevento" method="post" action="../GUICercaEvento.php#s">
   			 		<input type="hidden" name="docente" value="1" >
   			 		<a href="javascript:document.forms['cancellaevento'].submit()">Cancella evento</a>
				</form>
			</li>
			<li><form name="cercaevento" method="post" action="../GUICercaEvento.php#s">
   			 		<input type="hidden" name="docente" value="2" >
   			 		<a href="javascript:document.forms['cercaevento'].submit()">Cerca evento</a>
				</form>
			</li>

			</ul>
		</div>	

        
      </div>

      <div class="mainbar" >
        <div class="article">
          <h1><span><a name="s"></a>Alumni Unisa</span></h1>
          <br>
          <div class="clr"></div>
          <!--<div class="img"><img src="images/logoalumni.jpg" width="177" height="213" alt="" class="fl" /></div>-->
          <div class="post_content">
            <h2>Se anche tu sei un Informatico laureato all’Università degli Studi di Salerno 
                sei un Alumnus/Alumna Unisa e fai parte della nostra Associazione!
                <br><br>Vi invitiamo, inoltre, a esplorare le numerose opportunità disponibili , da eventi nel campus, 
                corsi tenuti , esperienze degli Alumni Unisa Informatica e rimanere a stretto contatto con l’università.
                <br><br>[...]“Chiunque abbia perso la nozione del tempo mentre usava un computer conosce la propensione a sognare, il bisogno di realizzare i propri sogni "[...]
              </h2>
            </div>
          <div class="clr"></div>
        </div>
        </div>
      <div class="clr"></div>

  
  <div class="fbg">
    <div class="fbg_resize" >
      <div class="col c1">
        <h2>Storie alumni</h2>
          <?php
        //collegamento al db
        $query = "SELECT * FROM esperienza ORDER BY DATA DESC";
          $res = mysql_query($query);
        $i=0;
        while(($row=mysql_fetch_array($res))&&($i<6)){
        if($i==3){
        echo "<br>";
        }
         
  			  $immagine = "../../GUI_CP/uploads/".$row[2].".jpg";
              echo "<form method='post' action='GUIVisualizzaEsperienza.php#s'><input type='hidden' name='valore' value=$row[2] /><input type='image' src=$immagine onerror=this.src='../../images/userpic.gif' alt='BO'  height='75' width='75' style = 'float : left' /></img></form>";
              
          $i++;
        }

        ?>
        

    </div>
      <div class="col c2">
        <h2>Paronamica</h2>
        <p>Cos'è un Alumno:</p>
        <ul class="fbg_ul">
          <li><a href="https://it.wikipedia.org/wiki/Alumnus">Alumnus - Definizione Wikipedia</a></li>
          <li><a href="http://www.alumni.princeton.edu/">Alumno nel mondo - Princeton</a></li>
        </ul>
      </div>
      <div class="col c3">
        <h2>Contattaci</h2>
        <p>Per malfunzionamenti contattarci all'email riportata sotto.</p>
        <p class="contact_info"> <span style="height: 22px">Indirizzo:</span> 
		Via Giovanni Paolo II, 132
<br />
          <span>Città:</span> Fisciano (SA) <br />
          <span>CAP:</span> 84084 <br />
          <span>P.IVA:</span> 00851300657<br />
          <span>E-mail:</span> <a href="../../mailto:alumniunisa@outlook.it">alumniunisa@outlook.it</a> </p>
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
