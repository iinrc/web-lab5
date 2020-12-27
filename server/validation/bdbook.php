<?php
	$mysqli = new mysqli('localhost', 'root', '', 'Whitelist');
	$result=$mysqli->query('SELECT * FROM `books`', );

	// получаем все строки в цикле по одной
	while($row = $result->fetch_assoc())
									{
									 echo '<tr><td>'.$row['Author'].'</td>';
									 echo '<td>'.$row['Title'].'</td>';
									 echo '<td>'.$row['Genre'].'</td>';
									 echo '<td>'.$row['Amount'].'</td>';
									 echo '<td>'.$row['Date'].'</td><.tr>';
									}

?>