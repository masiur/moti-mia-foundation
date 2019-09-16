<?php
/**
 * Created by PhpStorm.
 * User: rat
 * Date: 9/22/17
 * Time: 9:08 PM
 */

namespace App\Http\Middleware;

use App\Responses\SimpleResponse;
use Closure;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use Tymon\JWTAuth\Facades\JWTAuth;
use Exception;

class authJWT
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        try {
            $user = JWTAuth::toUser($request->input('token'));
        } catch (Exception $e) {
            if ($e instanceof TokenInvalidException){
                return response()->json(new SimpleResponse(false,"Token is Invalid","",400),401);
            }else if ($e instanceof TokenExpiredException){
                return response()->json(new SimpleResponse(false,"Token is Expired","",400),401);
            }
            /*else{
                return response()->json(new SimpleResponse(false,"Something is wrong","",400),400);
            }*/
        }
        return $next($request);
    }
}