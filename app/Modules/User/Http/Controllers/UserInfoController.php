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
            'storeContent' => $storeContent,
        ];

        return view('user::pages.info.store', $viewData);
    }
    public function storeupdate(StoreUserRequest $request, $id)
    {
       
        if ($request->ajax()) {
            $code =  200;
            try {
               $uni_store             = Uni_Store::findOrFail($id);
            $store_albumOld = json_decode(Uni_Store::where('id', $id)->pluck('store_album')->first());

            $data               = $request->except(['store_thumbnail', 'save', '_token', 'store_album']);
           
            if ($request->store_album) {
                $store_album = [];
                foreach ($request->store_album as $item) {
                    $store_album[] = $this->processUploadFile($item);
                }
            } else {
                $store_album = [];
            }
            
            $store_ab = array_merge($store_albumOld, $store_album);
            
            
            

            $param = [
                
                'store_name' => $request->store_name,
                'created_at' => Carbon::now(),
                'store_area' => $request->store_area,
                'store_address' => $request->store_address,
                'store_province' => $request->store_province,
                'store_phone' => $request->store_phone,
                'store_taxcode' => $request->store_taxcode,
                'store_lat' => $request->store_lat,
                'store_lng' => $request->store_lng,
                'store_album' => json_encode($store_ab),
                'store_status' => $request->store_status,
            ];
            // dd($param);
            $uni_store->fill($param)->save();
                if ($uni_store){
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
}
