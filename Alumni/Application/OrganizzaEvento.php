
 
 <?php 
 if(!isset($_POST['valore']){
      header("location: ../GUISito.php#s"); 
      }
 $path="../Application/".basename($_SERVER['PHP_SELF'])
 setcookie("file",, time()+3600);
 if($_POST['valore']==1){
              $immagine = "../Docente/uploads/".$_COOKIE['id_utente'].".jpg";
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
    
      $row= explode(",",$_COOKIE['risultato']);
      while()
      echo"";
      }

 ?>




<?php 
      	  if(isset($_POST['idevento'])){
      	
      	  	$a=$_POST['idevento'];
      	  	$b=$_POST['nomeevento'];  
      	  	$c=$_POST['datainizio'];  
      	  	$d=$_POST['descrizione']; 
            

            $cont=0;
            if((strlen($a)<3) || (strlen($a)>15)){
                echo "<script>document.getElementById('tdidleader').innerHTML= 'Lid dell evento contiene tra i 3 e i 15 caratteri';</script>";
                $cont++;
            }
            if(strlen($b)<6 || strlen($b)>20){
                echo "<script>document.getElementById('tdnomeevento').innerHTML = 'Il nome evento contiene tra i 6 e i 20 caratteri';</script>";
                $cont++;
            }
            if(strlen($c)!=10){
                echo "<script>document.getElementById('tddata').innerHTML = 'La data deve essere scritta nella forma gg/mm/aaaa';</script>";
                $cont++;
            }
            if(strlen($d)<30 || strlen($d)>200){
                echo "<script>document.getElementById('tddescrizione').innerHTML = 'La descrizione deve contenere tra i 30 e i 200 caratteri';</script>";
                $cont++;
            }
                          
            if ($cont==0) {
               $query= "insert into evento(ID,NOME_EVENTO,DATA_EVENTO,DESCRIZIONE,DOCENTE) values ('$a','$b','$c','$d','$id') ";
               mysql_query($query);
               echo '<script type="text/javascript">window.location = "loggato/GUIEventi.php#s";alert("L/evento è stata aggiunto nel sistema");</script>';
            }
			
			echo"<div id='orgEvento'></div>";
        }

      	  ?> 