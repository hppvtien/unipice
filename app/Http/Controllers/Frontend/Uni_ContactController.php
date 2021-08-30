<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Uni_Category;
use App\Http\Controllers\Controller;
use App\Models\Uni_Contact;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
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

        $infomation = DB::table('configurations')->select('logo', 'name', 'address', 'email', 'hotline', 'facebook', 'youtube', 'twitter', 'instagram', 'footer_bottom')->get();
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
            $infomation1['footer_bottom'] = $l->footer_bottom;
        }

        $viewdata = [
            'subject' => $array_subject,
            'info' => $infomation1,
            'menu1' => $menu1,
        ];

        return view('pages.contact.index', $viewdata);
    }

    public function submitContact(AdminContactRequest $request)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
            "created_at" =>  Carbon::now(),
            "updated_at" => null,
        ];
        $id = Uni_Contact::insertGetId($data);

        if ($id) {
            return \Session::flash('toastr', [
                'type' => 'success',
                'message' => 'Bạn đã gửi thành công!!!!',
            ]);
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
                ];
            }
            // dd($data);
            $id = Uni_Contact::insertGetId($data);
            if ($id) {
                return response()->json([
                    'status' => 200,
                    'message' => 'Chúng tôi đã nhận được email và sẽ phản hồi ngay!'
                ]);
            }
        }
    }
}
