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