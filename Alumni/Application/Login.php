<?php				
			
			function query2($stringa,$b){
			
			$query2="select PW from $stringa where PW='$b' ";
			
			return $query2;
			}	
		
			
			function query($stringa,$a,$nomecampo){
				$query="select $nomecampo from $stringa where $nomecampo='$a' ";
				return $query;
			}
			
			if(isset($_POST['username'])){
				$a= $_POST['username'];
				$b= $_POST['password'];
				$va=trim($_POST['valore']);
				require_once("../GUI_MG/connessione.php");
				if($va=="docente"){
					$nomecampo="CF";
				}else{			 													
					$nomecampo="ID";									
					}
						$q=mysql_query(query($va,$a,$nomecampo));
						$row = mysql_fetch_array($q, MYSQL_NUM);
						if($row[0]){
							$q=mysql_query(query2($va,$b));
							$row = mysql_fetch_array($q, MYSQL_NUM);
							if($row[0]){
								setcookie("id_utente", "$a",time()+36000, "/Alumni/");
								setcookie("tipo_utente", "$va",time()+36000, "/Alumni/");
								switch ($va) {
								  case 'alumno':
       								header("location: ../GUI_CP/GUIAlumno.php#s"); 
       								break;
  								  case 'docente':
									header("location: ../GUI_MG/GUIDocente.php#s"); 
     								break;
    							  case 'amministratore':
									header("location: GUIAmministratore.php#s"); 
									break;
								  case 'moderatore':
									header("location: ../GUI_LC/GUIModeratore.php#s"); 
									break;}

								}else{
									echo "<script type='text/javascript'>alert('errore inserimento password') </script>";}				
							}else{
								echo "<script type='text/javascript'>alert('errore inserimento id') </script>";} 	
			} 
			?>
			
			<?php echo $_POST['valore']; ?>