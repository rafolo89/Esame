<?php 
	if (!isset($_COOKIE['id_utente']) && !isset($_COOKIE['tipo_utente']) && $_COOKIE['tipo_utente']!="alumno"){
		header("location: ../GUISito.php");
	}
	?>
	
	<?php 
              $immagine = "uploads/".$_COOKIE['id_utente'].".jpg";
              echo "<a href='JavaScript:openWindow()' ><img src=$immagine alt='BO'  height='100' width='100' style = 'float : left' onerror=this.src='../images/userpic.gif'></img></a>";
              
              ?>
			  
			  <?php 
									$id = $_COOKIE['id_utente'];
									$tipo = $_COOKIE['tipo_utente'];
									require_once("../GUI_MG/connessione.php");
									$query="select nome, cognome from $tipo where ID='$id' ";
									$q=mysql_query($query);
									$row = mysql_fetch_array($q, MYSQL_NUM);
									echo $row[0]; ?>
									
									<?php echo $row[1]; ?>
									
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