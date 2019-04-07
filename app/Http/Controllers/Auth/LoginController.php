<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }



    /**
     * Attempt to log the user into the application. 重写AuthenticatesUsers中的登录方法
     *
     * @param  \Illuminate\Http\Request  $request
     * @return bool
     */
    protected function attemptLogin(Request $request)
    {
        //支持邮箱或者手机号登录
        $key = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'phone';
        $identify[$key] = $request->username;
        $identify['password'] = $request->password;
        return $this->guard()->attempt(
        //如果要实现email或者手机号+密码的方式登录，那么这里的credentials数组要传不同的键名，email或者phone
        //这一步是登录的关键，验证+创建session都在这里了，这方法在sessionguard.php中
            $identify, $request->filled('remember')
        );
    }

    /**
     * Get the login username to be used by the controller. 重写AuthenticatesUsers的方法
     *
     * @return string
     */
    public function username()
    {
        return 'username';
    }
}
