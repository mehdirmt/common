<?php

namespace Mehdirmt\Common\Services;

use Mehdirmt\Common\Exceptions\InvalidTokenException;
use Mehdirmt\Common\Services\Interfaces\IUserDetails;
use Mehdirmt\Common\Services\Interfaces\IUserService;
use Illuminate\Auth\GenericUser;

class UserService implements IUserService
{
    public function __construct(
        protected IUserDetails $userDetailsRedisProxy
    )
    {}

    public function getGenericUserUsingToken(string $token): GenericUser
    {
        $userDetails = $this->userDetailsRedisProxy->getDetails($token);
        
        if ( is_null($userDetails) ) {
            throw new InvalidTokenException('invalid token');
        }

        return new GenericUser($userDetails);
    }
}