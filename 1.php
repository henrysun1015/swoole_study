<?php

$server = new swoole_server('192.168.23.92',9999);
$server->set(array(
	'worker_num' => 2,    //开启两个worker进程
	'max_request' => 3,   //每个worker进程max request设置为3次
	'dispatch_mode'=>3,
));
$server->on('receive', function ($server, $fd, $from_id, $data) {
    //$server->send($fd, "Server: ".$data);
    	foreach($server->connections as $fd1)
	{
	    $server->send($fd1, $fd." say:".$data.PHP_EOL);
	}
});

$server->start();