<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Uni_Store;
use App\Service\Seo\RenderUrlSeoCourseService;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Modules\Admin\Http\Requests\AdminCourseRequest;

class AdminUniStoreController extends AdminController
{
    public function index()
    {
        $uni_store = Uni_Store::orderByDesc('id')->get();
        $viewData = [
            'uni_store' => $uni_store
        ];

        return view('admin::pages.uni_store.index', $viewData);
    }
    public function view_store($id)
    {
        $uni_store = Uni_Store::where('user_id',$id)->first();
        $viewData = [
            'uni_store' => $uni_store
        ];

        return view('admin::pages.uni_store.view', $viewData);
    }

    public function create()
    {
        $uni_store = [];
        return view('admin::pages.uni_store.create', compact('uni_store'));
    }

    public function store(Request $request)
    {
        $data                 = $request->except(['store_thumbnail','avatar', 'save', '_token', 'store_album']);
        $data['created_at']   = Carbon::now();

        if ($request->store_album) {
            $store_album = [];
            foreach ($request->store_album as $item) {
                $store_album[] = $this->processUploadFile($item);
            }
        } else {
            $store_album = [];
        }
        $param = [
            'store_name' => $request->store_name,
            'created_at' => Carbon::now(),
            'user_id' => get_data_user('web'),
            'store_area' => $request->store_area,
            'store_address' => $request->store_address,
            'store_province' => $request->store_province,
            'store_phone' => $request->store_phone,
            'store_thumbnail' => $request->store_thumbnail,
            'store_taxcode' => $request->store_taxcode,
            'store_lat' => $request->store_lat,
            'store_lng' => $request->store_lng,
            'store_album' => json_encode($store_album),
            'store_status' => $request->store_status,
        ];
        $storeID = Uni_Store::insertGetId($param);

        if ($storeID) {
            $this->showMessagesSuccess();
            return redirect()->route('get_admin.uni_store.index');
        }
        $this->showMessagesError();
        return redirect()->back();
    }
    public function edit($id)
    {
        $uni_store     = Uni_Store::findOrFail($id);
        $viewData = [
            'uni_store'       => $uni_store
        ];
        return view('admin::pages.uni_store.update', $viewData);
    }
    public function update(Request $request, $id)
    {
        if ($request) {
            $uni_store             = Uni_Store::findOrFail($id);
            $store_albumOld = json_decode(Uni_Store::where('id', $id)->pluck('store_album')->first());

            $data               = $request->except(['store_thumbnail', 'save', '_token', 'store_album']);
            $data['updated_at'] = Carbon::now();
            if($uni_store->end_date == null){
                $data['end_date'] = Carbon::now()->subDays(-365);
            } else {
                $data['end_date'] = $uni_store->end_date;
            }
            if ($request->store_album) {
                $store_album = [];
                foreach ($request->store_album as $item) {
                    $store_album[] = $this->processUploadFile($item);
                }
            } else {
                $store_album = [];
            }
            // if ($request->store_thumbnail) {
            //     $store_thumbnail = $request->store_thumbnail;
            // } else {
            //     $store_thumbnail = $uni_store->store_thumbnail;
            // }

            $store_ab = array_merge($store_albumOld, $store_album);
            if ($request->store_thumbnail) {
                Storage::delete('public/uploads/' . $uni_store->store_thumbnail);
                $store_thumbnail = $request->store_thumbnail;
            } else {
                $store_thumbnail = $request->store_thumbnail;
            }

            $param = [
                
                'store_name' => $request->store_name,
                'end_date' => $data['end_date'],
                'created_at' => Carbon::now(),
                'store_area' => $request->store_area,
                'store_address' => $request->store_address,
                'store_province' => $request->store_province,
                'store_phone' => $request->store_phone,
                'store_thumbnail' => $store_thumbnail,
                'store_taxcode' => $request->store_taxcode,
                'store_lat' => $request->store_lat,
                'store_lng' => $request->store_lng,
                'store_album' => json_encode($store_ab),
                'store_status' => $request->store_status,
            ];
            // dd($param);
            $uni_store->fill($param)->save();

            // RenderUrlSeoCourseService::update($request->c_slug, SeoEdutcation::TYPE_COURSE, $id);
            $this->showMessagesSuccess();
            return redirect()->route('get_admin.user.store_index');
        }
    }


    public function delete_album(Request $request)
    {
        $store = Uni_Store::findOrFail($request->data_id);
        $uni_store = Uni_Store::where('id', $request->data_id)->pluck('store_album')->first();
        $store_album = json_decode($uni_store);

        if (in_array($request->name_img, $store_album)) {
            $store_album = \array_diff($store_album, [$request->name_img]);
            Storage::delete('public/uploads_Product/' . $request->name_img);
            array_multisort($store_album);
            $param['store_album'] = json_encode($store_album);
            $store->fill($param)->save();
        }
        return response()->json([
            'status'  => 200,
            'message' => 'Xoá dữ liệu thành công'
        ]);
    }
    public function delete(Request $request, $id)
    {
        if ($request->ajax()) {
            $product = Uni_Store::findOrFail($id);
            $uni_product = Uni_Store::where('id', $id)->pluck('album')->first();

            if ($product) {
                if ($uni_product) {
                    foreach (json_decode($uni_product) as $item) {
                        Storage::delete('public/uploads_Product/' . $item);
                    }
                }

                Storage::delete('public/uploads_Product/' . $product->thumbnail);
                $product->delete();
                ProductTag::where('product_id', $id)->delete();
                ProductCategory::where('product_id', $id)->delete();
                ProductTrade::where('product_id', $id)->delete();
                ProductColor::where('product_id', $id)->delete();
                ProductSize::where('product_id', $id)->delete();
            }
            return response()->json([
                'status'  => 200,
                'message' => 'Xoá dữ liệu thành công'
            ]);
        }

        return redirect()->to('/');
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
            $path = public_path() . '/storage/uploads_Product/';

            if (!\File::exists($path)) mkdir($path, 0777, true);

            $fileName->move($path, $filename);

            return  $filename;
        } catch (\Exception $exception) {
            Log::error("[processUploadFile] :" . $exception->getMessage());
        }

        return  null;
    }
}
