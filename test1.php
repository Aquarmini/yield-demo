<?php
// +----------------------------------------------------------------------
// | test1.php [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2017 limingxinleo All rights reserved.
// +----------------------------------------------------------------------
// | Author: limx <715557344@qq.com> <https://github.com/limingxinleo>
// +----------------------------------------------------------------------
require 'vendor/autoload.php';

function xrange($start, $end, $step = 1)
{
    for ($i = $start; $i <= $end; $i += $step) {
        yield $i;
    }
}

foreach (xrange(1, 100) as $num) {
    dump($num);
}

$it = xrange(1, 100);
dump($it);
dump($it instanceof Iterator);