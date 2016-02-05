<?php
										require_once("../GUI_MG/connessione.php");

				$query = "SELECT NOMEGRUPPO, DESCRIZIONE FROM gruppo ";
				$gruppi = mysql_query($query);
				
			$i=0;
			echo "<div class='article'><h2><span>Gruppi</span></h2>";
				while ($row = mysql_fetch_array($gruppi))
				{	
							echo "					
						 <div class='clr'></div>
       					 <div class='img'><img src='../images/gruppo.jpg' width='177' height='213' alt='' class='fl' /></div>
       			    	 <div class='post_content'>
           				 <p> Nome gruppo<strong> $row[0]</strong> </p>
           				 <div class='clr'></div>
           				 <p>$row[1] </p>
           				 <div class='clr'></div>
           				 <p class='spec'> <form name='visualizzagruppo.$row[0]' method='post' action='../GUI_CP/GUIVisualizzaGruppo.php#s'>
   			 			 <input type='hidden' name='valore' value='$row[0]' />
   			 			 <a class='rm' href='javascript:document.forms[&#96;visualizzagruppo.$row[0]&#96;].submit()'>
				Leggi</a>
				</form>
				</p>
          			   	 </div>
         				 <div class='clr'></div>";
						
				}			

			?>