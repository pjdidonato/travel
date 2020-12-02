<!DOCTYPE html>
<html>
  <head>
    <title>Hotels Page</title>
    <meta charset="UTF-8" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
  </head>

  <body>
	<nav class="navbar navbar-expand-lg fixed-top ">
      <a class="navbar-brand" href="index.html">Home</a>
    </nav>
	<br/>
	<h1 style="text-align:center;">Find a hotel</h1>
	<div align="center">
		<img src="Hotelpicture.jpg" alt="Italian Trulli">
	</div>
	<br/>
	<div id="main_search" align="center">
        <input id="main_search_input" type="text" placeholder="Search Hotel" />
		<button type="button" class="btn btn-primary">Search</button>	
    </div>
	<br/>
	<?php include 'index.php'?>
  </body>
 
</html>