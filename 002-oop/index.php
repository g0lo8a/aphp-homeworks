<?php
declare(strict_types=1);

use Company\Collaborator;

function my_autoload($className)
{
    require_once __DIR__ . '/classes/' . str_replace('\\', '/', $className) . '.php';
}

spl_autoload_register("my_autoload");

$dir = new \Company\Director('Ivan', 'Ivanov', 'Director', 20);
$prog1 = new \Company\Programmer('Danila', 'Master', 'Programmer', 25);
$dir->setRolle( 'Может управлять');
$prog1->setRolle( 'Пишет код');
echo $prog1->getHtml();
Collaborator::getInfo();