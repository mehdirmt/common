<?php

namespace Mehdirmt\Common\Services\Interfaces;

use Illuminate\Auth\GenericUser;

interface IUserService
{
    public function getGenericUserUsingToken(string $token): GenericUser;
}