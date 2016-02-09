<?php

	if(isset($_COOKIE['valore']) && isset($_COOKIE['tipo_utente']) && isset($_COOKIE['file']) && isset($_COOKIE['scelta'])) {
	
		/* $_COOKIE['valore']-->il contenuto della stringa deve essere essere nella forma nome = "francesco" (separata da uno spazio )*/
		$tipo= explode(' ',implode (explode('=',implode (explode(',' ,$_COOKIE['valore'])))));
		
		
		
		
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "my_alumniunisa";
		
		
		/* connessione al database */
		$conn = new mysqli($servername, $username, $password, $dbname);
		// verifica connessione
		if ($conn->connect_error) {
			die("Connessione fallita: " . $conn->connect_error);
		} 
		
		
		
		
		
		
		
		
	

		/* insert */
		public function insert(){
			
			$i=1;
			$sql = "INSERT INTO '$_COOKIE['tipo_utente']' VALUES ('";
			while($i<= count($tipo)){
				$sql= $sql . $tipo[$i]."'";
				$i=$i+2;
			}
			$sql = $sql . ")";
			
			$conn->query($sql);
			setcookie("valore", 0 , time()+3600);
			setcookie("risultato","1inserimento avvenuto con successo", time()+3600);
			header($_COOKIE['file']);
		}
		
		/*delete */
		public function remove(){
		
			if($_COOKIE['tipo_utente']=='docente'){
			
			$sql = "DELETE FROM '$_COOKIE['tipo_utente']' WHERE CF= '$tipo[count($tipo)-1]' ";
			}
			else if($_COOKIE['tipo_utente']=='esperienza'){
			
			
				$sql = "DELETE FROM '$_COOKIE['tipo_utente']' WHERE ALUMNO='$tipo[count($tipo)-1]' ";
			
			}
			else{
				$sql = "DELETE FROM '$_COOKIE['tipo_utente']' WHERE ID='$tipo[count($tipo)-1]' ";
			}
		
			$conn->query($sql);
			setcookie("valore", 0 , time()+3600);
			setcookie("risultato","1cancellazione avvenuta con successo", time()+3600);
			header($_COOKIE['file']);			
		
		}
		
		/*update*/
		public function update(){
			
				$i=0;
				$sql ="UPDATE '$_COOKIE['tipo_utente']'  SET ";
				while($i<count($tipo-2)){
					$sql= $sql . "'". $tipo[$i] . "'= '" . $tipo[$i+1] . "'";
					$i=$i+2;
				}
				$sql = $sql . "WHERE";
				
				
					
				$sql = $sql . $tipo[i] . "=" . $tipo[i+1] . " \" ";
					
			
				
				$conn->query($sql);
				setcookie("valore", 0 , time()+3600);
				setcookie("risultato","1modifica avvenuta con successo", time()+3600);
				header($_COOKIE['file']);
							
		
		}
		
		/* select*/
		public function visualizza(){
		
			$i=0;
			$sql = "SELECT ";
			while($i<= count($tipo)){
				$sql= $sql . "'" $tipo[$i]."'";
				$i=$i+2;
			}
			
			$sql = $sql . "FROM" . "'$_COOKIE['tipo_utente']'";
			$sql = $sql . "WHERE" . $tipo[i] . "=" . $tipo[i+1] . " \" ";
			
				$row=$conn->query($sql);	
				$stringa="";	
				while($a=$row->fetch_row()){
				$stringa=$stringa . $a;
				}

			setcookie("valore", 0 , time()+3600);
			setcookie("risultato",$stringa, time()+3600);
			header($_COOKIE['file']); 
			
			}
		
	}else{
		
		// se non vengono settati tutti i cookie, quindi se l'utente non immette tutti i dati
		// viene reindirizzato alla pagina iniziale
		header("Presentation/GUISito.php");
	}
	
	switch($_COOKIE['scelta']){
			
			case "insert" : 
				insert();
				break;
			case "remove" :
				remove();
				break;
			case "update":
				update();
				break;
			case "visualizza":
				visualizza();
				break;
			
		}
		


?>