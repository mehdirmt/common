<?php

namespace Mehdirmt\Common\Services;

use Mehdirmt\Common\Services\Interfaces\ISharedRedis;
use Mehdirmt\Common\Services\Interfaces\IUserDetails;

class UserDetailsRedisProxy implements IUserDetails
{
    public function __construct(
        protected ISharedRedis $redisShared,
        protected IUserDetails $userDetailsHttp
    )
    {}

    public function getDetails(string $token): ?array
    {
        $result = $this->redisShared->get($token);
        
        if ( is_null($result) ) {
            $result = $this->userDetailsHttp->getDetails($token);
        }

        return $result;
    }
}