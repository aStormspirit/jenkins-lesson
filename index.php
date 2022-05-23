<!DOCTYPE html>
<html lang="en">
    <?php
    //установка локали и выбор значения
    setlocale(LC_ALL, "russian");
    $day = strftime('%d');
    $mon = strftime('%B');
    $year = strftime('%Y');
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jenkins lesson</title>
</head>
<body>
    <h1>Jenkins is awesome</h1>
    <h2>Learn php</h2>
    <blockquote>
        <?php echo "Сегодня ", $day, ' Число', $mon, ' Месяц ', $year, 'год'; ?>
    </blockquote>
</body>
</html>