<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Uni_Category;
use App\Http\Controllers\Controller;
use App\Models\Uni_Contact;
use Illuminate\Http\Request;
use DB;
use Mail;
use Carbon\Carbon;
use App\Mail\EmailNew;
use App\Mail\EmailConTact;
use Illuminate\Support\Str;
use Modules\Admin\Http\Requests\AdminContactRequest;

class Uni_ContactController extends Controller
{
    public function index()
    {
        \SEOMeta::setTitle('Liên hệ');
        $array_subject = [
            '1' => 'Yêu Cầu Sản Phẩm',
            '2' => 'Liên Quan đơn hàng',
            '3' => 'Tài Khoản Người Dùng',
            '4' => 'Hợp Tác Phát Triển',
            '5' => 'Chủ đề khác',
        ];

        $menu = Uni_Category::select('name', 'slug')->get();
        $menu1 = array();
        foreach ($menu as $l) {

            $menu1[] = $l;
        }

        $infomation = DB::table('configurations')->select('logo', 'name', 'address', 'email', 'hotline', 'facebook', 'youtube', 'twitter', 'instagram', 'footer_bottom','footer_description','pinterest','linkedin')->get();
        $infomation1 = [];
        foreach ($infomation as $l) {
            $infomation1['name'] = $l->name;
            $infomation1['logo'] = $l->logo;
            $infomation1['address'] = $l->address;
            $infomation1['email'] = $l->email;
            $infomation1['hotline'] = $l->hotline;
            $infomation1['facebook'] = $l->facebook;
            $infomation1['youtube'] = $l->youtube;
            $infomation1['twitter'] = $l->twitter;
            $infomation1['instagram'] = $l->instagram;
            $infomation1['linkedin'] = $l->linkedin;
            $infomation1['pinterest'] = $l->pinterest;
            $infomation1['footer_bottom'] = $l->footer_bottom;
            $infomation1['footer_description'] = $l->footer_description;
        }

        $viewdata = [
            'subject' => $array_subject,
            'info' => $infomation1,
            'menu1' => $menu1,
        ];
        return view('pages.contact.index', $viewdata);
    }

    public function submitContact(Request $request)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'phone' => $request->phone,
            'message' => $request->message,
            "created_at" =>  Carbon::now(),
            "updated_at" => null,
        ];
        $id = Uni_Contact::insertGetId($data);
        if ($id) {
            Mail::to('info@unimall.vn')->send(new EmailConTact($data));
            return 'Bạn đã gửi thành công!';
        }
    }
    public function getNewsLetters(Request $request)
    {

        if ($request->user_email) {
            $data_contact = Uni_Contact::where('email', $request->user_email)->where('is_newsletter', 1)->first();
            if ($data_contact != null) {
                return response()->json([
                    'status' => 202,
                    'message' => 'Email đã tồn tại trong hệ thống'
                ]);
            } else {
                $data = [
                    'name' => 'Yêu cầu Newsletters',
                    'email' => $request->user_email,
                    'phone' => 0000000000,
                    'message' => 'Yêu cầu Newsletters',
                    "created_at" =>  Carbon::Now(),
                    "is_newsletter" => 1,
                    'code_verication' => Str::random(40)
                ];
            }
            $id = Uni_Contact::insertGetId($data);
            if ($id) {
            Mail::to($request->user_email)->send(new EmailNew($data));
                return response()->json([
                    'status' => 200,
                    'message' => 'Hệ thống đã nhận được email của bạn, hãy xác nhận email để hoàn tất đăng ký nhận bản tin.'
                ]);
            }
        }
    }

    public function verify_email_new($code_verication)
    {
        $user = Uni_Contact::where('code_verication', $code_verication)->first();
        if (!$user) {
            $this->showEmailError();
            return redirect()->route('get.home');
        } else {
            if ($user->email_verified_at) {
                $this->showEmailSuccess();
                return redirect()->route('get.home');
            } else {
                $user->update([
                    'email_verified_at' => \Carbon\Carbon::now()
                ]);
                $this->showEmailSuccess();
                return redirect()->route('get.home');
            }
        }
    }
    public function showEmailError($message = 'Email chưa được xác nhận')
    {
        return \Session::flash('toastr', [
            'type' => 'error',
            'message' => $message
        ]);
    }
    public function showEmailSuccess($message = 'Xác nhận Email yêu cầu đăng ký nhận bản tin của UniMall thành công')
    {
        return \Session::flash('toastr', [
            'type' => 'success',
            'message' => $message
        ]);
    }
}
