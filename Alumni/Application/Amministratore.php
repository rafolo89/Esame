 
 <?php 
 if(!isset($_GET['valore'])){
 			header("Location: ../GUISito.php#s"); 
      }
 $path="../Application/".basename($_SERVER['PHP_SELF']);
 
 			 
	if($_GET['valore']==0){
		
			
 			$row= explode("," , $_COOKIE['b']);
			echo $row[1];
 			setcookie("b","ciao",time()-1,"/Alumni/");
	}

 if($_GET['valore']==1){
              $immagine = "../Amministratore/uploads/".$_COOKIE['id_utente'].".jpg";
              echo "<a href='JavaScript:openWindow()' ><img src=$immagine alt='BO'  height='100' width='100' style = 'float : left' onerror=this.src='../images/userpic.gif'></img></a>";
              }
              
 if($_GET['valore']==2){
	 
			 setcookie("tipo","NOME= Orsi, ID= ".$_COOKIE['id_utente']."", time()+3600, "/Alumni/");
  			 setcookie("valore","visualizza", time()+3600, "/Alumni/");
			 header("Location: ../Storage/Storage.php");
 			
			 }
			 
  if($_GET['valore']==3){
 			 setcookie("tipo","COGNOME= Orsi, ID= ".$_COOKIE['id_utente']."", time()+3600, "/Alumni/");
  			 setcookie("valore","visualizza", time()+3600, "/Alumni/");
			 header("Location: ../Storage/Storage.php");
			 
			 }


 
 ?>


 
 










			 







			 