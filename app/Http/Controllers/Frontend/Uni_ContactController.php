<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Uni_Category;
use App\Http\Controllers\Controller;
use App\Models\Uni_Contact;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

class Uni_ContactController extends Controller
{
    public function index(){
        \SEOMeta::setTitle('Liên hệ');
        $array_subject = [
            '1' => 'Chăm Sóc Khách Hàng',
            '2' => 'Tư Vấn Cá Nhân',
            '3' => 'Dữ Liệu Người Dùng',
        ];

        $menu = Uni_Category::select('name', 'slug')->get();
        $menu1 = array();
        foreach($menu as $l){
            
            $menu1[] = $l;
        }

        $infomation = DB::table('configurations')->select('logo','name','address','email','hotline','facebook','youtube','twitter','instagram','footer_bottom')->get();
        $infomation1 = [];
        foreach($infomation as $l){
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

    public function getformsubmit(Request $request){
        
        if($request->_token){

            if($request->name){
                $data['name'] = $request->name;
            }
            if($request->email){
                $data['email'] = $request->email;
            }
            if($request->telephone){
                $data['telephone'] = $request->telephone;
            }
            if($request->comment){
                $data['mess'] = $request->comment;
            }
            if($request->subject){
                $data['subject'] = $request->subject;
            }
            
            $id = DB::table('uni_contact')->insertGetId(
                [
                    'name' => $data['name'], 
                    'email' => $data['email'], 
                    'phone' => $data['telephone'], 
                    'message' => $data['mess'],
                    "created_at" =>  Carbon::now(),
                    "updated_at" => null,
                ]
            );

            if($id)
            {
                return redirect('/lien-he');
            }
        }  

        if($request->user_email){
            $data['email'] = $request->user_email;
            $data['name'] = $request->name ?? 'N/A';
            $data['telephone'] = $request->phone ?? 0;
            $data['mess'] = 'Theo dõi bản tin của chúng tôi';
            $data['subject'] = 0;

            $id = DB::table('uni_contact')->insertGetId(
                [
                    'name' => $data['name'], 
                    'email' => $data['email'], 
                    'phone' => $data['telephone'], 
                    'message' => $data['mess'],
                    "created_at" =>  date('Y-m-d H:i:s'),
                    "updated_at" => null,
                ]
            );
            if($id){
                return 'Chúng tôi đã nhận được email và sẽ phản hồi ngay!';
            }
        
        }  
    }
}
