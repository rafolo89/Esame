<?php
         //Connessione al data Base
		require_once("../GUI_MG/connessione.php");

	?>
	
	<?php
      			$i=0;
      			$cognome=$_POST['ricerca'];
      			$nome=$_POST['ricerca'];
      			while($i<strlen($nome))
      			{	
      		
      			if(substr($nome,$i,1)==" "){
      				$cognome=substr($nome,$i+1);
      				$nome=substr($nome,0,$i);
      				$i=strlen($nome);
      				}
      					$i++;

      			}
				$query2 = "SELECT nome, cognome, ID FROM alumno WHERE nome='$nome' || cognome= '$cognome'";	
				$alumni = mysql_query($query2);
				echo "<div class='article'><h2><span>Esperienze alumni</span></h2>";
				while ($alumno = mysql_fetch_array($alumni))
				{	
						 echo "
						 <div class='clr'></div>
       					 <div class='img'><img src='../images/img1.jpg' width='177' height='213' alt='' class='fl' /></div>
       			    	 <div class='post_content'>
           				 <form method='post' action='GUIVisualizzaEsperienza.php#s'>
            			 <p>Esperienza di $alumno[0] $alumno[1]</p>
            			 <input type='hidden' name='valore' value=$alumno[2] />
            			 <p class='spec'><input  id='submit' type='submit' value='Leggi' /></p>
            			 </form>
          			   	 </div>
         				 <div class='clr'></div>";
         			
				}			

			?>