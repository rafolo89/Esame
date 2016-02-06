 
 <?php 
 if(!isset($_POST['valore']){
      header("location: ../GUISito.php#s"); 
      }
 $path="../Application/".basename($_SERVER['PHP_SELF'])
 setcookie("file",, time()+3600);
 if($_POST['valore']==1){
              $immagine = "../Moderatore/uploads/".$_COOKIE['id_utente'].".jpg";
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
