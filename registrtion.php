<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="./auth.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=SUSE:wght@100..800&display=swap" rel="stylesheet">
    <title>auth</title>
</head>
<body>
    <header>
        <p id="name">Долгов Дмитрий</p>
        <div id="links">
            <button class="link" onclick="window.location.href = './index.html'">Главная</button>
            <button class="link">Портфолио</button>
            <button class="link">О себе</button>
            <button class="link" onclick="window.location.href = './auth.php'">Авторизация</button>
            <button class="link" onclick="window.location.href = './appeal.html'">Обращение</button>
        </div>
        
    </header>
    <main>
        <form action="./reg.php" method="post" class="form">
            <p id="head-name">Регистрация</p>
            <div class="warper">
                <input id="login" type="text" class="text-field" placeholder="Логин" name="login">
                <input id="pass" type="password" class="text-field" placeholder="Пароль" name="pass">
                <div class="remember-warper">
                    <input id="remember" type="checkbox">
                    <label for="remember">Запомнить пароль</label>
                    
                </div>
            </div>
            <input type="submit" value="Войти" id="submit" onclick="alert('Авторизация')">
            
        </form>
    </main>
    <footer>
        <p id="email">e-mail: d.dolgovo4@yandex.ru; телефон +7 (966) 145-65-55</p>
    </footer>
    
</body>
</html>