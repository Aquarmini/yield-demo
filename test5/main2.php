<?php
// +----------------------------------------------------------------------
// | main2.php [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2017 limingxinleo All rights reserved.
// +----------------------------------------------------------------------
// | Author: limx <715557344@qq.com> <https://github.com/limingxinleo>
// +----------------------------------------------------------------------
require __DIR__ . '/../vendor/autoload.php';

use Xin\Redis;

function server($port)
{
    echo "Starting server at port $port...\n";

    $socket = @stream_socket_server("tcp://0.0.0.0:$port", $errNo, $errStr);
    if (!$socket) throw new Exception($errStr, $errNo);

    stream_set_blocking($socket, 0);

    while (true) {
        $clientSocket = stream_socket_accept($socket);
        dump($clientSocket);
        handleClient($clientSocket);
    }
}

function handleClient($socket)
{
    $btime = microtime(true);

    $data = fread($socket, 8192);

    $msg = "$data";
    $msgLength = strlen($msg);

    $response = <<<RES
HTTP/1.1 200 OK\r
Content-Type: text/plain\r
Content-Length: $msgLength\r
Connection: close\r
\r
$msg
RES;

    while (microtime(true) - $btime <  0.01) {

    }

    fwrite($socket, $response);

    fclose($socket);
}

server(8001);