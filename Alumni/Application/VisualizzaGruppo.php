<?php
            							if(isset($_POST['valore'])){
            								$id=$_POST['valore'];
                                            echo "$id";
            								require_once("../GUI_MG/connessione.php");
											$query="select * from gruppo where NOMEGRUPPO='$id' ";
			 								$q=mysql_query($query);
											$row = mysql_fetch_array($q, MYSQL_NUM);
											$que="select * from alumno where GRUPPO='$id' ";
			 								$q2=mysql_query($que);
											
											$immagine = "../GUI_CP/uploads/".$row[0].".jpg";
              								echo "<p><img src=../../images/gruppo.jpg alt='BO'  height='100' width='100' style = 'float : left' ></img></p>";
              								echo "<br><br><br><br><br>"; 
											echo "<strong>Nome gruppo:</strong> $row[0]";
											echo "<br>";							
											echo "<strong>Numero massimo di partecipanti:</strong> $row[1]";
											echo "<br>";
											echo "<strong>Nome leader:</strong> $row[2]";
											echo "<br>";
											echo "<strong>Descrizione:</strong> $row[4]";
											echo "<br>";
											echo "<strong>Team:</strong> ";
											echo "<br>	<table> ";
											while($row2 = mysql_fetch_array($q2, MYSQL_NUM)){
												$immagine = "uploads/".$row2[2].".jpg";
									 			echo "<tr><td><img class='gal' src=$immagine alt='BO'  height='75' width='75' style = 'float : left' onerror=this.src='../images/userpic.gif'></img></td><td>".$row2[0]." ".$row2[1]." </td></tr>  ";
												}

											echo "<br>	</table> ";


											}
									?>