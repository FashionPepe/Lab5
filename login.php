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
            <button <?php 
                $link = "./auth.html";
                $name = 'Авторизация';
                $curentPage = true;
                
                if ($curentPage)
                    echo 'class="link" ';
                echo 'onclick="window.location.href =\''.$link.'\'"';

            ?>><?php 
                echo $name
            ?></button>
            <button <?php 
                $link = "./appeal.html";
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
        <div class="warper">
        <?php
              if ($_POST['login'] == 'dima' and $_POST['pass'] == 'dima'){ //проверяем тип обращения
                     echo '<p>Вход успешен</p>';
                     
              }else{
                     echo '<p>Не удача</p>';
                     
              }
              echo '<a class="btn" href="auth.php">Войти еще раз</a>';
            
        ?>
        </div>
        
    </main>
    <footer>
        <p id="email"><?php echo date("Сформированно d-m-Y в H:i:s"); ?></p>
    </footer>
</body>
</html>