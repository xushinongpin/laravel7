<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/13
 * Time: 2:45
 */
namespace App;

class Example
{
    protected $foo;

    public function __construct(Foo $foo)
    {
        $this->foo = $foo;
    }
}