<?php
            							if(isset($_POST['valore'])){
            								$id=$_POST['valore'];
            								require_once("../GUI_MG/connessione.php");
											$query="select * from alumno where ID='$id' ";
                      $query2="select descrizione from esperienza where alumno='$id' ";
			 								$q=mysql_query($query);
                      $story= mysql_query($query2);
											$row = mysql_fetch_array($q, MYSQL_NUM);
                      $rowStory = mysql_fetch_array($story, MYSQL_NUM);
             								$immagine = "../GUI_CP/uploads/".$row[2].".jpg";
              								echo "<p><img src=$immagine alt='BO'  height='100' width='100' style = 'float : left' onerror=this.src='../images/userpic.gif'></img></p>";
              								echo "<br><br><br><br><br>"; 
											echo "<strong>Nome :</strong> $row[0]";
											echo "<br>";										
											echo "<strong>Cognome:</strong> $row[1]";
											echo "<br>";
											echo "<strong>Storia:</strong> $rowStory[0]";
											echo "<br>";
											
											}
									?>