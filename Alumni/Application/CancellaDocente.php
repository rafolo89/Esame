<?php 
       if (!isset($_COOKIE['id_utente']) && !isset($_COOKIE['tipo_utente']) && $_COOKIE['tipo_utente']!="alumno"){
      header("location: ../GUISito.php#s"); 
      }
    ?>
	
	 
 <?php 
 if(!isset($_POST['valore']){
 			header("location: ../GUISito.php#s"); 
      }
 $path="../Application/".basename($_SERVER['PHP_SELF'])
 setcookie("file",, time()+3600);
 if($_POST['valore']==1){
              $immagine = "../Amministratore/uploads/".$_COOKIE['id_utente'].".jpg";
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
		
 			$row= $_COOKIE['risultato'];
			echo $row;
?>
			 
			 <?php
			
			
			if(isset($_POST['valore'])){
			$cf = $_COOKIE['Doc'];
			$query = "DELETE FROM corso where DOCENTE = '$cf'";
			mysql_query($query);
			$query = "DELETE FROM evento where DOCENTE = '$cf'";
			mysql_query($query);	
			$query2="select EMAIL from docente where CF='$cf'";
			$citto=mysql_query($query2); 
			$gg=mysql_fetch_array($citto, MYSQL_NUM);
		    $g=$gg[0];

			if(!(mail($g, "Cancellazione Alumniunisa", "Sei stato cancellato dal sistema AlumniUnisa ", 'From: alumniunisa@outlook.it'))){
                echo "<script type='text/javascript'>alert('Email non inviata per problemi tecnici!')</script>";
             }

			$query = "DELETE FROM docente where CF = '$cf'";
			mysql_query($query);
			echo "<script type='text/javascript'>alert('Il docente è stato cancellato dal database'); </script>";				
			}else{
				if(isset($_COOKIE['Doc'])){
					$cf = $_COOKIE['Doc'];
					$query = "SELECT NOME, COGNOME FROM docente WHERE CF = '$cf'";
					$nomeAlumno = mysql_query($query);				
					echo "<table>";
					$nomeCognome = mysql_fetch_array($nomeAlumno);
					echo "<form  method='post' action='GUICancellaDocente.php'>
					<table><tr><td>NOME </td><td>COGNOME</td><td>CF</td><td>DATA_DI_NASCITA</td><td>LUOGO_DI_NASCITA</td><td>ANNO_DI_LAUREA</td><td>EMAIL</td><td>PW</td></tr>
					<tr><td><input type='hidden' name='valore' value='0' /><p>".$nomeCognome[0]."</td><td>".$nomeCognome[1]."</td></tr>
					<tr><td><input type='submit' id='submit'  value='cancella' /></td></tr>
					</table></form>";
				}
			  }
			?>