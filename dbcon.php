<?php

$server = 'localhost:3307';
$user = 'root';
$password = '';
$db = 'coronadb';

$con = mysqli_connect($server, $user, $password, $db);

/*
if ($con) {
	?>
	<script>
		alert("connection successful");
	</script>
	<?php
}else{
	?>
	<script>
		alert("No connection");
	</script>
	<?php
}

?>
*/