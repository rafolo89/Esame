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
 <script LANGUAGE="JavaScript">
    <!-- 
    function openWindow()
    {
        open ("../GUI_LC/selezioneImmagine.html","new","height=500,width=680,scrollbars=0,resizable=0,status=1,menubar=0,toolbar=0,location")
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
.style11 {
	text-align: center;
}
</style>


</head>
<body>
  
   <script LANGUAGE="JavaScript">
    <!-- 
    function openWindow()
    {
        open ("../../GUI_LC/selezioneImmagine.html","new","height=500,width=680,scrollbars=0,resizable=0,status=1,menubar=0,toolbar=0,location")
    //settando i parametri a 1, le barre vengono visualizzate, a 0 no.
    }
    -->
  </script>

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
          <li ><a href="loggato/GUISito.php#s"><span>Home Page</span></a></li>
          <li><a href="loggato/GUIStorie.php#s"><span>Storie</span></a></li>
          <li><a href="loggato/GUIGruppi.php#s"><span>Gruppi</span></a></li>
  		  <li><a ><span>Salvadanaio</span></a>
          <ul>
          		<li><a href="loggato/GUIEffettuaDonazione.php#s">Effettua una donazione</a></li>
          		<li><a href="loggato/GUIVisualizzaRaccoltaFondi.php#s">Visualizza raccolta fondi</a></li>
            </ul>
		  </li>
          <li class="active"><a href="loggato/GUIEventi.php#s"><span>Eventi</span></a></li>
          <li><a href="loggato/GUIDiscussioni.php#s"><span>Questions</span></a></li>
        </ul>
  </div>
  <div>&nbsp;</div>
  <div class="content"><!--Contenitore principale delle funzionalità della pagina corrente-->
    <div class="content_resize" style="width: 1301px; ">
    

      
     <div class="sidebar" style="right: 50px; top: -14px" ><!--Pannello laterale, inerente allo specifico utente loggato ed alle sue funzionalità  -->
        <div class="clr"></div>
        <div class="gadget">
        <div><div><strong><span class="style9">DOCENTE<A NAME="s" ></a></span></strong><br /><br />
        <?php 
              $immagine = "uploads/".$_COOKIE['id_utente'].".jpg";
              echo "<a href='JavaScript:openWindow()' ><img src=$immagine alt='BO'  height='100' width='100' style = 'float : left' onerror=this.src='../../images/userpic.gif'></img></a>";
              
              ?>


          <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
          <?php 
 			 $id = $_COOKIE['id_utente'];
 			 $tipo = $_COOKIE['tipo_utente'];
  			 require_once("connessione.php");
  			 $query="select nome, cognome from $tipo where CF='$id' ";
			 $q=mysql_query($query);
			 $row = mysql_fetch_array($q, MYSQL_NUM);
			 echo $row[0]; ?><br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row[1]; ?><br /></strong><br /><br /><br /><br />
			</div> 
			</div>
          <h2 class="star"><span class="style8">Autenticazione</span> </h2>
          <ul class="sb_menu">
            <li>
   			 	<a href="GUILogoutDocente.php#s">Logout</a><!--Funzionalità di logout-->
				</li>
				</ul>
				<h2 class="star"><span class="style8">Gestione Eventi</span></h2>
           <ul class="sb_menu">
            <li>
   			 		<a href="GUIOrganizzaEvento.php#s"><span class="style10">
				Organizza evento</span></a>
			 </li>
             <li><form name="modificaevento" method="post" action="GUICercaEvento.php#s">
   			 		<input type="hidden" name="docente" value="0" >
   			 		<a href="javascript:document.forms['modificaevento'].submit()">Modifica evento</a>
				</form>
			</li>
 			<li><form name="cancellaevento" method="post" action="GUICercaEvento.php#s">
   			 		<input type="hidden" name="docente" value="1" >
   			 		<a href="javascript:document.forms['cancellaevento'].submit()">Cancella evento</a>
				</form>
			</li>
			<li><form name="cercaevento" method="post" action="GUICercaEvento.php#s">
   			 		<input type="hidden" name="docente" value="2" >
   			 		<a href="javascript:document.forms['cercaevento'].submit()">Cerca evento</a>
				</form>
			</li>

			</ul>
		</div>	

        
      </div>
      

      <div class="mainbar" ><!--Pannello della funzionalità principale-->
        <div class="article">
        
          <h2>Modifica Evento</h2>
          <div class="clr"></div><p class="infopost">Evento</p>
       
          <div class="post_content">
            <form  method="post" action="GUIModificaEvento.php">
		   <table>
		   <?php 
					$a=$_COOKIE['Doc'];

			 		$query="select * from evento where ID='$a' && DOCENTE='$id' ";
					$q=mysql_query($query);
			 		if($eve = mysql_fetch_array($q, MYSQL_NUM)){

          }else{
            echo '<script type="text/javascript">window.location = "GUICercaEvento.php#s";alert("ID non valido:Inserire un ID associato ad un evento inserito dal Docente loggato!")</script>';
          }
		   ?>
				
				<tr>
					<td style="height: 37px; width: 103px;">Nome Evento</td>
					<td style="height: 37px; width: 224px;"><input type="text" name="nomeevento" size="35" maxlength="15" value="<?php echo $eve[1] ?>" required autofocus ></td><td id="tdnomeevento" style=" color:red; height: 37px"></td>
				</tr>		
				<tr>
					<td style="height: 37px; width: 103px;">Data inizio:</td>
					<td style="height: 37px; width: 224px;"><input type="text" name="datainizio" size="35" maxlength="10" value="<?php echo $eve[2] ?>" required autofocus ></td><td id="tddata" style=" color:red; height: 37px"></td>
				</tr>
					<tr>
					<td style="height: 37px; width: 103px;">&nbsp;</td>
					<td style="height: 37px; width: 224px;"><br>Descrizione: <br><br>
					<input type="text" wrap="hard" name="descrizione" size="35" maxlength="200" value="<?php echo $eve[3] ?>" required autofocus style="height: 318px; width: 504px" ></td><td id="tddescrizione" style=" color:red; height: 37px"></td>
				</tr>
				
			<tr>
			<td colspan="3" class="style11">
			<input type="submit"  id="submit" value="Modifica evento" style="width: 192px"></td>
			</tr>		

			</table>

	        </form>
	  
	 
          </div>
      	<?php 
        
          if(isset($_POST['nomeevento'])){
        
           
            $b=$_POST['nomeevento'];  
            $c=$_POST['datainizio'];  
            $d=$_POST['descrizione']; 
            
            $cont=0;
            if(strlen($b)<6 || strlen($b)>20){
                echo "<script>document.getElementById('tdnomeevento').innerHTML = 'Il nome evento contiene tra i 6 e i 20 caratteri';</script>";
                $cont++;
            }
            if(strlen($c)!=10){
                echo "<script>document.getElementById('tddata').innerHTML = 'La data deve essere scritta nella forma gg/mm/aaaa';</script>";
                $cont++;
            }
            if(strlen($d)<30 || strlen($d)>200){
                echo "<script>document.getElementById('tddescrizione').innerHTML = 'La descrizione deve contenere tra i 30 e i 200 caratteri';</script>";
                $cont++;
            }
              
            if ($cont==0) {
               $query= "update evento set NOME_EVENTO='$b',DATA_EVENTO='$c',DESCRIZIONE='$d' where id='$a'";
               mysql_query($query);
               echo '<script type="text/javascript">window.location = "loggato/GUIEventi.php#s";alert('L\evento è stato aggiornato');</script>';
            }
          }

          ?>  
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