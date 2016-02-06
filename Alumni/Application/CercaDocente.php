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
 if(!isset($_POST['valore']){
      header("location: ../GUISito.php#s"); 
      }
 $path="../Application/".basename($_SERVER['PHP_SELF'])
 setcookie("file",, time()+3600);
 if($_POST['valore']==1){
              $immagine = "../".$_COOKIE['tipo_utente']."/uploads/".$_COOKIE['id_utente'].".jpg";
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
 			if(isset($_POST['docente'])){
        $cosa=$_POST['docente'];
 			echo "<input type='hidden' name='docente' value='$cosa' />";
 			}
 			?>
