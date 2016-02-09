<?php

		
		// $_COOKIE['valore'] il contenuto della stringa deve essere nella forma nome = "francesco" (separata da uno spazio )
		$tipo= explode(' ',implode (explode('=',implode (explode(',' ,$_COOKIE['tipo'])))));
		
		
		
		
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "alumniunisa";
		
		
		/* connessione al database */
		$conn = new mysqli($servername, $username, $password, $dbname);
		// verifica connessione
		if ($conn->connect_error) {

			setcookie("valore", 0 , time()+3600, "/Alumni/");
			setcookie("risultato","1Connessione fallita", time()+3600, "/Alumni/");
			header("Location: ". $_COOKIE['file']);
			
		} 
		
		
		
		
		visualizza($tipo,$conn);
		
		
		
		
	

		/* insert */
		 function insert(){
			
			$i=1;
			$sql = "INSERT INTO" . $_COOKIE['tipo_utente']." VALUES ('";
			while($i<= count($tipo)){
				$sql= $sql . $tipo[$i]."'";
				$i=$i+2;
			}
			$sql = $sql . ")";
			
			$conn->query($sql);
			setcookie("valore", 0 , time()+3600,"/Alumni/");
			setcookie("risultato","1inserimento avvenuto con successo", time()+3600, "/Alumni/");
			header($_COOKIE['file']);
		}
		
		/*delete */
		function remove(){
		
			if($_COOKIE['tipo_utente']=='docente'){
			
			$sql = "DELETE FROM" . $_COOKIE['tipo_utente']." WHERE CF= ". $tipo[count($tipo)-1]." ";
			}
			else if($_COOKIE['tipo_utente']=='esperienza'){
			
			
				$sql = "DELETE FROM".  $_COOKIE['tipo_utente']." WHERE ALUMNO=". $tipo[count($tipo)-1]." ";
			
			}
			else{
				$sql = "DELETE FROM". $_COOKIE['tipo_utente']. "WHERE ID=". $tipo[count($tipo)-1]." ";
			}
		
			$conn->query($sql);
			setcookie("valore", 0 , time()+3600, "/Alumni/");
			setcookie("risultato","1cancellazione avvenuta con successo", time()+3600, "/Alumni/");
			header($_COOKIE['file']);			
		
		}
		
		/*update*/
		function update(){
			
				$i=0;
				$sql ="UPDATE ". $_COOKIE['tipo_utente']. " SET ";
				while($i<count($tipo-2)){
					$sql= $sql . "'". $tipo[$i] . "'= '" . $tipo[$i+1] . "'";
					$i=$i+2;
				}
				$sql = $sql . "WHERE";
				
				
					
				$sql = $sql . $tipo[i] . "=" . $tipo[i+1] . " \" ";
					
			
				
				$conn->query($sql);
				setcookie("valore", 0 , time()+3600, "/Alumni/");
				setcookie("risultato","1modifica avvenuta con successo", time()+3600, "/Alumni/");
				header($_COOKIE['file']);
							
		
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
			//setcookie("valore", 0 , time()+3600, "/Alumni/");
			
			//header("Location:". "&#34;". $_COOKIE['file'] ."&#34;");
			
		}
		
	

		
	


?>