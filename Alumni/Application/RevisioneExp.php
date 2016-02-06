 <?php 
 			 if (!isset($_COOKIE['id_utente']) && !isset($_COOKIE['tipo_utente']) && $_COOKIE['tipo_utente']!="alumno"){
 			 	header("location: ../GUISito.php#s"); }
 			 	
 			 $id = $_COOKIE['id_utente'];
 			 $tipo = $_COOKIE['tipo_utente'];
  			 require_once("../GUI_MG/connessione.php");
			 if(isset($_POST['valore'])){
			 	$valore=$_POST['valore'];
			 	$va=$_POST['valore2'];
			 	$query2="select EMAIL from alumno where ID='$valore'";
			 	$citto=mysql_query($query2); 
			 	$gg=mysql_fetch_array($citto, MYSQL_NUM);
				$g=$gg[0];
			 	if($va==0){
			 		$query="UPDATE esperienza SET MODERATORE='$id' where ALUMNO='$valore'";
			 		mysql_query($query); 
			 		echo "<script type='text/javascript'>alert('L\esperienza è stata caricata nel sito, è stata inviata un email di notifica all'alumno'); </script>";
			 		 if(!(mail($g, "Caricamento esperienza", "L'esperienza è stata caricata nel sistema ", 'From: alumniunisa@outlook.it'))){
                    echo "<script type='text/javascript'>alert('Email non inviata per problemi tecnici!')</script>";
                  }				

			 	}else{
			 		$query="DELETE FROM esperienza WHERE ALUMNO='$valore'";
			 		mysql_query($query);
			 		echo "<script type='text/javascript'>alert('L\esperienza è stata cancellata dal sistema, è stata inviata un email di notifica all'alumno'); </script>";	
			 		if(!(mail($g, "Caricamento esperienza", "L'esperienza è stata caricata nel sistema ", 'From: alumniunisa@outlook.it'))){
                    echo "<script type='text/javascript'>alert('Email non inviata per problemi tecnici!')</script>";
                  }					

			 	}
			 
			 }
 			
 			?>

			 
 <?php 
 if(!isset($_POST['valore']){
      header("location: ../GUISito.php#s"); 
      }
 $path="../Application/".basename($_SERVER['PHP_SELF'])
 setcookie("file",, time()+3600);
 if($_POST['valore']==1){
              $immagine = "../Moderatore/uploads/".$_COOKIE['id_utente'].".jpg";
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
            $query="select ALUMNO, DESCRIZIONE from esperienza where MODERATORE IS NULL ";
			$q1=mysql_query($query);
			while($row = mysql_fetch_array($q1, MYSQL_NUM)){
				$query="select NOME, COGNOME from alumno where ID='$row[0]' ";
				$q=mysql_query($query);
				$r = mysql_fetch_array($q, MYSQL_NUM);
            	echo "<form method='post' action='GUIRevisioneEsperienza.php#s'>
            	<tr><td><br><br><br><strong>".$r[0]." ".$r[1]."</td><tr>
            	<tr><td>".$row[1]."</strong></td></tr>
            	<input type='hidden' name='valore' value='".$row[0]."' />
            	<input type='hidden' name='valore2' value='0' />
            	<tr><td><input type='submit' id='submit'  value='Carica' style='width: 105px' /></form></td>
            	<td><form method='post' action='GUIRevisioneEsperienza.php#s'>
            	<input type='hidden' name='valore' value='".$row[0]."' />
            	<input type='hidden' name='valore2' value='1' />
				<input type='submit' id='submit'  value='Cancella' style='width: 105px' /> </form></td>
            	</tr>";
         	}
            ?>