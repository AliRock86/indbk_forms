<?php
namespace App\Http\Middleware;
use App\Models\User;
use Closure;
use Exception;
use JWTAuth;
class JwtAuthEmp{
    public function handle($request, Closure $next, $guard = null)
    {
        try {
            $user = JWTAuth::parseToken()->authenticate();

            if($user->status->status_name != 'active'){
                throw new Exception('User Not Active');
            }
            if (!$user) {
                throw new Exception('User Not Found');
            }elseif ($user->role->role_name != 'employ') {
                throw new Exception('Unauthorized Permission');
            }

        } catch (Exception $e) {
            if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenInvalidException) {
                return response()->json([
                    'sucess' => false,
                    'data' => 'Token Invalid',
                ], 401);
            } else if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException) {

                return response()->json([
                    'sucess' => false,
                    'data' => 'Token Expired',
                ], 401);
            } else {
                if ($e->getMessage() === 'User Not Found') {

                    return response()->json([
                        'sucess' => false,
                        'data' => 'User Not Found',
                    ], 406);
                }elseif($e->getMessage() === 'Unauthorized Permission'){
                    return response()->json([
                        'sucess' => false,
                        'data' => 'Unauthorized Permission',
                    ], 407);
                }elseif($e->getMessage() === 'User Not Active'){
                    return response()->json([
                        'sucess' => false,
                        'data' => 'User Not Active',
                    ], 409);
                }

                return response()->json([
                    'sucess' => false,
                    'data' => 'Authorization Token not found',
                ], 401);
            }
        }
        return $next($request);
    }
}