<html>
    <head>
        <meta charset="utf-8" />
        <title>Все новости</title>
    </head>
    <body>
        <form action="../controllers/AddController.php" method="post">
            <label>Название:<br/>
            <input type="text" name="title">
            </label><br/>
            <label>Текст:<br/>
            <textarea name="text"></textarea><br/>
            </label>
            <input type="submit"/>
        </form>
    </body>
</html>