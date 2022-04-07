

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>



<form method="POST">
<select name="select" size="1">
        <option value="earth">Земля</option>
        <option value="mars">Марс</option>
        <option value="saturn">Сатурн</option>
        <option value="uranus">Уран</option>
        </select>
        <input type="submit" value="Отправить">
        </form>

        <?php
include_once 'earth.php';

$select = $_POST["select"];

$planet = new $select();

print "Название планеты: $planet->name </br> Азота $planet->nitro </br> Кислорода $planet->o2</br> Аргона $planet->argon </br> Углекислого газа $planet->co2</br>";


?>
  <div>Давай изменим состав</div>
  <form method="POST">
<select name="select" size="1">
        <option value="earth">Земля</option>
        <option value="mars">Марс</option>
        <option value="saturn">Сатурн</option>
        <option value="uranus">Уран</option>
        </select>
        <input type="text" name="textH[]" placeholder='0%' />
    <input type="submit" value="Отправить">
        </form>






</body>
</html>