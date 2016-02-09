<?php

		if(isset($_COOKIE['tipo'])){
			// $_COOKIE['tipo'] è il contenuto della stringa e deve essere nella forma nome = "francesco" (separata da uno spazio )
			$tipo= explode(' ',implode (explode('=',implode (explode(',' ,$_COOKIE['tipo'])))));
		
		}
		
		
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "alumniunisa";
		
		
		/* connessione al database */
		$conn = new mysqli($servername, $username, $password, $dbname);
		// verifica connessione
		if ($conn->connect_error) {

			
			setcookie("risultato","1Connessione fallita", time()+3600, "/Alumni/");
			header("Location: ". $_COOKIE['file']);
			
		} 
		
		switch($_COOKIE['valore']){
			
			case "visualizza": 
				visualizza($tipo,$conn);
				break;
			case "insert":
				insert($tipo,$conn);
				break;
			case "remove":
				remove($conn);
				break;
			case "update":
				update($tipo,$conn);
				break;
			
			
		}
		
		
		


		/* insert */
		 function insert($tipo,$conn){
			
			$i=0;
			$sql = "INSERT INTO" . $_COOKIE['tipo_utente']. "(";
			$string="('"
			while($i < count($tipo)-2){
			  if($i%2==0){
				$sql= $sql . $tipo[$i].", ";
				
			  }	
			  else{
				  $string= $string . $tipo[$i] . "','";
			  }
			  $i=$i+1;
			}
			
			$sql = $sql . $tipo[$i] . ")";
			$i= $i+1;
			$string= $string . $tipo[$i] . "')";
			$sql = $sql . " VALUES " . $string;
			
			$conn->query($sql);
			
			setcookie("risultato","1inserimento avvenuto con successo", time()+3600, "/Alumni/");
			
		}
		
		/*delete */
		function remove($conn){
		
			if($_COOKIE['tipo_utente']=='docente'){
			
			$sql = "DELETE FROM" . $_COOKIE['tipo_utente']." WHERE CF= ". $tipo[count($tipo)-1]." ";
			}
			else if($_COOKIE['tipo_utente']=='esperienza'){
			
			
				$sql = "DELETE FROM".  $_COOKIE['tipo_utente']." WHERE ALUMNO= ". $tipo[count($tipo)-1]." ";
			
			}
			else{
				$sql = "DELETE FROM". $_COOKIE['tipo_utente']. "WHERE ID= ". $tipo[count($tipo)-3]." ". "AND CF= " . $tipo[count($tipo)-1]." "  ;
			}
		
			$conn->query($sql);
			
			setcookie("risultato","1cancellazione avvenuta con successo", time()+3600, "/Alumni/");
						
		
		}
		
		/*update*/
		function update($tipo,$conn){
			
				$i=0;
				$sql ="UPDATE ". $_COOKIE['tipo_utente']. " SET ";
				while($i<count($tipo)-2){
					$sql= $sql . " ". $tipo[$i] . " = '" . $tipo[$i+1] . "'";
					$i=$i+2;
				}
				$sql = $sql . " WHERE ";
				
				
					
				$sql = $sql . $tipo[i] . "=" . $tipo[i+1] . "  ";
					
			
				
				$conn->query($sql);
				
				setcookie("risultato","1modifica avvenuta con successo", time()+3600, "/Alumni/");
				
							
		
		}
		
		/* select*/
		 function visualizza($tipo, $conn){
		
			$i=0;
			$sql = "SELECT ";
			while($i< count($tipo)){
			   if($i!=count($tipo)-2){
				$sql= $sql . " " . $tipo[$i]. ",";
				
			   }
			   else{

				$sql= $sql . " " . $tipo[$i]. " ";
		           }	
			   $i=$i+2;
			}
			
			
			$sql = $sql . "FROM " . $_COOKIE['tipo_utente'] . " ";
			$sql = $sql . "WHERE " . $tipo[$i-2] . "='" . $tipo[$i-1] . "' ";
			
				
				$row=mysqli_query($conn,$sql);	
				$stringa=" ";	
				while($a=mysqli_fetch_row($row)){
					$stringa=$stringa . $a[0];
				}
			setcookie("b", $stringa , time()+3600, "/Alumni/");
			
			
		}
		
	

		
	


?>