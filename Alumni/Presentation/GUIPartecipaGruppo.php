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
</style>

</head>
<body>
<!--Corpo della pagina-->
  

  
   <?php 
   			require_once("../GUI_MG/connessione.php");

 			 if (!isset($_COOKIE['id_utente']) && !isset($_COOKIE['tipo_utente']) && $_COOKIE['tipo_utente']!="alumno"){
 			 header("location: ../GUISito.php#s"); }
 			 
       $id = $_COOKIE['id_utente'];
 			 $tipo = $_COOKIE['tipo_utente'];
			 if(isset($_POST['valore'])){
			   $ac=$_POST['valore'];
		   	   mysql_query("UPDATE alumno SET GRUPPO ='$ac'  WHERE ID ='$id'");
         	   echo "<script type='text/javascript'>alert('La tue esperienza è stata inserita nel database ora è soggetta ad approvazione da un moderatore,l esito ti verrà notificato via email'); </script>";				
 			 }
 			 $query="select GRUPPO from alumno where ID='$id' ";
 			 $q=mysql_query($query);
			 $row = mysql_fetch_array($q, MYSQL_NUM);
			
			 if($row[0])
			 {
				header("location: GUIAlumno.php#s");
			 	 }

 			
 			?>

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

  <a name="s" ></a>
 <div class="menu_nav" style="width: 100%;"><!--Menu principale con i collegamenti alle varie pagine/funzionalità del sito-->
	<ul style="width: 100%; background-color:#DF4B49;  top: 0px;">
	<li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </li>
          <li><a href="loggato/GUISito.php#s"><span>Home Page</span></a></li>
          <li><a href="loggato/GUIStorie.php#s"><span>Storie</span></a></li>
          <li class="active"><a href="loggato/GUIGruppi.php#s"><span>Gruppi</span></a></li>
  		  <li><a ><span>Salvadanaio</span></a>
          <ul>
          		<li><a href="loggato/GUIEffettuaDonazione.php#s">Effettua una donazione</a></li>
          		<li><a href="loggato/GUIVisualizzaRaccoltaFondi.php#s">Visualizza raccolta fondi</a></li>
            </ul>
		  </li>
          <li><a href="loggato/GUIEventi.php#s"><span>Eventi</span></a></li>
          <li><a href="loggato/GUIDiscussioni.php#s"><span>Questions</span></a></li>
        </ul>
  </div>
  <div>&nbsp;</div>

 
  <div class="content"><!--Contenitore principale delle funzionalità della pagina corrente-->
    <div class="content_resize" style="width: 1301px; ">
    
      <!--Pannello laterale, inerente allo specifico utente loggato ed alle sue funzionalità  -->
      <div class="sidebar" style="right: 50px; top: -14px" ><!--Pannello laterale, inerente allo specifico utente loggato ed alle sue funzionalità  -->
        <div class="clr"></div>
        <div class="gadget">
        <div><div><strong><span class="style9">ALUMNO<a name="s" ></a></span></strong><br /><br />
         <?php 
				
              $immagine = "uploads/".$_COOKIE['id_utente'].".jpg";
              echo "<a href='JavaScript:openWindow()' ><img src=$immagine alt='BO'  height='100' width='100' style = 'float : left' onerror=this.src='../images/userpic.gif'></img></a>";
              
              ?>
<br />
          <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
          <?php 
 			 
  			  $query="select nome, cognome from $tipo where ID='$id' ";
			 $q=mysql_query($query);
			 $row = mysql_fetch_array($q, MYSQL_NUM);
			 echo $row[0]; ?><br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row[1]; ?><br /></strong><br /><br /><br /><br />
			</div> 
			</div>
  
          <h2 class="star"><span class="style8">Autenticazione</span> </h2>
          <ul class="sb_menu">
            <li>
   			 	<a href="GUILogoutAlumno.php#s">Logout</a><!--Funzionalità di logout-->
				</li>
				</ul>
        <!--Funzionalità di gestione esperienza-->
				
          <ul class="sb_menu">

           <li>
   			 	<a href="GUICondividiEsperienza.php#s">Condividi esperienza</a>
				</li>
            <li>
   			 	<a href="GUIModificaEsperienza.php#s">Modifica esperienza</a>
				</li>
				</ul>
				<h2 class="star"><span class="style8">Gestione Gruppi </span></h2>
          <ul class="sb_menu">
 <li>
   			 	<a href="GUIPartecipaGruppo.php#s">Partecipa Gruppo</a>
				</li>
         

           
                      </ul>
        </div>
        
      </div>
      

    
      <div class="mainbar" ><!--Pannello della funzionalità principale-->
        <div class="article">
          <h2>Gruppi </h2>
          <div class="clr"></div>
          
          <div class="post_content">
         <?php 
          	 $query="select NOMEGRUPPO, NUMMAXPARTECIPANTI, DESCRIZIONE from gruppo";
			 $q1=mysql_query($query);
			 while($row = mysql_fetch_array($q1, MYSQL_NUM)){
         	 $query="SELECT COUNT(*) FROM alumno where GRUPPO = '$row[0]'";
			 $q=mysql_query($query);
			 $ro = mysql_fetch_array($q, MYSQL_NUM);
			 if($ro[0]<=$row[1]){
         	    echo " <form action = 'GUIPartecipaGruppo.php' method='post'> <br><strong>".$row[0]."</strong> <input type='hidden' name='valore' value='$row[0]' /><div class='clr'></div>
           		 <p>".$row[2]." </p>
            	 <input type='submit' id='submit'  value='Partecipa' style='width: 245px' />
          		 </form><div class='clr'></div>";
          	 }}
          ?> </div>

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
