<?php

namespace Modules\User\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Uni_Store;
use Modules\User\Http\Requests\StoreUserRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
class UserInfoController extends Controller
{

    public function edit($id)
    {
        return view('user::pages.info.update');
    }
    public function update(Request $request, $id)
    {
        $data = $request->except('_token');
        User::find($id)->update($data);
        return redirect()->back();
    }

    public function storeedit($id)
    {
        $storeContent = Uni_Store::where('user_id', $id)->first();

        $viewData = [
            'id' => $id,
            'storeContent' => $storeContent
        ];

        return view('user::pages.info.store', $viewData);
    }
    public function storeupdate(StoreUserRequest $request, $id)
    {
       
        if ($request->ajax()) {
            $code =  200;
            try {
                $data               = $request->except('_token');  
                $data['user_id']  = $id;           
                $data['store_status']  = 0;
                $user = Uni_Store::insertGetId($data);
                if ($user){
                    return response([
                        'status'     => 200,
                        'message' => "Cập nhật thành công hãy đợi admin kiểm tra bạn sẽ nhận được email thông báo kết quả!"
                    ]);
                }
            } catch (\Exception $exception) {
                $codes = 501;
                Log::error("[Store]: " . $exception->getMessage());
            }
            return response()->json([
                'codes'     => $codes,
            ]);
        }
    }
}
