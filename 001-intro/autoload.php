<?php
declare(strict_types=1);
function autoloader($classname, $dir) {
    require_once "classes/$dir/$classname.php";
}
spl_autoload_register();