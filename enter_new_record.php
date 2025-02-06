<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title> Film - Enter </title>
    <link rel="stylesheet" href="css/newrecord.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caprasimo&family=Libre+Franklin:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>
<div id="container">

<h1>Find Your Film: Enter Your Favorites</h1>

<div id="movies">

<!-- this form is handled by the JavaScript file linked at bottom -->
<form id="movieform" method="post" action="" autocomplete="off">

  <label for="name">Your name </label>
	<input type="text" name="name" id="name" maxlength="50" required>

  <label for="movie1">A famous film you enjoy </label>
	<input type="text" name="movie1" id="movie1" maxlength="150" required>

  <label for="movie2">A hidden gem for fans of your favorite famous film to try </label>
	<input type="text" name="movie2" id="movie2" max="150" required>

  <label for="reason">Why should people watch your hidden gem? </label>
	<input type="text" name="reason" id="reason" max="1000" required>
    <!-- step="0.01" (above) allows decimal to be entered -->

	<input type="submit" id="submit" value="Submit">
</form>
<!-- close the form -->

</div> <!-- close #socks -->

<!-- empty div -->
<div id="response"></div>

<p class="middle"><a href="movies_update.php">View full filmography</a></p>
<p class="middle"><a href="index.html">Return home</a></p>

</div> <!-- close container -->

<script src="js/movies_enter.js"></script>

</body>
</html>