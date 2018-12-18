<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/13
 * Time: 3:31
 */
namespace App\Repositories;

class DbUserRepository implements UserRepository
{
    public function create($attributes)
    {
        dd('creating the user');
        // TODO: Implement create() method.
    }
}