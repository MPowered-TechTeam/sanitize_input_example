<script type="text/javascript">
	
	function check_login() {

		var username = document.getElementById('username').value;
		var password = document.getElementById('password').value;
		var d = new Date();

		document.getElementById('username').value = '';
		document.getElementById('password').value = '';

		if (username == d.getTime() &&
			password == d.getTime() + 35) {

			login();
		}
		else {

			document.getElementById('message').innerHTML = "Unable to login.";
		}
	}

	function login() {

		var d = new Date();

		location.href = 'goal.php?token=' + d.getTime();
	}

</script>
<ul style='list-style-type: none;'>
	<li>
		<h4> Login </h4>
	</li>
	<li>
		<div style='color: red' id='message'>
		</div>
	</li>
	<li>
		Username
	</li>
	<li>
		<input id='username' type='text' />
	</li>
	<li>
		Password
	</li>
	<li>
		<input id='password' type='text' />
	</li>
	<li>
		<input type='button' value='Login' onclick="check_login();" />
	</li>
</ul>