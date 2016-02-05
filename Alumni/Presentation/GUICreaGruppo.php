<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
	<title>AlumniUnisa</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="../css/style.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="../css/coin-slider.css" />
	<script type="text/javascript" src="../js/cufon-yui.js"></script>
	<script type="text/javascript" src="../js/cufon-titillium-250.js"></script>
	<script type="text/javascript" src="../js/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="../js/script.js"></script>
	<script type="text/javascript" src="../js/coin-slider.min.js"></script>
	<style type="text/css">
	.style7 {
		background-color: white;
		margin: 0 auto;
		text-align: center;
	}
	.style8 {
		font-size: large;
	}
	.style9 {
		font-size: x-large;
	}
	.style10 {
		color: #585757;
	}
	</style>
	<script LANGUAGE="JavaScript">
    <!-- 
    function openWindow()
    {
        open ("selezioneImmagine.html","new","height=500,width=680,scrollbars=0,resizable=0,status=1,menubar=0,toolbar=0,location")
    //settando i parametri a 1, le barre vengono visualizzate, a 0 no.
    }
    -->
  </script>

</head>
<body><!--Corpo della pagina-->
	<?php 
	if (!isset($_COOKIE['id_utente']) && !isset($_COOKIE['tipo_utente']) && $_COOKIE['tipo_utente']!="alumno"){
		header("location: ../GUISito.php");
	}
	?>

	<div class="Intestazione" style="width: 100%; height: 20px"><!--Primo blocco:intestazione->Logo ed immagini-->
	</div>
	<div class="style7" style="width: 100%; ">
		<img src="../images/logoalumni.jpg"  />
	</div>

	<div class="Intestazioneunder" style="width: 100%; height: 20px;">
	</div>
	<div class="main">
		<div class="header">

			<div class="Immaginiscroll" style="width: 100%;"><img src="../images/unisa.png" style="width: 100%;"/>
			</div>
			<div class="menu_nav" style="width: 100%;"><!--Menu principale con i collegamenti alle varie pagine/funzionalità del sito-->
				<ul style="width: 100%; background-color:#DF4B49;  top: 0px;">
	<li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </li>
          <li><a href="loggato/GUISito.php#s"><span>Home Page</span></a></li>
          <li><a href="loggato/GUIStorie.php#s"><span>Storie</span></a></li>
          <li><a href="loggato/GUIGruppi.php#s"><span>Gruppi</span></a></li>
  		  <li><a ><span>Salvadanaio</span></a>
          <ul>
          		<li><a href="loggato/GUIEffettuaDonazione.php#s">Effettua una donazione</a></li>
          		<li><a href="loggato/GUIVisualizzaRaccoltaFondi.php#s">Visualizza raccolta fondi</a></li>
            </ul>
		  </li>
          <li><a href="loggato/GUIEventi.php#s"><span>Eventi</span></a></li>
          <li><a href="loggato/GUIDiscussioni.php#s"><span>Questions</span></a></li>
        </ul>
			</div>
			<div>&nbsp;</div>
			<div class="content"><!--Contenitore principale delle funzionalità della pagina corrente-->
				<div class="content_resize" style="width: 1301px; ">


					<div class="sidebar" style="right: 50px; top: -14px" ><!--Pannello laterale, inerente allo specifico utente loggato ed alle sue funzionalità  -->
						<div class="clr"></div>
						<div class="gadget">
							<div>
								<div><strong><span class="style9">MODERATORE<A NAME="s" ></a></span></strong><br /><br />
									<?php 
              $immagine = "uploads/".$_COOKIE['id_utente'].".jpg";
              echo "<a href='JavaScript:openWindow()' ><img src=$immagine alt='BO'  height='100' width='100' style = 'float : left' onerror=this.src='../images/userpic.gif'></img></a>";
              
              ?>
<br />
								<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
									<?php 
									$id = $_COOKIE['id_utente'];
									$tipo = $_COOKIE['tipo_utente'];
									require_once("../GUI_MG/connessione.php");
									$query="select nome, cognome from $tipo where ID='$id' ";
									$q=mysql_query($query);
									$row = mysql_fetch_array($q, MYSQL_NUM);
									echo $row[0]; ?><br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row[1]; ?><br /></strong><br /><br /><br /><br />
								</div> 
							</div>
							<h2 class="star"><span class="style8">Autenticazione</span> </h2>
							<ul class="sb_menu">
								<li>
									<a href="../GUI_AO/GUILogoutModeratore.php#s">Logout</a><!--Funzionalità di logout-->
								</li>
							</ul>
							<h2 class="star"><span class="style8">Gestione Esperienza </span></h2>
							<ul class="sb_menu">

								<li>
									<a href="../GUI_AO/GUIRevisioneEsperienza.php#s"><span class="style10">
										Revisiona esperienza</span></a>
									</li>


								</ul>
								<h2 class="star"><span class="style8">Gestione Gruppo </span></h2>
								<ul class="sb_menu">

									<li>
										<a href="GUICreaGruppo.php#s"><span class="style10"><strong>
											Crea gruppo</strong></span></a>
										</li>


									</ul>

						</div>

					</div>

					<div class="mainbar" ><!--Pannello della funzionalità principale-->
						<div class="article">
							<h2>Crea Gruppo</h2>
							<div class="clr"></div>
							<p class="infopost"><strong>Inserisci le credenziali:</strong></p>
							<div class="post_content">
								<form  method="post" action="GUICreaGruppo.php" > 
									<table>
										<tr>
											<td style="height: 37px; width: 103px;">Nome Leader:</td>
											<td style="height: 37px; width: 224px;"><input type="text" name="nomeLeader" size="35" maxlength="40" value="" required autofocus /></td><td id="tdnl" style=" color:red; height: 37px"></td>
										</tr>
										<tr>
											<td style="height: 37px; width: 103px;">Nome Gruppo:</td>
											<td style="height: 37px; width: 224px;"><input type="text" name="nomeGruppo" size="35" maxlength="40" value="" required autofocus /></td><td id="tdng" style=" color:red; height: 37px"></td>
										</tr>
										<tr>
											<td style="height: 37px; width: 103px;">Numero Massimo:</td>
											<td style="height: 37px; width: 224px;"><input type="text" name="numeroMassimo" size="35" maxlength="40" value="" required autofocus /></td><td id="tdnm" style=" color:red; height: 37px"></td>
										</tr>
										<tr>
											<td colspan="3" style="height: 37px; width: 224px;" > <br /> Descrizione:<br /> &nbsp;<textarea placeholder="Inserisci la Descrizione..." name="testo" cols="70" style="height: 270px" rows="1"></textarea></td>
										</tr>	
										<tr>
											<td td colspan="3" class="style11" ><br /><input type="submit" id="submit" value="Conferma"  /></td></tr>
										</table>

									</form>
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

							</div>
							<div class="clr"></div>
						</div>

					</div>
					<div class="clr"></div>
				</div>
			</div>
			<div class="footer"><!--Fondo pagina con copyright-->
				<div class="footer_resize">
					<p class="lf">Copyright © AlumniUnisa Salerno All Rights Reserved</p>
				</div>
			</div>
		</div>
	</div>

</body>
</html>
