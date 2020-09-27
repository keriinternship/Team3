<?php
class loginModule extends Db{
    public function getAccount()
    {
        $sql = parent::$connection->prepare('SELECT * FROM login');
        return parent::select($sql);
    }
}