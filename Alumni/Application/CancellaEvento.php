<?php 
       if (!isset($_COOKIE['id_utente']) && !isset($_COOKIE['tipo_utente']) && $_COOKIE['tipo_utente']!="alumno"){
      header("location: ../../GUISito.php#s"); 
      }
    ?>
	
	
 
 <?php 
 if(!isset($_POST['valore']){
 			header("location: ../GUISito.php#s"); 
      }
 $path="../Application/".basename($_SERVER['PHP_SELF'])
 setcookie("file",, time()+3600);
 if($_POST['valore']==1){
              $immagine = "../Docente/uploads/".$_COOKIE['id_utente'].".jpg";
              echo "<a href='JavaScript:openWindow()' ><img src=$immagine alt='BO'  height='100' width='100' style = 'float : left' onerror=this.src='../images/userpic.gif'></img></a>";
              }
              
 if($_POST['valore']==2){
 			 setcookie("valore","NOME= , ID= ".$_COOKIE['id_utente']."", time()+3600);
  			 setcookie("scelta","visualizza", time()+3600);
			 header("../Storage/Storage.php");
			 }
			 
  if($_POST['valore']==3){
 			 setcookie("valore","COGNOME= , ID= ".$_COOKIE['id_utente']."", time()+3600);
  			 setcookie("scelta","visualizza", time()+3600);
			 header("../Storage/Storage.php");
			 }
			 
 if($_POST['valore']==0){
 		
 			$row= explode(",",$_COOKIE['risultato']);
			while()
 			echo"";
 			}

 ?>
<?php
			
			
			if(isset($_POST['valore'])){
			$cf = $_COOKIE['Doc'];
			$query = "DELETE FROM evento where ID = '$cf'";
			mysql_query($query);
			echo '<script type="text/javascript">window.location = "loggato/GUIEventi.php#s";alert("L\'evento è stato cancellato"); </script>';				
			}else{
				if(isset($_COOKIE['Doc'])){
					$cf = $_COOKIE['Doc'];
					$query = "SELECT * FROM evento WHERE ID = '$cf' && DOCENTE='$id'";
					$nomeAlumno = mysql_query($query);				
					
  					if($nomeCognome = mysql_fetch_array($nomeAlumno)){
            echo "<table>";
  					echo "<form  method='post' action='GUICancellaEvento.php'>
  					<table><tr><td>ID </td><td>Nome evento</td><td>Data evento</td><td>Descrizione</td></tr>
  					<tr><td><input type='hidden' name='valore' value='0' /><p>".$nomeCognome[0]."</td><td>".$nomeCognome[1]."</td><td>".$nomeCognome[2]."</td><td>".$nomeCognome[3]."</td></tr>
  					<tr><td><input type='submit' id='submit'  value='cancella' /></td></tr>
  					</table></form>";
           }
           else{
            echo '<script type="text/javascript">window.location = "GUICercaEvento.php#s";alert("ID non valido:Inserire un ID associato ad un evento inserito dal Docente loggato!")</script>';
          }
				}
			  }
			?>