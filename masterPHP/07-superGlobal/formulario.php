<!DOCTYPE HTML>

<html lang='es'>
<head>
<meta charset="utf-8">
<title>Formulario en PHP</title>
</head>
<body>
	<h1>Formulario en PHP</h1>
	<!-- <form action="recibir.php" method="GET"> -->
	<form action="recibir.php" method="POST">
		<p>
			<label for='name'>Name</label> <input type="text" name='name'>
		</p>
		<p>
			<label for='lastname'>LastName</label> <input type="text"
				name='lastname'>
		</p>

		<input type="submit" value="Send Data ">
	</form>
</body>

</html>

<?php
