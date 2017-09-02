<?php

use Vof\Session\Adapter\Redis;

 $session = new Redis(
     [
         "uniqueId"   => "yaf",
         "host"       => "r-wz9f4a1ab70f7274.redis.rds.aliyuncs.com",
         "port"       => 6379,
         "auth"       => "0FKeMf10gle2ml670Rz8",
         "persistent" => false,
         "lifetime"   => 3600,
         "prefix"     => "my",
         "index"      => 3,
     ]
 );

 $session->start();

 $session->set("var", "some-value");

 echo $session->get("var");
