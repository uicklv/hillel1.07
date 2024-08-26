<?php

class UserFacade
{
    public static function getUserModel(): object
    {
        $pdo = Connector::getInstance();
        $builder = new MySqlQueryBuilder();
        return new UserModel($pdo, $builder);
    }
}