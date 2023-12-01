<?php

namespace Mehdirmt\Common\Services\Interfaces;

interface ISharedRedis
{
    public function get(string $key): mixed;

    public function set(string $key, $value): void;

    public function del(string $key): void;
}