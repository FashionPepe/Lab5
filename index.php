<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <?php $title = "Моя страница"; ?>
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="./style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=SUSE:wght@100..800&display=swap" rel="stylesheet">
<body>
     


    
    <header>
        <p id="name">Долгов Дмитрий</p>
        <div id="links">
            <button class="link">Главная</button>
            <button class="link">Портфолио</button>
            <button class="link">О себе</button>
            <button class="link" onclick="window.location.href = './registrtion.php'">Регистрация</button>
            <button <?php 
                $link = "./auth.php";
                $name = 'Авторизация';
                $curentPage = true;
                
                if ($curentPage)
                    echo 'class="link" ';
                echo 'onclick="window.location.href =\''.$link.'\'"';

            ?>><?php 
                echo $name
            ?></button>
            <button <?php 
                $link = "./appeal.php";
                $name = 'Обращение';
                $curentPage = true;
                
                if ($curentPage)
                    echo 'class="link" ';
                echo 'onclick="window.location.href =\''.$link.'\'"';

            ?>><?php 
                echo $name
            ?></button>
        </div>
        
    </header>
    <main>
        <?php echo '<img id="me" src="img/me'.(date('s') % 2+1).'.jpg" alt="Меняющаяся фотография">'?>
        <img  src="./img/me.jpg" alt="">
        <table id="table" cellspacing="0px">
            <tr><th>Мероприятие</th><th>Результат</th></tr>
            <tr><td>Олимпиада НТО</td><td>Участник финала</td></tr>
            <tr><td>ВсОШ по Информатике</td><td>Победитель школьного этапа</td></tr>
        </table>
        <div id="info">
            <p id="info-name">Долгов Дмитрий</p>
            <p id="info-about"> Студент 2 курса Московского Политехнического университета. Разбираюсь в создании приложений с помощью языка программирования Java. Разработчик телеграм ботов со стажем 2 года. Начинающий 1С разработчик.
                <ul class="list">
                <?php
                 
                $educ = ['Школа №78 г. Оренбург', 'Быковская школа с. Быково', 'Московский политех г. Москва'];
                for ($i = 0; $i < 3; $i++)
                    echo "<li>".$educ[$i]."</li>\n"?>
                </ul>
            </p>
        </div>
    </main>
    <footer>
        <p id="email"><?php date_default_timezone_set('Europe/Moscow');
        echo date("Сформированно d-m-Y в H:i:s"); ?></p>
    </footer>
</body>
</html>