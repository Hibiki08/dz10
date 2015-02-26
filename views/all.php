<html>
    <head>
        <meta charset="utf-8" />
        <title>Все новости</title>
    </head>
    <body>
        <ol>
    <?php  foreach ($array as $object): ?>
        <li><a href="controllers/NewsController.php?cntr=News&act=One&id=<?php echo $object->id; ?>">
                <?php echo $object->title;  ?></a></li>
    <?php endforeach; ?>
        </ol>
    <p><a href="controllers/AdminController.php">Добавить новость:<a/></p>
    </body>
</html>