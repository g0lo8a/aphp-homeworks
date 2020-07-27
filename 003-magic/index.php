<?php
declare(strict_types=1);

use User\User;

function my_autoload($className)
{
    require_once __DIR__ . '/Classes/' . str_replace('\\', '/', $className) . '.php';
}

spl_autoload_register("my_autoload");
$user1 = new User();
$user1->authenticate('Sam', 'white');
$user1->auth('Elon', 'notmusk');

$person1 = new Person();
$person1->name = 'Ivan';
$person1->login = 'login';
$person1->password = 'password';
echo $person1;
echo '<br>';
$person1serialize = serialize($person1);
echo "serialize: $person1serialize";
echo '<br>';
$person1unserialize = unserialize($person1serialize);
echo "unserialize: $person1unserialize";
echo '<br>';
$person1->iterator();
$person1 = str_replace('login', 'newLogin', $person1);
echo '<br>';
echo $person1;
$person2 = new Person();
$person2->name = 'Vasiliy';
$person2->login = 'loginVasiliy';
$person2->password = 'passwordVasiliy';
echo '<br>';
$listOfPersons = new listOfPersons();
$listOfPersons->list = $person1;
$listOfPersons->list = $person2;
$list = $listOfPersons->getList();
foreach ($list as $name => $item){
    echo "$name=>$item<br>";
}
