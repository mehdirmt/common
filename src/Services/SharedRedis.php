<?php

namespace Mehdirmt\Common\Services;

use Mehdirmt\Common\Services\Interfaces\ISharedRedis;
use Illuminate\Support\Facades\Redis;

class SharedRedis implements ISharedRedis
{
    protected $redisConnection;

    public function __construct()
    {
        $this->redisConnection = Redis::connection('redis_shared');
    }

    public function get(string $key): mixed
    {
        return $this->redisConnection->get($key);
    }

    public function set(string $key, $value): void
    {
        $this->redisConnection->set($key, $value);
    }

    public function del(string $key): void
    {
        $this->redisConnection->del($key);
    }
}