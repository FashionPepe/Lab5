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
              echo '<p> Здравствуйте,'.$_POST['name'].'</p>'; //выводим ФИО
              if ($_POST['select'] == 'propose'){ //проверяем тип обращения
                     echo '<p>Спасибо за ваше предложение:</p>';
                     echo '<textarea>'.$_POST['text'].'</textarea>';//вывод текста сообщения
              }else{
                     echo '<p>Мы рассмотрим Вашу жалобу:</p>';
                     echo '<textarea>'.$_POST['text'].'</textarea>';
              }
              if (isset($_POST['file']) & $_POST['file'] != '') echo '<p>Вы приложили следующий файл: '.$_POST['file'].'</p>';
              echo '<a class="btn" href="index.php?N='.$_POST['name'].'&E='.$_POST['email'].'&S='.$_POST['select'].'">Заполнить снова</a>';
            
        ?>
        </div>
        
    </main>
    <footer>
        <p id="email"><?php echo date("Сформированно d-m-Y в H:i:s"); ?></p>
    </footer>
</body>
</html>