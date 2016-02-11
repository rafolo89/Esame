<?php

		if(isset($_COOKIE['tipo'])){
			// $_COOKIE['tipo'] è il contenuto della stringa e deve essere nella forma "evento= ciqo, order= kjhk" (separata da uno spazio )
			$tipo= explode(' ',implode (explode('=',implode (explode(',' ,$_COOKIE['tipo'])))));
		
		}
	    $entita= explode (',',$_COOKIE['tipo_utente']);
		if(count($entita)==2){
		setcookie("tipo_utente",$entita[1],time()+3600, "/Alumni/");
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
			header("Location: ../GUISito.php#s ");
			
		} 
		
		switch($_COOKIE['valore']){
			
			case "visualizza": 
				visualizza($tipo,$conn,$entita);
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
			$sql = "INSERT INTO".$entita[0]."(";
			$string="('";
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
				
				switch($_COOKIE['tipo_utente']){
				
				case "docente": setcookie("tipo_utente",'amministratore',time()+3600, "/Alumni/");
				case "evento":  setcookie("tipo_utente",'docente',time()+3600, "/Alumni/");
				case "esperienza": setcookie("tipo_utente","alumno",time()+3600, "/Alumni/");
			
			}
							
		
		}
		
		/* select*/
		 function visualizza($tipo, $conn,$entita){
		
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
			
			$sql = $sql . "FROM ".$entita[0];
			 if(isset ($_COOKIE['where'])) {
			     $sql=$sql.$_COOKIE['where'];
				 }
				 else
				 {
				 
			$sql = $sql ." WHERE ". $tipo[$i-2] . "='" . $tipo[$i-1] . "' ";
			}
				
				$row=mysqli_query($conn,$sql);	
				$stringa=" ";	
				while($a=mysqli_fetch_row($row)){
					$i = 0;
					while($i<count($tipo)/2){
						$stringa=$stringa .",". $a[$i];
						$i++;
					}
				}
			   setcookie("b", $stringa , time()+3600, "/Alumni/");
			    switch ($_COOKIE['tipo_utente']){
				
				    case "docente":
				        break;
				
					case "amministratore":
				        break;
				
					case "alumno":
				         break;
				
					case "moderatore":
				          break;
				
				 default:
					   setcookie("tipo_utente","ciao",time()-1, "/Alumni/");
				          break;
				
				}
				
			
			
		}
?>