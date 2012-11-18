<?php

if ( ceil($_GET['token'] / 10000000) != ceil(microtime(true) / 10000)) {

	header("location: index.php");
}

?>

<html>
	<body>
		<h1> Login Successful! </h1>

		<iframe width="560" height="315" src="http://www.youtube.com/embed/dpzu3HM2CIo?autoplay=1" frameborder="0" allowfullscreen></iframe>
	</body>
</html>