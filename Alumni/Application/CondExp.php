<?php 
    require_once("../GUI_MG/connessione.php");
			 
 			 if (!isset($_COOKIE['id_utente']) && !isset($_COOKIE['tipo_utente']) && $_COOKIE['tipo_utente']!="alumno"){
 			header("location: ../GUISito.php"); }
 			
      $id=$_COOKIE['id_utente'];
 			
 			 $query="select * from esperienza where ALUMNO='$id' ";
 			 $q=mysql_query($query);
			 $row = mysql_fetch_array($q, MYSQL_NUM);
			 
			 if($row[0])
			 {
            		   echo "<script type='text/javascript'>window.location = '/loggato/GUIStorie.php#s';alert('La richiesta d'inserimento è stata inviata ad un moderatore, riceverete un email di notifica appena verrà approvata/revocata'); </script>";				
			 	 }

			 ?>
			  <?php 
              $immagine = "uploads/".$_COOKIE['id_utente'].".jpg";
              echo "<a href='JavaScript:openWindow()' ><img src=$immagine alt='BO'  height='100' width='100' style = 'float : left' onerror=this.src='../../images/userpic.gif'></img></a>";
              
              ?>
			  
			  <?php 
 			 $id = $_COOKIE['id_utente'];
 			 $tipo = $_COOKIE['tipo_utente'];
  	
			 $query="select nome, cognome from $tipo where ID='$id' ";
			 $q=mysql_query($query);
			 $row = mysql_fetch_array($q, MYSQL_NUM);
			 echo $row[0]; ?>
			 
			 <?php echo $row[1]; ?>
			 
			  <?php 
      		 if (isset($_POST['testo'])){
 			 $testo = $_POST['testo'];
			  $h=date("d/m/Y"); 
			  $q=$_COOKIE['id_utente'];
			 mysql_query("INSERT INTO esperienza(DESCRIZIONE, ALUMNO, DATA) VALUES('$testo','$q','$h')");
            		   echo "<script type='text/javascript'>alert('La tue esperienza è stata inserita nel database ora è soggetta ad approvazione da un moderatore,l esito ti verrà notificato via email'); </script>";				
                       
 }
			 ?>