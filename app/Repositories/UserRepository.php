<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/13
 * Time: 3:30
 */

namespace App\Repositories;

interface UserRepository{
    public function create($attributes);
}