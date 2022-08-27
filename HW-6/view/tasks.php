
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?=$pageHeader?></title>
</head>
<body>
   
<?php if ($username !== null) : ?>
    <p>Рады вас приветствовать, <?= $username ?>. <a href="?action=logout">[Выход]</a></p>
<?php endif ?><br>

    <form action="/?controller=tasks&action=add" method="post">
        <input type="text" name="task" placeholder="Напишите задачу"/>
        <input type="submit" value="Добавить"/>
    </form>
<?php foreach ($tasks as $key => $task): ?>
<div>
    <?=$task->getDescription()?> 
    <a href="/?controller=tasks&action=done&key=<?=$key?>">Сделано</a>
</div>
<?php endforeach; ?>


</body>
</html>

