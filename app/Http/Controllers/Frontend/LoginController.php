<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class LoginController extends Controller
{
    public function index()
    {
        \SEOMeta::setTitle('Đăng nhập');
        return view('pages.login.index');
    }
    public function login(LoginRequest  $request)
    {
        if ($request->ajax()) {
            $credentials = $request->only('email', 'password');
            $user = User::where('email', $credentials['email'])->first();
            if($user) {              
                if ($user->email_verified_at) {
                    if (\Auth::attempt($credentials)) {
                        if ($request->ajax()) {
                            return response([
                                'status'     => 200,
                                'message' => "Bạn đã đăng nhập thành công."
                            ]);
                        }
                        return redirect()->route('get_user.dashboard');
                     }
                     return response([
                        'status' => 404,
                        'message' => "Mật khẩu chưa chính xác!"
                    ]);
                } 
                return response([
                    'status' => 404,
                    'message' => "Bạn chưa xác nhận Email!"
                ]);
            }else{
                return response([
                    'status' => 404,
                    'message' => "Email không tồn tại!"
                ]);
            }         
        }
        return redirect()->route('get.home');
    }
}
