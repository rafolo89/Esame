<?php 
              $immagine = "uploads/".$_COOKIE['id_utente'].".jpg";
              echo "<a href='JavaScript:openWindow()' ><img src=$immagine alt='BO'  height='100' width='100' style = 'float : left' onerror=this.src='../../images/userpic.gif'></img></a>";
              
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
					$a=$_COOKIE['Doc'];

			 		$query="select * from evento where ID='$a' && DOCENTE='$id' ";
					$q=mysql_query($query);
			 		if($eve = mysql_fetch_array($q, MYSQL_NUM)){

          }else{
            echo '<script type="text/javascript">window.location = "GUICercaEvento.php#s";alert("ID non valido:Inserire un ID associato ad un evento inserito dal Docente loggato!")</script>';
          }
		   ?>
		   
		   <?php echo $eve[1] ?>
		   <?php echo $eve[2] ?>
		   <?php echo $eve[3] ?>
		   
		   <?php 
        
          if(isset($_POST['nomeevento'])){
        
           
            $b=$_POST['nomeevento'];  
            $c=$_POST['datainizio'];  
            $d=$_POST['descrizione']; 
            
            $cont=0;
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
               $query= "update evento set NOME_EVENTO='$b',DATA_EVENTO='$c',DESCRIZIONE='$d' where id='$a'";
               mysql_query($query);
               echo '<script type="text/javascript">window.location = "loggato/GUIEventi.php#s";alert('L\evento è stato aggiornato');</script>';
            }
          }

          ?>