<html>
<head>
    <meta charset="utf-8" />
    <title>Все новости</title>
</head>
<body>

    <h1><?php echo $val['title']; ?></h1>
    <p><?php echo $val['text']; ?></p>
    <p><a href="index.php?ctrl=Admin&act=Upd&id=<?php echo $val['id']; ?>">Изменить:<a/></p>
    <p><a href="index.php?ctrl=Admin&act=Dell&id=<?php echo $val['id']; ?>">Удалить:<a/></p>

</body>
</html>