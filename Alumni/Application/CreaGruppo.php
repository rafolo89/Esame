<?php 
	if (!isset($_COOKIE['id_utente']) && !isset($_COOKIE['tipo_utente']) && $_COOKIE['tipo_utente']!="alumno"){
		header("location: ../GUISito.php");
	}
	?>
	
	 
 
 <?php 
 if(!isset($_POST['valore']){
 			header("location: ../GUISito.php#s"); 
      }
 $path="../Application/".basename($_SERVER['PHP_SELF'])
 setcookie("file",, time()+3600);
 if($_POST['valore']==1){
              $immagine = "../Amministratore/uploads/".$_COOKIE['id_utente'].".jpg";
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
		
 			$row= $_COOKIE['risultato'];
			echo $row;

 ?>

									
									<?php

									if(isset($_POST['nomeLeader']))
									{
										require_once("../GUI_MG/connessione.php");
										$nome = $_POST['nomeLeader'];
										$gruppo = $_POST['nomeGruppo'];
										$numero = $_POST['numeroMassimo'];
										$descrizione = $_POST['testo'];

										if((strlen($nome) < 3) || (strlen($nome) > 15 ))
										{
											echo "<script language='JavaScript' type='text/javascript'> document.getElementById('tdnl').innerHTML='Il campo nome deve contenere una stringa compresa tra 4 e 11 caratteri';</script>";           		 

										}
										elseif((strlen($gruppo) < 5) || (strlen($gruppo) > 16 ))
										{
											echo "<script language='JavaScript' type='text/javascript'> document.getElementById('tdng').innerHTML='Il campo nome deve contenere una stringa compresa tra 4 e 15 caratteri';</script>";           		 

										}
										elseif((($numero) < 4) || (($numero) > 7))
										{

											echo "<script language='JavaScript' type='text/javascript'> document.getElementById('tdnm').innerHTML='Il campo nome deve contenere una stringa compresa tra 4 e 11 caratteri';</script>";           		 

										}
										else
										{
											mysql_query("INSERT INTO gruppo(NOMELEADER,NOMEGRUPPO,NUMMAXPARTECIPANTI,MODERATORE,DESCRIZIONE) VALUES ('$nome','$gruppo','$numero','$id','$descrizione')");
											echo "<script type='text/javascript'>alert('Abbiamo inserito il gruppo nel database '); </script>";				

										}



									}

									?>