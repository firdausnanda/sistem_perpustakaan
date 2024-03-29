<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

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
    protected $redirectTo;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectTo()
    {
        switch (Auth::user()->roles[0]->name) {
            case 'admin':
              $this->redirectTo = '/admin';
              return $this->redirectTo;
              break;
            case 'mahasiswa':
              $this->redirectTo = '/user';
              return $this->redirectTo;
              break;
            case 'dosen':
              $this->redirectTo = '/user';
              return $this->redirectTo;
              break;
            default:
              $this->redirectTo = '/login';
              return $this->redirectTo;
              break;
          }
    }
}
