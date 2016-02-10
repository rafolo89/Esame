



			<?php
if(!isset($_GET['valore'])){
 			header("Location: ../GUISito.php#s"); 
      }


			function visualizzaGruppo(){	
				$i=1;
					$row= $_COOKIE['b'];
					$row = explode(",", $row);
					
								$stringa =  "<div class='article'><h2><span>Gruppi</span></h2>";
				while ($i< (count($row)))
				{	
							$stringa = $stringa."					
						 <div class='clr'></div>
       					 <div class='img'><img src='../images/gruppo.jpg' width='177' height='213' alt='' class='fl' /></div>
       			    	 <div class='post_content'>
           				 <p> Nome gruppo<strong>". $row[$i]."</strong> </p>
           				 <div class='clr'></div>
           				 <p>". $row[$i+1]." </p>
           				 <div class='clr'></div>
           				 <p class='spec'> <form name='visualizzagruppo.". $row[$i]."' method='post' action='../GUI_CP/GUIVisualizzaGruppo.php#s'>
   			 			 <input type='hidden' name='valore' value='". $row[$i]."' />
   			 			 <a class='rm' href='javascript:document.forms[&#96;visualizzagruppo.". $row[$i]."&#96;].submit()'>
				Leggi</a>
				</form>
				</p>
          			   	 </div>
         				 <div class='clr'></div>";
         				 $i =$i+2;
						
				}
			 			setcookie("b","ciao",time()-1,"/Alumni/");

						echo $stringa;		
		}
			

			 
 
 
 			 
	if($_GET['valore']==0){
		
			
 			visualizzaGruppo();
	}


if($_GET['valore']==4){
				setcookie("where", " WHERE 1", time()+3600, "/Alumni/" );
				setcookie("tipo_utente", "gruppo", time()+3600, "/Alumni/" );
 			 setcookie("tipo","NOMEGRUPPO= hhh, DESCRIZIONE= iiii", time()+3600, "/Alumni/");
  			 setcookie("valore","visualizza", time()+3600, "/Alumni/");
			 header("Location: ../Storage/Storage.php");
			 
			 }
    

 
 ?>

