<?php

namespace Modules\User\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Uni_Store;
use Modules\User\Http\Requests\StoreUserRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Carbon\Carbon;

class UserInfoController extends Controller
{

    public function edit($id)
    {
        return view('user::pages.info.update');
    }
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $data = $request->except('_token');
        User::find($id)->update($data);
        return redirect()->back();
    }

    public function storeedit($id)
    {
        $storeContent = Uni_Store::where('user_id', $id)->first();
        $viewData = [
            'id' => $id,
            'storeContent' => $storeContent,
        ];

        return view('user::pages.info.store', $viewData);
    }
    public function storeUpdate(StoreUserRequest $request, $id)
    {

        if ($request) {

            
                $uni_store             = Uni_Store::where('user_id', $id)->first();
                $store_albumOld = Uni_Store::where('id', $id)->pluck('store_album')->first();
                if ($store_albumOld == null) {
                    $albumOld = [];
                } else {
                    $albumOld = json_decode($store_albumOld);
                }

                $data               = $request->except(['store_thumbnail', 'save', '_token', 'store_album']);

                if ($request->store_album) {
                    $store_album = [];
                    foreach ($request->store_album as $item) {
                        $store_album[] = $this->processUploadFile($item);
                    }
                } else {
                    $store_album = [];
                }
                $store_ab = array_merge($albumOld, $store_album);


                $param = [

                    'user_id' => get_data_user('web'),
                    'store_name' => $request->store_name,
                    'created_at' => Carbon::now(),
                    'store_area' => $request->store_area,
                    'store_address' => $request->store_address,
                    'store_province' => $request->store_province,
                    'store_phone' => $request->store_phone,
                    'store_taxcode' => $request->store_taxcode,
                    'store_album' => json_encode($store_ab),
                    'store_status' => 0
                ];
                $storeID = Uni_Store::insertGetId($param);
                if($storeID){
                    $this->showMessagesSuccess('Vui lòng chờ quản trị kiểm tra thông tin!!!');
                    return redirect()->route('get_user.store.edit',$id);
                } else  {
                    $this->showMessagesError('Kiểm tra lại thông tin!!');
                    return redirect()->route('get_user.store.edit',$id);
                }
                
          
        }
    }
    public function processUploadFile($fileName)
    {
        try {
            $ext = $fileName->getClientOriginalExtension();

            $extension = [
                'jpg', 'png', 'jpeg'
            ];
            $time_img =  Carbon::now();
            if (!in_array($ext, $extension)) return false;

            $filename = str_replace($ext, '', $fileName->getClientOriginalName());
            $filename = Str::slug($filename) . '-' . $time_img->getTimestamp() . '.' . $ext;
            $path = public_path() . '/storage/uploads_Store/';

            if (!\File::exists($path)) mkdir($path, 0777, true);

            $fileName->move($path, $filename);

            return  $filename;
        } catch (\Exception $exception) {
            Log::error("[processUploadFile] :" . $exception->getMessage());
        }

        return  null;
    }
    public function showMessagesSuccess($message = 'Thêm mới thành công')
    {
        return \Session::flash('toastr',[
            'type' => 'success',
            'message' => $message
        ]);
    }
    public function showMessagesError($message = 'Xử lý dữ liệu thất bại')
    {
        return \Session::flash('toastr',[
            'type' => 'error',
            'message' => $message
        ]);
    }
}
