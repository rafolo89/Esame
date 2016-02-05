<?php 
   			require_once("../GUI_MG/connessione.php");

 			 if (!isset($_COOKIE['id_utente']) && !isset($_COOKIE['tipo_utente']) && $_COOKIE['tipo_utente']!="alumno"){
 			 header("location: ../GUISito.php#s"); }
 			 
       $id = $_COOKIE['id_utente'];
 			 $tipo = $_COOKIE['tipo_utente'];
			 if(isset($_POST['valore'])){
			   $ac=$_POST['valore'];
		   	   mysql_query("UPDATE alumno SET GRUPPO ='$ac'  WHERE ID ='$id'");
         	   echo "<script type='text/javascript'>alert('La tue esperienza è stata inserita nel database ora è soggetta ad approvazione da un moderatore,l esito ti verrà notificato via email'); </script>";				
 			 }
 			 $query="select GRUPPO from alumno where ID='$id' ";
 			 $q=mysql_query($query);
			 $row = mysql_fetch_array($q, MYSQL_NUM);
			
			 if($row[0])
			 {
				header("location: GUIAlumno.php#s");
			 	 }

 			
 			?>
			
			<?php 
				
              $immagine = "uploads/".$_COOKIE['id_utente'].".jpg";
              echo "<a href='JavaScript:openWindow()' ><img src=$immagine alt='BO'  height='100' width='100' style = 'float : left' onerror=this.src='../images/userpic.gif'></img></a>";
              
              ?>
			  
			  <?php 
 			 
  			  $query="select nome, cognome from $tipo where ID='$id' ";
			 $q=mysql_query($query);
			 $row = mysql_fetch_array($q, MYSQL_NUM);
			 echo $row[0]; ?>
			 
			 <?php echo $row[1]; ?>
			 
			          <?php 
          	 $query="select NOMEGRUPPO, NUMMAXPARTECIPANTI, DESCRIZIONE from gruppo";
			 $q1=mysql_query($query);
			 while($row = mysql_fetch_array($q1, MYSQL_NUM)){
         	 $query="SELECT COUNT(*) FROM alumno where GRUPPO = '$row[0]'";
			 $q=mysql_query($query);
			 $ro = mysql_fetch_array($q, MYSQL_NUM);
			 if($ro[0]<=$row[1]){
         	    echo " <form action = 'GUIPartecipaGruppo.php' method='post'> <br><strong>".$row[0]."</strong> <input type='hidden' name='valore' value='$row[0]' /><div class='clr'></div>
           		 <p>".$row[2]." </p>
            	 <input type='submit' id='submit'  value='Partecipa' style='width: 245px' />
          		 </form><div class='clr'></div>";
          	 }}
          ?> 