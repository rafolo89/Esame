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
              $immagine = "../".$_COOKIE['tipo_utente']."/uploads/".$_COOKIE['id_utente'].".jpg";
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