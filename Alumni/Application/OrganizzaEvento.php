
<?php 
              $immagine = "uploads/".$_COOKIE['id_utente'].".jpg";
              echo "<a href='JavaScript:openWindow()' ><img src=$immagine alt='BO'  height='100' width='100' style = 'float : left' onerror=this.src='../images/userpic.gif'></img></a>";
              
              ?>
			  
			  
			   <?php 
 			 $id = $_COOKIE['id_utente'];
 			 $tipo = $_COOKIE['tipo_utente'];
  			 require_once("connessione.php");
  			 $query="select nome, cognome from $tipo where CF='$id' ";
			 $q=mysql_query($query);
			 $row = mysql_fetch_array($q, MYSQL_NUM);
			 echo $row[0]; ?>
			 
			 
			 <?php echo $row[1]; ?>




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