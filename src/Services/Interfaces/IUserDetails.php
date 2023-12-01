<?php

namespace Mehdirmt\Common\Services\Interfaces;

interface IUserDetails
{
    public function getDetails(string $token): ?array;
}