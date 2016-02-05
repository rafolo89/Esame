 
<?php
     
        if(isset($_POST["inputnome"])){
            $a = $_POST["inputnome"];
            $b = $_POST["inputcognome"];
            $c = $_POST["inputdata"];
            $d = $_POST["inputluogo"];
            $e = $_POST["inputlavoro"];
            $f = $_POST["inputanno"];
            $g = $_POST["inputemail"];
            $h = $_POST["inputpassword"];
            $i = $_POST["inputcpw"];

      }   
    ?>
     <?php echo $_POST['valore']; ?>
	 
	 <?php  
			if(isset($a)){
			$numero=0;
				if((strlen($a) < 4) || (strlen($a) >11 )) {
					$numero++;
      				echo "<script language='JavaScript' type='text/javascript'> document.getElementById('tdnome').innerHTML='Il campo nome deve contenere una stringa compresa tra 4 e 11 caratteri';</script>";           		 
           		 }
           		 if((strlen($b) < 4) || (strlen($b) >11 )) {
           		 	 $numero++;
     				 echo "<script language='JavaScript' type='text/javascript'> document.getElementById('tdcognome').innerHTML='Il campo cognome deve contenere una stringa compresa tra 4 e 11 caratteri';</script>";           		 
            	 }
           	 	 if(strlen($c) > 11) {
           	 	 	$numero++;
     				 echo "<script language='JavaScript' type='text/javascript'> document.getElementById('tdandiamo').innerHTML='Il campo data deve contenere 11 caratteri';</script>";           		 
            	 }
             	 if((strlen($d) < 4) || (strlen($d) >21 )) {
             	 	  $numero++;
     		 		  echo "<script language='JavaScript' type='text/javascript'> document.getElementById('tdluogo').innerHTML='Il campo luogo deve contenere una stringa compresa tra 4 e 21 caratteri';</script>";           		 
            	 }
            	 if((strlen($e) < 4) || (strlen($e) >21 )) {
            	 	  $numero++;
     		 		  echo "<script language='JavaScript' type='text/javascript'> document.getElementById('tdlavoro').innerHTML='Il campo lavoro deve contenere una stringa compresa tra 4 e 21 caratteri';</script>";           		 
            	 }
            	 if(strlen($f) != 4) {
            	  	  $numero++;
     		 		  echo "<script language='JavaScript' type='text/javascript'> document.getElementById('tdanno').innerHTML='Il campo anno deve contenere una stringa cnella forma AAAA ';</script>";           		 
            	 }
            	 if(!(preg_match('/@/i', $g))) {
            	  	  $numero++;
     		 		  echo "<script language='JavaScript' type='text/javascript'> document.getElementById('tdemail').innerHTML='Il campo e-mail non è valido';</script>";           		 
            	 }
            	 if((strlen($h)> 9) || (strlen($h)<4)) {
            	  	  $numero++;
     		 		  echo "<script language='JavaScript' type='text/javascript'> document.getElementById('tdpassword').innerHTML='Il campo password deve contenere massimo 9 e minimo 4 caratteri';</script>";           		 
            	 }
            	 if( (strlen($i)> 9) || (strlen($i)<4) || ($h != $i) ) {
            	  	  $numero++;
   		 		      echo "<script language='JavaScript' type='text/javascript'> document.getElementById('tdcfw').innerHTML='Le password non corrispondono';</script>";           		 
            	 }
            	 if($numero==0){
            	       
           			  require_once("../GUI_MG/connessione.php");
            		  mysql_query("INSERT INTO alumno(NOME, COGNOME, DATA_DI_NASCITA,LUOGO_DI_NASCITA, ANNO_DI_LAUREA, LAVORO, EMAIL, PW) VALUES('$a','$b','$c','$d','$f','$e','$g','$h')");
                      echo "<script type='text/javascript'>alert('Sei stato inserito nel database ti abbiamo inviato un email contenente i dati per l accesso.'); </script>";	
                      $IDMail = mysqli_insert_id(mysqli_connect("localhost", "root", "", "my_alumniunisa");
                      if(!(mail($g, "Registrazione avvenuta con successo", "Gentile utente,\nti ringraziamo per esserti registrato ad AlumniUnisa. Le tue credenziali per l'accesso sono: \n\n\"ID\" = '$IDMail' \n\"password\" = '$h' \n\nCordiali Saluti AlumniUnisa."))){
                      	echo "<script type='text/javascript'>alert('Email non inviata per problemi tecnici!')</script>";
                  	  }
                  }
				  echo"<div id='registra'></div>";
            	}
        	?>