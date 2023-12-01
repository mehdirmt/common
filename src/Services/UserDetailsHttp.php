<?php

namespace Mehdirmt\Common\Services;

use Mehdirmt\Common\Services\Interfaces\IUserDetails;
use Illuminate\Support\Facades\Http;

class UserDetailsHttp implements IUserDetails
{
    public function getDetails(string $token): ?array
    {
        $result = Http::post('user_service_address', ['token' => $token]);

        // check result validity

        return $result['user'];
    }
}