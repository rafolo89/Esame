<?php
										require_once("../GUI_MG/connessione.php");

				$query = "SELECT NOME_EVENTO, DESCRIZIONE, DATA_EVENTO, ID FROM evento ORDER BY evento.DATA_EVENTO DESC  ";
				$gruppi = mysql_query($query);
				
			$i=0;
			echo "<div class='article'><h2><span>Eventi</span></h2>";
				while ($row = mysql_fetch_array($gruppi))
				{	
						 $Result =  substr($row[1], 0, 50);
						 $Result =  $Result."..";
				   		 echo "					
						 <div class='clr'></div>
       					 <p><h2><strong> $row[0]</strong></h2>$row[2] </p>
       					 <div class='img'><img src='../images/evento.jpg' width='210' height='140' alt='' class='fl' /></div>
       			    	 <div class='clr'></div>
       			    	  <input type='hidden' name='id' value='$row[0]' />

       			    	 <div class='post_content'>         				 
           				 <p>$Result </p>
           				 <div class='clr'></div>
           				 <p class='spec'> <form name='visualizzaeventi' method='post' action='../GUI_AO/GUIVisualizzaEvento.php'>
   			 			 <input type='hidden' name='valore' value='$row[3]' />
   			 			 <input type='submit' id='submit'  value='Leggi' />
				</form>
				</p>
          			   	 </div>
         				 <div class='clr'></div>";
						
				}			

			?>