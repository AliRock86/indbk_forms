<?php
namespace App\Http\Middleware;
use App\Models\User;
use App\Models\Staff;
use Closure;
use Exception;
use JWTAuth;
class JwtAuthBranch{
    public function handle($request, Closure $next, $guard = null)
    {
        if(empty($request->branch_id))
        throw new Exception('branch id requird');
        try {
            $user = JWTAuth::parseToken()->authenticate();

            $staff = Staff::where('user_id',$user->id)->get();


            if($staff->branch_id != $request->branch_id){
                throw new Exception('Unauthorized Permission');
            }

        } catch (Exception $e) {
            if($e->getMessage() === 'Unauthorized Permission'){
                return response()->json([
                    'sucess' => false,
                    'data' => 'Authorization Token not found',
                ], 401);
            }elseif($e->getMessage() === 'branch id requird'){
                return response()->json([
                    'sucess' => false,
                    'data' => 'branch id requird',
                ], 407);
            }else{
                return response()->json([
                    'sucess' => false,
                    'data' => 'unknown error',
                ], 409);
            }

            }
        return $next($request);
    }
}