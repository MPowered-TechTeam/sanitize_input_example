<!--
<script type="text/javascript">

	function search() {

		location.href = 'index.php?search=' + document.getElementById('search_input').value;
	}

</script>
-->
<div>
	<form method="get" action="index.php" name="input">
		Search: <input name='search' type='text'>
		<br />
		<input type='submit' value='GO' />
	</form>
</div>

<div>

	<h3>
	<?php

		if (isset($_GET['search'])) {

			echo "Search results for: " . $_GET['search'];
		}
	?>
	</h3>

</div>

<div>

<?php

	if (isset($_GET['search'])) {

		echo "search result feature not built";
	}
?>

</div>