<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
  <title>Selezione immaggine</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link href="../css/style.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="../css/coin-slider.css" />
  <script type="text/javascript" src="../js/cufon-yui.js"></script>
  <script type="text/javascript" src="../js/cufon-titillium-250.js"></script>
  <script type="text/javascript" src="../js/jquery-1.4.2.min.js"></script>
  <script type="text/javascript" src="../js/script.js"></script>
  <script type="text/javascript" src="../js/coin-slider.min.js"></script>
  <script language=\"JavaScript\" >function closeWin{window.close()}</script>
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
</head>
    <body onload="javascript:window.opener.location.reload();setTimeout('window.close()',1000);">
    	<?php
		$id = $_COOKIE['id_utente'];
		$tipo = $_COOKIE['tipo_utente'];

 		switch($tipo){
									case 'alumno':
										$cartella='../GUI_CP/';
										break;
									case 'docente':
										$cartella='../GUI_MG/';
										$ii="CF";
										break;
									case 'moderatore':
										$cartella='';
										break;
									case 'amministratore':
										$cartella='../GUI_AO/';
										break;						
								}

		define("UPLOAD_DIR", $cartella."uploads/");

		if(isset($_POST['action']) and $_POST['action'] == 'upload')
		{
		    if(isset($_FILES['user_file']))
		    {
		        $file = $_FILES['user_file'];
		        if($file['error'] == UPLOAD_ERR_OK and is_uploaded_file($file['tmp_name']))
		        {
		            move_uploaded_file($file['tmp_name'], UPLOAD_DIR.$id.".jpg");
		        }
		    }
		}

		?>

        <div class="Intestazione" style="width: 100%; height: 20px"><!--Primo blocco:intestazione->Logo ed immagini--></div>
        <div class="style7" style="width: 100%; "><img src="../images/logoalumni.jpg" width="35%" /></div>
        <div class="Intestazioneunder" style="width: 100%; height: 20px;"></div>

        <div>&nbsp;</div>
        
        <div class="content" >
        <div class="content_resize" style="align: left;" >

        <div class="mainbar" ><!--Pannello della funzionalità principale-->
          <div class="article" >
          <h2>Caricamento effettuato con successo!</h2>
          <div class="clr"></div>
          
        
              
            </div>
            <div class="clr"></div>
          </div>

        </div>
        <div class="clr"></div>
        </div>
        
    <div class="footer"><!--Fondo pagina con copyright-->
      <div class="footer_resize">
        <p class="lf">Copyright © AlumniUnisa Salerno All Rights Reserved</p>
      </div>
    </div>       
          
    </body>
</html>