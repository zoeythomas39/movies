<?php
	include 'database.php';
	$query = "SELECT * FROM movies ORDER BY movie1";
	$movies = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<title> Filmography </title>
	<link rel="stylesheet" href="css/table.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caprasimo&family=Libre+Franklin:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>
<div id="container">

<h1>Filmography</h1>

	
<table>
	<!-- table column headings -->
	<tr id="longtable">
	  <th>If you like:</th>
	  <th>Try:</th>
	  <th>Because:</th>
	  <th>Suggestion from</th>
	  <th class="datecol">Date</th>
	</tr>

<!-- Begin PHP while-loop to display database query results
     with each row enclosed in TD tags.
     Each time it loops, it writes ONE ROW.
	 This code depends on the first 5 lines at the start of this file.
	 $socks comes from that code.
	 NOTE all form controls must have a name= attribute.
     -->
<?php while ($row = mysqli_fetch_assoc($movies)) :  ?>

<tr>
<th class="shorttable">If you like:</th>
  <td><?php echo stripslashes($row['movie1']); ?></td>
  <th class="shorttable">Try:</th>
  <td><?php echo stripslashes($row['movie2']); ?></td>
  <th class="shorttable">Because:</th>
  <td><?php echo stripslashes($row['reason']); ?></td>
  <th class="shorttable">Suggestion from</th>
  <td><?php echo stripslashes($row['name']); ?></td>
  <td class="datecol"><?php echo stripslashes($row['date']); ?></td>
</tr><!-- end of HTML table row -->

<?php endwhile;  ?>
<!-- end the PHP while-loop
     everything else on this page is normal HTML -->

</table>

<p class="middle"><a href="enter_new_record.php">Add a new film</a></p>
<p class="middle"><a href="index.html">Return home</a></p>

</div> <!-- close container -->
</body>
</html>