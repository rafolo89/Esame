<?php

                      if($_COOKIE['valore']== 1){
				$query = "SELECT alumno, moderatore FROM esperienza  WHERE moderatore IS NOT NULL ORDER BY esperienza.moderatore DESC";
				$alumni = mysql_query($query);
				
			$i=0;
			echo "<div class='article'><h2><span>Esperienze alumni</span></h2>";
				while ($alumno = mysql_fetch_array($alumni))
				{	
					$i++;
					$id=$alumno[0];
					$query2 = "SELECT nome, cognome, ID FROM alumno  WHERE ID = '$id'";
					$nomeAlumno = mysql_fetch_array(mysql_query($query2));
					$id=$alumno[1];
					$query3 = "SELECT nome, cognome FROM moderatore WHERE ID = '$id'";
					$moderatore = mysql_fetch_array(mysql_query($query3));
						if(($i==1)||($id!=$idM)){
						 $idM=$id;
						 echo "<p class='infopost'>Approvate dal moderatore <a href='#'>
						 $moderatore[0] $moderatore[1]</a> &nbsp;&nbsp;&nbsp;&nbsp; </p>
						 <div class='clr'></div>
       					 <div class='img'><img src='../images/storia.jpg' width='177' height='213' alt='' class='fl' /></div>
       			    	 <div class='post_content'>
           				 <form method='post' action='../GUI_CP/GUIVisualizzaEsperienza.php#s'>
            			 <p>Esperienza di $nomeAlumno[0] $nomeAlumno[1]</p>
            			 <input type='hidden' name='valore' value=$nomeAlumno[2] />
            			 <p class='spec'><input id='submit' type='submit' value='Leggi' /></p></form>
          			   	 </div>
         				 <div class='clr'></div>";
         			}else{
             			 echo "<div class='clr'></div>
       	   				 <div class='img'><img src='../images/storia.jpg' width='177' height='213' alt='' class='fl' /></div>
       	   				 <div class='post_content'>
       	   				 <form method='post' action='../GUI_CP/GUIVisualizzaEsperienza.php#s'>
            			 <p>Esperienza di $nomeAlumno[0] $nomeAlumno[1]</p>
            			 <input type='hidden' name='valore' value=$nomeAlumno[2] />
            			 <p class='spec'><input  id='submit' type='submit' value='Leggi' /></p>
            			 </form>
          				 </div>
        				 <div class='clr'></div>";
					}	
				}			
             }
			?>