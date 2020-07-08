<?php
declare(strict_types=1);
require_once 'classes/College/Student.php';
require_once 'classes/Garage/Car.php';
require_once 'classes/Paraphernalia/Tv.php';
$student1 = new \College\Student('Sam', 'White', 'Programing', 'Web-dev', 'aphp-1', 'SPB', '322-223-22-33');
$student2 = new \College\Student('Kuvalda', 'Molotov', 'Kuznya', 'Tydysch', 'Ruchka_molota', 'Kuzneck', '893475983');
$student3 = new \College\Student('Gans', 'Muller', 'Автодело', 'Builder', 'Riveting Buckets', 'Zurich', '29698457805');
$car1 = new \Garage\Car('Mercedes-Benz E-Class', 'Grey','Coupe', 'petrol 2,0', 65000);
$car2 = new \Garage\Car('BMW', 'Black','Sedan', 'petrol 3,0', 85000);
$car3 = new \Garage\Car('Moskvich', 'Orange','Combi', 'petrol 1,3', 95);
$tv1 = new \Paraphernalia\Tv('Crystal UHD 4K Smart TV TU8000 Series 8', '82"', '199 990');
$tv2 = new \Paraphernalia\Tv('Q77T 4K Smart QLED TV 2020', '75"', '199 900');
$tv3 = new \Paraphernalia\Tv('QLED The Serif TV 2020', '55"', '114 990');
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>001-intro</title>
</head>
<body>
<h1>001-intro</h1>
<section>
    <h2>Students</h2>
    <table>
        <tbody>
        <tr>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Факультет</th>
            <th>Профессия</th>
            <th>Курс</th>
            <th>Адрес</th>
            <th>Телефон</th>
        </tr>
        <?php
        echo $student1->showInfo();
        echo $student2->showInfo();
        echo $student3->showInfo();
        ?>
        </tbody>
    </table>
</section>
<section>
    <h2>Garage</h2>
    <table>
        <tbody>
        <tr>
            <th>Марка</th>
            <th>Цвет</th>
            <th>Кузов</th>
            <th>Двигатель</th>
            <th>Цена €</th>
        </tr>
        <?php
        $car1->changeColor('White');
        echo $car1->showInfo();
        echo $car2->showInfo();
        echo $car3->showInfo();
        ?>
        </tbody>
    </table>
</section>
<section>
    <h2>Paraphernalia</h2>
    <table>
        <tbody>
        <tr>
            <th>Марка</th>
            <th>Диагональ</th>
            <th>Цена ₽</th>
        </tr>
        <?php
        echo $tv1->showInfo();
        echo $tv2->showInfo();
        echo $tv3->showInfo();
        ?>
        </tbody>
    </table>
</section>
</body>
</html>
