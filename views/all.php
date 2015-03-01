<html>
    <head>
        <meta charset="utf-8" />
        <title>Все новости</title>
    </head>
    <body>
        <ol>
    <?php
    foreach ($items as $object): ?>
        <li><a href="index.php?act=One&id=<?php echo $object->id; ?>">
                <?php echo $object->title;  ?></a></li>
    <?php endforeach; ?>
        </ol>
    <p><a href="controllers/AdminController.php">Добавить новость:<a/></p>
    </body>
</html>