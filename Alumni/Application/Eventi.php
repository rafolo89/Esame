<?php
if(!isset($_GET['valore'])){
 			header("Location: ../GUISito.php#s"); 
      }


			function visualizzaEvento(){	
					$i=0;
					$row= $_COOKIE['b'];
					$row = explode(",", $row);
					$stringa= "<div class='article'><h2><span>Eventi</span></h2>";
						while ($i<(count($row)/4))
						{	
								 $Result =  substr($row[2], 0, 50);
								 $Result =  $Result."..";
						   		 $stringa= $stringa."					
								 <div class='clr'></div>
		       					 <p><h2><strong> $row[1]</strong></h2>$row[3] </p>
		       					 <div class='img'><img src='../images/evento.jpg' width='210' height='140' alt='' class='fl' /></div>
		       			    	 <div class='clr'></div>
		       			    	  <input type='hidden' name='id' value='$row[1]' />

		       			    	 <div class='post_content'>         				 
		           				 <p>$Result </p>
		           				 <div class='clr'></div>
		           				 <p class='spec'> <form name='visualizzaeventi' method='post' action='../Presentation/GUIVisualizzaEvento.php'>
		   			 			 <input type='hidden' name='valore' value='$row[4]' />
		   			 			 <input type='submit' id='submit'  value='Leggi' />
						</form>
						</p>
		          			   	 </div>
		         				 <div class='clr'></div>";
		         				 $i++;
								
						}
			 			setcookie("b","ciao",time()-1,"/Alumni/");

						echo $stringa;			
		}
			

			 
 
 
 			 
	if($_GET['valore']==0){
		
			
 			visualizzaEvento();
	}


if($_GET['valore']==4){
				setcookie("where", " ", time()+3600, "/Alumni/" );
				setcookie("tipo_utente", "evento ORDER BY evento.DATA_EVENTO DESC", time()+3600, "/Alumni/" );
 			 setcookie("tipo","NOME_EVENTO= CIAO, DESCRIZIONE= hello, DATA_EVENTO= uuu, ID= ioio", time()+3600, "/Alumni/");
  			 setcookie("scelta","visualizza", time()+3600, "/Alumni/");
			 header("Location: ../Storage/Storage.php");
			 
			 }
    

 
 ?>

