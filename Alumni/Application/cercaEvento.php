 <?php
	  
     
       if (!isset($_COOKIE['id_utente']) && !isset($_COOKIE['tipo_utente']) && $_COOKIE['tipo_utente']!="alumno"){
      header("location: ../../GUISito.php#s"); 
      }
    

		if(isset($_POST['codiceevento']))
		{
					   	$ce = $_POST['codiceevento'];
              
						$contro=$_POST['docente'];
		  				if($contro==0) { 	
		  					setcookie("Doc", "$ce",time()+3600, "/Alumni/");
							header('Location:GUIModificaEvento.php');
		  				}else{
		  					if($contro!=2){
		  						setcookie("Doc", "$ce",time()+3600, "/Alumni/");
								header('Location:GUICancellaEvento.php');

							}else{
								$controllo=2;		
						}
				
		}}
	?>
	
	  
 <?php 
 if(!isset($_POST['valore']){
 			header("location: ../GUISito.php#s"); 
      }
 $path="../Application/".basename($_SERVER['PHP_SELF'])
 setcookie("file",, time()+3600);
 if($_POST['valore']==1){
              $immagine = "../Docente/uploads/".$_COOKIE['id_utente'].".jpg";
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
 		
 			$row= explode(",",$_COOKIE['risultato']);
			while()
 			echo"";
 			}

 ?>
			 <?php 
          if(isset($controllo)){
          	 echo"  <table border='0' cellspacing='5' cellpadding='5'>";
          			$query = "SELECT NOME_EVENTO,DATA_EVENTO FROM evento WHERE ID = '$ce'";
					$eventi= mysql_query($query);				
					while($evento = mysql_fetch_array($eventi))
					{
						echo "<form  method='post' action='GUIVisualizzaEvento.php'><tr><td><input type='hidden' name='valore' value=$ce /><p>".$evento[0]." ".$evento[1]."</p></td></tr><tr><td><input type='submit'  id='submit' value='Leggi'></td></tr></form>";
						
					}					
					echo "</table> ";
          }else{
          echo"
            <form  method='post' action='GUICercaEvento.php#s'>
			<table border='0' cellspacing='5' cellpadding='5'>
			<tr>
			<td>Codice evento:</td><td><input type='text' name='codiceevento' size='35' maxlength='40' value='' required autofocus ></td><td id='cf' style=' color:red; height: 37px'></td>";
 			
 			
 		if(isset($_POST['docente'])){
 			
 				$abba=$_POST['docente'];
 				if($abba=="0"){
 					echo "<input type='hidden' name='docente' value='0' />";
 					}else{
 						if ($abba=="1"){
 							echo "<input type='hidden' name='docente' value='1' />";
 							}else{
 								echo "<input type='hidden' name='docente' value='2' />";
 							}
 						}
 				}	
			

			echo" </tr><tr>
			<td></td><td><input type='submit'  id='submit' value='Cerca'></td>
			</tr></table>   </form>";
			}
			?>