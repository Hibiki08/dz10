<html>
    <head>
        <meta charset="utf-8" />
        <title>Все новости</title>
    </head>
    <body>
    <?php  foreach ($array as $object): ?>
        <h1><?php echo $object->title; ?></h1>
        <p><?php echo $object->text; ?></p>
    <?php endforeach; ?>
    </body>
</html>