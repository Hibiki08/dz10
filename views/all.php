<html>
    <head>
        <meta charset="utf-8" />
        <title>Все новости</title>
    </head>
    <body>
        <ol>
    <?php
    foreach ($value as $val): ?>
        <li><a href="index.php?act=One&id=<?php echo $val['id']; ?>">
                <?php echo $val['title'];  ?></a></li>
    <?php endforeach; ?>
        </ol>
    <p><a href="index.php?ctrl=Admin&act=Add">Добавить новость:<a/></p>
    </body>
</html>