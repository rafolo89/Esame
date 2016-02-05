<?php
    
      if (!isset($_COOKIE['id_utente']) && !isset($_COOKIE['tipo_utente']) && $_COOKIE['tipo_utente']!="alumno"){
      header("location: ../../GUISito.php#s"); 
      }
    
    if(isset($_POST['codicefiscale']))
    {
      $e=$_POST['codicefiscale'];
      if ((strlen($e))!= 16){
        echo "<script language='JavaScript' type='text/javascript'> document.getElementById('cf').innerHTML='Il campo codice fiscale deve contenere una stringa di 16 caratteri';</script>";          
      }
      else{
        $cF = $_POST['codicefiscale'];
        if(isset($_POST['docente'])){       
          if($_POST['docente']=="0"){
            session_start();
            $_SESSION['codfi'] = $cF;
            header('Location:../GUI_MG/GUIModificaDocente.php');
          }
          else{
            setcookie("Doc", "$cF",time()+3600, "/Alumni/");
            header('Location:GUICancellaDocente.php');
          }
        }
        else{
          setcookie("Doc", "$cF",time()+3600, "/Alumni/");
          header('Location:VisualizzaDocente.php');
        }
      }
    }
    
  ?>
  
  
  <?php 
              $immagine = "../GUI_AO/uploads/".$_COOKIE['id_utente'].".jpg";
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
 			if(isset($_POST['docente'])){
        $cosa=$_POST['docente'];
 			echo "<input type='hidden' name='docente' value='$cosa' />";
 			}
 			?>
