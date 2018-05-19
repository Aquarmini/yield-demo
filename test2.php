<?php
// +----------------------------------------------------------------------
// | test2.php [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2017 limingxinleo All rights reserved.
// +----------------------------------------------------------------------
// | Author: limx <715557344@qq.com> <https://github.com/limingxinleo>
// +----------------------------------------------------------------------
require 'vendor/autoload.php';

function gen()
{
    $ret = (yield 'yield1');
    dump($ret);
    $ret = (yield 'yield2');
    dump($ret);
}

$gen = gen();
dump($gen->current());
dump($gen->send('ret1'));
dump($gen->send('ret2'));