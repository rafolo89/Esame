<?php 
       if (!isset($_COOKIE['id_utente']) && !isset($_COOKIE['tipo_utente']) && $_COOKIE['tipo_utente']!="alumno"){
      header("location: ../../GUISito.php#s"); 
      }
    ?>
	
	<?php 
              $immagine = "../GUI_AO/uploads/".$_COOKIE['id_utente'].".jpg";
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
			 
			 <?php echo $row[1]; ?>
			 
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