<?php

namespace Mehdirmt\Common\Middleware;

use Mehdirmt\Common\Services\Interfaces\IUserService;
use Closure;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AuthGateway
{
    public function __construct(
        protected IUserService $userService
    )
    {}

    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        try {
            
            $genericUser = $this->userService->getGenericUserUsingToken( $request->bearerToken() );
            Auth::login($genericUser);

        } catch (Exception $e) {

            return response()->json([], 403);

        }

        return $next($request);
    }
}
