<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Вход в админ-панель</title>
</head>
<body>
	<form action="admin-check.php" method="POST" enctype="multipart/form-data">
		<input type="login" name="login" placeholder="Логин" required>
		<input type="password" name="password" placeholder="Пароль" required>
		<button type="submit">Войти</button>
	</form>
</body>
</html>