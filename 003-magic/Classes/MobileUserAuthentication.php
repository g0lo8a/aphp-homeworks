<?php
declare(strict_types=1);


trait MobileUserAuthentication
{
    private string $_mobilUserName = 'Sam';
    private string $_mobilUserPassword = 'white';

    public function authenticate(string $userName, string $userPassword)
    {
        if($this->_mobilUserName === $userName && $this->_mobilUserPassword === $userPassword){
            echo 'пользователь мобильного приложения<br>';
        }
    }
}