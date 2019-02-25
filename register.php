<html>
<head>
	<title>Welcome to Slotify!</title>
</head>
<body>

	<div id="inputContainer">
		<form id="loginForm" action="register.php" method="POST">
			<h2>Login to your account</h2>
			<p>
				<label for="loginUsername">Username</label>
				<input id="loginUsername" name="loginUsername" type="text" placeholder="Username" required>
			</p>
			<p>
				<label for="loginPassword">Password</label>
				<input id="loginPassword" name="loginPassword" type="password" required>
			</p>

			<button type="submit" name="loginButton">LOG IN</button>
			
		</form>


        <form id="registerForm" action="register.php" method="POST">
			<h2>Create your free account</h2>
			<p>
				<label for="Username">Username</label>
				<input id="username" name="Username" type="text" placeholder="Username" required>
			</p>
            <p>
				<label for="firsName">First Name</label>
				<input id="firstName" name="firsName" type="text" placeholder="First Name" required>
			</p>
            <p>
				<label for="lastName">Last Name</label>
				<input id="lastName" name="lastName" type="text" placeholder="Last Name" required>
			</p>
            <p>
				<label for="email">Email</label>
				<input id="email" name="email" type="text" placeholder="Email" required>
			</p>
            <p>
				<label for="email2">Confirm Email</label>
				<input id="email2" name="email2" type="text" placeholder="Email" required>
			</p>
			<p>
				<label for="password">Password</label>
				<input id="password" name="password" type="password" required>
			</p>
            <p>
				<label for="password2">Confirm Password</label>
				<input id="password2" name="password2" type="password" required>
			</p>
			<button type="submit" name="registerButton">Sign Up</button>
			
		</form>
	</div>

</body>
</html>