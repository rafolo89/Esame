
	
	<?php
	
			if($_GET['valore']==0){
				
					$i=1;
					$row= explode("," , $_COOKIE['b']);
					//setcookie("b","ciao",time()+3600,"/Alumni/");
					$stringa= "<div class='article'><h2><span>Esperienze alumni</span></h2>";
					while ($i<count($row))
					{	
							 $stringa= $stringa . "							 
							 <div class='clr'></div>
							 <div class='img'><img src='../images/img1.jpg' width='177' height='213' alt='' class='fl' /></div>
							 <div class='post_content'>
							 <form method='post' action='GUIVisualizzaEsperienza.php#s'>
							 <p>Esperienza di " . $row[$i] . " " . $row[$i+1] . "</p>
							 <input type='hidden' name='valore' value= " . $row[$i+2] ." />
							 <p class='spec'><input  id='submit' type='submit' value='Leggi' /></p>
							 </form>
							 </div>
							 <div class='clr'></div>";
							 $i=$i+3;
						
					}
				    setcookie("tipo_utente","alumno" , time()-1, "/Alumni/");

					echo $stringa;
			}

		 
              
			if($_GET['valore']!='0'){
				
				 
				 setcookie("tipo_utente","alumno" , time()+3600, "/Alumni/");
				 setcookie("tipo","NOME= Orsi, COGNOME= We, ID= 2" , time()+3600, "/Alumni/");
				 setcookie("valore","visualizza", time()+3600, "/Alumni/");
				 $u=explode(" " , $_GET['valore']);
				 if(count($u)==2){
					 
					setcookie("where"," WHERE NOME= '" . $u[0] . "' || COGNOME= '" . $u[1] . "' ", time()+3600, "/Alumni/");
				 }
				 else{
					 
					 setcookie("where"," WHERE NOME= '" . $u[0] . "' || COGNOME= '" . $u[0] . "' ", time()+3600, "/Alumni/");

				 }
				 header("Location: ../Storage/Storage.php");
				
			 }
			 
		

	
	
	

							

			?>