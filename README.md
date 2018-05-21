# Yield 使用DEMO

[原博客](http://www.laruence.com/2015/05/28/3038.html)

## 普通使用
yield 会返回一个迭代器，效果与指针类似
> 详情见 test1.php

## Yield的效果
yield 在返回一个迭代器后，并不会执行后面的代码
> 详情见 test2.php

## 简单的任务调度
> 详情见 test3

## 任务与调度器间通讯
> 详情见 test4

## 非阻塞IO WEB服务
我们在逻辑体里，使用while(microtime(true) - $btime <  0.01)模拟延时操作
> 详情见 test5

## 测试用例
$ ./webbench -c 20 http://localhost:8000/ -t 5
$ ./webbench -c 20 http://localhost:8001/ -t 5
