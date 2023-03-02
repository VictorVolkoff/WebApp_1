<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>

<body>

    <header>
        <h2 class="margin_h2">
            <?= $page_title ?>
        </h2>
    </header>

    <nav>
        <ul>
            <li>
                <a href="index.html">Главная</a>
            </li>
            <li>
                <a href="reg.html">Регистраиция</a>
            </li>
            <li>
                <a href="auth.html">Авторизация</a>
            </li>
            <li>
                <a href="hidden_page.html">Скрытая страница</a>
            </li>
        </ul>
    </nav>

    <main>
        <?= $content ?>
    </main>
    
    <footer>
        <h2 class="marhin_h2">
            Volkov V.A. 2012
        </h2>
    </footer>

</body>
    
</html>
