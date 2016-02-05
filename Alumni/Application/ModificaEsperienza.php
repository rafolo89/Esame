 <?php 
    			 if (!isset($_COOKIE['id_utente']) && !isset($_COOKIE['tipo_utente']) && $_COOKIE['tipo_utente']!="alumno"){
 			header("location: ../GUISito.php"); }
 			
			 ?>
			 
			  <?php 
              $immagine = "uploads/".$_COOKIE['id_utente'].".jpg";
              echo "<a href='JavaScript:openWindow()' ><img src=$immagine alt='BO'  height='100' width='100' style = 'float : left' onerror=this.src='../images/userpic.gif'></img></a>";
              
              ?>
			  
			    <?php 
 			 $id = $_COOKIE['id_utente'];
 			 $tipo = $_COOKIE['tipo_utente'];
  			 require_once("../GUI_MG/connessione.php");
			 $query="select nome, cognome from $tipo where ID='$id' ";
			 $q=mysql_query($query);
			 $row = mysql_fetch_array($q, MYSQL_NUM);
			 echo $row[0]; ?>
			 
			 <?php echo $row[1]; $query="select DESCRIZIONE from esperienza where ALUMNO='$id' ";
 			 $q=mysql_query($query);
			 $row = mysql_fetch_array($q, MYSQL_NUM); ?>
			 
			 
			   <?php 
      		 if (isset($_POST['testo'])){
 			 $testo = $_POST['testo'];
 			 mysql_query("UPDATE esperienza SET DESCRIZIONE='$testo', MODERATORE=NULL WHERE ALUMNO='$id'");
            		   echo "<script type='text/javascript'>window.location = 'loggato/GUIStorie.php#s';alert('La richiesta di modifica è stata inoltrata ad un moderatore, riceverete un email appena verrà approvata/revocata'); </script>";				
 				}
			 ?>