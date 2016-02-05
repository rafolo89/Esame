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
			 echo $row[0]; ?><br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row[1]; ?>
									<?php
									function VisualizzaEvento(){
									
            							if(isset($_POST['valore'])){
            								$id=$_POST['valore'];
            							    $query="select * from evento where ID='$id' ";
			 								$q=mysql_query($query);
											$row = mysql_fetch_array($q, MYSQL_NUM);
											}
											echo"<div id='visEvento'></div>";
									}
									?>