﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
        open ("../selezioneImmagine.html","new","height=500,width=680,scrollbars=0,resizable=0,status=1,menubar=0,toolbar=0,location")
    //settando i parametri a 1, le barre vengono visualizzate, a 0 no.
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
<body><!--Corpo della pagina-->
<body><!--Corpo della pagina-->
<!--Corpo della pagina-->

<div class="Intestazione" style="width: 100%; height: 20px"><!--Primo blocco:intestazione->Logo ed immagini-->
  </div>
      <div class="style7" style="width: 100%; ">
		<img src="../../images/logoalumni.jpg"  />
  </div>

   <div class="Intestazioneunder" style="width: 100%; height: 20px;">
  </div>
<div class="main">
  <div class="header">

 
  <div class="Immaginiscroll" style="width: 100%;"><img src="../../images/unisa.png" style="width: 100%;" />
  </div>
  <a name="s"></a>
 <div class="menu_nav" style="width: 100%;"><!--Menu principale con i collegamenti alle varie pagine/funzionalità del sito-->
	<ul style="width: 100%; background-color:#DF4B49;  top: 0px;">
	<li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </li>
          <li ><a href="GUISito.php#s"><span>Home Page</span></a></li>
          <li><a href="GUIStorie.php#s"><span>Storie</span></a></li>
          <li><a href="GUIGruppi.php#s"><span>Gruppi</span></a></li>
  		  <li><a ><span>Salvadanaio</span></a>
          <ul>
          		<li><a href="GUIEffettuaDonazione.php#s">Effettua una donazione</a></li>
          		<li><a href="GUIVisualizzaRaccoltaFondi.php#s">Visualizza raccolta fondi</a></li>
            </ul>
		  </li>
          <li class="active"><a href="GUIEventi.php#s"><span>Eventi</span></a></li>
          <li><a href="GUIDiscussioni.php#s"><span>Questions</span></a></li>
        </ul>
  </div>
  <div>&nbsp;</div>
  <div class="content"><!--Contenitore principale delle funzionalità della pagina corrente-->
    <div class="content_resize" style="width: 1301px; ">
<div class="sidebar" style="right: 50px; top: -14px" ><!--Pannello laterale, inerente allo specifico utente loggato ed alle sue funzionalità  -->
          <div class="clr"></div>
          <div class="gadget">
            <div><div><strong><span class="style9">MODERATORE<A NAME="s" ></a></span></strong><br /><br />
              <?php 
              $immagine = "../uploads/".$_COOKIE['id_utente'].".jpg";

              echo "<a href='JavaScript:openWindow()' ><img src=$immagine alt='BO'  height='100' width='100' style = 'float : left' onerror=this.src='../../images/userpic.gif'></img></a>";
              
              ?>
              <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                <?php 
                $id = $_COOKIE['id_utente'];
                $tipo = $_COOKIE['tipo_utente'];
  			require_once("../../GUI_MG/connessione.php");
                $query="select nome, cognome from $tipo where ID='$id' ";
                $q=mysql_query($query);
                $row = mysql_fetch_array($q, MYSQL_NUM);
                echo $row[0]; ?><br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row[1]; ?><br /></strong><br /><br /><br /><br />
              </div> 
            </div>
            <h2 class="star"><span class="style8">Autenticazione</span> </h2>
            <ul class="sb_menu">
              <li>
                <a href="../../GUI_AO/GUILogoutModeratore.php#s">Logout</a><!--Funzionalità di logout-->
              </li>
            </ul>
            <h2 class="star"><span class="style8">Gestione Esperienza </span></h2>
            <ul class="sb_menu">

             <li>
              <a href="../../GUI_AO/GUIRevisioneEsperienza.php#s"><span class="style10">
                Revisiona esperienza</span></a>
              </li>


            </ul>
            <h2 class="star"><span class="style8">Gestione Gruppo </span></h2>
            <ul class="sb_menu">

             <li>
              <a href="../GUICreaGruppo.php#s"><span class="style10">
                Crea gruppo</span></a>
              </li>


            </ul>

          </div>

        </div>

      <div class="mainbar" ><!--Pannello della funzionalità principale-->
      			<?php
										require_once("../../GUI_MG/connessione.php");
				$query = "SELECT NOME_EVENTO, DESCRIZIONE, DATA_EVENTO, ID FROM evento ORDER BY evento.DATA_EVENTO DESC  ";
				$gruppi = mysql_query($query);
			$i=0;
			echo "<div class='article'><h2><span>Eventi</span></h2>";
				while ($row = mysql_fetch_array($gruppi))
				{	

						 $Result =  substr($row[1], 0, 50);
						 $Result =  $Result."..";
				   		 echo "					
						 <div class='clr'></div>
       					 <p><h2><strong> $row[0]</h2></strong>-$row[2] </p>
       					 <div class='img'><img src='../../images/evento.jpg' width='177' height='213' alt='' class='fl' /></div>
       			    	 <div class='clr'></div>
       			    	  <input type='hidden' name='id' value='$row[0]' />

       			    	 <div class='post_content'>         				 
           				 <p>$Result </p>
           				 <div class='clr'></div>
           				 <p class='spec'> <form name='visualizzaeventi' method='post' action='GUIVisualizzaEvento.php'>
   			 			 <input type='hidden' name='valore' value='$row[3]' />
   			 			 <input type='submit' id='submit'  value='Leggi' />
				</form>
				</p>
          			   	 </div>
         				 <div class='clr'></div>";
						
				}			

			?>

                  
           </div> </div>
      
      <div class="clr"></div>
    </div>
  </div>
  <div class="fbg">
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