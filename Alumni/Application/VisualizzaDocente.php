<?php 
       if (!isset($_COOKIE['id_utente']) && !isset($_COOKIE['tipo_utente']) && $_COOKIE['tipo_utente']!="alumno"){
      header("location: ../GUISito.php#s"); 
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
			if(isset($_COOKIE['Doc'])){
					$cf = $_COOKIE['Doc'];
					$query = "SELECT * FROM docente WHERE CF = '$cf'";
					$nomeAlumno = mysql_query($query);				
					echo "<table>";
					$nomeCognome = mysql_fetch_array($nomeAlumno);
					echo "<table><tr><td>NOME </td><td>COGNOME</td><td>CF</td><td>DATA_DI_NASCITA</td><td>LUOGO_DI_NASCITA</td><td>ANNO_DI_LAUREA</td><td>EMAIL</td><td>PW</td></tr><tr><td><p>".$nomeCognome[0]."</td><td>".$nomeCognome[1]."</td><td>".$nomeCognome[2]."</td><td>".$nomeCognome[3]."</td><td>".$nomeCognome[4]."</td><td>".$nomeCognome[5]."</td><td>".$nomeCognome[6]."</td><td>".$nomeCognome[7]."</td><td></tr>";
					echo "</table>";				
			}
			?>