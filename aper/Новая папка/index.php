<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
</head>
<body>
    <form action="php/reg.php" method="POST">
        <h2>Регистрация</h2>
        <label for="login">Введите логин</label>
        <input type="text" id="login" name="login" placeholder="Введите логин" require>
        <label for="password">Введите пароль</label>
        <input type="password" id="password" name="password" placeholder="Введите пароль" require>
        <label for="fio">Введите ФИО</label>
        <input type="text" id="fio" name="fio" placeholder="Введите ФИО" require>
        <label for="email">Введите почту</label>
        <input type="email" id="email" name="email" placeholder="Введите почту" require>
        <label for="tel">Введите телефон</label>
        <input type="tel" id="tel" name="tel" placeholder="Введите телефон" require>
        <input type="submit" value="Зарегистрироваться">
        <p>Есть аккаунт? <a href="authPage.php">Войдите</a></p>
    </form>
</body>
</html>
