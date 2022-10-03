<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<h1 align="center">Login</h1>
	<hr>
	<form action="login_proses.php" method="post">
		<table width="300" border="0" align="center">
			<tr>
				<td width="150">Username</td>
				<td>
					<input type="text" name="username" required>
				</td>
			</tr>
			<tr>
				<td width="150">Password</td>
				<td>
					<input type="password" name="password" required>
				</td>
			</tr>
			<tr>
				<td width="150"></td>
				<td>
					<input type="submit" value="login" required>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>