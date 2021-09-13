<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\RestcodeRequest;
use App\Http\Requests\ForgetRequest;
use App\Models\User;
use App\Models\PasswordResett;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Mail;
use App\Mail\EmailVerificationMail;
use App\Mail\EmailRestPassword;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail as FacadesMail;

class RegisterController extends Controller
{
    public function index()
    {
        \SEOMeta::setTitle('Đăng ký thành viên');
        \SEOMeta::setDescription('Đăng ký thành viên.');
        \SEOMeta::setCanonical(\Request::url());
        \OpenGraph::setDescription('Đăng ký thành viên.');
        \OpenGraph::setTitle('Đăng ký thành viên.');
        \OpenGraph::setUrl(\Request::url());
        \OpenGraph::addProperty('type', 'articles');
        return view('pages.register.index');
    }
    public function indexb2b()
    {
        \SEOMeta::setTitle('Đăng ký thành viên B2B');
        \SEOMeta::setDescription('Đăng ký làm đại lý để nhận được nhiều ưu đãi hơn.');
        \SEOMeta::setCanonical(\Request::url());
        \OpenGraph::setDescription('Đăng ký làm đại lý để nhận được nhiều ưu đãi hơn.');
        \OpenGraph::setTitle('Đăng ký thành viên B2B');
        \OpenGraph::setUrl(\Request::url());
        \OpenGraph::addProperty('type', 'articles');
        return view('pages.registerb2b.index');
    }
    public function register(RegisterRequest $request)
    {
        if ($request->ajax()) {
            $code =  200;
            try {
                $data               = $request->except('_token', 'remember', 'code_verication','password_confirmation');

                $data['created_at'] = Carbon::now();
                $data['password'] = bcrypt($request->password);
                $data['provider'] = 'register';
                $data['avatar_social'] = '';
                $data['provider_id']  = 0;
                $data['code_verication']  = Str::random(40);
                $data['type']  = $request->type;

                $user = User::insertGetId($data);

                if ($user) {
                     Mail::to($data['email'])->send(new EmailVerificationMail($data));
                    return response([
                        'status'     => 200,
                        'message' => "Xác nhận Email của bạn để hoàn tất đăng ký!"
                    ]);
                }
            } catch (\Exception $exception) {
                $code = 501;
                Log::error("[Register]: " . $exception->getMessage());
            }
            return response()->json([
                'code'     => $code,
            ]);
        }
    }
    public function registerb2b(RegisterRequest $request)
    {
        if ($request->ajax()) {
            $code =  200;
            try {
                $data               = $request->except('_token', 'remember', 'code_verication','password_confirmation');

                $data['created_at'] = Carbon::now();
                $data['password'] = bcrypt($request->password);
                $data['provider'] = 'register';
                $data['avatar_social'] = '';
                $data['provider_id']  = 0;
                $data['code_verication']  = Str::random(40);
                $data['type']  = 1;

                $user = User::insertGetId($data);

                if ($user) {
                     Mail::to($data['email'])->send(new EmailVerificationMail($data));
                    return response([
                        'status'     => 200,
                        'message' => "Xác nhận Email của bạn để hoàn tất đăng ký!"
                    ]);
                }
            } catch (\Exception $exception) {
                $code = 501;
                Log::error("[Register]: " . $exception->getMessage());
            }
            return response()->json([
                'code'     => $code,
            ]);
        }
    }
    public function showEmailSuccess($message = 'Xác nhận Email thành công')
    {
        return \Session::flash('toastr', [
            'type' => 'success',
            'message' => $message
        ]);
    }
    public function showEmailError($message = 'Email chưa được xác nhận')
    {
        return \Session::flash('toastr', [
            'type' => 'error',
            'message' => $message
        ]);
    }
    public function verify_email($code_verication)
    {
        $user = User::where('code_verication', $code_verication)->first();
        if (!$user) {
            $this->showEmailError();
            return redirect()->route('get.home');
        } else {
            if ($user->email_verified_at) {
                $this->showEmailSuccess();
                return redirect()->route('get.login');
            } else {
                $user->update([
                    'email_verified_at' => \Carbon\Carbon::now()
                ]);
                $this->showEmailSuccess();
                return redirect()->route('get.login');
            }
        }
    }
    public function logout()
    {
        \Auth::logout();
        return redirect()->route('get.home');
    }

    public function forgetpassword()
    {
        return view('pages.forgetpassword.index');
    }
    public function showforgetpassword($message = 'Email không hợp lệ')
    {
        return \Session::flash('toastr', [
            'type' => 'error',
            'message' => $message
        ]);
    }
    public function forgetpasswordSuccess($message = 'Chúng tôi gửi một đường link tới Email của bạn hãy truy cập và thay đổi mật khẩu.')
    {
        return \Session::flash('toastr', [
            'type' => 'success',
            'message' => $message
        ]);
    }
    public function postforgetpassword(ForgetRequest $request)
    {
        $users = User::where('email', $request->emails)->first();
        if (!$users) {
            $this->showforgetpassword();
            return redirect()->route('get.forgetpassword');
        } else {
            $data               = $request->except('_token', 'user_id', 'reset_code', 'emails');
            $data['created_at'] = Carbon::now();
            $data['user_id'] =  $users->id;
            $data['reset_code'] = Str::random(40);
            $PasswordReset = PasswordResett::insertGetId($data);
            if ($PasswordReset) {
                Mail::to($users->email)->send(new EmailRestPassword($users, $data));
                $this->forgetpasswordSuccess();
                return redirect()->route('get.forgetpassword');
            }
        }
    }
    public function showtimeforget($message = 'Thời gian chờ thay đổi mật khẩu đã hết xin vui lòng điền lại Email')
    {
        return \Session::flash('toastr', [
            'type' => 'error',
            'message' => $message
        ]);
    }
    public function get_reset_code($reset_code)
    {
        $pass_reset = PasswordResett::where('reset_code', $reset_code)->first();
        $user_re = User::where('id', $pass_reset->user_id)->first();
        if (!$pass_reset || Carbon::now()->subMinutes(50) > $pass_reset->created_at) {
            $this->showtimeforget();
            return redirect()->route('get.forgetpassword');
        } else {
            return view('pages.forgetpassword.create', compact('reset_code', 'user_re'));
        }
    }
    public function forSuccess($message = 'Bạn đã thay đổi mật khẩu thành công.')
    {
        return \Session::flash('toastr', [
            'type' => 'success',
            'message' => $message
        ]);
    }
    public function postresetcodepassword($reset_code, RestcodeRequest $request)
    {
       
        $pass_reset = PasswordResett::where('reset_code', $reset_code)->first();
        if (!$pass_reset || Carbon::now()->subMinutes(10) > $pass_reset->created_at) {
            $this->showtimeforget();
            return redirect()->route('get.forgetpassword');
        } else {
            $user_re = User::find($pass_reset->user_id);
            if ($user_re->email != $request->re_email) {
                $this->showforgetpassword();
                return redirect()->route('get.forgetpassword');
            } else {
                PasswordResett::where('user_id', $user_re->id)->delete();
                $user_re->update([
                    'password' => bcrypt($request->re_password)
                ]);
                $this->forSuccess();
                return redirect()->route('get.home');                           
            }
        }
    }
}
