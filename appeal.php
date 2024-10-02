<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="./appeal.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=SUSE:wght@100..800&display=swap" rel="stylesheet">
    <title>appeal</title>
</head>
<body>
    <header>
        <p id="nameH">Долгов Дмитрий</p>
        <div id="links">
            <button class="link" onclick="window.location.href = './index.html'">Главная</button>
            <button class="link">Портфолио</button>
            <button class="link">О себе</button>
            <button class="link" onclick="window.location.href = './auth.php'">Авторизация</button>
            <button class="link">Обращение</button>
        </div>
        
    </header>
    <main>
        <form action="./home.php" method="get" class="form">
            <p id="head-name">Обращение</p>
            <div class="warper">
                <input id="name" type="text" class="text-field" placeholder="ФИО" name="name" value="<?php if(isset($_GET['name'])) echo $_GET['name']; ?>">
                <input id="email" type="text" class="text-field" placeholder="email" name="email" value="<?php if(isset($_GET['name'])) echo $_GET['email']; ?>">
                <div class="radio_warper">
                    <label for="friend">От друзей</label>
                    <input type="radio" id="friend" name="radio" value="1" <?php if(isset($_GET['name']))if ($_GET['radio'] == '1'){ echo 'checked';} ;?>>
                    <label for="internet">Из интернета</label>
                    <input type="radio" id="internet" name="radio" value="2" <?php if(isset($_GET['name']))if ($_GET['radio'] == '2'){ echo 'checked';} ;?>>

                </div>
                
                <select name="select" id="select">
                    <option value="jaloba"  <?php if(isset($_GET['name']))if ($_GET['select'] == 'jaloba'){ echo 'selected';} ;?> >Жалоба</option>
                    <option value="propose" <?php if(isset($_GET['name']))if ($_GET['select'] == 'propose'){ echo 'selected';} ;?>>Предложение</option>
                </select>
                <div class="agree-warper">
                    <input id="remember" type="checkbox" name="check" <?php if(isset($_GET['name']))if ($_GET['check'] == 'on'){ echo 'checked';} ;?>>
                    <label for="remember" >Даю согласие на обработку персональных данных</label>     
                </div>
                <textarea name="text" id="text-area" value=""><?php if(isset($_GET['name'])) echo $_GET['text']; ?></textarea>
                <input id="file" type="file" name="file" value="<?php if(isset($_FILES['name'])) echo $_FILES['name']; ?>">
                </div>
                
                
            </div>
            <input type="submit" value="Отправить" id="submit">
            
        </form>
    </main>
    <footer>
        <p id="e-mail">e-mail: d.dolgovo4@yandex.ru; телефон +7 (966) 145-65-55</p>
    </footer>
    
</body>
</html>