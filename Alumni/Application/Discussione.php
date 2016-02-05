<?php

		  			 require_once("../GUI_MG/connessione.php");

	?>
	
	<?php if(isset($_POST['valore'])){
			$accacche=$_POST['valore'];
			$ii="ID";
			$query="select ID_ATTORE, ATTORE, DESCRIZIONE, TITOLO from discussione where ID=$accacche AND TITOLO IS NOT NULL";			 
 			 $q=mysql_query($query); 
			 $contatore=0;
			 while($row = mysql_fetch_array($q, MYSQL_NUM)){
			 		 switch($row[1]){
									case 'alumno':
										$cartella='../GUI_CP';
										break;
									case 'docente':
										$cartella='../GUI_MG';
										$ii="CF";
										break;
									case 'moderatore':
										$cartella='GUI_LC';
										break;
									case 'amministratore':
										$cartella='../GUI_AO';
										break;						
								}

			 if($contatore==0){
			 	echo $row[3]."</h2>";
			 	$contatore++;
			 }
			 
			 $query2="select NOME, COGNOME from $row[1] where $ii='$row[0]'";			 
 			 $q2=mysql_query($query2);

			 $row2 = mysql_fetch_array($q2, MYSQL_NUM);
			 echo"<p class='infopost' style='height: 1px'>&nbsp;</p>
          		  <div class='post_content'>
         	 	  <h3>
						<span class='style11'><img class='gal' src='$cartella/uploads/$row[0].jpg' width='75' height='75' onerror=this.src='../images/userpic.gif'></img> </span>
				  				  <span class='style11'>".$row[2]."</span>
				  </h3>
         	 	  <h5>$row2[0] $row2[1]</h5>
            	  </div>
          		 
        	      <div class='clr'></div>";
        	      if($contatore==1){
        	      	$query="select ID_ATTORE, ATTORE, DESCRIZIONE from discussione where ID=$accacche AND TITOLO IS NULL";			 
 			 		$q=mysql_query($query); 
 			 		$contatore++;
        	      }
        	      $ii="ID";
			 	}
			 } ?>
