<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

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
    protected $redirectTo = '/backsite/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function attemptLogin(Request $request)
    {
        $arr = [
            'email' => $request->email,
            'password' => $request->password
        ];

        return Auth::attempt($arr);
    }

    protected function sendFailedLoginResponse($status = NULL, $idDinas = NULL)
    {
        $arrMessages = [];
        if ($status === User::STATUS['tidak_aktif']) {
            $arrMessages =  ['error' => 'Maaf, Akun Anda Non-Aktif, Silahkan Hubungi Admin Jika Ingin Diaktifkan!'];
        } elseif ($status === User::STATUS['pending']) {
            $arrMessages = ['error' => 'Maaf, Akun Anda Statusnya Pending, Silahkan Aktivasi Terlebih Dahulu!'];
        } elseif ($status !== NULL && $idDinas !== \Session::get('dinas_id')) {
            $arrMessages = ['error' => 'Maaf, anda tidak bisa akses di web dinas yang bukan dari dinas anda!'];
        } else {
            $arrMessages = ['error' => 'Kredensial yang anda masukkan salah ! '];
        }

        throw ValidationException::withMessages([
            $this->username() => $arrMessages,
        ])->redirectTo("/login");
    }

    protected function authenticated(Request $request, $user)
    {
        return redirect()->to('backsite/dashboard');
    }
    public function showLoginForm()
    {
        return view('auth.login');
    }
}
