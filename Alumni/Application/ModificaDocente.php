 <?php 
 			 if (!isset($_COOKIE['id_utente']) && !isset($_COOKIE['tipo_utente']) && $_COOKIE['tipo_utente']!="alumno"){
 			header("location: ../GUISito.php"); }
 			
 			if(isset($_POST["nome"])){
		$a= $_POST["nome"];
		$b= $_POST["cognome"];
		$c= $_POST["datadinascita"];
		$d= $_POST["luogodinascita"];
		$e= $_POST["codicefiscale"];
		$f= $_POST["email"];
		$g= $_POST["annoconseguimentolaurea"];
		$h= $_POST["corsitenuti"];
		$i= $_POST["password"];
		$l= $_POST["confermapassword"];
}?>

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
      		 if (isset($_POST['nome'])){
      		 if(isset($a)){
 		
		if((strlen($a) <=3) || (strlen($a) >=20 )) {
					$numero++;
      				echo "<script language='JavaScript' type='text/javascript'> document.getElementById('tdnome').innerHTML='Il campo nome deve contenere una stringa compresa tra 4 e 11 caratteri';</script>";           		 
        }
		if((strlen($b) <=2) || (strlen($b) >=20 )) {
					$numero++;
      				echo "<script language='JavaScript' type='text/javascript'> document.getElementById('tdcognome').innerHTML='Il campo cognome deve contenere una stringa compresa tra 4 e 11 caratteri';</script>";           		 
        }
		if((strlen($c))!= 10) {
					$numero++;
      				echo "<script language='JavaScript' type='text/javascript'> document.getElementById('tddata').innerHTML='Il campo data di nascita deve contenere una stringa compresa tra 4 e 11 caratteri';</script>";           	        
      				}
		if((strlen($d) <=4) || (strlen($d) >=15 )) {
					$numero++;
      				echo "<script language='JavaScript' type='text/javascript'> document.getElementById('tdnome').innerHTML='Il campo nome deve contenere una stringa compresa tra 4 e 11 caratteri';</script>";          
      				 }
		if ((strlen($e))!= 16){
					$numero++;
      				echo "<script language='JavaScript' type='text/javascript'> document.getElementById('tdnome').innerHTML='Il campo nome deve contenere una stringa compresa tra 4 e 11 caratteri';</script>";   				
        			}
		if((strlen($f) <=5) || (strlen($f) >=20 )) {
					$numero++;
      				echo "<script language='JavaScript' type='text/javascript'> document.getElementById('tdnome').innerHTML='Il campo nome deve contenere una stringa compresa tra 4 e 11 caratteri';</script>";          
      				 }
		if  ((strlen($g))!= 4){
					$numero++;
      				echo "<script language='JavaScript' type='text/javascript'> document.getElementById('tdnome').innerHTML='Il campo nome deve contenere una stringa compresa tra 4 e 11 caratteri';</script>";           
      				}
		if((strlen($h) <=5) || (strlen($h) >=50 )) {
					$numero++;
      				echo "<script language='JavaScript' type='text/javascript'> document.getElementById('tdnome').innerHTML='Il campo nome deve contenere una stringa compresa tra 4 e 11 caratteri';</script>";           
      				}
		if((strlen($i) <=8) || (strlen($i) >=15 || $l!=$i)) {
					$numero++;
      				echo "<script language='JavaScript' type='text/javascript'> document.getElementById('tdnome').innerHTML='Il campo nome deve contenere una stringa compresa tra 4 e 11 caratteri';</script>";           
      				}
		if((strlen($l) <=8) || (strlen($l) >=15 || $l!=$i)) {
					$numero++;
      				echo "<script language='JavaScript' type='text/javascript'> document.getElementById('tdnome').innerHTML='Il campo nome deve contenere una stringa compresa tra 4 e 11 caratteri';</script>";           
      				}
		if($numero==0){
		$query= "insert into Docente(NOME, COGNOME,DATA_DI_NASCITA,LUOGO_DI_NASCITA,CF,EMAIL,ANNO_DI_LAUREA,PW) values ('$a','$b','$c','$d','$e','$f','$g','$i') ";
		mysql_query($query);
		
		$nome=null;
		for($m=0; $m<strlen($h); $m++){
			$controllo=null;
			$controllo=substr($h,$m,1);
			if($controllo==","){
				$query= "insert into Corso(COD_CORSO,NOME_CORSO,DOCENTE) values ('$codcorso','$nome','$e') ";
				$codcorso++;
				mysql_query($query);
				$nome=null;
				$m++;
			}
				
			$nome=$nome.$controllo;
			
		}

		$query= "UPDATE Corso SET COD_CORSO,NOME_CORSO,DOCENTE values ('$codcorso','$nome','$e') ";
		mysql_query($query);
	  
	  }}


            		   echo "<script type='text/javascript'>alert('La tue esperienza è stata modificata  ora è soggetta ad approvazione da un moderatore,l esito ti verrà notificato via email'); </script>";				
 }
			 ?>