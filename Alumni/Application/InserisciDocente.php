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
              $immagine = "uploads/".$_COOKIE['id_utente'].".jpg";
              echo "<a href='JavaScript:openWindow()' ><img src=$immagine alt='BO'  height='100' width='100' style = 'float : left' onerror=this.src='../../images/userpic.gif'></img></a>";
              
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
	  
		if(isset($a)){		
		$numero=0;
		
		
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
		$query= "INSERT INTO docente(NOME, COGNOME,DATA_DI_NASCITA,LUOGO_DI_NASCITA,CF,EMAIL,ANNO_DI_LAUREA,PW) VALUES ('$a','$b','$c','$d','$e','$f','$g','$i') ";
		mysql_query($query);
				if(!(mail($f, "Registrazione avvenuta con successo", "Ti ringraziamo per esserti registrato ad AlumniUnisa. Le tue credenziali per l'accesso sono:  ID = ".$e." & password :".$i." ", 'From: alumniunisa@outlook.it'))){
                echo "<script type='text/javascript'>alert('Email non inviata per problemi tecnici!')</script>";
             }
           
	  	echo '<script type="text/javascript">alert("Il docente è stato inserito nel sistema"); </script>';
	  	
		$nome=null;
		for($m=0; $m<strlen($h); $m++){
			$controllo=null;
			$controllo=substr($h,$m,1);
			if($controllo==","){
				$query= "insert into corso(NOME_CORSO,DOCENTE) values ('$nome','$e') ";
				mysql_query($query);
				$nome=null;
				$m++;
			}
				
			$nome=$nome.$controllo;
			
		}
		if($nome!=null){
		$query= "insert into Corso(NOME_CORSO,DOCENTE) values ('$nome','$e') ";
		mysql_query($query);}
	
	  	
	  }}
		
	  
	  ?>