<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function getLogin(Request $request)
    {
        // Nếu user chủ động vào /login (không phải bị redirect),
        // ta ghi đè intended thành trang trước (nếu cần)
        $previous = url()->previous();
        if (! str_contains($previous, '/login')) {
            $request->session()->put('url.intended', $previous);
        }
        return view('frontend.accounts.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email'    => ['required','email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();
            // Laravel sẽ redirect về url.intended (nếu có), hoặc về /home
            return redirect()->intended('/');
        }

        return back()
            ->withErrors(['email' => 'Email hoặc mật khẩu không đúng'])
            ->onlyInput('email');
    }

    public function myDashboard()
    {
        return view('frontend.accounts.myDashboard');
    }
    public function myFavorite()
    {
        return view('frontend.accounts.myFavorite');
    }
    
    public function myOrder()
    {
        return view('frontend.accounts.myOrder');
    }
    public function myProfile()
    {
        return view('frontend.accounts.myProfile');
    }
    




}
