<?php

use Vof\Cache\Backend\Redis;
use Vof\Cache\Frontend\Data as FrontData;

// Cache data for 2 days
$frontCache = new FrontData(
    [
        "lifetime" => 172800,
    ]
);

// Create the Cache setting redis connection options
$cache = new Redis(
    $frontCache,
    [
        "host"       => "r-wz9f4a1ab70f7274.redis.rds.aliyuncs.com",
        "port"       => 6379,
        "auth"       => "0FKeMf10gle2ml670Rz8",
        "persistent" => false,
        "index"      => 3,
    ]
);

// Cache arbitrary data
$cache->save("my-data", [1, 2, 3, 4, 5]);

// Get data
$data = $cache->get("my-data");

var_dump($data);