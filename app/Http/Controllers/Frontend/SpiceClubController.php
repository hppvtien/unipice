<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\Page;
use App\Models\Content_Page;
use App\Models\User;
use Mail;
use Carbon\Carbon;
use App\Mail\EmailVerificationMail;
use App\Mail\EmailDangKySpiceClub;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\URL;

class SpiceClubController extends Controller
{
    function index(){
        $page = Page::where('p_style','spice-club')->first();
        
        \SEOMeta::setTitle($page->p_title_seo);
        \SEOMeta::setDescription($page->p_desscription_seo);
        \SEOMeta::setCanonical(\Request::url());
        \OpenGraph::setDescription($page->p_desscription_seo);
        \OpenGraph::setTitle($page->p_title_seo);
        \OpenGraph::setUrl(\Request::url());
        \OpenGraph::addProperty('type', 'articles');
        \OpenGraph::addImage(URL::to('').pare_url_file($page->p_banner));

        $content_page_1 = Content_Page::where('page_id',$page->id)->where('order',0)->first();
        $content_page_2 = Content_Page::where('page_id',$page->id)->where('order',1)->first();
        $content_page_3 = Content_Page::where('page_id',$page->id)->where('order',2)->first();
        $content_page_4 = Content_Page::where('page_id',$page->id)->where('order',3)->first();
        $content_page_5 = Content_Page::where('page_id',$page->id)->where('order',4)->first();
        $content_page_6 = Content_Page::where('page_id',$page->id)->where('order',5)->first();
        $content_page_7 = Content_Page::where('page_id',$page->id)->where('order',6)->first();
        $content_page_8 = Content_Page::where('page_id',$page->id)->where('order',7)->first();
        $content_page_9 = Content_Page::where('page_id',$page->id)->where('order',8)->first();
        $content_page_10 = Content_Page::where('page_id',$page->id)->where('order',9)->first();
        $content_page_11 = Content_Page::where('page_id',$page->id)->where('order',10)->first();
        $viewdata = [
            'page'=>$page,
            'content_page_1' => $content_page_1,
            'content_page_2' => $content_page_2,
            'content_page_3' => $content_page_3,
            'content_page_4' => $content_page_4,
            'content_page_5' => $content_page_5,
            'content_page_6' => $content_page_6,
            'content_page_7' => $content_page_7,
            'content_page_8' => $content_page_8,
            'content_page_9' => $content_page_9,
            'content_page_10' => $content_page_10,
            'content_page_11' => $content_page_11,
        ];
        return view('pages.spiceclub.index', $viewdata);
    }
    function spiceclub(){
        \SEOMeta::setTitle('Đăng ký');
        return view('pages.register_spice_club.index');
    }
    function registerspiceclub(RegisterRequest $request){
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
                $data['type']  = 2;

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
    function update_spiceclub(Request $request, $id){
        $data = $request->except('_token');
        $userss = User::where('id', $id)->first();
        $usersp = User::find($id)->update($data);
        if ($usersp) {
        Mail::to($userss['email'])->send(new EmailDangKySpiceClub($userss));    
        $this->showMessagesSuccess('Hãy nạp tiền để hoàn tất đăng ký');
        return redirect()->route('get_user.dashboard');
        }
    }
    public function showMessagesSuccess($message)
    {
        return \Session::flash('toastr', [
            'type' => 'success',
            'message' => $message
        ]);
    }
}
