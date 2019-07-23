<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use App\UserLoginToken;

class UserAuthentication
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
        if(!isset($_GET['user_id']) || $_GET['user_id'] == null) {
            return redirect(route('welcome')) -> withErrors('User id-ul este necesar!');
        }

        if(!isset($_GET['token']) || $_GET['token'] == null) {
            return redirect(route('welcome')) -> withErrors('Token-ul este necesar!');
        }

        $user = User::find($_GET['user_id']);

        if($user == null) {
            return redirect(route('welcome')) -> withErrors('User id-ul este invalid!');
        }

        $token = UserLoginToken::where('user_id', $user -> id) -> where('token', $_GET['token']) -> first();

        if($token == null) {
            return redirect(route('welcome')) -> withErrors('Token-ul este invalid!');
        }

        if($token -> confirmed == 0) {
            return redirect(route('welcome')) -> withErrors('Nu sunteti autentifcat!');
        }

        return $next($request);
    }
}